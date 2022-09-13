<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:59 GMT -->
<head>
	<?php 
		echo $sitecss; 
	?>
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
								<div class="col-lg-6">
									<form id="login_form" name="login_form">
										<div class="card-body p-md-5">
											<div class="text-center">
												<img src="<?php echo base_url() . 'assets/images/logo-icon.png'; ?>" width="80" alt="">
												<h2 class="mt-4 font-weight-bold">10:53 AM</h2>
												<h5 class="mt-4 font-weight-bold">Tuesday, November 29, 2016</h5>										
												<h3 class="mt-4 font-weight-bold">Welcome Back</h3>
											</div>
											<!-- <div class="input-group shadow-sm rounded mt-5">
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="<?php echo base_url() . 'assets/images/icons/search.svg'; ?>" alt="" width="16"></span>
												</div>
												<input type="button" class="form-control  border-0" value="Log in with google">
											</div>
											<div class="login-separater text-center"> <span>OR LOGIN WITH EMAIL</span>
												<hr/>
											</div> -->
											<div class="form-group mt-4">
												<label>Email Address</label>
												<input type="text" class="form-control" id="email" name="email" placeholder="example@user.com" 
													value="<?php 
																if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
																	echo $_SESSION['email'];
																}
															?>"
												/>
												<label id="email_error" name="email_error" style="color:red;display:none">Email field is required</label>
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" />
												<label id="password_error" name="password_error" style="color:red;display:none">password field is required</label>										
											</div>
											<!-- <div class="form-row">
												<div class="form-group col">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
														<label class="custom-control-label" for="customSwitch1">Remember Me</label>
													</div>
												</div>
												<div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
												</div>
											</div> -->
											<div class="btn-group mt-3 w-100">
												<button type="button" class="btn btn-primary btn-block" id="btn_login" name="btn_login">Log In</button>
												<!-- <button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
												</button> -->
											</div>
											<hr>
											<div class="text-center">
												<p class="mb-0">Don't have an account? <a href="<?php echo base_url() .'admin/loadregister'; ?>">Sign up</a>
												</p>
											</div>
										</div>
									</form>
								</div>
							<div class="col-lg-6">
								<img src="<?php echo base_url() . 'assets/images/login-images/login-frent-img.jpg'; ?>" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<?php 
		echo $sitescript;
	?>
	<?php 
		echo $custom_js; 
	?>	
	<script>
		$(document).ready(function(){
			$("#email").focus();
			// alert('dfd');
		});
    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:00 GMT -->
</html>