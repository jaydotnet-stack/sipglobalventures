<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $sitecss; ?>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php echo $navbar; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php echo $brandlogo; ?>
      <!-- Brand Logo -->

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php echo $adminuserpanel; ?>
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->
        <?php echo $sitesearch; ?>
        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <?php echo $adminmenu; ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            <!--
              <h1>DataTables</h1>
            -->
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <form id="frmobj">
        <section class="content">
          <div class="container-fluid">
            <div class="row">
                <!--Data Table -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List of Applicant(s)</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th style='width:4%;'></th>
                          <th style='width:6%;'>#</th>
                          <th>Name</th>
                          <th style='width:20%;'>Contribution Type</th>
                          <th style='width:10%;text-align: center;'>Batch</th>
                          <th style='width:20%;text-align: center;'>Collection Month</th>
                        </tr>
                        </thead>
                        <tbody id="tbdata">
                        </tbody>
                      </table>

                      <div class="card-footer">
                        <!--
                        <button type="button" class="btn btn-warning" onclick="checkall();">Check All</button>
                        -->
                        <button type="button" class="btn btn-primary" onclick="joggle();">Assign Collection Month</button>
                      </div>

                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!--Data Table -->  
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
      </form>
      <!-- /.content -->

      <?php echo $modalsection; ?>

    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <?php echo $sitefooter; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php echo $sitescript; ?>
</body>
<script>

  onload = initializer();

  function initializer(){
     $("#modalsetup").hide();
     $("#modalcontent").css('visibility', 'visible');
     fetchallapplicants();
  }

  $(function () {

    /* Validate quantity */
    $("#amount").on("keypress keyup paste", function(e) {
        this.value = this.value.replace(/[^0-9.]/g, '');
    })  

    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  //This function checks all applicants found
  //-----------------------------------------
  function checkall(){
    var checkboxes = document.getElementsByName("applcnt[]"); 
    for (i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = true;
    }  
  }

  //This function fetches all applicants from the table
  //---------------------------------------------------
  function fetchallapplicants(){
    $("#tbdata").empty();
    $("#tbdata").trigger("liszt:updated");  
    $.getJSON("<?php echo site_url('/contribution/fetchallapplicantsX'); ?>",function(data){
      if (data!=0){
        var rowcount = data.length;       
        var sn = 0;       
        for (var i = 0; i < rowcount; i++){
          sn = sn + 1;
          var chkid = "chkref"+sn;
          var chbx = "<center><input type='checkbox' id='"+chkid+"' name='applcnt[]' value='" + data[i].id +"'/></center>";
          var r1 = "<tr>";
            var r2 = "<td style='text-align:center;'>" + chbx +"</td>";
            var r3 = "<td>" + sn + "</td>";  
            var r4 = "<td>" + data[i].fullname + "</td>";           
            var r5 = "<td>" + data[i].contributioncategory + "</td>";
            var r6 = "<td style='text-align:center;'>" + data[i].batch + "</td>";  
            var r7 = "<td style='text-align:center;'>" + data[i].collectionmonth + "</td>";  
          var r8 = "</tr>";     
          var items = r1 + r2 + r3 + r4 + r5 + r6 + r7 + r8;                      
          $('#tbdata').append(items); 
        }
        $("#tbdata").trigger("liszt:updated");
        window.scrollTo(0,350);
      }
    });
  }


  //Function for updating selected applicant(s) status
  //--------------------------------------------------
  function joggle(){
    $.get("<?php echo site_url('/contribution/joggle'); ?>",function(data) {  
      if (data>=0){
        fetchallapplicants();
        var returnstr = data + " records(s) affected";
        $("#smodaltext").text(returnstr);
        $('#smodalbtn').trigger("click");  
      }else{
        alert(data);
      }
   });        
}


</script>
</html>
