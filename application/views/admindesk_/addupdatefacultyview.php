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

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <!--FORM SECTION -->
            <div class="col-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"></h3>Define Faculty
                </div>
                <form id="frmobj">
                  <div class="card-body">
                    <div class="input-group mb-3" style="width:50%;">
                      <input type="text" class="form-control" placeholder="Faculty Code" id="fcode" name="fcode">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-none"></span>
                        </div>
                      </div>
                    </div>   
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Faculty" id="faculty" name="faculty">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-none"></span>
                        </div>
                      </div>
                    </div>                    
                    <div class="col-md-12">
                      <div style="float: right;">
                        <button type="button" class="btn btn-primary" onclick="addupdatefaculty();">Add/Update Faculty</button>
                      <!-- /.col -->
                      </div>
                    </div>                
                  </div>
                  </div>
                  <!-- /.card-body -->
                </form>
              </div>
              <!-- /.card -->
            </div>            


             <!--FORM SECTION -->

            <!--Data Table -->

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
     DataFormatWithDataTable();
  }

  $(document).ready(function(){
    $("#fullname").focus();
    /* Validate quantity */
    $("#amount").on("keypress keyup paste", function(e) {
        this.value = this.value.replace(/[^0-9.]/g, '');
    });  
    
  });
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

  //Email Validator
  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }  
  function clearfield(){
    $("#fcode").val(''); 
    $("#faculty").val('');
  }   
  function addupdatefaculty(){
    var fcode = $("#fcode").val().trim(); 
    var faculty = $("#faculty").val().trim();
    if(fcode == '' || faculty == ''){
      $("#dmodaltext").text('Fill in the Required Field(s)');
      $('#dmodalbtn').trigger("click");      
    }else{
      var request = confirm("Are you sure you want to Add Faculty?");
      if(request == true){
        var formdata = $("#frmobj").serialize();
        $.post("<?php echo site_url('/admin/addupdatefaculty'); ?>",formdata).done(function(data){
           if (data==1){
              clearfield();                 
              $("#smodaltext").text('Faculty Successfully Created');
              $('#smodalbtn').trigger("click");                       
            }else if(data==2){
              clearfield();                 
              $("#smodaltext").text('Faculty Successfully Updated');
              $('#smodalbtn').trigger("click");   
            }else{
              alert(data);
            }          
        });        
      }
    }        
  }    
  function showimagepreview(input){
    if (input.files && input.files[0]){
        var filerdr = new FileReader();
        filerdr.onload = function(e) {
            $('#imgprvw').attr('src', e.target.result);
        }
        filerdr.readAsDataURL(input.files[0]);
    }
    window.scrollTo(0,0); 
  }









  function updatecontribution(){
    var fullname  =   $("#fullname").val().trim();
    if (fullname==''){
      $("#dmodaltext").text('Enter the Contribution Category or the amount');
      $('#dmodalbtn').trigger("click");
    }else{
      var formdata = $("form").serialize();
      $.post("<?php echo site_url('/admin/updatecontributiontype'); ?>",formdata).done(function(data) {        
          if(data>=1){
            DataFormatWithDataTable();
            resetentry();
            $("#smodaltext").text('Record Successfully Added/Updated');
            $('#smodalbtn').trigger("click");            
          }else{
            alert(data);
          }
      }); 
    }
  }

  //This section formats the table using DataTable
  //----------------------------------------------
  function DataFormatWithDataTable()
  {
      $('#data-table').dataTable().fnDestroy();
      var dtable = $('#data-table').dataTable({
        //"aaSorting": [[1, 'asc']],
        "aLengthMenu": [
          [10, 15, 25, -1], 
          [10, 15, 25, "All"] 
        ],
        // set the initial value
        "iDisplayLength": 10,    
        sAjaxSource: "<?php echo site_url('/admin/dtcontributiontypes'); ?>",
        fnRowCallback: function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) 
        {
          // Row click
          $(nRow).on('click', function() 
          {
            fetchrecord(aData[0]);
          });
        } 
      });     
      window.scrollTo(0,0);
  }

  //Reseting Entry
  //--------------
  function resetentry(){
      $("#category").prop("readonly", false);
      $("#category").val('');
      $("#amount").val('');
  }

  //Retrieving Specified record for editing
  //---------------------------------------
  function editrecord(getcat){
    var formdata = "category="+getcat;
    $.post("<?php echo site_url('/admin/editrecord'); ?>",formdata).done(function(data){
        if(data!=0){
          var row = $.parseJSON(data);
          $("#category").val(row.category);
          $("#amount").val(row.amount);
          $("#category").prop("readonly", true);
        }
    });
  }

  function deleterecord(getcat){
    if (confirm("Are you sure you want to delete this record?")==true){
       var formdata = "category="+getcat;
      $.post("<?php echo site_url('/admin/deleterecord'); ?>",formdata).done(function(data){
          if(data==1){
            DataFormatWithDataTable();
            resetentry();
            $("#smodaltext").text('Record Successfully Deleted');
            $('#smodalbtn').trigger("click");  
          }else{
            alert(data);
          }
      });
    }
  }
</script>
</html>
