<?php
  error_reporting(0);
  session_start();
  //echo $_SESSION['membershipref'];
  //exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $sitecss; ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php //echo $navbar; ?>
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
        <?php echo $contributormenu; ?>
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
            <h1>Update Contributor's Profile</h1>
          </div>
        <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default" style="width:60%;">
          <!-- /.card-header -->
          <form name="frmobj" id="frmobj">
            <input type="hidden" name="recordid" id="recordid">
            <input type="hidden" name="updatestatus" id="updatestatus">
            <div class="card-body">
              <div class="row"> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname">
                  </div>

                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" id="phoneno" name="phoneno">
                  </div>
                </div>   
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" id="emailaddress" name="emailaddress" readonly="true">
                  </div>
                  <div class="form-group">
                    <label>Select Contribution Category</label>
                    <select class="form-control select2" style="width: 100%;" id="ctype" name="ctype">
                    </select>
                  </div>
                </div>

                <!-- /.col -->
                <div class="col-md-12">
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Contact Address</label>
                    <textarea class="form-control" rows="2" placeholder="Your Address" id="contactaddr" name="contactaddr" ></textarea>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <img id='imgprvw' style='top:15%;width:50%; height:150px' src=''>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="userfile" id="userfile" accept=".jpg" onchange="showimagepreview(this)">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>

                    <br>
                    <div style="float: left;">
                      <!-- /.col -->
                        <button type="button" class="btn btn-primary btn-block" id="btnupdate">Save/Update</button>
                      <!-- /.col -->
                    </div>


                  </div>                
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
     <?php echo $modalsection; ?>
    <!-- /.content -->
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

<!-- jQuery -->
<?php echo $sitescript; ?>
</body>
<script>
  onload = initializer();

  function initializer(){
    fetchcontributiontype(); 
    $("#modalsetup").hide();
    $("#modalcontent").css('visibility', 'visible');      
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

  $(function () {
    bsCustomFileInput.init();

    $("#btnupdate").click(function(){
        var fullname      =   $("#fullname").val().trim();
        var phoneno       =   $("#phoneno").val().trim();
        var contactaddr   =   $("#contactaddr").val().trim();
        var updatestatus  =   $("#updatestatus").val().trim();
        if (fullname==''||phoneno==''||contactaddr==''){
          $("#dmodaltext").text('One or more important fields are empty');
          $('#dmodalbtn').trigger("click");             
        }else{
          var formdata = new FormData($("#frmobj")[0]);
          $.ajax({
            url: "<?php echo site_url('/contributors/updaterecord'); ?>",
            type: 'POST',
            data: formdata,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) 
            { 
              if (data==-1){
                $("#dmodaltext").text('Invalid File Format! Only jpg format id allowed');
                $('#dmodalbtn').trigger("click");                      
              }else if(data==-2){
                $("#dmodaltext").text('Upload your passport please');
                $('#dmodalbtn').trigger("click");   
              }else if(data==1){
                $("#smodaltext").text('Record Successfully Updated');
                $('#smodalbtn').trigger("click");   
              }else{
                alert(data);
              }
            }
          }); 
        }
    });
  });

  function fetchcontributiontype(){
    $("#ctype").empty();
    $("#ctype").trigger("liszt:updated");  
    $.getJSON("<?php echo site_url('/contribution/fetchcontributiontype'); ?>",function(data){
      if (data!=0){
        var getLength = data.length;  
        if (data!=0){
          for (var i = 0; i < getLength; i++){  
            var getText = data[i].category+" --- $"+data[i].amount;
            items="<option value='"+data[i].category+"'>"+getText+"</option>"; 
            $('#ctype').append(items); 
          }
          $("#ctype").trigger("liszt:updated");
          getprofileinfo();
        }
      }
    });
  }

  function getprofileinfo(){
    $.getJSON("<?php echo site_url('/contributors/getprofileinfo'); ?>",function(data){
      if (data!=0){
        $("#fullname").val(data.fullname);
        $("#emailaddress").val(data.email);
        $("#phoneno").val(data.phoneno);
        $("#contactaddr").val(data.contactaddress);
        $("#ctype").val(data.contributioncategory);
        $("#recordid").val(data.id);
        $("#updatestatus").val(data.updatestatus);
        folderName = "passports";                  
        folderpath ="<?php echo base_url(''); ?>" + folderName;
        imgname = "cp"+data.id.trim()+".jpg";
        imgref=folderpath + "/"+imgname;  
        $('#imgprvw').attr('src',imgref);
        var getupdatestatus = data.updatestatus;
        if (getupdatestatus>0){
          $("#btnupdate").hide();
        }
      }
    });
  }


</script>
</html>
