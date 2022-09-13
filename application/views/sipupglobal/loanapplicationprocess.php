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
						<div class="breadcrumb-title pr-3">Process Loan</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Loan</li>
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
							<form id="form_loan_application_process" name="form_loan_application_process">	
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
													<input type="file" name="files[]" id="userfile" required="true" onchange="preveiwImage3(this)" value="" class="form-control">
												</div>                                  
											</div>
										</div>
									</div>
									<!--end row-->
									<br>
									<ul class="nav nav-pills">
										<li class="nav-item"> 
											<a class="nav-link active" data-toggle="tab" href="#biodata" id="biodataX" name="biodataX">
												<span class="p-tab-name" onclick="bioDataFormShow()">Bio Data (LAF)</span><i class='bx bx-donate-blood font-24 d-sm-none'></i>
											</a>
										</li>
										<li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Inspection"><span class="p-tab-name" onclick="getCustomerInfo()">Inspection</span><i class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
										</li>
										<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#LoanAgreement"><span class="p-tab-name" onclick="loadAgreementFormShow()">Loan Agreement</span><i class='bx bx-message-edit font-24 d-sm-none'></i></a>
										</li>
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
																	<label>Business Type/Occupation</label>
																	<input type="text" id="business_type" name="business_type" value="" class="form-control">
																</div>
																<div class="form-group">
																	<label>Town</label>
																	<input type="text" id="town" name="town" value="" class="form-control">
																</div>
																<div class="form-group">
																	<label>City</label>
																	<input type="text" id="city" name="city" value="" class="form-control">
																</div>																	
																<div class="form-group">
																	<label>LGA</label>
																	<input type="text" id="lga" name="lga" value="" class="form-control">
																</div>																															
															</div>
															<div class="col-12 col-lg-7">
							
																<div class="form-group">
																	<label>Bank name</label>
																	<input type="text" id="bank_name" name="bank_name" value="" class="form-control" placeholder="UBA">
																</div>																
																<div class="form-group">
																	<label>Account name</label>
																	<input type="text" id="account_name" name="account_name" value="" class="form-control" placeholder="The correct order">
																</div>																
																<div class="form-row">
																	<div class="form-group col-md-6">
																	<label>Account type</label>
																		<select id="bank_account_type" name="bank_account_type" class="form-control">
																			<option value="---" selected>---</option>
																			<option value="savings">Savings</option>
																			<option value="current">current</option>
																			<option value="others">Others</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Account number</label>
																		<input type="text" id="account_number" name="account_number" value="" class="form-control" placeholder="">
																	</div>
																</div>												
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>BVN </label>
																		<input type="text" id="bvn" name="bvn" value="" class="form-control" placeholder="">
																	</div>
																	<div class="form-group col-md-6">
																		<label>Phone number</label>
																		<input type="text" id="phone_number" name="phone_number" value="" class="form-control" placeholder="">
																	</div>
																</div>	
																<hr>
																<div class="form-group">
																	<label>Name of Guarantor</label>
																	<input type="text" id="name_of_guarantor" name="name_of_guarantor" value="" class="form-control" placeholder="Guarantor fullname">
																</div>																										
																<div class="form-group">
																	<label>Guarantor address</label>
																	<input type="text" id="guarantor_address" name="guarantor_address" value="" class="form-control">
																</div>	
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Guarantor Phone no</label>
																		<input type="text" id="guarnator_phone_number" name="guarnator_phone_number" value="" class="form-control" placeholder="">
																	</div>
																	<div class="form-group col-md-6">
																		<label>Guarantor occupation</label>
																		<input type="text" id="guarantor_occupation" name="guarantor_occupation" value="" class="form-control" placeholder="">
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
																<div class="form-group">

																</div>										
																<div class="form-group">

																</div>

																<!-- <div class="form-row">
																	<div class="form-group col-md-6">
																		<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="guarantorSignature" name="guarantorSignature" class="rounded-circle shadow" width="130" height="130" alt="" />
																	</div>
																	<div class="form-group col-md-6" id="userfile1_div">
																		<div id='img1'>
																			<label>Guarantor signature</label>
																			<input type="hidden" id="guarnator_signature_hidden_tag" name="guarnator_signature_hidden_tag" value="F"> 
																			<input type="file" name="files[]" id="userfile1" required="true" onchange="preveiwImage1(this)" class="form-control">
																		</div>
																	</div>
																</div>																										
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="applicantSignature" name="applicantSignature" class="rounded-circle shadow" width="130" height="130" alt="" />
																	</div>
																	<div class="form-group col-md-6" id="userfile2_div">
																		<div id='img2'>
																			<label>Applicant signature</label>
																			<input type="hidden" id="applicant_signature_hidden_tag" name="applicant_signature_hidden_tag" value="F"> 
																			<input type="file" name="files[]" id="userfile2" required="true" onchange="preveiwImage2(this)" class="form-control">
																		</div>
																	</div>
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

										<div class="tab-pane fade" id="Inspection">
											<div class="card shadow-none border mb-0 radius-15">
												<div class="card-body">
													<div class="form-body">
														<div class="row">
															<div class="col-12 col-lg-5 border-right">
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
																<div class="form-group">
																	<label>Address</label>
																	<input type="text" id="applicant_address" name="applicant_address" value="" class="form-control" readonly>
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
																		<label>Marital Status</label>
																		<select id="applicant_marital_status" name="applicant_marital_status" class="form-control">
																			<option value="single">Single</option>
																			<option value="married">Married</option>
																			<option value="divorced">Divorced</option>
																			<option value="others">Others</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Spouse aware of Loan</label>
																		<select id="applicant_family_member_loan_awarness_status" name="applicant_family_member_loan_awarness_status" class="form-control">
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</div>
																</div>
																<div class="form-group">
																	<label>Spouse fullname</label>
																	<input type="text" id="applicant_spouse_fullname" name="applicant_spouse_fullname" value="" class="form-control" placeholder="Firstname Lastname">
																</div>	
																
																<div class="form-group">
																	<label>Address</label>
																	<input type="text" id="applicant_spouse_address" name="applicant_spouse_address" value="" class="form-control" placeholder="">
																</div>																
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Phone number</label>
																		<input type="text" id="applicant_spouse_phone_number" name="applicant_spouse_phone_number" value="" class="form-control">
																	</div>
																	<div class="form-group col-md-6">
																		<label>Type of Business</label>
																		<input type="text" id="applicant_spouse_type_business" name="applicant_spouse_type_business" value="" class="form-control">
																	</div>
																</div>
																<hr>
																<div class="form-group">
																	<label>Guarantor Fullname</label>
																	<input type="text" id="applicant_guarantor_fullname" name="applicant_guarantor_fullname" value="" class="form-control">
																</div>																	
																<div class="form-group">
																	<label>Guarantor Office Address</label>
																	<input type="text" id="applicant_guarantor_office_address" name="applicant_guarantor_office_address" value="" class="form-control" placeholder="">
																</div>
																<div class="form-group">
																	<label>Guarantor Home Address</label>
																	<input type="text" id="applicant_guarantor_home_address" name="applicant_guarantor_home_address" value="" class="form-control" placeholder="">
																</div>
															</div>
															<div class="col-12 col-lg-7">									
																<div class="form-group">
																	<label>Guarantor Type of Business</label>
																	<input type="text" id="applicant_guarantor_type_of_business" name="applicant_guarantor_type_of_business" value="" class="form-control" placeholder="">
																</div>
																<div class="form-group">
																	<label>Guarantor Bank name</label>
																	<input type="text" id="guarantor_bank_name" name="guarantor_bank_name" value="" class="form-control" placeholder="UBA">
																</div>																
																<div class="form-group">
																	<label>Guarantor Account name</label>
																	<input type="text" id="guarantor_account_name" name="guarantor_account_name" value="" class="form-control" placeholder="The correct order">
																</div>																
																<div class="form-row">
																	<div class="form-group col-md-6">
																	<label>Guarantor Account type</label>
																		<select id="guarantor_bank_account_type" name="guarantor_bank_account_type" class="form-control">
																			<option value="---" selected>---</option>
																			<option value="savings">Savings</option>
																			<option value="current">current</option>
																			<option value="others">Others</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Guarantor Account number</label>
																		<input type="text" id="guarantor_account_number" name="guarantor_account_number" value="" class="form-control" placeholder="">
																	</div>
																</div>	
																<div class="form-group">
																	<label>Guarantor BVN</label>
																	<input type="text" id="guarantor_bvn" name="guarantor_bvn" value="" class="form-control" placeholder="">
																</div>																												
																<hr>
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<label>Type of Loan</label>
																		<select id="type_of_loan" name="type_of_loan" class="form-control" onchange="getLoanByType(this.value)">
																			<option value="---" selected>---</option>
																			<option value="first loan">First loan</option>
																			<option value="second loan">Second loan</option>
																			<option value="third loan">Third loan</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Amount of Loan</label>
																		<div id="inspector_form_amount_of_loan_div">
																			<select id="inspector_form_loan_amount" name="inspector_form_loan_amount" class="form-control">
																				<option value="---">---</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label>Purpose of the loan</label>
																	<input type="text" id="inspector_form_loan_purpose" name="inspector_form_loan_purpose" value="" class="form-control" placeholder="">
																</div>				
																<div class="form-row">
																	<div class="form-group col-md-6">
																	<label>Previously Requested Loan?</label>
																		<select id="inspector_form_loan_participation_history" name="inspector_form_loan_participation_history" class="form-control">
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</div>
																	<div class="form-group col-md-6">
																		<label>Have statement of former loan?</label>
																		<select id="inspector_form_loan_history_statement_status" name="inspector_form_loan_history_statement_status" class="form-control">
																			<option value="yes">Yes</option>
																			<option value="no">No</option>
																		</select>
																	</div>
																</div>											
																<div class="form-group">
																	<label>Creditor/Manager Fullname </label>
																	<input type="text" id="inspector_form_manager_fullname" name="inspector_form_manager_fullname" value="" class="form-control" placeholder="">
																</div>							
																<div class="form-group">
																	<label>Creditor/Manager Comment</label>
																	<input type="text" id="inspector_form_manager_comment" name="inspector_form_manager_comment" value="" class="form-control">
																</div>	
																<div class="form-group">
																	<label>Date</label>
																	<input type="date" id="inspection_form_application_date" name="inspection_form_application_date" value="" class="form-control">
																</div>
																<hr>																
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="guarantorSignature" name="guarantorSignature" class="rounded-circle shadow" width="130" height="130" alt="" />
																	</div>
																	<div class="form-group col-md-6" id="userfile1_div">
																		<div id='img1'>
																			<label>Guarantor signature</label>
																			<input type="hidden" id="guarnator_signature_hidden_tag" name="guarnator_signature_hidden_tag" value="F"> 
																			<input type="file" name="files[]" id="userfile1" required="true" onchange="preveiwImage1(this)" class="form-control">
																		</div>
																	</div>
																</div>																										
																<div class="form-row">
																	<div class="form-group col-md-6">
																		<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="applicantSignature" name="applicantSignature" class="rounded-circle shadow" width="130" height="130" alt="" />
																	</div>
																	<div class="form-group col-md-6" id="userfile2_div">
																		<div id='img2'>
																			<label>Applicant signature</label>
																			<input type="hidden" id="applicant_signature_hidden_tag" name="applicant_signature_hidden_tag" value="F"> 
																			<input type="file" name="files[]" id="userfile2" required="true" onchange="preveiwImage2(this)" class="form-control">
																		</div>
																	</div>
																</div>
																<hr>																
																<div class="form-row">
																	<div class="form-group col-md-6">
																	
																	</div>
																	<div class="form-group col-md-6">
																	<button type="button" id="btn_submit_inspection_form" name="btn_submit_inspection_form" class="btn btn-primary px-3" onclick="submitInpectionForm()">Submit</button>
																	</div>
																</div>																		
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="LoanAgreement">
											<div class="card shadow-none border mb-0 radius-15">
												<div class="card-body">
													<div class="form-body">
														<div class="row">
															<div class="col-12">
																<header>
																	<input type="hidden" id="loanAgreementFillUpStatus" name="loanAgreementFillUpStatus" value="F">
																	<h1><center>SIP-UP GLOBAL VENTURES</center></H1>
																	<div id="address">
																		<span style="font-style:italic;font-size:16px;">
																			<center>
																				No 15 Adinlewa Street, <br>
																				Off By-Pass, Akure, <br>
																				Ondo State
																			</center>
																		</span>
																	</div>
																	<div id="reference">
																		<span style="font-size:20px;font-family:helvetic;font-style:italic;">
																			<center>
																				<span>Our Ref:..........................................</span>
																				<span>Your Ref:.........................................</span>
																				<span>Date:<?php echo date("m/d/Y"); ?></span>
																			</center>
																		</span>
																		<hr style="border: 1px solid black;">
																	</div>
																</header>
																<content id="content_div">
																	<span id="content_inner">
																		<h4><center>LOAN ADVANCE AGREEMENT</center></h4>
																		<p style="font-size:17px">
																			<span style="font-size:28px;font-weight:bold">This Agreement</span> is made this day <?php echo date("l"); ?> of  <?php echo date("M"); ?> <?php echo date("Y");?> BETWEEN SIP-UP GLOBAL VENTURE OF NO. 15 Adinlewa Street, off Bye-Pass, Akure, Ondo State hereinfter called the Grantor/Creditor and which expression shall where the context admit include his heirs assigns.<br>
																			<span style=""><b>AND</b></span><br>
																			<span id="debtor_fullname">-----</span>
																			of No. 
																			<span id="debtor_unique_number">
																				
																			</span>
																			and of Phone NO: 
																			<span id="debtor_phone_number">
																				
																			</span>
																			hereinafter called the Debtor/Beneficiary and which expression shall where the context admint include here heirs assigns.<br>
																			<span style=""><b>WHEREAS</b></span><br>
																			1. The Debtor has approached Creditor for an advance Friendly Loan of 
																			<span id="loan_amount">&#8358;
																				
																			</span> 
																			for the purpose of augmenting here business activity. <br>
																			2. The Debtor will pay by installment of the sum of 
																			<span id="loan_repayment">&#8358;
																				
																			</span> 
																			on daily basis.<br>
																			3. The Guarantor has agreed to pay as the principal sum and the service fees upon the failure fo the principal debtor to pay as at when due.<br>
																			4. The Guarantor has also agreed to incure any liability arising from this agrrement if the debtor is unable to pay back the sum loan to the creditor.<br>
																			5. The guarantor have agreed to drop his account number and BVN No: as a collateral for the Loan.<br>
																			6. Daily repayment is due on all the loans at 12:00pm, everyday to the officer assigns to the debtor. <br>
																			7. The penalty on any outstanding daily payment after the first day of late payment shall be ......XXXXXX............ Daily. <br>
																			8. The debtor and his or here Guarantor shall be liable for any expenses that the company might have incurred in the course of recovery of its money. <br>
																			9. That if any default is made by me in payment, the company or its agent reserve the right to enter into my shop(s), house premises to lock and key or to impound and sell collateral's properties/good in shop(s) to offset the debt.<br>
																			10. That as a result, the company or its Agent could take a legal action to recover the debt if default is made by me.<br>
																			11. That the surety could either be a Husband, wife or relatives and one of the debtor. <br>
																			12. The Loan savings of 
																			<span id="loan_savings">&#8358;
																				
																			</span> 
																			are not redeemable or transfer except when all loan conditions requirements are fully satisfied. <br>
																			13. The debtor and Guarantor shall submit his or her Bank account details and BVN that he or she wanted touse for the collection of the loan<br>
																			14. A breech of 25 days repayment rules or any part of this agreement is liable to pay a fine of <span>&#8358;2,500</span> befor closure.<br>
																		</p>
																		<div style="margin-left:10px;font-size:17px;font-weight:bold">
																			<span id="customer_bank_name">Bank Name: 
																				
																			</span>
																			<br>
																			<span id="customer_account_name">Account Name: 
																				
																			</span>
																			<br>
																			<span id="customer_account_number">Account Number: 
																				
																			</span>
																			<br>
																			<span id="customer_bvn">BVN Name: 
																				
																			</span>
																		</div><br>
																		<p style="font-size:17px">
																			<span style=""><b>THIS AGREEMENT WITNESSES AS FOLLOWS:</span></b><br>
																			In pursuance of the foregoing and upon the grant of the loan in the sum of 
																			<span id="loan_amount1">&#8358;
																				
																			</span>
																			by the creditor/grantor the receipt of which the debtor/beneficiary acknowleges the beneficiary/debtor agrees or has the right to use the loan for the purpose she has obtained same.<br>
																			<span style=""><b>IN WITHNESS WHEREOF </b></span>the parties hereby set their hands and seals the day of the year first above written.<br>
																			<div class="form-row">
																				<div class="form-group col-md-6" id="userfile1_grantor_div" style="">
																					<div id='imgGrantor'>
																						<span style="font-size:17px"><b>SIGNED SEALED AND DELIVERED</b></span><br>
																						<span style="font-size:17px"><b>BY THE WITH NAMED GRANTOR/CREDITOR</b></span>					
																						<input type="hidden" id="loan_agreement_grantor_signature_hidden_tag" name="loan_agreement_grantor_signature_hidden_tag" value="F"> 
																						<input type="file" name="userfile" id="userfile_grantor" required="true" onchange="preveiwGrantorSignature(this)" class="form-control">
																					</div>
																				</div>
																				<div class="form-group col-md-6" style="">
																					<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="grantorSignature" name="grantorSignature" class="rounded-circle shadow" width="130" height="130" alt="" />
																				</div>																			
																			</div>
																			<div class="form-row">
																				<div class="form-group col-md-6" id="userfile1_debtor_div" style="">
																					<div id='img1'>
																						<span style="font-size:17px"><b>SIGNED SEALED AND DELIVERED</b></span><br>
																						<span style="font-size:17px"><b>BY THE WITHIN NAMED DEBTOR/BENEFICIARY</b></span>
																					</div>
																				</div>
																				<div class="form-group col-md-6" style="">
																					<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="loanAgreementDebtorSignature" name="loanAgreementDebtorSignature" class="rounded-circle shadow" width="130" height="130" alt="" />

																					<span id="loan_agreement_customer_signature">
																						
																					</span>
																				</div>					
																			</div>
																			<div class="form-row">
																				<div class="form-group col-md-6" id="userfile1_guarantor_div" style="">
																					<div id='img1'>
																						<span style="font-size:17px"><b>SIGNED SEALED AND DELIVERED</b></span><br>
																						<span style="font-size:17px"><b>BY THE WITHIN NAMED GUARANTOR/DEBTOR</b></span>
																					</div>
																				</div>
																				<div class="form-group col-md-6" style="">
																					<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="loanAgreementGuarantorSignature" name="loanAgreementGuarantorSignature" class="rounded-circle shadow" width="130" height="130" alt="" />																					
																					<span id="loan_agreement_guarantor_signature">
																						
																					</span>
																				</div>										
																			</div>
																			<div style="margin-left:10px;font-size:17px;font-weight:bold">
																				<span id="guarnator_bank_name">Bank Name: 
																				
																				</span>
																				<br>
																				<span id="guarnator_account_name">Account Name: 
																				
																				</span>
																				<br>
																				<span id="guarnator_account_number">Account Number: 
																				
																				</span>
																				<br>
																				<span id="guarnator_bvn">BVN Name: 
																				
																				</span>
																			</div><br>
																		</p>
																		<div id="footer">
																			<span style="font-size:20px;font-family:helvetic;">
																				<center>
																					<span style="font-style:italic;font-weight:bold">PREPARED BY</span><br>
																					<span id="users_account_fullname">
																				
																					</span>
																					<br>
																					<span style="font-weight:bold">JIDE AGBOOLA ESQ</span><br>
																					<span style="font-weight:bold">(SOLICITOR)</span><br>
																					<span style="font-weight:bold">15, NEW HOSPITAL ROAD,</span><br>
																					<span style="font-weight:bold">AKURE, ONDO STATE</span><br>
																				</center>
																			</span>
																		</div><br>
																		<div class="form-row" id="btn_submit_inspection_form_outer_div">
																			<!-- <div class="form-group col-md-6" id="btn_submit_inspection_form_inner_div1">
																			
																			</div> -->
																			<!-- <div class="form-group col-md-6" style="" id="btn_submit_inspection_form_inner_div">
																				<button type="button" id="btn_submit_inspection_form" name="btn_submit_inspection_form" class="btn btn-primary px-3" onclick="submitLoanAgreement()">Submit Loan Agreement</button>
																			</div> -->
																		</div>																
																	</span>
																</content>																
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
			// alert(333);
			// generate customer unique number
			var customerUniqueNumberPreText = "SIP_";
			var customerUniqueNumber = "";
			$("#customer_unique_number_generator").change(function(){
				if(this.checked == true){
					$("#customer_unique_number").val('');

					//append biodata picture input field
					var imgTag = "";
					imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='files[]' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
					$("#img").remove();	
					$("#userfile_div").append(imgTag);


					bioDataReset();
					inspectionFormReset();
					resetLoanAgreement();
					$("#customer_unique_number").prop("readonly", true);
					$.get(baseUrl + "admin/generatecustomeruniquenumber").done(function(data){
						// var data = $.parseJSON(data);
						// console.log(data);
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
							imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='files[]' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
							$("#img").remove();	
							$("#userfile_div").append(imgTag);

							bioDataReset();
							inspectionFormReset();
							resetLoanAgreement();							
						}
					});
				}else{
					$("#customer_unique_number").prop("readonly", false);
					// alert(444);

					//append biodata picture input field
					var imgTag = "";
					imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='files[]' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
					$("#img").remove();	
					$("#userfile_div").append(imgTag);

					bioDataReset();
					inspectionFormReset();
					resetLoanAgreement();
				}
			});
		});

		function bioDataFormShow(){
			//append biodata picture input field
			var imgTag = "";
			imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='files[]' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
			$("#img").remove();	
			$("#userfile_div").append(imgTag);			
		}

		function loadAgreementFormShow(){
			//append biodata picture input field
			$("#img").remove();	
		}

		function getCustomerByUniqueNumber(getString){
			// alert(000);
			var sentString = getString;
			$.post(baseUrl + "admin/getcustomerbyuniquenumber", "sentString="+sentString).done(function(data){
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
					$("#business_type").val(data[0].business_type);
					$("#town").val(data[0].town);
					$("#city").val(data[0].city);
					$("#lga").val(data[0].lga);
					$("#type_of_loan").val(data[0].type_of_loan);
					$("#bank_name").val(data[0].customer_bank_name);
					$("#account_name").val(data[0].customer_bank_account_name);
					$("#bank_account_type").val(data[0].customer_bank_account_type);
					$("#account_number").val(data[0].customer_bank_account_number);	
					$("#bvn").val(data[0].customer_account_bvn);
					$("#phone_number").val(data[0].customer_phone_number);
					$("#name_of_guarantor").val(data[0].name_of_guarantor);
					$("#guarantor_address").val(data[0].guarantor_address);
					$("#guarnator_phone_number").val(data[0].guarantor_phone_number);
					$("#guarantor_occupation").val(data[0].guarantor_occupation);
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
					imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='files[]' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
					$("#img").remove();	
					$("#userfile_div").append(imgTag);

					bioDataReset();
					inspectionFormReset();
					resetLoanAgreement();					
				}
			});			
		}	

		function createCustomerAccount(){
			// alert(userfile);
			var customer_unique_number = $("#customer_unique_number").val();
			$("#customer_unique_number_hidden").val(customer_unique_number);
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
			var town = $("#town").val();
			var city = $("#city").val();
			var lga = $("#lga").val();
			var bank_name = $("#bank_name").val();
			var account_name = $("#account_name").val();
			var bank_account_type = $("#bank_account_type").val();
			var account_number = $("#account_number").val();	
			var bvn = $("#bvn").val();
			var phone_number = $("#phone_number").val();
			var name_of_guarantor = $("#name_of_guarantor").val();
			var guarantor_address = $("#guarantor_address").val();
			var guarnator_phone_number = $("#guarnator_phone_number").val();
			var guarantor_occupation = $("#guarantor_occupation").val();
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
			home_address == "" || business_address == "" || business_type == "" || town == "" || city == "" || lga == "" || bank_name == "" || account_name == "" || bank_account_type == "" || account_number == "" || bvn == "" || phone_number == "" || name_of_guarantor == "" || guarantor_address == "" || guarnator_phone_number == "" || guarantor_occupation == "" || application_date == "" || declaration == ""){
				alert("All fields are required");
			}else{
				formurl = baseUrl + "admin/createcustomeraccount";
				var formdata = new FormData($("#form_loan_application_process")[0]);
				
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

		function getCustomerInfo(){
			// clear biodata 
			// bioDataReset();
			//remove add picture div
			$("#img").remove();
			var inspectorId 			= $("#inspector_hidden_id").val();
			var customerUniqueNumber	= $("#customer_unique_number_hidden").val();
			// alert(inspectorId);
			// alert(customerUniqueNumber);
			if(customerUniqueNumber != ""){
				$.get(baseUrl + "admin/getcustomerinfo", "sentInspectorId="+inspectorId+"&customerUniqueNumber="+customerUniqueNumber).done(function(data){
					// alert(data);
					// debugger;
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
						$("#applicant_guarantor_fullname").val(data[0].name_of_guarantor);
						$("#applicant_guarantor_home_address").val(data[0].guarantor_address);	
						//creditor information
						$("#inspector_form_manager_fullname").val(data[0].users_account_firstname + " " + data[0].users_account_lastname);
						// $("#inspector_form_manager_fullname").val(data[0].users_account_firstname + " " + data[0].	
					}else{
						alert("Customer Unique number is required or not recognized, go back to bio-data form");
						// bioDataReset();
						inspectionFormReset();
						// resetLoanAgreement();
					}
				});
			}else{
				alert("Customer Unique number is required or not recognized, go back to bio-data form");
				// bioDataReset();
				inspectionFormReset();
				// resetLoanAgreement();
				
			}

		}	

		function submitInpectionForm(){
			var inspector_form_fullname = $("#inspector_form_fullname").val();
			var inspector_form_position = $("#inspector_form_position").val();
			var location_to_inspect = $("#location_to_inspect").val();
			var inspector_form_lga = $("#inspector_form_lga").val();
			var inspector_form_office_area = $("#inspector_form_office_area").val();
			var applicant_firstname = $("#applicant_firstname").val();
			var applicant_surname = $("#applicant_surname").val();
			var applicant_address = $("#applicant_address").val();
			var applicant_phone_number = $("#applicant_phone_number").val();
			var applicant_type_of_business = $("#applicant_type_of_business").val();
			var applicant_marital_status = $("#applicant_marital_status").val();
			var applicant_family_member_loan_awarness_status = $("#applicant_family_member_loan_awarness_status").val();
			var applicant_spouse_fullname = $("#applicant_spouse_fullname").val();
			var applicant_spouse_address = $("#applicant_spouse_address").val();
			var applicant_spouse_phone_number = $("#applicant_spouse_phone_number").val();
			var applicant_spouse_type_business = $("#applicant_spouse_type_business").val();
			var applicant_guarantor_fullname = $("#applicant_guarantor_fullname").val();
			var applicant_guarantor_office_address = $("#applicant_guarantor_office_address").val();
			var applicant_guarantor_home_address = $("#applicant_guarantor_home_address").val();
			var applicant_guarantor_type_of_business = $("#applicant_guarantor_type_of_business").val();

			var guarantor_bank_name = $("#guarantor_bank_name").val();
			var guarantor_account_name = $("#guarantor_account_name").val();
			var guarantor_bank_account_type = $("#guarantor_bank_account_type").val();
			var guarantor_account_number = $("#guarantor_account_number").val();
			var guarantor_bvn = $("#guarantor_bvn").val();

			var type_of_loan = $("#type_of_loan").val(); //---
			var inspector_form_loan_amount = $("#inspector_form_loan_amount").val();//---
			var inspector_form_loan_purpose = $("#inspector_form_loan_purpose").val();
			var inspector_form_loan_participation_history = $("#inspector_form_loan_participation_history").val();
			var inspector_form_loan_history_statement_status = $("#inspector_form_loan_history_statement_status").val();
			var inspector_form_manager_fullname = $("#inspector_form_manager_fullname").val();
			var inspector_form_manager_comment = $("#inspector_form_manager_comment").val();
			var inspection_form_application_date = $("#inspection_form_application_date").val();
			var userfile1 = $("#userfile1").val(); var userfile2 = $("#userfile2").val();
			if(inspector_form_fullname == "" || inspector_form_position == "" || location_to_inspect == "" || inspector_form_lga == "" || inspector_form_office_area == "" || applicant_firstname == "" 
			|| applicant_surname == "" || applicant_address == "" || applicant_phone_number == "" || applicant_type_of_business == "" || applicant_marital_status == "" 
			|| applicant_family_member_loan_awarness_status == "" || applicant_spouse_fullname == "" || applicant_spouse_address == "" || applicant_spouse_phone_number == "" || applicant_spouse_type_business == "" 
			|| applicant_guarantor_fullname == "" || applicant_guarantor_office_address == ""
			|| applicant_guarantor_home_address == "" || applicant_guarantor_type_of_business == "" || guarantor_bank_name == "" || guarantor_account_name == "" || guarantor_bank_account_type == "" 
			|| guarantor_account_number == "" || guarantor_bvn == "" || type_of_loan == "---" || inspector_form_loan_amount == "---" || inspector_form_loan_purpose == ""
			|| inspector_form_loan_participation_history == "" || inspector_form_loan_history_statement_status == "" || inspector_form_manager_fullname == "" || inspector_form_manager_comment == "" 
			|| inspection_form_application_date == "" || userfile1 == "" || userfile2 == ""){
				alert("All fields are required");
			}else{
				var response = confirm("Are you sure you want to submit inspector form?");
				var formdata = new FormData($("#form_loan_application_process")[0]);
				if(response == true){
					$.ajax({
						url: baseUrl + "admin/inspectionform",
						type: 'POST',
						data: formdata,
						async: false,
						cache: false,
						contentType: false,
						processData: false,
						success: function (data){ 
							// alert(data);
							var data = $.parseJSON(data);
							var guarantorsignatureuploadstatus = data['guarantorsignatureuploadstatus'];
							var customersignatureuploadstatus = data['customersignatureuploadstatus'];
							var result = data['result'];
							var message = "";
							if(guarantorsignatureuploadstatus == 0 || customersignatureuploadstatus == 0){
								message += "Guarantor/Customer";
							}
							if(result != 0 && result != ""){
								if(message == ""){
									alert("Inspection form submitted successfully");
								}else{
									alert("Inspection form submitted successfully, " + message + " signature not uploaded");
								}
								$("#loanAgreementFillUpStatus").val("T");
								// $("#customer_unique_number_hidden").val('');
								bioDataReset();
								inspectionFormReset();
								getLoanAgreement(result);
							}else{
								alert("Error submitting Inspection form");
							}
						}
					});
				}
			}
		}

		function getLoanAgreement(getResult){
			var data = getResult;
			// alert(data.debtor_unique_number+"fdf");
			//remove customer picture
			$("#img").remove();
			var loanAgreementFillUpStatus = $("#loanAgreementFillUpStatus").val();
			var btn_submit_inspection_form_outer_div = "";
			// btn_submit_inspection_form_outer_div += "<div class='form-group col-md-6' id='btn_submit_inspection_form_inner_div1'></div><div class='form-group col-md-6' style='margin-right:10px' id='btn_submit_inspection_form_inner_div'><button type='button' id='btn_submit_inspection_form' name='btn_submit_inspection_form' class='btn btn-primary px-3' onclick='submitLoanAgreement()'>Submit Loan Agreement</button></div>";

			btn_submit_inspection_form_outer_div += "<div class='form-group col-md-6' style='' id='btn_submit_inspection_form_inner_div'><button type='button' id='btn_submit_inspection_form' name='btn_submit_inspection_form' class='btn btn-primary px-3' onclick='submitLoanAgreement()'>Submit Loan Agreement</button></div>";

			if(loanAgreementFillUpStatus != "F" && loanAgreementFillUpStatus != ""){
				// {"debtor_fullname":"f df","debtor_unique_number":"SIP_000005","debtor_phone_number":"dfd","loan_amount":"10000","guarnator_bank_name":"","guarnator_account_name":"","guarnator_account_number":"","guarnator_bvn":"","guarnator_signature_id":"14","customer_bank_name":"ef","customer_account_name":"dfd","customer_account_number":"dfd","customer_bvn":"fdf","loan_repayment":"500","loan_savings":"100"}

				//check if customer image exist 
				// var urlToFile = baseUrl + 'customerpicture/' + data.customers_id + '.jpg';
				// var xhr = new XMLHttpRequest();
				// xhr.open('HEAD', urlToFile, false);
				// xhr.send();
				// if(xhr.status != 404){
				// 	$("#customerImage").attr('src', baseUrl + 'customerpicture/' + data.customers_id + '.jpg' +`?v=${new Date().getTime()}`); 
				// }else{
				// 	$("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
				// }				

				
				$("#btn_submit_inspection_form_outer_div").append(btn_submit_inspection_form_outer_div);
				// var data = $.parseJSON($("#loanAgreementFillUpStatus").val());
				$("#debtor_fullname").text(data.debtor_fullname);
				$("#debtor_unique_number").text(data.debtor_unique_number);
				$("#debtor_phone_number").text(data.debtor_phone_number);
				$("#loan_amount").html("&#8358;" + data.loan_amount);
				$("#loan_repayment").html("&#8358;" + data.loan_repayment);
				$("#loan_savings").html("&#8358;" + data.loan_savings);

				$("#customer_bank_name").html("Bank Name: " + data.customer_bank_name);
				$("#customer_account_name").html("Account Name: " + data.customer_account_name);
				$("#customer_account_number").html("Account Number: " + data.customer_account_number);
				$("#customer_bvn").html("BVN Name: " + data.customer_bvn);
				$("#loan_amount1").html("&#8358;" + data.loan_amount);

				$("#loanAgreementDebtorSignature").attr('src', baseUrl + 'customersignature/' + data.debtor_unique_number + '.jpg' +`?v=${new Date().getTime()}`); 
				$("#loanAgreementGuarantorSignature").attr('src', baseUrl + 'guarantorsignature/' + data.guarnator_signature_id + '.jpg' +`?v=${new Date().getTime()}`); 
				
				$("#guarnator_bank_name").html("Bank Name: " + data.guarnator_bank_name);
				$("#guarnator_account_name").html("Account Name: " + data.guarnator_account_name);
				$("#guarnator_account_number").html("Account Number: " + data.guarnator_account_number);
				$("#guarnator_bvn").html("BVN Name: " + data.guarnator_bvn);

				if(data.user_gender == "male"){
					$("#users_account_fullname").html("Mr. " + data.users_account_fullname);
				}else{
					$("#users_account_fullname").html("Mrs. " + data.users_account_fullname);
				}
			}else{
				//clear fields
				// $("#btn_submit_inspection_form_inner_div1").remove();
				
				// inspectionFormReset();
				resetLoanAgreement();
			}
		}		

		function submitLoanAgreement(){
			var userfile_grantor = $("#userfile_grantor").val();
			if(userfile_grantor == ""){
				alert("Please select the grantor signature");
			}else{
				formurl = baseUrl + "admin/submitloanagreement";
				var formdata = new FormData($("#form_loan_application_process")[0]);
				var response = confirm("Are you sure you want to submit loan agreement?");
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
							if(data == 1){
								alert("Loan Agreement submitted successfully");
								bioDataReset();
								inspectionFormReset();
								resetLoanAgreement();
							}else{
								// do nothing
							}
						}
					}); 
				}
			}
		}		

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
			$("#town").val('');
			$("#city").val('');
			$("#lga").val('');
			$("#type_of_loan").val('');
			$("#amount_of_loan").val('');
			$("#bank_name").val('');
			$("#account_name").val('');
			$("#bank_account_type").val('');
			$("#account_number").val('');	
			$("#bvn").val('');
			$("#phone_number").val('');
			$("#name_of_guarantor").val('');
			$("#guarantor_address").val('');
			$("#guarnator_phone_number").val('');
			$("#guarantor_occupation").val('');
			$("#application_date").val('');
			var chkboxStatus = document.getElementById("customer_unique_number_generator");
			if(chkboxStatus.checked == true){
				// do nothing
			}else{
				$("#customer_unique_number_generator").prop("checked",false);	
			}
			$("#declaration").prop("checked",false);	
			$("#customer_unique_number").prop("readonly", false);

			// var imgTag = "";
			// imgTag += "<div id='img'><div class='form-group'><label>Customer Picture</label><input type='hidden' id='customer_picture_hidden_tag' name='customer_picture_hidden_tag' value='F'><input type='file' name='files[]' id='userfile' required='true' onchange='preveiwImage3(this)' class='form-control'></div></div>";
			// $("#img").remove();	
			// $("#userfile_div").append(imgTag);

			$("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  

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
			$("#customer_unique_number_hidden").val('');		
				

			$("#inspector_form_fullname").val('');
			$("#inspector_form_position").val('');
			$("#location_to_inspect").val('');
			$("#inspector_form_lga").val('');
			$("#inspector_form_office_area").val('');
			$("#applicant_firstname").val('');
			$("#applicant_surname").val('');
			$("#applicant_address").val('');
			$("#applicant_phone_number").val('');
			$("#applicant_type_of_business").val('');
			$("#applicant_marital_status").val('');
			$("#applicant_family_member_loan_awarness_status").val('');
			$("#applicant_spouse_fullname").val('');
			$("#applicant_spouse_address").val('');
			$("#applicant_spouse_phone_number").val('');
			$("#applicant_spouse_type_business").val('');
			$("#applicant_guarantor_fullname").val('');
			$("#applicant_guarantor_office_address").val('');
			$("#applicant_guarantor_home_address").val('');
			$("#applicant_guarantor_type_of_business").val('');
			$("#guarantor_bank_name").val('');
			$("#guarantor_account_name").val('');
			$("#guarantor_bank_account_type").val('');
			$("#guarantor_account_number").val('');
			$("#guarantor_bvn").val('');
			$("#type_of_loan").val('');
			$("#inspector_form_loan_amount").val('');
			$("#inspector_form_loan_purpose").val('');
			$("#inspector_form_loan_participation_history").val('');
			$("#inspector_form_loan_history_statement_status").val('');
			$("#inspector_form_manager_fullname").val('');
			$("#inspector_form_manager_comment").val('');
			$("#inspection_form_application_date").val('');
			var imgTag1 = ""; 
			var imgTag2 = ""; 
			imgTag1 += "<div class='form-group' id='img1'><label>Guarantor signature</label><input type='hidden' id='guarnator_signature_hidden_tag' name='guarnator_signature_hidden_tag' value='F'> <input type='file' name='files[]' id='userfile1' required='true' onchange='preveiwImage1(this)' class='form-control'></div>";
			imgTag2 += "<div class='form-group' id='img2'><label>Applicant signature</label><input type='hidden' id='applicant_signature_hidden_tag' name='applicant_signature_hidden_tag' value='F'> <input type='file' name='files[]' id='userfile2' required='true' onchange='preveiwImage2(this)' class='form-control'></div>";
			$("#img1").remove();	
			$("#img2").remove();	
			$("#userfile1_div").append(imgTag1);
			$("#userfile2_div").append(imgTag2);

			//reset image to default
			$("#guarantorSignature").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);   

			$("#applicantSignature").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);
			$("#btn_submit_inspection_form_inner_div").remove();
		}

		function resetLoanAgreement(){	
			//clear loan agreement session vairable
			// $.post(baseUrl + "admin/clearloanagreementsessionvariable", "").done(function(data){

				//clears loan agreement form
				$("#loanAgreementFillUpStatus").val('F');

				$("#debtor_fullname").text("-----");
				$("#debtor_unique_number").text("");
				$("#debtor_phone_number").text("");
				$("#loan_amount").html("&#8358;");
				$("#loan_repayment").html("&#8358;");
				$("#loan_savings").html("&#8358;");

				$("#customer_bank_name").html("Bank Name:");
				$("#customer_account_name").html("Account Name:");
				$("#customer_account_number").html("Account Number:");
				$("#customer_bvn").html("BVN Name:");
				$("#loan_amount1").html("&#8358;");

				$("#guarnator_bank_name").html("Bank Name:");
				$("#guarnator_account_name").html("Account Name:");
				$("#guarnator_account_number").html("Account Number:");
				$("#guarnator_bvn").html("BVN Name:");
				$("#users_account_fullname").html("");
				//reset customer profile image to default
				$("#customerImage").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);   			
				//reset image to default
				$("#grantorSignature").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
				$("#loanAgreementDebtorSignature").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
				$("#loanAgreementGuarantorSignature").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
				$("#loanAgreementFillUpStatus").val("F");
				var imgTag1 = "";
				imgTag1 +="<div id='imgGrantor'><span style='font-size:17px'><b>SIGNED SEALED AND DELIVERED</b></span><br><span style='font-size:17px'><b>BY THE WITH NAMED GRANTOR/CREDITOR</b></span><input type='hidden' id='loan_agreement_grantor_signature_hidden_tag' name='loan_agreement_grantor_signature_hidden_tag' value='F'><input type='file' name='userfile' id='userfile_grantor' required='true' onchange='preveiwGrantorSignature(this)' class='form-control'></div>";
				$("#imgGrantor").remove();	
				$("#userfile1_grantor_div").append(imgTag1);	
				$("#btn_submit_inspection_form_inner_div").remove();
				//loan agreement content reset
			// });	
		}

		function getLoanByType(getLoanType){
			sentLoanType = getLoanType;
			$.post(baseUrl + "admin/getloanbytype", "sentLoanType="+sentLoanType).done(function(data){
				var select = ""; var option = "";
				select +="<select id='inspector_form_loan_amount' name='inspector_form_loan_amount' class='form-control'>";
				if(data != "" && data !=0){
					var data = $.parseJSON(data);
					for(var i = 0; i < data.length; i++){
						option += "<option value='"+data[i].loan_category_amount+"'>"+data[i].loan_category_amount+"</option>";
					}
					select += option;
					select += "</select>";
					$("#inspector_form_loan_amount").remove();
					$("#inspector_form_amount_of_loan_div").append(select);
				}else{
					option += "<option value='---'>---</option>";
					select += option;
					select += "</select>";
					$("#inspector_form_loan_amount").remove();
					$("#inspector_form_amount_of_loan_div").append(select);					
				}
			});
		}

		//to preview image
		function preveiwImage1(getImage)
		{
			// alert('fdfd');
			var fileType = document.getElementById('userfile1').files[0].type;
			var fileSize = document.getElementById('userfile1').files[0].size;
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
							$('#guarantorSignature').attr('src', e.target.result);
							$("#guarnator_signature_hidden_tag").val("T");
						}
						imgReader.readAsDataURL(getImage.files[0]);       
					}
					else
					{
						alert("Image Size too large for Upload!");
						$("#userfile1").val('');
					}
				}  
				else
				{
					alert("File format not Supported/Allowed for Upload!, Please Choose another.");
					$("#userfile1").val('');
				}
			}
		}		
		function preveiwImage2(getImage)
		{
			// alert('fdfd');
			var fileType = document.getElementById('userfile2').files[0].type;
			var fileSize = document.getElementById('userfile2').files[0].size;
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
							$('#applicantSignature').attr('src', e.target.result);
							$("#applicant_signature_hidden_tag").val("T");
							
						}
						imgReader.readAsDataURL(getImage.files[0]);       
					}
					else
					{
						alert("Image Size too large for Upload!");
						$("#userfile2").val('');
					}
				}  
				else
				{
					alert("File format not Supported/Allowed for Upload!, Please Choose another.");
					$("#userfile2").val('');
				}
			}
		}		
		function preveiwImage3(getImage)
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
		function preveiwGrantorSignature(getImage)
		{
			// alert('fdfd');
			var fileType = document.getElementById('userfile_grantor').files[0].type;
			var fileSize = document.getElementById('userfile_grantor').files[0].size;
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
							$('#grantorSignature').attr('src', e.target.result);
							$("#loan_agreement_grantor_signature_hidden_tag").val("T");
						}
						imgReader.readAsDataURL(getImage.files[0]);       
					}
					else
					{
						alert("Image Size too large for Upload!");
						$("#userfile_grantor").val('');
					}
				}  
				else
				{
					alert("File format not Supported/Allowed for Upload!, Please Choose another.");
					$("#userfile_grantor").val('');
				}
			}
		}		
	</script>

</body>
</html>