<?php
	// print_r($_SESSION['userinformation']);
	
	// exit;
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:04 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>SIPUP||GLOBAL VENTURES</title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url() . 'assets/images/favicon-32x32.png'; ?>" type="image/png" />
	<!--plugins-->
	<link href="<?php echo base_url() . 'assets/plugins/simplebar/css/simplebar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'assets/plugins/metismenu/css/metisMenu.min.css'; ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url() . 'assets/css/pace.min.css'; ?>" rel="stylesheet" />
	<script src="<?php echo base_url() . 'assets/js/pace.min.js'; ?>"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/icons.css'; ?>" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/app.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/dark-sidebar.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/dark-theme.css'; ?>" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
        <?php 
            echo $sidebar;
        ?>
		<!--end sidebar-wrapper-->
		<!--header-->
        <?php 
            echo $header;
        ?>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Create Approve/Account</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Account</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">

						</div>
					</div>
					<!--end breadcrumb-->
					<div class="user-profile-page">
						<div class="card radius-15">
							<div class="card-body">
                                <form id="create_account_form" name="create_account_form">   
                                    <div class="row">
                                        <div class="col-12 col-lg-7 border-right">
                                            <div class="d-md-flex align-items-center">
                                                <div class="mb-md-0 mb-3">
													<input type="hidden" id="logged_in_account_user_category" name="logged_in_account_user_category" value="<?php echo $_SESSION['userinformation']->users_account_category; ?>"> 
													<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="userimage" name="userimage" class="rounded-circle shadow" width="130" height="130" alt="" />                                               
                                                </div>
                                                <div class="ml-md-4 flex-grow-1">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h4 class="mb-0">
                                                            <?php 
                                                                // if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
                                                                    // echo "Welcome back <b>".$_SESSION['userinformation']->users_account_firstname."</b>";
                                                                // }
                                                            ?>                                                        
                                                        </h4>
                                                        <!-- <p class="mb-0 ml-auto">$44/hr</p> -->
                                                    </div>
                                                    <!-- <p class="mb-0 text-muted">[
                                                        <?php 
                                                            // if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
                                                                // echo $_SESSION['userinformation']->users_account_category."</b>";
                                                            // }
                                                        ?>  ]
                                                    </p> -->
                                                    <!-- <p class="text-primary"><i class='bx bx-buildings'></i> Epic Coders</p>
                                                    <button type="button" class="btn btn-primary">Connect</button>
                                                    <button type="button" class="btn btn-outline-secondary ml-2">Resume</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5">
                                            <div class="form-group" id='img'>
                                                <label>Change Picture</label>
												<input type="hidden" id="account_picture_hidden_tag" name="account_picture_hidden_tag" value="F"> 
                                                <input type="file" name="userfile" id="userfile" required="true" onchange="preveiwImage(this)" class="form-control">
                                            </div>                                        
                                           
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <ul class="nav nav-pills">
                                       
                                    </ul>
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show active" id="Edit-Profile">
                                            <div class="card shadow-none border mb-0 radius-15">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-5 border-right">
																<div class="form-group">
																	<label>Email Address</label>
																	<input type="text" class="form-control" id="email" name="email" placeholder="example@user.com" value="" onkeyup="getAccount(this.value)" />
																	<label id="email_error" name="email_error" style="color:red;display:none">Email field is required/Not in the right format</label>
                                                                </div>																
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
																		<label>First Name</label>
																		<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" />
																		<!-- <label id="firstname_error" name="firstname_error" style="color:red;display:none">Firstname field is required</label> -->
                                                                    </div>
                                                                    <div class="form-group col-md-6">
																		<label>Last Name</label>
																		<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" />
																		<!-- <label id="lastname_error" name="lastname_error" style="color:red;display:none">Lastname field is required</label> -->
                                                                    </div>
                                                                </div>
																<div class="form-group" >
																	<label>Gender</label><br>
																	<input type="radio" id="male" name="gender" value="male"/>
																	<label style="margin-right:100px">Male</label>
																	<input type="radio" id="female" name="gender" value="female"/>	
																	<label>Female</label>
																	<!-- <label id="gender_error" name="gender_error" style="color:red;display:none">gender must be selected</label> -->
																</div>
                                                                <div class="form-group">
																	<label>Phone Number</label>
																	<input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="08134434323" />
																	<!-- <label id="phone_number_error" name="phone_number_error" style="color:red;display:none">Phone number field is required</label> -->
                                                                </div>
                                                                <div class="form-group">
																	<label>Password <span style='color:red'>(Default : 123456)</span></label>
																	<div class="input-group" id="show_hide_password">
																		<input class="form-control border-right-0" type="password" id="password" name="password" value="123456">
																		<div class="input-group-append">	
																			<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
																		</div>
																	</div>
																	<!-- <label id="password_error" name="password_error" style="color:red;display:none">password field is required</label>		 -->
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-lg-7">
																<div class="form-group">
                                                                    <label>Address</label>
                                                                    <input type="text" id="address" name="address" class="form-control" value="">
                                                                </div>                                                           
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
																		<label>User Category</label>
                                                                        <select id="user_category" id="user_category" name="user_category" class="form-control">
																			<option value="Inspector" selected>Inspector</option>
																			<option value="Manager">Manager</option>
																			<option value="Cashier">Cashier</option>
																			<option value="Gmanager">Gmanager</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
																		<label>Date of Birth</label>
																		<input type="date" id="dob" name="dob" class="form-control" value="">
                                                                    </div>                                                                
                                                                </div>
                                                                <div class="form-group">
																	<label>Allocate to Market</label>
																	<select id="market_location" name="market_location" class="form-control">
																		<option value='---'>---</option>
																	</select>
																	<!-- <label id="market_location_error" name="market_location_error" style="color:red;display:none">market location must be selected</label> -->
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>LGA</label>
                                                                    <input type="text" id="lga" name="lga" class="form-control" value="">
                                                                </div>
                                                     
                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                    <button type="button" id="btn_create_account" name="btn_create_account" class="btn btn-primary px-5 radius-30"> Create/Update</button>
                                                                    </div>
                                                                </div>                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    

                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
        <?php 
            echo $footer;
        ?>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
    <?php 
        echo $switcher;
    ?>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/popper.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
	<!--plugins-->
	<script src="<?php echo base_url() . 'assets/plugins/simplebar/js/simplebar.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/metismenu/js/metisMenu.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'; ?>"></script>
	<!-- App JS -->
	<script src="<?php echo base_url() . 'assets/js/app.js'; ?>"></script>
	<?php 
		// echo $custom_js; 
	?>  
	<script>

		//global base url variable
		baseUrl = window.location.origin+"/sipupglobalventures/";

		$(document).ready(function(){
			//load market locations
			getMarketLocations();

			$("#email").focus();

		});

        function getMarketLocations(){
			$.get(baseUrl + "admin/getmarketlocations").done(function(data){
				var options = "";
				if(data != "" ){
					var data = $.parseJSON(data);
					for(var i = 0; i < data.length; i++) {
						options +="<option value='"+data[i].market_description+"'>"+ data[i].market_description+"</option>";
					}
					$("#market_location").append(options); 
				}else{
					// on error
					// alert(data);
				}
			}); 
        }

		function getAccount(getEmail){
			// alert(000);
			var sentEmail = getEmail;
			$.post(baseUrl + "admin/getaccount", "sentEmail="+sentEmail).done(function(data){
				// alert(data);
				if(data != 0 && data != ""){
					data = $.parseJSON(data);
					$("#email").val(data[0].email);
					$("#firstname").val(data[0].users_account_firstname);
					$("#lastname").val(data[0].users_account_lastname);
					$("#phone_number").val(data[0].users_account_phone_number);
					$("#password").val('123456');
					$("#address").val(data[0].users_account_address);
					$("#user_category").val(data[0].users_account_category);
					$("#user_category").attr('disabled', 'disabled');
					$("#dob").val(data[0].users_account_dob);
					if(data[0].users_account_approval_status == 'T'){
						$("#market_location").val(data[0].users_account_market_location);
						// $("#market_location").attr('disabled', 'disabled');
						document.getElementById("market_location").disabled = false;
					}else{
						$("#market_location").val("---");
					}

					$("#lga").val(data[0].users_account_lga);

					//check the appropriate radio button
					if(data[0].users_account_sex == 'male'){
						$("#male").prop('checked', true);
					}else{
						$("#female").prop('checked', true);
					}

					//check if user image exist 
					var urlToFile = baseUrl + 'userspicture/' + data[0].users_account_id + '.jpg';
					var xhr = new XMLHttpRequest();
					xhr.open('HEAD', urlToFile, false);
					xhr.send();

					if(xhr.status != 404){
						$("#userimage").attr('src', baseUrl + 'userspicture/' + data[0].users_account_id + '.jpg' +`?v=${new Date().getTime()}`); 
						
					}else{
						$("#userimage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
					}

					if($("#logged_in_account_user_category").val() != 'Gmanager'){
						$("#btn_create_account").attr("disabled", true);
					}

				}else{
					//do nothing	
					clearFields();
					$("#btn_create_account").attr("disabled", false);
					$("#user_category").attr('disabled', false);	
					$("#market_location").attr('disabled', false);	
				}
			});			
		}
		

		// password show or hide
		$("#show_hide_password a").on('click', function (event) {
			event.preventDefault();
			if ($('#show_hide_password input').attr("type") == "text") {
				$('#show_hide_password input').attr('type', 'password');
				$('#show_hide_password i').addClass("bx-hide");
				$('#show_hide_password i').removeClass("bx-show");
			} else if ($('#show_hide_password input').attr("type") == "password") {
				$('#show_hide_password input').attr('type', 'text');
				$('#show_hide_password i').removeClass("bx-hide");
				$('#show_hide_password i').addClass("bx-show");
			}
		});    

		$("#btn_create_account").click(function(){
			// alert('dfdf');
			var userfile = $("#userfile").val();
			var email = $("#email").val(); var firstname = $("#firstname").val(); var lastname = $("#lastname").val();
			var gender = ""; var sexStatus = false; var phone_number = $("#phone_number").val(); var password = $("#password").val();
			var firstnameLength = parseInt(firstname.length); var lastnameLength = parseInt(lastname.length); 
			var phoneNumberLength = parseInt(phone_number.length); var passwordLength = parseInt(password.length); 
			var address = $("#address").val();
			var userCategory = $("#user_category").val();
			var dob = $("#dob").val();
			var marketLocation = $("#market_location").val();
			// alert(marketLocation);
			var lga = $("#lga").val();

			// alert(marketLocation);

			//validate sex
			sexStatus = document.getElementById("male").checked; 
			if(sexStatus == true){
				gender = "male";
				// alert("male you must select a gender");
			}else{
				sexStatus = document.getElementById("female").checked; 
				if(sexStatus == false){
					// alert("male/female you must select a gender");
				}else{
					gender = "female";
				}
			}

			//validate email 
			function validateEmail(args) {
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(email.match(mailformat)) {                                                       
					if(firstnameLength < 3 || lastnameLength < 3 || gender == "" || phoneNumberLength < 1 || passwordLength < 1 || address == "" || userCategory == "---" || dob == "" || marketLocation == "" || lga == ""){
						alert("All field are required/Input fields character is too short");
					}else{
						formurl = baseUrl + "admin/admincreateaccount";
						var formdata = new FormData($("#create_account_form")[0]);
						var response = confirm("Are you sure you want to add customer account?");
						if(response == true){
							$.ajax({
								url: formurl,
								type: 'POST',
								data: formdata,
								async: false,
								cache: false,
								contentType: false,
								processData: false,
								success: function (data){ 
									if(data != "" && data !=0){
										alert("Account successfully created/updated");
										clearFields();
									}else if(data == -3){
										alert('User unique number exhausted, please contact system administrator');
									}else if(data == 0){
										alert("Unable to update account");
									}else{
										alert("Unable to create account");
									}
								}
							}); 
						}						
					}					                   
				}else{
					//$("#email").val('');
					$("#email_error").show();
					$("#email_error").fadeOut(5000);
					$("#email").focus();
				}
			}

			// alert(marketLocation+'dfd');
			//triggers email validator function 
			validateEmail(email);      
		});	
		
		function clearFields(){
			$("#userfile").val('');
			// $("#email").val('');
			$("#firstname").val('');
			$("#male").prop('checked', false);
			$("#female").prop('checked', false);
			$("#lastname").val('');
			$("#phone_number").val('');
			$("#password").val('');
			$("#address").val('');
			$("#user_category").val('');
			$("#dob").val('');
			$("#market_location").val('');
			$("#lga").val('');
			$("#userimage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);
		}

		//to preview image
		function preveiwImage(getImage)
		{
			// alert('fdfd');
			var fileType = document.getElementById('userfile').files[0].type;
			var fileSize = document.getElementById('userfile').files[0].size;
			/*******CONVERT IMAGE FILE TO KILOBYTE*******/
			var fileSize = Math.floor(fileSize/(1024));
			if (getImage.files && getImage.files[0]) 
			{
				if(fileType == 'image/jpg' || fileType == 'image/jpeg')
				{
					/******IMAGE SIZE MUST NOT BE MORE THAN 1 MB******/
					if(fileSize<1025)    
					{
						var imgReader = new FileReader();
						imgReader.onload = function(e) 
						{
							$('#userimage').attr('src', e.target.result);
							$("#account_picture_hidden_tag").val("T");
						}
						imgReader.readAsDataURL(getImage.files[0]);       
					}
					else
					{
						alert("Image Size too large for Upload!");
						$("#userfile").val('');
					}
				}  
				else
				{
					alert("File format not Supported/Allowed for Upload!, Please Choose another.");
					$("#userfile").val('');
				}
			}
		}		

    </script>      
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:10 GMT -->
</html>