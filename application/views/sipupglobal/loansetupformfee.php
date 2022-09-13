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
						<div class="breadcrumb-title pr-3">Setup Loan Payment for Disbursement</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Pre-disbursement</li>
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
											<tbody id="tbl_loan_request" name="tbl_loan_request">
												
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
							
						<div class="col-12 col-lg-6">
							<div class="card shadow-none border mb-0 radius-15">
								<div class="card-body">

									<form id="form_loan_setup_fee" name="form_loan_setup_fee">

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
												<label>Loan</label>
												<input type="text" id="loan" name="loan" value="" class="form-control" placeholder="" readonly>	
											</div>												
										</div>
										<div class="form-row">
											
											<div class="form-group col-md-6">
												<label>Interest</label>
												<input type="text" id="interest" name="interest" value="" class="form-control" placeholder="" readonly>
											</div>
											<div class="form-group col-md-6">
												<label>Form Fee</label>
												<input type="text" id="formfee" name="formfee" value="" class="form-control" readonly>
											</div>
										</div>
										<div class="form-row">

											<div class="form-group col-md-6">
												<label>Disbursement Fee</label>
												<input type="text" id="disbursementfee" name="disbursementfee" value="" class="form-control" readonly>											
											</div>	
											<div class="form-group col-md-6" id="">
												<label>Insurance Fee</label>
												<input type="text" id="insurancefee" name="insurancefee" value="" class="form-control" readonly>		
											</div>																																
										</div>
						

										<!-- <div class="form-group">
											<label>Disbursement Fee</label>
											<input type="text" id="disbursementfee" name="disbursementfee" value="" class="form-control" readonly>
										</div>
										<div class="form-group">
											<label>Insurance Fee</label>
											<input type="text" id="insurancefee" name="insurancefee" value="" class="form-control" readonly>
										</div> -->

										<div class="form-row">
											<div class="form-group col-md-6" id="customer_unique_number_div">
												
											</div>
											<div class="form-group col-md-6">
												<button type="button" id="btn_confirm_payment" name="btn_confirm_payment" class="btn btn-success px-5">Confirm</button>								
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

            $.get(baseUrl + "admin/populatloanrequesttable").done(function(data){
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
				var data = $.parseJSON(data);
                if(data != "" && data != 0){
					btnAction = "";
					for(var i = 0; i < data.length; i++) {
						btnAction += "<button type='button' id='"+data[i].loan_advance_agreement_id+"' name='"+data[i].loan_advance_agreement_id+"' class='btn btn-primary px-3 lni lni-pencil' onclick='retrieveLoanAdvancement(this.id)'>Preview loan</button>";
						recordCount ++;
						tableObjBuilder +="<tr>"
							tableObjBuilder +="<td>"+recordCount+"</td>"
							tableObjBuilder +="<td>"+data[i].loan_advance_agreement_applicant_account_no+"</td>"
							tableObjBuilder +="<td>"+data[i].fullname+"</td>"
							tableObjBuilder +="<td><center>"+btnAction+"</center></td>"
						tableObjBuilder +="</tr>"
						btnAction = "";
					}
					$("#tbl_loan_request").html(tableObjBuilder);
                }else{
                    // alert(data);
                }
            });

			$("#btn_confirm_payment").click(function(){
				formdata = $("form#form_loan_setup_fee").serialize();
				if($("#customer_unique_number").val() == ""){
					alert("You have to preview loan before disbursement");
				}else{
					var response = confirm("Are you sure you want to confirm loan for pre-disbursement");
					if(response == true){
						$.post(baseUrl + "admin/loansetupfee", formdata).done(function(data){
							// alert(data);
							var data = $.parseJSON(data);
                			if(data != "" || data == 0){
								alert("Loan pre-disbursement successfully setup");
								// if(data != 0){
									var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
									for(var i = 0; i < data.length; i++) {
										btnAction += "<button type='button' id='"+data[i].loan_advance_agreement_id+"' name='"+data[i].loan_advance_agreement_id+"' class='btn btn-primary px-3 lni lni-pencil' onclick='retrieveLoanAdvancement(this.id)'>Preview loan</button>";
										recordCount ++;
										tableObjBuilder +="<tr>"
											tableObjBuilder +="<td>"+recordCount+"</td>"
											tableObjBuilder +="<td>"+data[i].loan_advance_agreement_applicant_account_no+"</td>"
											tableObjBuilder +="<td>"+data[i].fullname+"</td>"
											tableObjBuilder +="<td><center>"+btnAction+"</center></td>"
										tableObjBuilder +="</tr>"
										btnAction = "";
									}
									$("#tbl_loan_request").html(tableObjBuilder);
								// }
								//clear form fields
								$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
								$("#loanAdvancementId").val('');   
								$("#customer_unique_number").val('');   
								$("#loan").val('');   
								$("#interest").val('');   
								$("#formfee").val('');   
								$("#disbursementfee").val('');   
								$("#insurancefee").val('');   
								
							}else{
								alert("Unable to setup loan for pre-disbursement, please contact the admin");
							}
						}); 
					}
				}
			});			

        });

		function retrieveLoanAdvancement(getLoanAgreementId){
			var sendLoanAgreementId = getLoanAgreementId;
			sendLoanAgreementId = "sendLoanAgreementId="+sendLoanAgreementId;
			//post operation
			$.post(baseUrl + "admin/retrieveuserbyloanagreementforformsetupfee", sendLoanAgreementId).done(function(data){
				var data = $.parseJSON(data);
				if(data != "" && data != 0){
					

					if(data[0].customer_passport_tag !='F') {
						$("#user_picture").attr('src', baseUrl + 'customerpicture/' + data[0].customer_passport_id + '.jpg' + `?v=${new Date().getTime()}`); 
					}else{
						$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
					}

					$("#loanAdvancementId").val(getLoanAgreementId);   
					$("#customer_unique_number").val(data[0].applicant_account_no);   
					$("#loan").val(data[0].loan_amount);
					$("#interest").val(data[0].loan_interest);
					$("#formfee").val(data[0].loan_form_fee);
					$("#disbursementfee").val(data[0].loan_disbursement_fee);
					$("#insurancefee").val(data[0].loan_insurance_fee);

				}else{
					// on error
					// alert(data);
				}
			}); 			
		}
        // function disburseLoan(){
		// 	formdata = $("form#form_disburse_loan").serialize();
		// 	alert(formdata);
		// 	$.get(baseUrl + "admin/getmarketlocations").done(function(data){
		// 		var options = "";
		// 		if(data != "" ){
		// 			var data = $.parseJSON(data);
		// 			for(var i = 0; i < data.length; i++) {
		// 				options +="<option value='"+data[i].market_description+"'>"+ data[i].market_description+"</option>";
		// 			}
		// 			$("#market_location").append(options); 
		// 		}else{
		// 			// on error
		// 			// alert(data);
		// 		}
		// 	}); 
        // }
    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>