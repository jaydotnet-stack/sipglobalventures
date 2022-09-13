<?php 
	// print_r($_SESSION['loan_advancement_agreement_debtor_information']);
	// exit;
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:04 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>SIP-UP Global Ventures</title>
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
						<div class="breadcrumb-title pr-3">Process Contribution</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Contribution</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-primary">Settings</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div> -->
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="user-profile-page">
						<div class="card radius-15">
							<form id="form_contribution_setup" name="form_contribution_setup">	
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-lg-7 border-right">
											<div class="d-md-flex align-items-center">
												<div class="mb-md-0 mb-3">
													<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="customerImage" name="customerImage" class="rounded-circle shadow" width="130" height="130" alt="" />
												</div>
												<div class="ml-md-4 flex-grow-1">
													<div class="d-flex align-items-center mb-1">
														<h4 class="mb-0">
													                                                      
														</h4>
														<!-- <p class="mb-0 ml-auto">$44/hr</p> -->
													</div>
													<p class="mb-0 text-muted">
													</p>
													<!-- <p class="text-primary"><i class='bx bx-buildings'></i> Epic Coders</p>
													<button type="button" class="btn btn-primary">Connect</button>
													<button type="button" class="btn btn-outline-secondary ml-2">Resume</button> -->
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-5" id="userfile_div">
											<div id="img">
												<div class="form-group">
													<label>Customer Picture</label>
													<input type="hidden" id="customer_picture_hidden_tag" name="customer_picture_hidden_tag" value="F"> 
													<input type="file" name="userfile" id="userfile" required="true" onchange="preveiwImage3(this)" value="" class="form-control">
												</div>                                  
											</div>
										</div>
									</div>
									<!--end row-->
									<br>
									<ul class="nav nav-pills">
										<li class="nav-item"> 
											<a class="nav-link active" data-toggle="tab" href="#biodata" id="biodataX" name="biodataX">
												<span class="p-tab-name" onclick="bioDataFormShow()">Bio Data (CAF)</span><i class='bx bx-donate-blood font-24 d-sm-none'></i>
											</a>
										</li>

										<li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#approvecontribution"><span class="p-tab-name" onclick="getContributionBaseCustomerInfo()">Approve Contribution</span><i class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
										</li>

										<!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#LoanAgreement"><span class="p-tab-name" onclick="loadAgreementFormShow()">Loan Agreement</span><i class='bx bx-message-edit font-24 d-sm-none'></i></a>
										</li> -->

									</ul>
									<div class="tab-content mt-3">

										<div class="tab-pane fade show active" id="biodata">
											<div class="card shadow-none border mb-0 radius-15">
												<div class="card-body">
													<div class="form-body">
														<div class="row">
															<div class="col-12 col-lg-5 border-right">
																<div class="form-row">
																	<div class="form-group col-md-6" id="customer_unique_number_div">
																		<div id="customer_unique_number_input">
																			<label>Customer Unique Number</label>
																			<input type="hidden" id="customer_unique_number_hidden" name="customer_unique_number_hidden" value="">
																			<input type="text" id="customer_unique_number" name="customer_unique_number" 
																				value="" class="form-control" placeholder="" onkeyup="getCustomerByUniqueNumber(this.value)">			
																		</div>
																	</div>
																	<div class="form-group col-md-6">
																		<label style="visibility:hidden">Declaration</label>
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="customer_unique_number_generator" name="customer_unique_number_generator" >
																			<label class="form-check-label" for="">Assign unique number</label>
																		</div>
																	</div>																																	
																</div>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Title</label>
																		<select id="title" name="title"  class="form-control">
																			<option value="mr">Mr</option>
																			<option value="mr">Mrs</option>
																			<option value="ms">Ms</option>
																			<option value="others">Others</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Account Officer</label>
																		<input type="text" id="account_officer" name="account_officer" 
																			value="<?php echo $_SESSION['userinformation']->users_account_firstname.' '.$_SESSION['userinformation']->users_account_lastname; ?>"
																			class="form-control" placeholder="" readonly>
																	</div>																	
																</div>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Firstname</label>
																		<input type="text" id="firstname" name="firstname" value="" class="form-control" placeholder="firstname">
																	</div>
																	<div class="form-group col-md-6">
																		<label>Lastname</label>
																		<input type="text" id="lastname" name="lastname" value="" class="form-control" placeholder="lastname">
																	</div>
																</div>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Gender</label>
																		<select id="gender" name="gender" class="form-control">
																			<option value="male">Male</option>
																			<option value="female">Female</option>
																			<option value="other">Other</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Year in Business</label>
																		<input type="text" id="year_in_business" name="year_in_business" value="" class="form-control">
																	</div>
																</div>	
																<div class="form-group">
																	<label>Home Address</label>
																	<input type="text" id="home_address" name="home_address" value="" class="form-control">
																</div>
																<div class="form-group">
																	<label>Business Address</label>
																	<input type="text" id="business_address" name="business_address" value="" class="form-control">
																</div>																													
																<div class="form-group">
																	<label>Phone number</label>
																	<input type="text" id="customer_phone_number" name="customer_phone_number" value="" class="form-control" placeholder="">
																</div>																													
																															
															</div>
															<div class="col-12 col-lg-7">
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Business Type/Occupation</label>
																		<input type="text" id="business_type" name="business_type" value="" class="form-control">
																	</div>
																	<div class="form-group col-md-6">
																		<label>Town</label>
																		<input type="text" id="town" name="town" value="" class="form-control">
																	</div>
																</div>

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>City</label>
																		<input type="text" id="city" name="city" value="" class="form-control">
																	</div>
																	<div class="form-group col-md-6">
																		<label>LGA</label>
																		<input type="text" id="lga" name="lga" value="" class="form-control">
																	</div>
																</div>
																<hr>
																
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Account Number</label>
																		<input type="text" id="contributor_account_number" name="contributor_account_number" value="" class="form-control" placeholder="" >
																	</div>
																	<div class="form-group col-md-6">
																		<label>BVN</label>
																		<input type="text" id="contributor_bvn" name="contributor_bvn" value="" class="form-control"/>
																	</div>
																</div>	

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Bank Account Name</label>
																		<input type="text" id="contributor_bank_account_name" name="contributor_bank_account_name" value="" class="form-control" placeholder="" >
																	</div>
																	<div class="form-group col-md-6">
																		<label>Bank Name</label>
																		<input type="text" id="contributor_bank_name" name="contributor_bank_name" value="" class="form-control" placeholder=""/>
																	</div>
																</div>																														

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Date</label>
																		<input type="date" id="application_date" name="application_date" value="" class="form-control">
																	</div>
																	<div class="form-group col-md-6">
																		<label>Declaration</label>
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="I agree" id="declaration" name="declaration">
																			<label class="form-check-label" for="">I agree to the declaration</label>
																		</div>
																	</div>
																</div>


																


																<!-- <div class="form-group">

																</div>										
																<div class="form-group">

																</div> -->
																<hr>																
																<div class="form-row">
																	<div class="form-group col-md-6">
																	
																	</div>
																	<div class="form-group col-md-6">
																	<button type="button" id="btn_create_customer_account" name="btn_create_customer_account" class="btn btn-primary px-3" onclick="createCustomerAccount()">Create/Update Account</button>
																	</div>
																</div>																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="approvecontribution">
											<div class="card shadow-none border mb-0 radius-15">
												<div class="card-body">
													<div class="form-body">
														<div class="row">
															<div class="col-12 col-lg-5 border-right">
																<label style='font-size:18px'>Inspector's Info</label>
																<hr>	
																<div class="form-group">
																	<label>Fullname</label>
																	<input type="text" id="inspector_form_fullname" name="inspector_form_fullname" value="" class="form-control" placeholder="Firtname Lastname" readonly>
																</div>																
																<div class="form-group">
																	<label>Position</label>
																	<input type="text" id="inspector_form_position" name="inspector_form_position" value="" class="form-control" readonly>
																</div>																
																<div class="form-group">
																	<label>Location to Inspect</label>
																	<input type="text" id="location_to_inspect" name="location_to_inspect" value="" class="form-control" readonly>
																</div>

																<div class="form-group">
																	<label>LGA</label>
																	<input type="text" id="inspector_form_lga" name="inspector_form_lga" value="" class="form-control" readonly>
																</div>																
																<div class="form-group">
																<label>Office Area</label>
																	<input type="text" id="inspector_form_office_area" name="inspector_form_office_area"value="" class="form-control" readonly>
																</div>
															</div>
															<div class="col-12 col-lg-7">									
															<label style='font-size:18px'>Contributor's Info</label>
																<hr>	
															<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Firstname</label>
																		<input type="text" id="applicant_firstname" name="applicant_firstname" value="" class="form-control" readonly>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Surname</label>
																		<input type="text" id="applicant_surname" name="applicant_surname" value="" class="form-control" readonly>
																	</div>
																</div>

	
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Phone number</label>
																		<input type="text" id="applicant_phone_number" name="applicant_phone_number" value="" class="form-control" placeholder="" readonly>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Type of Business</label>
																		<input type="text" id="applicant_type_of_business" name="applicant_type_of_business" value="" class="form-control" readonly>
																	</div>
																</div>

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Account Number</label>
																		<input type="text" id="contributor_account_number2" name="contributor_account_number2" value="" class="form-control" placeholder="" readonly/>
																	</div>
																	<div class="form-group col-md-6">
																		<label>BVN</label>
																		<input type="text" id="contributor_bvn2" name="contributor_bvn2" value="" class="form-control" readonly/>
																	</div>
																</div>

																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Bank Name</label>
																		<input type="text" id="contributor_bank_name2" name="contributor_bank_name2" value="" class="form-control" placeholder="" readonly/>
																	</div>
																	<div class="form-group col-md-6">
																	<label>Address</label>
																	<input type="text" id="applicant_address" name="applicant_address" value="" class="form-control" readonly>
																	</div>
																</div>
																											
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Contribution Amount</label>
																		<input type="text" id="contribution_amount" name="contribution_amount" value="" class="form-control" onkeypress="return restrictAlphabets(event)">							
																	</div>
																	<div class="form-group col-md-6">
																		<label>Date</label>
																		<input type="date" id="contribution_date" name="contribution_date" value="" class="form-control">
																	</div>
																</div>
																<hr>											
																<div class="form-row">
																	<div class="form-group col-md-6">
																	
																	</div>
																	<div class="form-group col-md-6">
																	<button type="button" id="btn_setup_contribution_form" name="btn_setup_contribution_form" class="btn btn-primary px-3" onclick="approveContribution()">Setup Contribution</button>
																	</div>
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
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">SIP-UP Global Ventures <?php  echo date('Y') ;?> | Developed By : Jaydotnet<a href="" target="_blank"></a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
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
		echo $custom_js; 
	?> 	
	<script>
		$(document).ready(function(){
			// restrictAlphabetsx();
			$("#customer_unique_number").focus();
			// alert(333);
			// generate customer unique number
			var customerUniqueNumberPreText = "SIP_";
			var customerUniqueNumber = "";
			$("#customer_unique_number_generator").change(function(){
				if(this.checked == true){
					$("#customer_unique_number").val('');

					//append biodata picture input field
					var imgTag = "";
					imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='userfile' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
					$("#img").remove();	
					$("#userfile_div").append(imgTag);


					bioDataReset();
					// inspectionFormReset();
					// resetLoanAgreement();

					$("#customer_unique_number").prop("readonly", true);
					$.get(baseUrl + "admin/generatecustomeruniquenumber").done(function(data){
						// var data = $.parseJSON(data);
						// data = parseInt(data[0].customers_id);
						if(data == 0){
							customerUniqueNumber = customerUniqueNumberPreText + "000001";
							$("#customer_unique_number").val(customerUniqueNumber);
							$("#customer_unique_number_hidden").val(customerUniqueNumber);
						}else if(data > 0 && data < 9){
							data = parseInt(data) + 1;
							customerUniqueNumber = customerUniqueNumberPreText + "00000" + data;
							$("#customer_unique_number").val(customerUniqueNumber);
							$("#customer_unique_number_hidden").val(customerUniqueNumber);
						}else if(data >= 9 && data < 99){
							data = parseInt(data) + 1;
							customerUniqueNumber = customerUniqueNumberPreText + "0000" + data;
							$("#customer_unique_number").val(customerUniqueNumber);
							$("#customer_unique_number_hidden").val(customerUniqueNumber);
						}else if(data >= 99 && data < 999){
							data = parseInt(data) + 1;
							customerUniqueNumber = customerUniqueNumberPreText + "000" + data;
							$("#customer_unique_number").val(customerUniqueNumber);
							$("#customer_unique_number_hidden").val(customerUniqueNumber);
						}else if(data >= 999 && data < 9999){
							data = parseInt(data) + 1;
							customerUniqueNumber = customerUniqueNumberPreText + "00" + data;
							$("#customer_unique_number").val(customerUniqueNumber);
							$("#customer_unique_number_hidden").val(customerUniqueNumber);
						}else if(data >= 9999 && data < 99999){
							data = parseInt(data) + 1;
							customerUniqueNumber = customerUniqueNumberPreText + "0" + data;
							$("#customer_unique_number").val(customerUniqueNumber);
							$("#customer_unique_number_hidden").val(customerUniqueNumber);
						}else{
							alert("Account number exhausted, please contact system administrator");
							$("#customer_unique_number_generator").prop('checked',false);

							//append biodata picture input field
							var imgTag = "";
							imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='userfile' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
							$("#img").remove();	
							$("#userfile_div").append(imgTag);

							bioDataReset();
							// inspectionFormReset();
							// resetLoanAgreement();							
						}
					});
				}else{
					$("#customer_unique_number").prop("readonly", false);
					// alert(444);

					//append biodata picture input field
					var imgTag = "";
					imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='userfile' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
					$("#img").remove();	
					$("#userfile_div").append(imgTag);

					bioDataReset();
					// inspectionFormReset();
					// resetLoanAgreement();
				}
			});
		});


		function getCustomerByUniqueNumber(getString){
			// alert(000);
			var sentString = getString;
			$.post(baseUrl + "admin/getcontributionbasedcustomerbyuniquenumber", "sentString="+sentString).done(function(data){
				// alert(data);
				if(data != 0 && data != ""){
					data = $.parseJSON(data);
					// alert(data);
					//assign customer unqiue hidden number for inspection form
					$("#customer_unique_number_hidden").val($("#customer_unique_number").val());
					$("#title").val(data[0].title);
					$("#account_officer").val(data[0].account_officer_fullname);
					$("#firstname").val(data[0].firstname);
					$("#lastname").val(data[0].surname);
					$("#gender").val(data[0].sex);
					$("#year_in_business").val(data[0].year_in_business);
					$("#home_address").val(data[0].home_address);
					$("#business_address").val(data[0].	business_address);
					$("#customer_phone_number").val(data[0].customer_phone_number);
					$("#business_type").val(data[0].business_type);
					$("#town").val(data[0].town);
					$("#city").val(data[0].city);
					$("#lga").val(data[0].lga);


					$("#contributor_account_number").val(data[0].customer_bank_account_number);
					$("#contributor_bvn").val(data[0].customer_account_bvn);
					$("#contributor_bank_name").val(data[0].customer_bank_name);
					$("#contributor_bank_account_name").val(data[0].customer_bank_account_name);					


					// alert(data[0].application_date);


					$("#application_date").val(data[0].application_date);
					$("#declaration").prop('checked',true);
					//check if customer image exist 
					var urlToFile = baseUrl + 'customerpicture/' + data[0].customers_id + '.jpg';
					var xhr = new XMLHttpRequest();
					xhr.open('HEAD', urlToFile, false);
					xhr.send();

					// alert(data[0].customers_id + '.jpg');
					// $("#userfile").val(data[0].customers_id + '.jpg');
					if(xhr.status != 404){
						$("#customerImage").attr('src', baseUrl + 'customerpicture/' + data[0].customers_id + '.jpg' +`?v=${new Date().getTime()}`); 

						$("#userfile").val(data[0].customers_id + '.jpg');
						
						// var userfile = $("#userfile").val();
						// alert(userfile);
					}else{
						$("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
					}

				}else{
					//do nothing

					//append biodata picture input field
					var imgTag = "";
					imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='userfile' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
					$("#img").remove();	
					$("#userfile_div").append(imgTag);

					bioDataReset();
					// inspectionFormReset();
					// resetLoanAgreement();					
				}
			});			
		}	

		function createCustomerAccount(){
			// alert(userfile);
			var customer_unique_number = $("#customer_unique_number").val();
			var customer_unique_number = $("#customer_unique_number").val();
			var userfile = $("#userfile").val();
			var title = $("#title").val();
			var account_officer = $("#account_officer").val();
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			var gender = $("#gender").val();
			var year_in_business = $("#year_in_business").val();
			var home_address = $("#home_address").val();
			var business_address = $("#business_address").val();
			var business_type = $("#business_type").val();
			var customer_phone_number = $("#customer_phone_number").val();
			var town = $("#town").val();
			var city = $("#city").val();
			var lga = $("#lga").val();

			var contributor_account_number = $("#contributor_account_number").val();
			var contributor_bvn = $("#contributor_bvn").val();
			var contributor_bank_name = $("#contributor_bank_name").val();
			var contributor_bank_account_name = $("#contributor_bank_account_name").val();
			// var account_number = $("#account_number").val();	
			// var bvn = $("#bvn").val();
			// var phone_number = $("#phone_number").val();
			// var name_of_guarantor = $("#name_of_guarantor").val();
			// var guarantor_address = $("#guarantor_address").val();
			// var guarnator_phone_number = $("#guarnator_phone_number").val();
			// var guarantor_occupation = $("#guarantor_occupation").val();

			var application_date = $("#application_date").val();
			declarationStatus = document.getElementById("declaration").checked; 
			var declaration = "";
			if(declarationStatus == true){
				declaration = "I agree";
			}else{
				declaration = "";
			}
			// alert(declaration);
			if(customer_unique_number == "" || /*userfile == "" ||*/ title == "" || account_officer == "" || firstname == "" || lastname == "" || gender == "" || year_in_business == "" || 
			home_address == "" || business_address == "" || business_type == "" || customer_phone_number == "" || town == "" || city == "" || lga == "" || contributor_account_number == "" || contributor_bvn == "" || contributor_bank_name == "" || contributor_bank_account_name == "" || application_date == "" || declaration == ""){
				alert("All fields are required");
			}else{
				formurl = baseUrl + "admin/createcontributionbasedcustomeraccount";
				var formdata = new FormData($("#form_contribution_setup")[0]);
				
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
							// alert(data);
							if(data == 1){
								alert("Account successfully created/updated");
								bioDataReset();
							}else{
								// do nothing
							}
						}
					}); 
				}

			}			
		}

		function getContributionBaseCustomerInfo(){
			// alert('fdf');
			// clear biodata 
			// bioDataReset();
			//remove add picture div
			$("#img").remove();
			var inspectorId 			= $("#inspector_hidden_id").val();
			var customerUniqueNumber	= $("#customer_unique_number_hidden").val();
			// alert(customerUniqueNumber);
			if(customerUniqueNumber != ""){
				$.get(baseUrl + "admin/getcontributionbasedcustomerinfo", "sentInspectorId="+inspectorId+"&customerUniqueNumber="+customerUniqueNumber).done(function(data){
					if(data != "" && data !=0){
						data = $.parseJSON(data);
						//check if customer image exist 
						var urlToFile = baseUrl + 'customerpicture/' + data[0].customers_id + '.jpg';
						var xhr = new XMLHttpRequest();
						xhr.open('HEAD', urlToFile, false);
						xhr.send();
						if(xhr.status != 404){
							$("#customerImage").attr('src', baseUrl + 'customerpicture/' + data[0].customers_id + '.jpg' +`?v=${new Date().getTime()}`); 
						}else{
							$("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
						}

						$("#inspector_form_fullname").val(data[0].users_account_firstname + " " + data[0].users_account_lastname);
						$("#inspector_form_position").val(data[0].users_account_category);
						$("#location_to_inspect").val(data[0].users_account_market_location);
						$("#inspector_form_lga").val(data[0].users_account_lga);
						$("#inspector_form_office_area").val(data[0].users_account_address);
						$("#applicant_firstname").val(data[0].firstname);
						$("#applicant_surname").val(data[0].surname);
						$("#applicant_address").val(data[0].home_address);

						$("#applicant_phone_number").val(data[0].customer_phone_number);
						$("#applicant_type_of_business").val(data[0].business_type);

						$("#contributor_account_number2").val(data[0].customer_bank_account_number);
						$("#contributor_bvn2").val(data[0].customer_account_bvn);
						$("#contributor_bank_name2").val(data[0].customer_bank_name);



						// $("#applicant_guarantor_fullname").val(data[0].name_of_guarantor);
						// $("#applicant_guarantor_home_address").val(data[0].guarantor_address);	
						//creditor information
						// $("#inspector_form_manager_fullname").val(data[0].users_account_firstname + " " + data[0].users_account_lastname);
						// $("#inspector_form_manager_fullname").val(data[0].users_account_firstname + " " + data[0].	
					}else{
						alert("Customer Unique number is required or not recognized, go back to bio-data form");
						// bioDataReset();
						// inspectionFormReset();
						// resetLoanAgreement();
					}
				});
			}else{
				alert("Customer Unique number is required or not recognized, go back to bio-data form");
				bioDataReset();
				inspectionFormReset();
				// resetLoanAgreement();
				
			}

		}	

		function approveContribution(){
			var inspector_form_fullname = $("#inspector_form_fullname").val();
			var inspector_form_position = $("#inspector_form_position").val();
			var location_to_inspect = $("#location_to_inspect").val();
			var inspector_form_lga = $("#inspector_form_lga").val();
			var inspector_form_office_area = $("#inspector_form_office_area").val();
			var applicant_firstname = $("#applicant_firstname").val();
			var applicant_surname = $("#applicant_surname").val();
			var applicant_phone_number = $("#applicant_phone_number").val();
			var applicant_type_of_business = $("#applicant_type_of_business").val();
			var contributor_account_number = $("#contributor_account_number2").val();
			var contributor_bvn = $("#contributor_bvn2").val();
			var contributor_bank_name = $("#contributor_bank_name2").val();
			var applicant_address = $("#applicant_address").val();
			var contribution_amount = $("#contribution_amount").val();
			var contribution_date = $("#contribution_date").val();
			if(inspector_form_fullname == "" || inspector_form_position == "" || location_to_inspect == "" || inspector_form_lga == "" || inspector_form_office_area == "" || applicant_firstname == "" 
			|| applicant_surname == ""  || applicant_phone_number == "" || applicant_type_of_business == "" || contributor_account_number == "" || contributor_bvn == "" || contributor_bank_name == ""
			|| applicant_address == "" || contribution_amount == "" || contribution_date == ""){
				alert("All fields are required");
			}else{
				var response = confirm("Are you sure you want to approve contribution?");
				var formdata = new FormData($("#form_contribution_setup")[0]);
				if(response == true){
					$.ajax({
						url: baseUrl + "admin/approvecontribution",
						type: 'POST',
						data: formdata,
						async: false,
						cache: false,
						contentType: false,
						processData: false,
						success: function (data){ 
							if(data == 1){
								alert("Contribution approved successfully");
								bioDataReset();
								inspectionFormReset();
								//clears inspection form
								$("#customer_unique_number_hidden").val('');		
								// return automatically to biodata form
								$("#biodataX").trigger('click');
							}else{
								alert("Error approving contribution");
							}
						}
					});
				}
			}
		}

		function bioDataFormShow(){
			bioDataReset();
		}

		const restrictAlphabets = (getText) => {
			let x  = getText.which || getText.keycode;
			if((x >= 48 && x <= 57) || x == 8 || (x >= 35 && x <= 40) || x == 46 || x == 68){
				return true;
			}else{
				return false;
			}
		}

		// let saveFormInputsNoImage = () => {

		// let restrictAlphabets(getText){
		// 	alert(getText);
		// }
		
		function bioDataReset(){
			//clears inspection form
			// $("#customer_unique_number_hidden").val('');
			//clears loan agreement form
			// $("#loanAgreementFillUpStatus").val('F');
			$("#title").val('');
			// alert(888);
			// $("#account_officer").val('');
			$("#firstname").val('');
			$("#lastname").val('');
			$("#gender").val('');
			$("#year_in_business").val('');
			$("#home_address").val('');
			$("#business_address").val('');
			$("#business_type").val('');
			$("#customer_phone_number").val('');
			$("#town").val('');
			$("#city").val('');
			$("#lga").val('');

			$("#contributor_account_number").val('');
			$("#contributor_bvn").val('');
			$("#contributor_bank_name").val('');
			$("#contributor_bank_account_name").val('');			
			
			$("#application_date").val('');
			var chkboxStatus = document.getElementById("customer_unique_number_generator");
			if(chkboxStatus.checked == true){
				// do nothing
			}else{
				$("#customer_unique_number_generator").prop("checked",false);	
			}
			$("#declaration").prop("checked",false);	
			$("#customer_unique_number").prop("readonly", false);

			var imgTag = "";
			imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='userfile' id='userfile' required='true' onchange='preveiwImage3(this)' value='' class='form-control'></div></div>";
			$("#img").remove();	
			$("#userfile_div").append(imgTag);


			// imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='files[]' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
			// $("#img").remove();	
			// $("#userfile_div").append(imgTag);

			$("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
			$("#customer_picture_hidden_tag").val("F");

			//reset image to default
			// $("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);   

			//clear inspection form
			// inspectionFormReset();
			// resetLoanAgreement();
		}

		function inspectionFormReset(){
			// alert('dfdfd');
			// $("#customer_unique_number_hidden").val('');

			//clears inspection form
			// $("#customer_unique_number_hidden").val('');		

			$("#inspector_form_fullname").val('');
			$("#inspector_form_position").val('');
			$("#location_to_inspect").val('');
			$("#inspector_form_lga").val('');
			$("#inspector_form_office_area").val('');
			$("#applicant_firstname").val('');
			$("#applicant_surname").val('');
			$("#applicant_phone_number").val('');
			$("#applicant_type_of_business").val('');
			$("#applicant_address").val('');
			$("#contribution_amount").val('');
			$("#contribution_date").val('');
			//reset image to default
			$("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  

			// $("#btn_submit_inspection_form_inner_div").remove();
		}





		//to preview image
		function preveiwImage3(getImage){
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
							$('#customerImage').attr('src', e.target.result);
							$("#customer_picture_hidden_tag").val("T");
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
</html>