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
            <div class="col-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Contribution Types</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Category</label>
                      <input type="text" class="form-control" id="category" name="category" placeholder="Category" style="width:50%; ">
                    </div>
                    <div class="form-group">
                      <label>Amount ($)</label>
                      <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" style="width:25%; ">
                    </div>
                    <!--
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    -->
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="button" class="btn btn-primary" onclick="updatecontribution();">Add/Update</button>
                    <button type="button" class="btn btn-default" onclick="resetentry();">Reset Entry</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
             <!--FORM SECTION -->

            <!--Data Table -->
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List(s) of Defined Contribution Types</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th style='width:8%;'>#</th>
                      <th>Category</th>
                      <th style='width:20%; text-align: center;'>Amount ($)</th>
                      <th style='text-align: center;'>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
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
     DataFormatWithDataTable();
  }

  $(document).ready(function(){
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



  function updatecontribution(){
    var category  =   $("#category").val().trim();
    var amount    =   $("#amount").val().trim();
    if (category==''||amount==''||isNaN(amount)==true){
      $("#dmodaltext").text('Enter the Contribution Category or the amount');
      $('#dmodalbtn').trigger("click");
    }else{
      var formdata = $("form").serialize();
      $.post("<?php echo site_url('/contribution/updatecontributiontype'); ?>",formdata).done(function(data) {        
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
        sAjaxSource: "<?php echo site_url('/contribution/dtcontributiontypes'); ?>",
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
    $.post("<?php echo site_url('/contribution/editrecord'); ?>",formdata).done(function(data){
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
      $.post("<?php echo site_url('/contribution/deleterecord'); ?>",formdata).done(function(data){
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
