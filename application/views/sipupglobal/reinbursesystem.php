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
						<div class="breadcrumb-title pr-3">Cashier Reinburse System</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Reinburse System</li>
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
							<div class="card shadow-none border mb-0 radius-15">
								<div class="card-body">

									<form id="form_cashier_payment" name="form_cashier_payment">

										<div class="form-row">
											<div class="form-group col-md-6">				
												<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="cashier_payment_receipt" name="cashier_payment_receipt" class="shadow" width="130" height="130" alt="" />
											</div>											
											<div class="form-group col-md-6">				
											<label>Add payment receipt</label>
												<input type="hidden" id="cashier_payment_receipt_hidden_tag" name="cashier_payment_receipt_hidden_tag" value="F"> 
                                                <input type="file" name="userfile" id="userfile" required="true" onchange="preveiwImage(this)" class="form-control">											
											</div>									

										</div>		

										<div class="form-row">
											<div class="form-group col-md-6" id="">
												<div id="">
													<label>Payment Transaction ID</label>
													<input type="text" id="PTI" name="PTI" 
														value="" class="form-control" placeholder="" onkeyup="getReceipts(this.value)">			
												</div>
											</div>											
											<!-- <div class="form-group col-md-6" id="customer_unique_number_div">
												<div id="customer_unique_number_input">
													<label>Payment Unique Code</label>
													<input type="text" id="PUC" name="PUC" 
														value="" class="form-control" placeholder="" readonly>			
												</div>
											</div>											 -->
										</div>
										<div class="form-row">
											<div class="form-group col-md-12" id="">
												<div id="customer_unique_number_input">
													<label>Payment Narration</label>
													<!-- <input type="text" id="phone_number" name="phone_number" 
														value="" class="form-control" placeholder="information of the payment">			 -->
														<textarea class="form-control" id="payment_narrattion" name="payment_narrattion"></textarea>														
												</div>
											</div>																					
										</div>
						
										<div class="form-row">
											<div class="form-group col-md-6" id="customer_unique_number_div">
												
											</div>
											<div class="form-group col-md-6">
												<button type="button" id="btn_log_payment" name="btn_log_payment" class="btn btn-success px-5">Log payment</button>								
											</div>																						
										</div>										
									</form>
								</div>
							</div>

						</div>

						<div class="col-12 col-lg-6">

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
									<h4 class="mb-0">Cashier's Payment(s)</h4>
									</div>
									<hr/>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Payment narration</th>
													<th scope="col" style="text-align:center">Action</th>
												</tr>
											</thead>
											<tbody id="tbl_cashier_payment" name="tbl_cashier_payment">
												
											</tbody>
										</table>
									</div>
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

		//global base url variable
		// baseUrl = window.location.origin+"/sipupglobalventures/";
		
        $(document).ready(function(){

			//generate payment unique code
			// let PUC = `PUC_${Math.floor(Date.now() / 1000)}`;
			// $("#PUC").val(PUC);

            $.get(baseUrl + "admin/populatloanrequesttableforloandisbursement").done(function(data){
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
				var data = $.parseJSON(data);
                if(data != "" || data != 0){
					btnAction = "";
					for(var i = 0; i < data.length; i++) {
						btnAction += "<button type='button' id='"+data[i].loan_advance_agreement_id+"' name='"+data[i].loan_advance_agreement_id+"' class='btn btn-primary px-3 lni lni-pencil' onclick='retrieveLoanAdvancementForDisbursement(this.id)'>Preview loan</button>";
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

			$("#btn_disburse_loan").click(function(){
				formdata = $("form#form_disburse_loan").serialize();
				if($("#customer_unique_number").val() == ""){
					alert("You have to preview loan before disbursement");
				}else{
					var response = confirm("Are you sure you want to disburse laon");
					if(response == true){
						$.post(baseUrl + "admin/processdisburseloan", formdata).done(function(data){
							var data = $.parseJSON(data);
							// alert(data);
                			if(data != "" || data == 0){
								alert("Loan successfully disbursed");
								// if(data != 0){
									var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
									for(var i = 0; i < data.length; i++) {
										btnAction += "<button type='button' id='"+data[i].loan_advance_agreement_id+"' name='"+data[i].loan_advance_agreement_id+"' class='btn btn-primary px-3 lni lni-pencil' onclick='retrieveLoanAdvancementForDisbursement(this.id)'>Preview loan</button>";
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
								$("#fullname").val('');   
								$("#phone_number").val('');   
								$("#bvn").val('');   
								$("#purpose_of_loan").val('');   
								$("#amount_of_loan").val('');
								$("#business_type").val('');
								$("#home_address").val('');
								$("#business_address").val('');
							}else if(data == -1){
								alert("No Accounting Year is Activated");
							}else{
								alert("Unable to disburse loan, please contact the admin");
							}
						}); 
					}
				}
			});			

			//log payment
			const btn = document.querySelector('.btn');
			btn.addEventListener('click', (e) => {
				let userfile = $("#userfile").val();
				let PTI = $("#PTI").val();
				// let PUC = $("#PUC").val();
				let payment_narrattion = $("#payment_narrattion").val();
				if(userfile == '' || PTI == '' /**|| PUC == ''**/ || payment_narrattion == ''){
					alert("All input are requirred");
				}else{
					var formdata = new FormData($("#form_cashier_payment")[0]);
					$.ajax({
						url: baseUrl + "admin/cashierreinbursesystem",
						type: 'POST',
						data: formdata,
						async: false,
						cache: false,
						contentType: false,
						processData: false,
						success: function (data){ 
							if(data == 0){
								alert("Unable to log payment");
							}else{
								alert("Payment successfully logged");
								$("#userfile").val('');
								$("#PTI").val('');
								$("#payment_narrattion").val('');
								$("#cashier_payment_receipt_hidden_tag").val("F");
								$("#cashier_payment_receipt").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);
							}
						}
					});					
				}
			});
        });


		function getReceipts(getReceiptsID){
			let sentReceiptsID = getReceiptsID;
			$.post(baseUrl + "admin/getreceipts", "sentReceiptsID="+sentReceiptsID).done(function(data){
				// alert(data);
				if(data != 0 && data != ""){
					data = $.parseJSON(data);
					// $("#customer_unique_number_hidden").val($("#customer_unique_number").val());
					// $("#PTI").val();
					$("#PTI").val(data[0].cashier_payment_narration);
					$("#PTI").attr('disabled', true);
					$("#payment_narrattion").val(data[0].cashier_payment_narration);

					//check if receipts image exist 
					var urlToFile = baseUrl + 'cashierreceipts/' + data[0].cashier_payment_transaction_id + '.jpg';
					var xhr = new XMLHttpRequest();
					xhr.open('HEAD', urlToFile, false);
					xhr.send();
					if(xhr.status != 404){
						$("#cashier_payment_receipt").attr('src', baseUrl + 'cashierreceipts/' + data[0].cashier_payment_transaction_id + '.jpg' +`?v=${new Date().getTime()}`); 

						$("#userfile").val(data[0].cashier_payment_transaction_id + '.jpg');
					
					}else{
						$("#cashier_payment_receipt").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  
					}
				}else{
					//do nothing
					$("#PTI").val('');
					$("#PTI").attr('disabled', false);
					$("#payment_narrattion").val('');	
					$("#cashier_payment_receipt").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`);  									
				}
			});	
		}

		function retrieveLoanAdvancementForDisbursement(getLoanAgreementId){
			var sendLoanAgreementId = getLoanAgreementId;
			sendLoanAgreementId = "sendLoanAgreementId="+sendLoanAgreementId;
			//post operation
			$.post(baseUrl + "admin/retrieveuserbyloanagreementforloandisbursement", sendLoanAgreementId).done(function(data){
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



		//to preview image
		function preveiwImage(getImage){
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
							$('#cashier_payment_receipt').attr('src', e.target.result);
							$("#cashier_payment_receipt_hidden_tag").val("T");
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


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>