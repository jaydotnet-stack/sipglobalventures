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
            <div class="col-5">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Account</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="frmobj">
                  <div class="card-body">
                    <div class="input-group mb-3" style="width:90%">
                      <input type="email" class="form-control" placeholder="Email (Search by email)" id="email" name="email" onkeyup="fetchrecord(this.value)">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                      <label style="margin-left:20px;padding-top:5px;" id="userstatus">User status</label>
                    </div>                     
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Full name" id="fullname" name="fullname">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>   
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Phone Number" id="phoneno" name="phoneno">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-phone"></span>
                        </div>
                      </div>
                      <select class="form-control" id="usertag" name="usertag" onchange="" style="width:50%;">
                        <span id="usertagoption">
                          <option value="0">Account Type</option>
                          <option value="user">User</option>  
                          <option value="admin">Admin</option> 
                        </span>
                      </select>        
                    </div>                                                         
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="Password" id="password1" name="password1">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                      <input type="password" class="form-control" placeholder="Retype password" id="password2" name="password2">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>          
                    </div>  
                    <div class="input-group mb-3">
                        <textarea class="form-control" rows="2" placeholder="Your Address" id="contactaddr" name="contactaddr" ></textarea>           
                    </div>                                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <img id='imgprvw' style='top:15%;width:50%; height:100px' src=''>
                      </div>
                      <div class="input-group mb-3" id='fileclass'>
                          <div class="custom-file" id='filediv'>
                            <input type="file" class="custom-file-input" name="userfile" id="userfile" accept=".jpg" onchange="showimagepreview(this)">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                      </div>  
                    </div>                                                           
                  </div>                 
                  <div class="card-footer">
                    <button type="button" class="btn btn-success" onclick="updateaccount();">Update Account</button>
                    <button type="button" class="btn btn-warning" onclick="activateaccount();">Activate User</button>
                    <button type="button" class="btn btn-primary" onclick="resetentry();">Reset Entry</button>
                  </div><!-- /.card-body -->
                </form>
              </div>
              <!-- /.card -->
            </div>
             <!--FORM SECTION -->

            <!--Data Table -->
            
            <div class="col-7" id="mainsection">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List of Registered User(s) </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th style='width:8%;'>#</th>
                      <th>Fullname</th>
                      <th style='width:20%; text-align: center;'>User Status</th>
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
            <div class="col-7" id="subsection">>
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List of Registered User(s) </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th style='width:8%;'>#</th>
                      <th>Fullname</th>
                      <th style='width:20%; text-align: center;'>Account Type</th>
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
     $("#subsection").remove();
     $("#modalcontent").css('visibility', 'visible');
     DataFormatWithDataTable();
     $("#email").focus();
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
  function showsubsection(){
    $("#subsection").show();
    $("#mainsection").remove();

  }
  //Reseting Entry
  //--------------
  function resetentry(){
    $("#email").prop("readonly", false);
    $("#email").val(''); 
    $("#userstatus").text('User Status');
    $("#userstatus").css('color', 'black');
    $("#fullname").val('');    
    $("#phoneno").val('');   
    $("#usertag").text('Account Type');  
    $("#password1").val('');
    $("#password2").val('');
    $("#contactaddr").val(''); 
    var filediv = '<div class="custom-file" id="filediv"><input type="file" class="custom-file-input" name="userfile" id="userfile" accept=".jpg" onchange="showimagepreview(this)"><label class="custom-file-label" for="exampleInputFile">Choose file</label></div>';
    $("#filediv").remove();
    $("#fileclass").append(filediv);
    $("#imgprvw").attr('src', '');      
  }

  function activateaccount(){
    var email = $("#email").val().trim(); 
    var fullname = $("#fullname").val().trim(); 
    var phoneno = $("#phoneno").val().trim();
    var contactaddr = $("#contactaddr").val().trim();
    var password1 = $("#password1").val().trim();
    var password2 = $("#password2").val().trim();
    var userfile = $("#userfile").val().trim();   
    if(email == ''){
      $("#dmodaltext").text('Fill in the Required Field(s)');
      $('#dmodalbtn').trigger("click");      
    }else{
      var request = confirm("Are you sure you want to Activate this Account?");
      if(request == true){
        var formdata = $("#frmobj").serialize();
        $.post("<?php echo site_url('/admin/activateaccount'); ?>",formdata).done(function(data){
            if(data==1){
              DataFormatWithDataTable();
              resetentry();
              $("#smodaltext").text('Record Successfully Acitvated');
              $('#smodalbtn').trigger("click");  
            }else if(data==0){
              $("#dmodaltext").text('Account does not exit');
              $('#dmodalbtn').trigger("click");  
            }else{
              alert(data);
            }
        }); 
      }          
    }
  }
  function updateaccount(){
    var fullname = $("#fullname").val().trim(); 
    var phoneno = $("#phoneno").val().trim();
    var usertag = $("#usertag").val().trim();
    var contactaddr = $("#contactaddr").val().trim();
    var password1 = $("#password1").val().trim();
    var password2 = $("#password2").val().trim();
    var userfile = $("#userfile").val().trim();   
    if(fullname == '' || usertag == '' || phoneno == '' || contactaddr == '' || password1 == '' || password2 == '' || userfile == ''){
      $("#dmodaltext").text('Fill in the Required Field(s)');
      $('#dmodalbtn').trigger("click");      
    }else{
      if(password1 !== password2){
        $("#dmodaltext").text('Password Mismatch');
        $('#dmodalbtn').trigger("click"); 
      }else{
        if(usertag == 0){
            $("#dmodaltext").text('Please select an Account type');
            $('#dmodalbtn').trigger("click");  
        }else{
        var request = confirm("Are you sure you want to Update this Account?");
        if(request == true){
          var formdata = new FormData($("#frmobj")[0]);
          $.ajax({
            url: "<?php echo site_url('/admin/updateaccount'); ?>",
            type: 'POST',
            data: formdata,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) 
            { 
              if (data==1){
                resetentry();
                $("#smodaltext").text('User Account Successfully Updated');
                $('#smodalbtn').trigger("click");                       
              }else if(data==2){
                $("#dmodaltext").text('Email already Exist, Please Use another Email');
                $('#dmodalbtn').trigger("click");   
              }else{
                alert(data);
              }
            }
          });        
        }          
        }
      }       
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
        sAjaxSource: "<?php echo site_url('/admin/loadrecord'); ?>",
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

  function deactivateaccount(getid){
    var formdata = "getid="+getid;
    if (confirm("Are you sure you want to Deactivate this Account?")==true){
      $.post("<?php echo site_url('/admin/deactivateaccount'); ?>",formdata).done(function(data){
          if(data==1){
            DataFormatWithDataTable();
            resetentry();
            $("#smodaltext").text('Record Successfully Deactivated');
            $('#smodalbtn').trigger("click");  
          }else{
            alert(data);
          }
      });
    }
  }


  //Retrieving Specified record for editing
  //---------------------------------------
  function editaccount(getid){ 
    var getid = "getid="+getid;
    $.post("<?php echo site_url('/admin/editaccount'); ?>",getid).done(function(data){
        if(data!=0){
          var row = $.parseJSON(data);
          $("#email").val(row.email);
          $("#email").prop("readonly", true);
          if(row.userstatus =='Active'){
            $("#userstatus").text('Active');
            $("#userstatus").css('color', 'green');
          }else{
            $("#userstatus").text('Deactive');
            $("#userstatus").css('color', 'red');
          }
          $("#phoneno").val(row.phoneno);
          $("#usertag").val(row.usertag);
          $("#fullname").val(row.fullname);
          $("#contactaddr").val(row.contactaddr);
          folderName = "passports";                  
          folderpath ="<?php echo base_url(''); ?>" + folderName;
          imgname = "p"+row.id.trim()+".jpg";
          imgref=folderpath + "/"+imgname;  
          $('#imgprvw').attr('src',imgref);          
          $("#email").prop("readonly", true);
        }
    });
  }

  function fetchrecord(getstring){
    var getstring = "getstring=" + getstring;
    $.post("<?php echo site_url('/admin/fetchrecord'); ?>",getstring).done(function(data){
        if(data!=0){
          var row = $.parseJSON(data); 
          if(row.userstatus =='A'){
            $("#userstatus").text('Active');
            $("#userstatus").css('color', 'green');
          }else{
            $("#userstatus").text('Deactive');
            $("#userstatus").css('color', 'red');
          }
          $("#phoneno").val(row.phoneno);
          $("#usertag").val(row.usertag);
          $("#fullname").val(row.fullname);
          $("#contactaddr").val(row.contactaddr);
          folderName = "passports";                  
          folderpath ="<?php echo base_url(''); ?>" + folderName;
          imgname = "p"+row.id.trim()+".jpg";
          imgref=folderpath + "/"+imgname;  
          $('#imgprvw').attr('src',imgref);          
          $("#email").prop("readonly", true);
        }
    });    
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


</script>
</html>
