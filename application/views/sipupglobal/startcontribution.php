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
						<div class="breadcrumb-title pr-3">Setup Daily Contribution</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Daily Contribution</li>
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
									<h4 class="mb-0">Contribution request(s)</h4>
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
											<tbody id="tbl_contribution_request" name="tbl_contribution_request">
												
											</tbody>
										</table>
									</div>
								</div>
							</div>

						</div>
							
						<div class="col-12 col-lg-6">
							<div class="card shadow-none border mb-0 radius-15">
								<div class="card-body">

									<form id="form_contribution" name="form_contribution">

										<div class="form-row">
											<div class="form-group col-md-6">				
												<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="user_picture" name="user_picture" class="rounded-circle shadow" width="130" height="130" alt="" />
											</div>											
										</div>		

										<div class="form-row">
											<div class="form-group col-md-6" id="customer_unique_number_div">
												<div id="customer_unique_number_input">
													<label>Customer Unique Number</label>
													<input type="hidden" id="customerContributionId" name="customerContributionId">
													<input type="text" id="customer_unique_number" name="customer_unique_number" 
														value="" class="form-control" placeholder="" readonly>			
												</div>
											</div>
											
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Fullname</label>
												<input type="text" id="fullname" name="fullname" 
													value=""
													class="form-control" placeholder="" readonly>
											</div>												
											<div class="form-group col-md-6" id="">
												<div id="customer_unique_number_input">
													<label>Phone number</label>
													<input type="text" id="phone_number" name="phone_number" 
														value="" class="form-control" placeholder="" readonly>			
												</div>
											</div>
											<!-- <div class="form-group col-md-6">
												<label>BVN</label>
												<input type="text" id="bvn" name="bvn" 
													value=""
													class="form-control" placeholder="" readonly>
											</div>																						 -->
										</div>
										<!-- <div class="form-group">
											<label>Purpose of Loan</label>
											<input type="text" id="purpose_of_loan" name="purpose_of_loan" 
												value=""
												class="form-control" placeholder="" readonly>
										</div>												 -->
										<div class="form-row">
											<div class="form-group col-md-6" id="">
												<div id="customer_unique_number_input">
													<label>Amount of Contribution</label>
													<input type="text" id="amount_of_contribution" name="amount_of_contribution" 
														value="" class="form-control" placeholder="" readonly>			
												</div>
											</div>
											<div class="form-group col-md-6">
												<label>Business Type/Occupation</label>
												<input type="text" id="business_type" name="business_type" value="" class="form-control" readonly>														
											</div>																						
										</div>
										<div class="form-group">
											<label>Home Address</label>
											<input type="text" id="home_address" name="home_address" value="" class="form-control" readonly>
										</div>
										<div class="form-group">
											<label>Business Address</label>
											<input type="text" id="business_address" name="business_address" value="" class="form-control" readonly>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6" id="customer_unique_number_div">
												
											</div>
											<div class="form-group col-md-6">
												<button type="button" id="btn_proceed_contribution" name="btn_proceed_contribution" class="btn btn-success px-5">Proceed</button>								
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

            $.get(baseUrl + "admin/populatcontributionrequesttable").done(function(data){
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
				var data = $.parseJSON(data);
				// console.log(data);
                if(data != "" || data != 0){
					btnAction = "";
					for(var i = 0; i < data.length; i++) {
						btnAction += "<button type='button' id='"+data[i].customer_unique_id+"' name='"+data[i].customer_unique_id+"' class='btn btn-primary px-3 lni lni-pencil' onclick='retrieveInfoForContributionSetup(this.id)'>Preview</button>";
						recordCount ++;
						tableObjBuilder +="<tr>"
							tableObjBuilder +="<td>"+recordCount+"</td>"
							tableObjBuilder +="<td>"+data[i].customer_unique_id+"</td>"
							tableObjBuilder +="<td>"+data[i].fullname+"</td>"
							tableObjBuilder +="<td><center>"+btnAction+"</center></td>"
						tableObjBuilder +="</tr>"
						btnAction = "";
					}
					$("#tbl_contribution_request").html(tableObjBuilder);
                }else{
                    // alert(data);
                }
            });

			$("#btn_proceed_contribution").click(function(){
				formdata = $("form#form_contribution").serialize();
				// alert(formdata);
				if($("#customer_unique_number").val() == "" || $("#amount_of_contribution").val() == ""){
					alert("You have to preview before you can proceed");
				}else{
					var response = confirm("Are you sure you want to initiate the contribution");
					if(response == true){
						$.post(baseUrl + "admin/proceedwithcontribution", formdata).done(function(data){
							var data = $.parseJSON(data);
							// alert(data);
                			if(data != "" && data != 0 && data != -1 && data != -2){
								alert("Contribution successfully initiated");
								// if(data != 0){
								var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
								btnAction = "";
								for(var i = 0; i < data.length; i++) {
									btnAction += "<button type='button' id='"+data[i].customer_unique_id+"' name='"+data[i].customer_unique_id+"' class='btn btn-primary px-3 lni lni-pencil' onclick='retrieveInfoForContributionSetup(this.id)'>Preview</button>";
									recordCount ++;
									tableObjBuilder +="<tr>"
										tableObjBuilder +="<td>"+recordCount+"</td>"
										tableObjBuilder +="<td>"+data[i].customer_unique_id+"</td>"
										tableObjBuilder +="<td>"+data[i].fullname+"</td>"
										tableObjBuilder +="<td><center>"+btnAction+"</center></td>"
									tableObjBuilder +="</tr>"
									btnAction = "";
								}
								$("#tbl_contribution_request").html(tableObjBuilder);								
								// }
								//clear form fields
								$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
								$("#customerContributionId").val('');   
								$("#customer_unique_number").val('');   
								$("#fullname").val('');   
								$("#phone_number").val('');   
								$("#amount_of_contribution").val('');
								$("#business_type").val('');
								$("#home_address").val('');
								$("#business_address").val('');
							}else if(data == -1){
								alert("No Accounting Year is Activated");
								//clear form fields
								$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
								$("#customerContributionId").val('');   
								$("#customer_unique_number").val('');   
								$("#fullname").val('');   
								$("#phone_number").val('');   
								$("#amount_of_contribution").val('');
								$("#business_type").val('');
								$("#home_address").val('');
								$("#business_address").val('');								
							}else if(data == -2){
								alert("Unable to Proceed with Contribution");
								//clear form fields
								$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
								$("#customerContributionId").val('');   
								$("#customer_unique_number").val('');   
								$("#fullname").val('');   
								$("#phone_number").val('');   
								$("#amount_of_contribution").val('');
								$("#business_type").val('');
								$("#home_address").val('');
								$("#business_address").val('');								
							}else{
								alert("Unable to initiate contribution, please contact the admin");
								//clear form fields
								$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
								$("#customerContributionId").val('');   
								$("#customer_unique_number").val('');   
								$("#fullname").val('');   
								$("#phone_number").val('');   
								$("#amount_of_contribution").val('');
								$("#business_type").val('');
								$("#home_address").val('');
								$("#business_address").val('');								
							}
						}); 
					}
				}
			});			
        });

		function retrieveInfoForContributionSetup(getCustomerUniqueId){
			var sendCustomerUniqueId = getCustomerUniqueId;
			sendCustomerUniqueId = "sendCustomerUniqueId="+sendCustomerUniqueId;
			//post operation
			$.post(baseUrl + "admin/retrieveinfoforcontributionsetup", sendCustomerUniqueId).done(function(data){
				var data = $.parseJSON(data);
				// console.log(data);
				if(data != "" && data != 0){
					if(data[0].applicant_passport !='F') {
						$("#user_picture").attr('src', baseUrl + 'customerpicture/' + data[0].customers_id + '.jpg' + `?v=${new Date().getTime()}`); 
					}else{
						$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
					}
					$("#customerContributionId").val(data[0].request_id);   
					$("#customer_unique_number").val(data[0].customer_unique_no);   
					$("#fullname").val(data[0].firstname + ' ' + data[0].surname);
					$("#phone_number").val(data[0].customer_phone_number);
					$("#amount_of_contribution").val(data[0].contribution_amount);
					$("#business_type").val(data[0].business_type);
					$("#home_address").val(data[0].home_address);
					$("#business_address").val(data[0].business_address);
				}else{
					// on error
					alert("Unable to retrieve customer Info., please contact the admin");
				}
			}); 			
		}


		



	

    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>