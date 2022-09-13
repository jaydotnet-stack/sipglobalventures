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
    <form id="frmobj">
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <!--FORM SECTION -->
            <div class="col-5">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add/Update Student(s) Record</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start 
                <form id="frmobj">-->
                  <div class="card-body"> 
                    <div class="input-group mb-3" style="width:90%">
                      <input type="email" class="form-control" placeholder="Matric No (Search by matric no)" id="matricno" name="matricno" onkeyup="fetchstudentrecord(this.value)">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-number"></span>
                        </div>
                      </div>
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
                      <select class="form-control" id="faculty" name="faculty" onchange="loaddept(this.value);" style="width:50%;">
                        <span id="usertagoption">
                          <option value="0">Faculty</option>
                        </span>
                      </select>
                      <select class="form-control" id="dept" name="dept" onchange="" style="width:50%;">
                        <span id="usertagoption">
                          <option value="0">Department</option>
                        </span>
                      </select>        
                    </div>   
                    <div class="input-group mb-3">
                      <select class="form-control" id="yearofadmission" name="yearofadmission" onchange="" style="width:50%;">
                          <option value="0">Year of Admission</option>
                      </select>
                      <select class="form-control" id="yearofgraduation" name="yearofgraduation" onchange="" style="width:50%;">
                        <span id="usertagoption">
                          <option value="0">Year of Graduation</option>
                        </span>
                      </select>        
                    </div>   
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Phone Number" id="phoneno" name="phoneno">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                      <select class="form-control" id="gradelevel" name="gradelevel" onchange="" style="width:;">
                        <span id="">
                          <option value="0">Grade Level</option>
                          <option value="First Class">First Class</option>  
                          <option value="Second Class Upper">Second Class Upper</option> 
                          <option value="Second Class Lower">Second Class Lower</option> 
                          <option value="Third Class">Third Class</option> 
                          <option value="Pass">Pass</option> 
                        </span>
                      </select>                               
                    </div>      
                    <div class="input-group mb-3">
                        <textarea class="form-control" rows="2" placeholder="Your Address..." id="contactaddr" name="contactaddr" ></textarea>           
                    </div> 
                    <div class="input-group mb-3">
                        <textarea class="form-control" rows="2" placeholder="Comment..." id="comment" name="comment" ></textarea>           
                    </div>                                                                             
                  </div>                 
              <!-- </form>  -->

              </div>
              <!-- /.card -->
            </div>
             <!--FORM SECTION -->

            <!--Data Table -->
            <div class="col-7">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Attach Student(s) Scanned Document </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <!--
                  <form id="formobj2">
                -->
                    <div class="input-group mb-3" id='fileclass'>
                        <div class="custom-file" id='filediv'>
                            <input type="file" class="custom-file-input" name="userfile" id="userfile" accept=".jpg" onchange="showimagepreview(this)">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>                  
                    <div class="form-group">
                      <img id='imgprvw' style='top:15%;width:100%; height:400px' src=''>
                    </div>
                 
                    <!-- </form> -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--Data Table -->
            <div class="col-12">
              <div class="card-footer" style="float:right;">
                <button type="button" class="btn btn-success" onclick="addupdateaccount();">Add/dsdUpdate Record</button>
                <button type="button" class="btn btn-warning" onclick="">Activate User</button>
                <button type="button" class="btn btn-primary" onclick="resetentry();">Reset Entry</button>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </form>

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
     fetchfaculty()
     dynamicyear();
     DataFormatWithDataTable();
     $("#matricno").focus();
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
    function addupdateaccount(){   
      var matricno          = $("#matricno").val().trim(); 
      var fullname          = $("#fullname").val().trim(); 
      var faculty           = $("#faculty").val().trim(); 
      var dept              = $("#dept").val().trim(); 
      var yearofadmission   = $("#yearofadmission").val().trim(); 
      var yearofgraduation  = $("#yearofgraduation").val().trim(); 
      var phoneno           = $("#phoneno").val().trim(); 
      var gradelevel        = $("#gradelevel").val().trim();
      var contactaddr       = $("#contactaddr").val().trim();
      var comment           = $("#comment").val().trim();
      var userfile          = $("#userfile").val().trim();   
      if(matricno == '' || fullname == '' || faculty == '' || dept == '' || yearofadmission == '' || yearofgraduation == '' || phoneno == '' || gradelevel == '' || contactaddr == '' || comment == '' ||userfile == ''){
        $("#dmodaltext").text('Fill in the Requiredfdfdfd Field(s)');
        $('#dmodalbtn').trigger("click");      
      }else{
           var request = confirm("Are you sure you want to Add Student Record?");
           if(request == true){
              var formdata = new FormData($("#frmobj")[0]);
              $.ajax({
                url: "<?php echo site_url('/admin/addupdatestudentrecord'); ?>",
                type: 'POST',
                data: formdata,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data)
                { 
                  alert(data);
                  if (data==1){
                    resetentry();
                    $("#smodaltext").text('Student Record Successfully Added');
                    $('#smodalbtn').trigger("click");                       
                  }else if(data==2){
                    $("#smodaltext").text('Student Record Successfully Updated');
                    $('#smodalbtn').trigger("click");   
                  }else{
                    alert(data);
                  }
                }
              });          
           }
      }     
    }
  function fetchfaculty(){
    $("#faculty").empty();
    $("#faculty").trigger("liszt:updated"); 
    $.getJSON("<?php echo site_url('/admin/fetchfaculty'); ?>",function(data){
      if(data!=0){
        var getLength = data.length;  
        for (var i = 0; i < getLength; i++){  
          var faculty = data[i].faculty;
          items ="<option value='"+data[i].fcode+"'>"+faculty+"</option>"; 
          $('#faculty').append(items); 
        }
        $("#faculty").trigger("liszt:updated");
      //  getprofileinfo();
      }
    });
  } 
  function loaddept(getfaculty){
    $("#dept").empty();
    var formdata = "getfaculty="+getfaculty;
    $.post("<?php echo site_url('/admin/loaddept'); ?>", formdata).done(function(data){
      var data = $.parseJSON(data); 
      if (data !=0){
        var getLength = data.length; 
        for (var i = 0; i < getLength; i++){  
            items ="<option value='"+data[i].deptcode+"'>"+data[i].department+"</option>"; 
            $('#dept').append(items); 
        }
        $("#dept").trigger("liszt:updated");
      }
      //  getprofileinfo();
    });
  }
  function dynamicyear(){
    var leftstring  = 1985;
    var rightstring = '';
    var session     = '';
    for(var i = 0; i < 40; i ++){
      rightstring = leftstring + 1;
      session     = leftstring + '/' + rightstring;
      leftstring  = rightstring;
      var r1 = "<option value='"+session+"'>"+session+"</option>";
      $("#yearofadmission").append(r1);
      $("#yearofgraduation").append(r1);
    }
  }

  function fetchstudentrecord(getstring){
    var getstring = "getstring=" + getstring;
    $.post("<?php echo site_url('/admin/fetchstudentrecord'  ); ?>",getstring).done(function(data){
        if(data!=0){
        //  alert(data);
          var row = $.parseJSON(data); 
          $("#matricno").val(row.matricno);
          $("#fullname").val(row.fullname);
          $("#faculty").val(row.faculty);

          $("#dept").val(row.dept);
          $("#yearofadmission").val(row.yearofadmission);
          $("#yearofgraduation").val(row.yearofgraduation);
          $("#phoneno").val(row.phoneno);
          $("#gradelevel").val(row.gradelevel);
          $("#contactaddr").val(row.contactaddr);
          $("#comment").val(row.comment);
          folderName = "studentmedia";                  
          folderpath ="<?php echo base_url(''); ?>" + folderName;
          imgname = "s"+row.id.trim()+".jpg";
          imgref=folderpath + "/"+imgname;  
          $('#imgprvw').attr('src',imgref);          
          $("#matricno").prop("readonly", true);
        }
    });    
  }  
  //Reseting Entry
  //--------------
  function resetentry(){
  //  
    $("#matricno").prop("readonly", false);
    $("#matricno").val(''); 
    $("#matricno").focus();   
    $("#fullname").val('');    
    $("#faculty").val('Faculty');   
  //  $("#dept").text('Department');   
  //  $("#yearofadmission").text('Year of Admission');   
  //  $("#yearofgraduation").text('Year of Graduation'); 
    $("#phoneno").val('');    
  //  $("#gradelevel").text('Grade Level');
    $("#contactaddr").val('Your Address...');   
    $("#comment").val('Comment...');   
    var filediv = '<div class="custom-file" id="filediv"><input type="file" class="custom-file-input" name="userfile" id="userfile" accept=".jpg" onchange="showimagepreview(this)"><label class="custom-file-label" for="exampleInputFile">Choose file</label></div>';
    $("#filediv").remove();
    $("#fileclass").append(filediv);
    $("#imgprvw").attr('src', '');    
  }

  /*  
  function addupdateaccount(){
    var matricno          = $("#matricno").val().trim(); 
    var fullname          = $("#fullname").val().trim(); 
    var faculty           = $("#faculty").val().trim(); 
    var dept              = $("#dept").val().trim(); 
    var yearofadmission   = $("#yearofadmission").val().trim(); 
    var yearofgraduation  = $("#yearofgraduation").val().trim(); 
    var phoneno           = $("#phoneno").val().trim(); 
    var gradelevel        = $("#gradelevel").val().trim();
    var contactaddr       = $("#contactaddr").val().trim();
    var comment           = $("#comment").val().trim();
    var userfile          = $("#userfile").val().trim();   
    if(matricno == '' || fullname == '' || faculty == '' || dept == '' || yearofadmission == '' || yearofgraduation == '' || phoneno == '' || gradelevel == '' || contactaddr == '' || comment == '' ||userfile == ''){
      $("#dmodaltext").text('Fill in the Required Field(s)');
      $('#dmodalbtn').trigger("click");      
    }else{
         var request = confirm("Are you sure you want to Add Student Record?");
         if(request == true){
            var formdata = new FormData($("#frmobj")[0]);
          //  var formdata2 = new FormData($("#formobj2")[0]);
          //var image = $('#userfile')[1].files[0];
          //  alert(userfile);
          //  formdata.append('file',userfile); 
            var formdata = formdata1 + formdata2;            
            $.ajax({
              url: "<?php echo site_url('/admin/addupdatestudentrecord'); ?>",
              type: 'POST',
              data: formdata,
              async: false,
              cache: false,
              contentType: false,
              processData: false,
              success: function (data)
              { 
                alert(data);
                if (data==1){
                  resetentry();
                  $("#smodaltext").text('Student Record Successfully Added');
                  $('#smodalbtn').trigger("click");                       
                }else if(data==2){
                  $("#smodaltext").text('Student Record Successfully Updated');
                  $('#smodalbtn').trigger("click");   
                }else{
                  alert(data);
                }
              }
            });          
         }
    }     
  }
  */
  //Retrieving Specified record for editing
  //---------------------------------------
  function editaccount(getid){ 
    var getid = "getid="+getid;
    $.post("<?php echo site_url('/admin/editaccount'); ?>",getid).done(function(data){
        if(data!=0){
          var row = $.parseJSON(data);
          $("#email").val(row.email);
          $("#email").prop("readonly", true);
          if(row.userstatus =='A'){
            $("#userstatus").text('Active');
          }else{
            $("#userstatus").text('Deactive');
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
