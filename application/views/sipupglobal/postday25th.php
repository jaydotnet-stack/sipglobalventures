<?php
	// print_r($_SESSION['loan_details']);
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
<head>
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
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Loan Defaulter</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Post Repayment Date</li>
								</ol>
							</nav>
						</div>
						<!-- <div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Settings</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div> -->
					</div>
					<!--end breadcrumb-->

					<div class="row">
						<div class="col-12 col-lg-6">

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
									<h4 class="mb-0">Loan Request(s)</h4>
									</div>
									<hr/>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Unique No</th>
													<th scope="col">Fullname</th>
													<th scope="col" style="text-align:center">Action</th>
												</tr>
											</thead>
											<tbody id="tbl_loan_defaulter" name="tbl_loan_defaulter">
												
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
							
						<div class="col-12 col-lg-6">
							<div class="card shadow-none border mb-0 radius-15">
								<div class="card-body">

									<form id="form_loan_defaulter" name="form_loan_defaulter">

										<div class="form-row">
											<div class="form-group col-md-6">				
												<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="user_picture" name="user_picture" class="rounded-circle shadow" width="130" height="130" alt="" />
											</div>											
										</div>		

										<div class="form-row">
											<div class="form-group col-md-6" id="customer_unique_number_div">
												<div id="customer_unique_number_input">
													<label>Customer Unique Number</label>
													<input type="hidden" id="loanAdvancementId" name="loanAdvancementId">
													<input type="text" id="customer_unique_number" name="customer_unique_number" 
														value="" class="form-control" placeholder="" readonly>			
												</div>
											</div>
											<div class="form-group col-md-6">
												<label>Fullname</label>
												<input type="text" id="fullname" name="fullname" 
													value=""
													class="form-control" placeholder="" readonly>
											</div>												
										</div>
										<div class="form-row">
											<div class="form-group col-md-6" id="">
												<div id="customer_unique_number_input">
													<label>Phone number</label>
													<input type="text" id="phone_number" name="phone_number" 
														value="" class="form-control" placeholder="" readonly>			
												</div>
											</div>
											<div class="form-group col-md-6">
												<label>BVN</label>
												<input type="text" id="bvn" name="bvn" 
													value=""
													class="form-control" placeholder="" readonly>
											</div>												
										</div>											
										<div class="form-row">
											<div class="form-group col-md-6" id="">
												<div id="customer_unique_number_input">
													<label>Amount of Loan</label>
													<input type="text" id="amount_of_loan" name="amount_of_loan" 
														value="" class="form-control" placeholder="" readonly>			
												</div>
											</div>
											<div class="form-group col-md-6">
												<label style='color:red'>Defaulter Fee</label>
												<input type="text" id="default_fee" name="default_fee" value="2500" class="form-control" readonly>														
											</div>																						
										</div>
										<div class="form-row">
											<div class="form-group col-md-6" id="">
											<button type="button" id="btn_reset_defaulter_form" name="btn_reset_defaulter_form" class="btn btn-success px-5">Reset</button>													
											</div>
											<div class="form-group col-md-6">
												<button type="button" id="btn_flag_defaulter" name="btn_flag_defaulter" class="btn btn-success px-5">Flag Account</button>
											</div>																						
										</div>										
									</form>
								</div>
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
		echo $custom_js; 
	?> 
    <script>
        $(document).ready(function(){
            $.get(baseUrl + "admin/populatloan25thdaydefualtertable").done(function(data){
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
				var agreementId = ""; agreementIdPrevious = ""; agreementIdPreviousDate = ''; LoanInComplete = []; loanComplete = [];
				// var LoanInCompleteByDebtor = [];
				var LoanInCompleteNoRepeat = [];
				// var LoanInCompleteDateFirstAndLast = [];
				var loanStatus = "";
				// alert(data);
				var data = $.parseJSON(data);
                if(data != "" || data != 0 || data != -1){
					btnAction = "";
					for(var i = 0; i < data.length; i++) {
						agreementId = data[i].transaction_year_advance_agreement_id;
						loanStatus = data[i].loan_status;
						if(loanStatus == 'Completed'){
							loanComplete.push(agreementId);
						}else{
							if(loanComplete.length > 0){
								for(var j = 0; j < loanComplete.length; j++) {
									if(agreementId == loanComplete[j]){
										//the agreement id is not for a completed loan
									}else{
										LoanInComplete.push(data[i]);
									}
								}
							}else{
								LoanInComplete.push(data[i]);
							}
						}
					}

					// alert(LoanInComplete);
					// LoanInCompleteDateFirstAndLast[0].push(4);
					

					// remove duplication from array
					// for(var i = 0; i < LoanInComplete.length; i++) {
					// 	var existTag = false;
					// 	agreementId= LoanInComplete[i].transaction_year_advance_agreement_id;
					// 	if(LoanInCompleteNoRepeat.length > 0){
					// 		for(var j = 0; j < LoanInCompleteNoRepeat.length; j++) {
					// 			if(LoanInCompleteNoRepeat[j].transaction_year_advance_agreement_id == agreementId){
					// 				existTag = true;
					// 				break;
					// 			}else{
					// 				existTag = false;
					// 			}
					// 		}
					// 		if(existTag == false){
					// 			LoanInCompleteNoRepeat.push(LoanInComplete[i]);
					// 		}else{

					// 		}							
					// 	}else{
					// 		LoanInCompleteNoRepeat.push(LoanInComplete[i]);
					// 	}
					// }
					for(var i = (LoanInComplete.length) -1; i >= 0 ; i--) {
						var existTag = false;
						agreementId= LoanInComplete[i].transaction_year_advance_agreement_id;
						if(LoanInCompleteNoRepeat.length > 0){
							for(var j = 0; j < LoanInCompleteNoRepeat.length; j++) {
								if(LoanInCompleteNoRepeat[j].transaction_year_advance_agreement_id == agreementId){
									existTag = true;
									break;
								}else{
									existTag = false;
								}
							}
							if(existTag == false){
								LoanInCompleteNoRepeat.push(LoanInComplete[i]);
							}else{

							}							
						}else{
							LoanInCompleteNoRepeat.push(LoanInComplete[i]);
						}
					}
					// alert()
					// for(var i = 0; i < LoanInCompleteNoRepeat.length; i++) {
					// 	LoanInCompleteDateFirstAndLast.push([]);
					// 	// alert(i);
					// 	// columnArray.push([]);
					// }					
					// console.log(LoanInCompleteNoRepeat);
					//sort the array 	 
					const LoanInCompletesorted = LoanInComplete.sort(
						(lowerBoundary, upperBoundary) => lowerBoundary.transaction_year_advance_agreement_id - upperBoundary.transaction_year_advance_agreement_id
					);
					
					var LoanInCompleteByDebtor = [];
					for(var i = 0; i < LoanInCompleteNoRepeat.length; i++) {
						nextTransactionDate = new Date(LoanInCompleteNoRepeat[i].transaction_date);
						currentDate = Date.now();
						dateDifference = Math.round((currentDate - nextTransactionDate.getTime()) / (1000 * 3600 * 24));						
						if(dateDifference < 25 ){
							// debtor is still within the paying grace
						}else{
							LoanInCompleteByDebtor.push(LoanInCompleteNoRepeat[i]);
						}

					}
				
					for(var i = 0; i < LoanInCompleteByDebtor.length; i++) {
						btnAction += "<button type='button' id='"+LoanInCompleteByDebtor[i].transaction_year_advance_agreement_id+"' name='"+LoanInCompleteByDebtor[i].transaction_year_advance_agreement_id+"' class='btn btn-primary px-3 lni lni-pencil' onclick='retrieveLoanDefaulters(this.id)'>Preview Defaulter</button>";
						recordCount ++;
						tableObjBuilder +="<tr>"
							tableObjBuilder +="<td>"+recordCount+"</td>"
							tableObjBuilder +="<td>"+LoanInCompleteByDebtor[i].account_number+"</td>"
							tableObjBuilder +="<td>"+LoanInCompleteByDebtor[i].fullname+"</td>"
							tableObjBuilder +="<td><center>"+btnAction+"</center></td>"
						tableObjBuilder +="</tr>"
						btnAction = "";
					}

					$("#tbl_loan_defaulter").html(tableObjBuilder);				
                }else if(data == -1){
                    alert("No account year activated");
                }else if(data == 0){
                    // alert("No account year activated");
                }else{
					alert("Error occured while loading record, contact the administrator");
				}
            });

			$("#btn_reset_defaulter_form").click(function(){
				$("#customer_unique_number").val('');
				$("#loanAdvancementId").val('');
				$("#fullname").val('');
				$("#phone_number").val('');
				$("#bvn").val('');
				$("#amount_of_loan").val('');
				$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
			});
					
			$("#btn_flag_defaulter").click(function(){
				formdata = $("form#form_loan_defaulter").serialize();
				// alert(formdata);
				if($("#customer_unique_number").val() == ""){
					alert("You have to preview Defaulter before flag off");
				}else{
					var response = confirm("Are you sure you want to flag off account?");
					if(response == true){
						$.post(baseUrl + "admin/flagoffaccount", formdata).done(function(data){
                			if(data != "" && data != -1 && data != 0 && data != 2){
								alert("Defaulter Account successfully flagged");
								$("#btn_reset_defaulter_form").trigger('click');
							}else if(data == 2){
								alert("Account flagged off already");
							}else if(data == 0){
								alert("No Accounting Year is Activated");
							}else if(data == -1){
								alert("No Accounting Year is Activated");
							}else{
								alert("Unable to flag off account, please contact the admin");
							}
						}); 
					}
				}
			});			
        });

		function retrieveLoanDefaulters(getLoanAgreementId){
			var sendLoanAgreementId = getLoanAgreementId;
			sendLoanAgreementId = "sendLoanAgreementId="+sendLoanAgreementId;
			//post operation
			$.post(baseUrl + "admin/retrieveloandefaulters", sendLoanAgreementId).done(function(data){
				var data = $.parseJSON(data);
				if(data != "" && data != 0){
					// user_picture
					// customer_unique_number
					// fullname
					// phone_number
					// bvn
					// purpose_of_loan
					// amount_of_loan
					// business_type
					// home_address
					// business_address
					if(data[0].customer_passport_tag !='F') {
						$("#user_picture").attr('src', baseUrl + 'customerpicture/' + data[0].customer_passport_id + '.jpg' + `?v=${new Date().getTime()}`); 
					}else{
						$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
					}
					// alert(data[0].fullname);
					$("#loanAdvancementId").val(getLoanAgreementId);   
					$("#customer_unique_number").val(data[0].loan_advance_agreement_applicant_account_no);   
					$("#fullname").val(data[0].fullname);
					$("#phone_number").val(data[0].customer_phone_number);
					$("#bvn").val(data[0].customer_account_bvn);
					$("#purpose_of_loan").val(data[0].inspector_form_loan_purpose);
					$("#amount_of_loan").val(data[0].inspector_form_loan_amount);
					$("#business_type").val(data[0].applicant_business_type);
					$("#home_address").val(data[0].applicant_home_address);
					$("#business_address").val(data[0].applicant_business_address);
				}else{
					// on error
					alert("Unable to retrieve loan Info., please contact the admin");
				}
			}); 			
		}
    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>