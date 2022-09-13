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
						<div class="breadcrumb-title pr-3">Setup(s)</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Loan Categories</li>
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

							<div class="card border-lg-top-primary">

								<div class="card radius-15">
									<div class="card-body">
										<div class="card-title">
											<h4 class="mb-0 text-primary">Setup Loan Categories</h4>
										</div>
										<hr/>

										<form id="form_loan_categories" name="form_loan_categories">
											<div class="form-body">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Loan level</label>
														<select id="loan_level" name="loan_level"class="form-control">
															<?php 
																if($_SESSION['userinformation']->loan_category_level == "first loan"){?>
																	<option value="first loan" selected>First loan</option>
																	<option value="second loan">Second loan</option>
																	<option value="third loan">Third loan</option>
																<?php }else if($_SESSION['userinformation']->loan_category_level == "second loan"){ ?>
																	<option value="first loan">First loan</option>
																	<option value="second loan" selected>Second loan</option>
																	<option value="third loan">Third loan</option>
																<?php }else{ ?>
																	<option value="first loan" selected>First loan</option>
																	<option value="second loan">Second loan</option>
																	<option value="third loan" selected>Third loan</option>
																<?php }
															?>
														</select>
													</div>											
													<div class="form-group col-md-6">
														<label>Loan amount</label>
														<input type="text" id="loan_amount" name="loan_amount" class="form-control" placeholder="loan amount"/>
														<label id="loan_amount_error" name="loan_amount_error" style="color:red;display:none">loan amount field is required/input must be a number</label>	                                                
													</div>
												</div>										
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Loan interest</label>
														<input type="text" id="loan_interest" name="loan_interest" class="form-control" placeholder="loan interest"/>
														<label id="loan_interest_error" name="loan_interest_error" style="color:red;display:none">loan interest field is required/input must be a number</label>	 								
													</div>											
													<div class="form-group col-md-6">
														<label>Loan repayment</label>
														<input type="text" id="loan_repayment" name="loan_repayment" class="form-control" placeholder="loan repayment"/>
														<label id="loan_repayment_error" name="loan_repayment_error" style="color:red;display:none">loan repayment field is required/input must be a number</label>	 				
													</div>											
												</div>																			
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Loan savings</label>
														<input type="text" id="loan_savings" name="loan_savings" class="form-control" placeholder="loan savings"/>
														<label id="loan_savings_error" name="loan_savings_error" style="color:red;display:none">loan savings field is required/input must be a number</label>	 									
													</div>											
													<div class="form-group col-md-6">
														<label>form fees</label>
														<input type="text" id="form_fees" name="form_fees" class="form-control" placeholder="form fees "/>
														<label id="form_fees_error" name="form_fees_error" style="color:red;display:none">form fees field is required/input must be a number</label>	 									
													</div>											
												</div>																			
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Disbursement fees</label>
														<input type="text" id="disbursement_fee" name="disbursement_fee" class="form-control" placeholder="disbursement fees"/>
														<label id="disbursement_fee_error" name="disbursement_fee_error" style="color:red;display:none">disbursement fee field is required/input must be a number</label>	 			
													</div>											
													<div class="form-group col-md-6">
														<label>Insurance fees</label>
														<input type="text" id="insurance_fee" name="insurance_fee" class="form-control" placeholder="loan repayment"/>
														<label id="insurance_fee_error" name="insurance_fee_error" style="color:red;display:none">insurance fee field is required/input must be a number</label>	 			
													</div>											
												</div>																			
												<button type="button" id="btn_add_loan_category" name="btn_add_loan_category" class="btn btn-primary px-5">Add/Update</button>
											</div>
										</form>
									</div>
								</div>

							</div>



							<!-- <div class="card radius-15 border-lg-top-primary">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class=' mr-1 font-24 text-primary'></i>
										</div>
										<h4 class="mb-0 text-primary">Setup Loan Categories</h4>
									</div>
									<hr/>

									<form id="form_loan_categories" name="form_loan_categories">
										<div class="form-body">
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Loan level</label>
													<select id="loan_level" name="loan_level"class="form-control">
														<?php 
															if($_SESSION['userinformation']->loan_category_level == "first loan"){?>
																<option value="first loan" selected>First loan</option>
																<option value="second loan">Second loan</option>
																<option value="third loan">Third loan</option>
															<?php }else if($_SESSION['userinformation']->loan_category_level == "second loan"){ ?>
																<option value="first loan">First loan</option>
																<option value="second loan" selected>Second loan</option>
																<option value="third loan">Third loan</option>
															<?php }else{ ?>
																<option value="first loan" selected>First loan</option>
																<option value="second loan">Second loan</option>
																<option value="third loan" selected>Third loan</option>
															<?php }
														?>
													</select>
												</div>											
												<div class="form-group col-md-6">
													<label>Loan amount</label>
													<input type="text" id="loan_amount" name="loan_amount" class="form-control" placeholder="loan amount"/>
													<label id="loan_amount_error" name="loan_amount_error" style="color:red;display:none">loan amount field is required/input must be a number</label>	                                                
												</div>
											</div>										
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Loan interest</label>
													<input type="text" id="loan_interest" name="loan_interest" class="form-control" placeholder="loan interest"/>
													<label id="loan_interest_error" name="loan_interest_error" style="color:red;display:none">loan interest field is required/input must be a number</label>	 								
												</div>											
												<div class="form-group col-md-6">
													<label>Loan repayment</label>
													<input type="text" id="loan_repayment" name="loan_repayment" class="form-control" placeholder="loan repayment"/>
													<label id="loan_repayment_error" name="loan_repayment_error" style="color:red;display:none">loan repayment field is required/input must be a number</label>	 				
												</div>											
											</div>																			
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Loan savings</label>
													<input type="text" id="loan_savings" name="loan_savings" class="form-control" placeholder="loan savings"/>
													<label id="loan_savings_error" name="loan_savings_error" style="color:red;display:none">loan savings field is required/input must be a number</label>	 									
												</div>											
												<div class="form-group col-md-6">
													<label>form fees</label>
													<input type="text" id="form_fees" name="form_fees" class="form-control" placeholder="form fees "/>
													<label id="form_fees_error" name="form_fees_error" style="color:red;display:none">form fees field is required/input must be a number</label>	 									
												</div>											
											</div>																			
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Disbursement fees</label>
													<input type="text" id="disbursement_fee" name="disbursement_fee" class="form-control" placeholder="disbursement fees"/>
													<label id="disbursement_fee_error" name="disbursement_fee_error" style="color:red;display:none">disbursement fee field is required/input must be a number</label>	 			
												</div>											
												<div class="form-group col-md-6">
													<label>Insurance fees</label>
													<input type="text" id="insurance_fee" name="insurance_fee" class="form-control" placeholder="loan repayment"/>
													<label id="insurance_fee_error" name="insurance_fee_error" style="color:red;display:none">insurance fee field is required/input must be a number</label>	 			
												</div>											
											</div>																			
											<button type="button" id="btn_add_loan_category" name="btn_add_loan_category" class="btn btn-primary px-5">Add/Update</button>
										</div>
									</form>
								</div>
							</div> -->


						</div>

						<div class="col-12 col-lg-6">

							<div class="card border-lg-top-danger">
								<div class="card radius-15">
									<div class="card-body">
										<div class="card-title">
											<h4 class="mb-0 text-danger">Loan Categories(s)</h4>
										</div>
										<hr/>
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Categories(s)</th>
														<th scope="col" style="text-align:center">Action</th>
													</tr>
												</thead>
												<tbody id="tbl_loan_categories" name="tbl_loan_categories">
							
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>



							<!-- <div class="card border-lg-top-danger">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class='mr-1 font-24 text-danger'></i>
										</div>
										<h4 class="mb-0 text-danger">Setup Loan Categories(s)</h4>
									</div>
									<hr/>
                                    <div class="card radius-15">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4 class="mb-0">Loan Categories(s)</h4>
                                            </div>
                                            <hr/>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Categories(s)</th>
                                                            <th scope="col" style="text-align:center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbl_loan_categories" name="tbl_loan_categories">
                                
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
								</div>
							</div> -->


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
            $("#loan_level").focus();
            $.get(baseUrl + "admin/fetchloancategory").done(function(data){
                var data = $.parseJSON(data);
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
                if(data != "" ){
					for(var i = 0; i < data.length; i++) {
						btnAction += "<button type='button' id='"+data[i].loan_category_id+"' name='"+data[i].loan_category_id  +"' class='btn btn-success px-2 lni lni-pencil'  onclick='editLoanCategory(this.id)'>Edit</button>";
						recordCount ++;
						tableObjBuilder +="<tr>"
							tableObjBuilder +="<td>"+recordCount+"</td>"
							tableObjBuilder +="<td>"+data[i].loan_category_amount+"</td>"
							tableObjBuilder +="<td>"+btnAction+"</td>"
						tableObjBuilder +="</tr>"
						btnAction = "";
					}
					$("#tbl_loan_categories").html(tableObjBuilder);
                }else if(data == 0) {
                    // do nothing
                }else{
                    alert(data);
                }
            });
        });
        function editLoanCategory(getLoanCategoryId){
            var getLoanCategoryId = getLoanCategoryId;
            var passdata = "sentLoanCategoryId="+ getLoanCategoryId;
            var response = confirm("Are you sure you want to edit market location?");
            if(response == true){            
                //post operation
                $.post(baseUrl + "admin/editloancategory", passdata).done(function(data){
					var data = $.parseJSON(data);
                    if(data != "" ){
						$("#loan_level").val(data[0].loan_category_level).change();   
						$("#loan_amount").val(data[0].loan_category_amount);
						$("#loan_interest").val(data[0].loan_category_interest);
						$("#loan_repayment").val(data[0].loan_category_repayment);
						$("#loan_savings").val(data[0].loan_category_savings);
						$("#form_fees").val(data[0].loan_category_form_fees);
						$("#disbursement_fee").val(data[0].loan_category_disbursement_fees);
						$("#insurance_fee").val(data[0].loan_category_insurance_fees);
                    }else{
                        // on error
                        alert(data);
                    }
                }); 
            }
        }


		
    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>