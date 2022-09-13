<?php
  error_reporting(0);
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/fontawesome-free/css/all.min.css'; ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'; ?>">
    <!-- Table css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'; ?>">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/adminlte.min.css'; ?>">
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
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <!--FORM SECTION -->
            <div class="col-4">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">THRIFT DISBURSEMENT</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Current Year</label>
                      <input type="text" class="form-control" id="accountingyear" name="accountingyear" readonly="true;" value="<?php echo $_SESSION['accountingyear']; ?>" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Select Month</label>
                        <select class="form-control" id="accountingmonthid" name="accountingmonthid" onchange="fetchbeneficiaries();" style="width:50%;">
                          <option value=""></option>
                          <option value="JANUARY">JANUARY</option>
                          <option value="FEBRUARY">FEBRUARY</option>
                          <option value="MARCH">MARCH</option>
                          <option value="APRIL">APRIL</option>
                          <option value="MAY">MAY</option>
                          <option value="JUNE">JUNE</option>
                          <option value="JULY">JULY</option>
                          <option value="AUGUST">AUGUST</option>
                          <option value="SEPTEMBER">SEPTEMBER</option>
                          <option value="OCTOBER">OCTOBER</option>
                          <option value="NOVEMBER">NOVEMBER</option>
                          <option value="DECEMBER">DECEMBER</option>
                        </select>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="button" class="btn btn-primary" onclick="disbursement();">Disbursement</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
             <!--FORM SECTION -->

            <!--Data Table -->
            <div class="col-8">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List(s) of Beneficiaries</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form>
                    <table id="data-table" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th style='width:8%; text-align: center;'>#</th>
                        <th>Contributor(s)</th>
                        <th style='width:15%;'>Category</th>
                        <th style='width:10%; text-align: center;'>Batch</th>
                        <th style='width:15%; text-align: center;'>Amount ($)</th>
                      </tr>
                      </thead>
                      <tbody id="tbdata">
                      </tbody>
                    </table> 
                  </form> 
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
  <!-- DATA TABLE SCRIPTS -->
  <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js'; ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>  
  <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/adminlte.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/demo.js'; ?>"></script>
</body>
<script>

  onload = initializer();

  function initializer(){
     $("#modalsetup").hide();
     $("#modalcontent").css('visibility', 'visible');
  }
  /*
  $(document).ready(function(){

    $("#amount").on("keypress keyup paste", function(e) {
        this.value = this.value.replace(/[^0-9.]/g, '');
    });  
    
  });
  */

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


  function disbursement(){
    var accountingmonthid =   $("#accountingmonthid").val().trim();
    var amounts           =   document.getElementsByName("amounts[]"); 
    var recTotal          =   amounts.length;
    if (accountingmonthid==''||recTotal==0){
      $("#dmodaltext").text('Select Disbursement Month or No record is found for the selected month');
      $('#dmodalbtn').trigger("click");
    }else{
      if (confirm('Are you sure you want disbursement transaction to be executed?')==true){
        var formdata = $("form").serialize();
        $.post("<?php echo site_url('/contribution/disbursement'); ?>",formdata).done(function(data) {       
            if(data>0){
              fetchbeneficiaries();
              $("#smodaltext").text('Transaction Successful!');
              $('#smodalbtn').trigger("click");  
            }else if (data==0){
              $("#dmodaltext").text('No Record is updated');
              $('#dmodalbtn').trigger("click");                     
            }else{
              alert(data);
            }
        }); 
      }
    }
  }


  function fetchbeneficiaries(){
    $("#tbdata").empty();
    $("#tbdata").trigger("liszt:updated");     
    var passdata = "getmonthref="+$("#accountingmonthid").val();
    $.post("<?php echo site_url('/contribution/fetchbeneficiaries'); ?>",passdata).done(function(data){
      if (data!=0){
        var rowcount = data.length;       
        var sn = 0; 
        data = $.parseJSON(data);      
        for (var i = 0; i < rowcount; i++){
          var amount = data[i].amount;
          var amount = parseInt(amount)*12;
          sn = sn + 1;
          var emails  = "<input type='hidden' name='emails[]' value='" + data[i].email + "'>";
          var amounts = "<input type='hidden' name='amounts[]' value='" + amount + "'>"; 
          var r1 = "<tr>";
            var r2 = "<td style='text-align:center;'>" + emails + amounts + sn +"</td>";
            var r3 = "<td>" + data[i].fullname + "</td>";           
            var r4 = "<td>" + data[i].contributioncategory + "</td>";
            var r5 = "<td style='text-align:center;'>" + data[i].batch + "</td>";
            var r6 = "<td style='text-align:center;'>" + amount + "</td>";  
          var r7 = "</tr>";     
          var items = r1 + r2 + r3 + r4 + r5 + r6 + r7;                      
          $('#tbdata').append(items); 
        }
        $("#tbdata").trigger("liszt:updated");
        window.scrollTo(0,350);
      }
    });
  }
</script>
</html>
