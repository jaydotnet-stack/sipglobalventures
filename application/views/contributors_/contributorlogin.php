<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $sitecss; ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">  
  <div class="register-logo">
    <a href="#"><b><span style="font-weight:bold;">Student Repository Management System</span></b></a>
  </div>
  <div class="card" id="sectA">
    <div class="card-body register-card-body">
      <p class="login-box-msg">User's Login</p>

      <form id="frmlogin" name="frmlogin">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="emailaddress" name="emailaddress">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div style="float: right;">
          <!-- /.col -->
            <button type="button" class="btn btn-primary btn-block" id="btnlogin">Login</button>
          <!-- /.col -->
        </div>
      </form>
      <br><br>
      <div style="text-align: center;">
        <a href="#" onclick="" class="text-center">Not a User, Contact the Admin</a>
      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  <div class="card" id="sectB">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form id="frmregister" name="frmregister">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" id="fullname" name="fullname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password1" name="password1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" id="password2" name="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div style="float: right;">
          <!-- /.col -->
            <button type="button" class="btn btn-primary btn-block" id="btnregister">Register</button>
          <!-- /.col -->
        </div>        
      </form>
      <a href="#" onclick="switcher();" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->


  <div class="card" id="modalcontent" style="visibility: hidden">
    <div class="container-fluid">
      <div class="row" id="modalsetup">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Modal Examples
              </h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
              </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                Launch Primary Modal
              </button>
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-secondary">
                Launch Secondary Modal
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info" id="xmodalbtn">
                Launch Info Modal
              </button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" id="dmodalbtn">
                Launch Danger Modal
              </button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                Launch Warning Modal
              </button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success" id="smodalbtn">
                Launch Success Modal
              </button>
              <br />
              <br />
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                Launch Small Modal
              </button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                Launch Large Modal
              </button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                Launch Extra Large Modal
              </button>
              <br />
              <br />
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-overlay">
                Launch Modal with Overlay
              </button>
              <div class="text-muted mt-3">
                Instructions for how to use modals are available on the
                <a href="https://getbootstrap.com/docs/4.4/components/modal/">Bootstrap documentation</a>
              </div>
            </div>
            <!-- /.card -->
          </div>

          <div class="card card-info card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Toasts Examples <small>built in AdminLTE</small>
              </h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-default toastsDefaultDefault">
                Launch Default Toast
              </button>
              <button type="button" class="btn btn-default toastsDefaultFull">
                Launch Full Toast (with icon)
              </button>
              <button type="button" class="btn btn-default toastsDefaultFullImage">
                Launch Full Toast (with image)
              </button>
              <button type="button" class="btn btn-default toastsDefaultAutohide">
                Launch Default Toasts with autohide
              </button>
              <button type="button" class="btn btn-default toastsDefaultNotFixed">
                Launch Default Toasts with not fixed
              </button>
              <br />
              <br />
              <button type="button" class="btn btn-default toastsDefaultTopLeft">
                Launch Default Toast (topLeft)
              </button>
              <button type="button" class="btn btn-default toastsDefaultBottomRight">
                Launch Default Toast (bottomRight)
              </button>
              <button type="button" class="btn btn-default toastsDefaultBottomLeft">
                Launch Default Toast (bottomLeft)
              </button>
              <br />
              <br />
              <button type="button" class="btn btn-success toastsDefaultSuccess">
                Launch Success Toast
              </button>
              <button type="button" class="btn btn-info toastsDefaultInfo">
                Launch Info Toast
              </button>
              <button type="button" class="btn btn-warning toastsDefaultWarning">
                Launch Warning Toast
              </button>
              <button type="button" class="btn btn-danger toastsDefaultDanger">
                Launch Danger Toast
              </button>
              <button type="button" class="btn btn-default bg-maroon toastsDefaultMaroon">
                Launch Maroon Toast
              </button>
              <div class="text-muted mt-3">

              </div>
            </div>
          </div>

          <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                SweetAlert2 Examples
              </h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-success swalDefaultSuccess">
                Launch Success Toast
              </button>
              <button type="button" class="btn btn-info swalDefaultInfo">
                Launch Info Toast
              </button>
              <button type="button" class="btn btn-danger swalDefaultError">
                Launch Error Toast
              </button>
              <button type="button" class="btn btn-warning swalDefaultWarning">
                Launch Warning Toast
              </button>
              <button type="button" class="btn btn-default swalDefaultQuestion">
                Launch Question Toast
              </button>
              <div class="text-muted mt-3">
                For more examples look at <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
              </div>
            </div>
            <!-- /.card -->
          </div>

          <div class="card card-warning card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Toastr Examples
              </h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-success toastrDefaultSuccess">
                Launch Success Toast
              </button>
              <button type="button" class="btn btn-info toastrDefaultInfo">
                Launch Info Toast
              </button>
              <button type="button" class="btn btn-danger toastrDefaultError">
                Launch Error Toast
              </button>
              <button type="button" class="btn btn-warning toastrDefaultWarning">
                Launch Warning Toast
              </button>
              <div class="text-muted mt-3">
                For more examples look at <a href="https://codeseven.github.io/toastr/">https://codeseven.github.io/toastr/</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- ./row -->
    </div><!-- /.container-fluid -->

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-overlay">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="overlay d-flex justify-content-center align-items-center">
              <i class="fas fa-2x fa-sync fa-spin"></i>
          </div>
          <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-primary">
      <div class="modal-dialog">
        <div class="modal-content bg-primary">
          <div class="modal-header">
            <h4 class="modal-title">Primary Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-secondary">
      <div class="modal-dialog">
        <div class="modal-content bg-secondary">
          <div class="modal-header">
            <h4 class="modal-title">Secondary Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-info">
      <div class="modal-dialog">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h4 class="modal-title">Thrift Manager</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="xmodaltext">Testing Info</span></p>
          </div>
          <div class="modal-footer " style="float: right;">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-warning">
      <div class="modal-dialog">
        <div class="modal-content bg-warning">
          <div class="modal-header">
            <h4 class="modal-title">Warning Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-dark">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-success">
      <div class="modal-dialog">
        <div class="modal-content bg-success">
          <div class="modal-header">
            <h4 class="modal-title">Thrift Manager</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><p><span id="smodaltext">Testing Info Green</span></p></p>
          </div>
    <div class="modal-footer " style="float: right;">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content bg-danger">
          <div class="modal-header">
            <h4 class="modal-title">Thrift Manager</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="dmodaltext">Testing Info</span></p>
          </div>
          <div class="modal-footer " style="float: right;">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>  
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-sm">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Small Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Large Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Extra Large Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>

</div>
<!-- /.register-box -->
<!-- jQuery -->
<?php echo $sitescript; ?>
</body>
<script>

  //Email Validator
  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  } 


  onload = initializer();

  function initializer(){

    $("#modalsetup").hide();
    $("#modalcontent").css('visibility', 'visible');    
    $("#sectB").hide();
  }

  function contributorregistration(){
   $("#sectA").hide();
   $("#sectB").show(); 
   window.scrollTo(0,0);
  }

  function switcher(){
   $("#sectB").hide();
   $("#sectA").show(); 
   window.scrollTo(0,0);
  }

  $(document).ready(function(){
    //New Membership Registration
    //---------------------------
    $("#btnregister").click(function(){
      var fullname  =   $("#fullname").val().trim();
      var email     =   $("#email").val().trim();
      var password1 =   $("#password1").val().trim();
      var password2 =   $("#password2").val().trim();
      if (fullname==''||email==''||password1==''||password2==''){
        $("#dmodaltext").text('One or more fields are empty');
        $('#dmodalbtn').trigger("click");        
      }else{
        if (password1!=password2){
          $("#dmodaltext").text('Password Do not match');
          $('#dmodalbtn').trigger("click");     
        }else{
           if (validateEmail(email)) {
              var formdata = $("#frmregister").serialize();
            //  alert(formdata);
              $.post("<?php echo site_url('/contributors/registration'); ?>",formdata).done(function(data) {
                      
                  if(data==1){
                    resetentry();
                    $("#smodaltext").text('Account Successfully Created');
                    $('#smodalbtn').trigger("click"); 
                    $("#sectA").show(); 
                    $("#sectB").hide();                     
                  }else if(data==2){
                    $("#dmodaltext").text('Email Address Already Exist! Duplicate Email Address Not Allowed');
                    $('#dmodalbtn').trigger("click");                              
                  }else{
                    alert(data);
                  }
              });   
           }else{
              $("#dmodaltext").text('Invalid Email Address');
              $('#dmodalbtn').trigger("click");   
           }
        }
      }
    });

    //Login as a registered member
    //----------------------------
    $("#btnlogin").click(function(){
        var emailaddress  = $("#emailaddress").val().trim();
        var password      = $("#password").val().trim();

        if(emailaddress==''||password==''){
          $("#dmodaltext").text('One or more fields are empty');
          $('#dmodalbtn').trigger("click");  
        }else{
          if(validateEmail(emailaddress)) {
            var formdata = $("#frmlogin").serialize();
        //  $.post("<?php echo site_url('/admin/login'); ?>", formdata).done(function(data){
            $.post("<?php echo site_url('/user/login'); ?>", formdata).done(function(data){
              if(data==1){
                window.location.href = "<?php echo site_url('admin/dashboard'); ?>";
              }else if(data==2){
                $("#dmodaltext").text('Email Address or Password Incorrect');
                $('#dmodalbtn').trigger("click"); 
              }else if(data==-2){
                $("#dmodaltext").text('Password Incorrect');
                $('#dmodalbtn').trigger("click"); 
              }else{
                $("#dmodaltext").text(data);
                $('#dmodalbtn').trigger("click"); 
              }
            });
          }else{
            $("#dmodaltext").text('Invalid Email Address');
            $('#dmodalbtn').trigger("click");              
          }
        }
    });
  });

  function resetentry(){
    $("#fullname").val('');
    $("#email").val('');
    $("#password1").val('');
    $("#password2").val('');
  }

</script>
</html>
