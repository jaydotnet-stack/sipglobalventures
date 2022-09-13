<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:00 GMT -->
<head>
	<?php echo $sitecss; ?>
</head>

<body class="bg-register">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
								<div class="col-lg-6">
									<form id="register_form" name="register_form">								
										<div class="card-body p-md-5">
											<div class="text-center">
												<img src="<?php echo base_url() . 'assets/images/logo-icon.png'; ?>" width="80" alt="">
												<h2 class="mt-4 font-weight-bold">10:53 AM</h2>
												<h5 class="mt-4 font-weight-bold">Tuesday, November 29, 2016</h5>
												<h3 class="mt-4 font-weight-bold">Create an Account</h3>
											</div>
											<!-- <div class="input-group shadow-sm rounded mt-5">
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="<?php echo base_url() . 'assets/images/icons/search.svg'; ?>" alt="" width="16"></span>
												</div>
												<input type="button" class="form-control border-0" value="Register with google">
											</div> -->
											<!-- <div class="input-group shadow-sm rounded mt-3">
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="<?php echo base_url() . 'assets/images/icons/facebook.svg'; ?>" alt="" width="16"></span>
												</div>
												<input type="button" class="form-control border-0 text-facebook" value="Register with Facebook">
											</div> -->
											<!-- <div class="login-separater text-center"> <span>OR REGISTER WITH EMAIL</span>
												<hr/>
											</div> -->
											<div class="form-group mt-4">
												<label>Email Address</label>
												<input type="text" class="form-control" id="email" name="email" placeholder="example@user.com" />
												<label id="email_error" name="email_error" style="color:red;display:none">Email field is required/Not in the right format</label>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>First Name</label>
													<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" />
													<label id="firstname_error" name="firstname_error" style="color:red;display:none">Firstname field is required</label>
												</div>
												<div class="form-group col-md-6">
													<label>Last Name</label>
													<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" />
													<label id="lastname_error" name="lastname_error" style="color:red;display:none">Lastname field is required</label>
												</div>
											</div>																											
											<div class="form-group" >
												<label>Gender</label><br>
												<input type="radio" id="male" name="gender" value="male"/>
												<label style="margin-right:100px">Male</label>
												<input type="radio" id="female" name="gender" value="female"/>	
												<label>Female</label>
												<label id="gender_error" name="gender_error" style="color:red;display:none">gender must be selected</label>
											</div>	
											<div class="form-group mt-4">
												<label>Phone Number</label>
												<input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="08134434323" />
												<label id="phone_number_error" name="phone_number_error" style="color:red;display:none">Phone number field is required</label>
											</div>																	
											<!-- <div class="form-group">
												<label>User Category</label>
												<select class="form-control">
													<option>G. Manager</option>
													<option>Manager</option>
													<option>Inspector</option>
												</select>
											</div>									
											<div class="form-group">
												<label>Market Location</label>
												<select class="form-control">
													<option>India</option>
													<option>United Kingdom</option>
													<option>America</option>
													<option>Dubai</option>
												</select>
											</div>									 -->
											<div class="form-group">
												<label>Password</label>
												<div class="input-group" id="show_hide_password">
													<input class="form-control border-right-0" type="password" id="password" name="password" value="">
													<div class="input-group-append">	
														<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
													</div>
												</div>
												<label id="password_error" name="password_error" style="color:red;display:none">password field is required</label>								
											</div>
											<!-- <div class="form-group">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">I read and agree to Terms & Conditions</label>
												</div>
											</div> -->
											<div class="btn-group mt-3 w-100">
												<button type="button" class="btn btn-primary btn-block" id="btn_register" name="btn_register">Register</button>
												<!-- <button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i></button> -->
											</div>
											<hr/>
											<div class="text-center mt-4">
												<p class="mb-0">Already have an account? <a href="<?php echo base_url().'admin/'; ?>">Login</a>
												</p>
											</div>
										</div>
									</form>
								</div>
							</form>
							<div class="col-lg-6">
								<img src="<?php echo base_url() . 'assets/images/login-images/register-frent-img.jpg'; ?>" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php 
		echo $sitescript;
	?>
	<?php 
		echo $custom_js; 
	?>
	<script src=""></script>
	<!--Password show & hide js -->
	<script>
		// $(document).ready(function () {
		// 	$("#show_hide_password a").on('click', function (event) {
		// 		event.preventDefault();
		// 		if ($('#show_hide_password input').attr("type") == "text") {
		// 			$('#show_hide_password input').attr('type', 'password');
		// 			$('#show_hide_password i').addClass("bx-hide");
		// 			$('#show_hide_password i').removeClass("bx-show");
		// 		} else if ($('#show_hide_password input').attr("type") == "password") {
		// 			$('#show_hide_password input').attr('type', 'text');
		// 			$('#show_hide_password i').removeClass("bx-hide");
		// 			$('#show_hide_password i').addClass("bx-show");
		// 		}
		// 	});
		// });	
	</script>
	<script>
		$(document).ready(function(){
			$("#email").focus();
			// alert('dfd');
		});
    </script>	
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:02 GMT -->
</html>