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
									<li class="breadcrumb-item active" aria-current="page">Accounting Year</li>
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

							<div class="card border-lg-top-danger">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class=' mr-1 font-24 text-primary'></i>
										</div>
										<h4 class="mb-0 text-primary">Setup Year</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label style="color:red">Suggested Year: (<?php echo date('Y'); ?>)</label>
												<input type="text" id="accounting_year" name="accounting_year" class="form-control" />
												<label id="accounting_year_error" name="accounting_year_error" style="color:red;display:none">accounting year field is required</label>	                                                
											</div>
										</div>
										<button type="button" id="btn_add_year" name="btn_add_year" class="btn btn-primary px-5">Add Year</button>
									</div>
								</div>
							</div>

						</div>
							
						<div class="col-12 col-lg-6">

							<div class="card border-lg-top-danger">
								<div class="card radius-15">
									<div class="card-body">
										<div class="card-title">
											<h4 class="mb-0">Year(s)</h4>
										</div>
										<hr/>

										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Year(s)</th>
														<th scope="col" style="text-align:center">Actions</th>
													</tr>
												</thead>
												<tbody id="tbl_accounting_year" name="tbl_accounting_year">

												</tbody>
											</table>
										</div>

									</div>
								</div>
							</div>

						</div>

					</div>



					<div class="row">

						<!-- <div class="col-12 col-lg-6">
							<div class="card radius-15 border-lg-top-primary">

								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class=' mr-1 font-24 text-primary'></i>
										</div>
										<h4 class="mb-0 text-primary">Setup Year</h4>
									</div>
									<hr/>
									<div class="form-body">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label style="color:red">Suggested Year: (<?php echo date('Y'); ?>)</label>
												<input type="text" id="accounting_year" name="accounting_year" class="form-control" />
												<label id="accounting_year_error" name="accounting_year_error" style="color:red;display:none">accounting year field is required</label>	                                                
											</div>
										</div>
										<button type="button" id="btn_add_year" name="btn_add_year" class="btn btn-primary px-5">Add Year</button>
									</div>
								</div>

							</div>
						</div> -->

						<!-- <div class="col-12 col-lg-6">
							<div class="card border-lg-top-danger">
								<div class="card-body p-5">
									<div class="card-title d-flex align-items-center">
										<div><i class='mr-1 font-24 text-danger'></i>
										</div>
										<h4 class="mb-0 text-danger">Setup Year(s)</h4>
									</div>
									<hr/>
                                    <div class="card radius-15">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4 class="mb-0">Year(s)</h4>
                                            </div>
                                            <hr/>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Year(s)</th>
                                                            <th scope="col" style="text-align:center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbl_accounting_year" name="tbl_accounting_year">

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
								</div>
							</div>
						</div> -->
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
            $("#accounting_year").focus();
			//trigger the function
			getInitialYearDefinition();
            $.get(baseUrl + "admin/fetchaccountingyear").done(function(data){
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
                if(data != "" && data!=0){
					var data = $.parseJSON(data);
                    for(var i = 0; i < data.length; i++) {
						if(data[i].accounting_year_status =='Activated'){
							btnAction += "<button type='button' id='"+data[i].accounting_year_id+"' name='"+data[i].accounting_year_id+"' class='btn btn-success px-2' onclick='activateAccountingYear(this.id)'>Active</button>&nbsp;&nbsp;";
						}else{
							btnAction += "<button type='button' id='"+data[i].accounting_year_id+"' name='"+data[i].accounting_year_id+"' class='btn btn-warning px-2' onclick='activateAccountingYear(this.id)'>Activate</button>&nbsp;&nbsp;";
						}
                        recordCount ++;
                        tableObjBuilder +="<tr>"
                            tableObjBuilder +="<td>"+recordCount+"</td>"
                            tableObjBuilder +="<td>"+data[i].accounting_year+"</td>"
                            tableObjBuilder +="<td>"+btnAction+"</td>"
                        tableObjBuilder +="</tr>"
                        btnAction = "";
                    }
                    $("#tbl_accounting_year").html(tableObjBuilder);
                }else if(data == 0) {
                    // do nothing
                }else{
                    alert(data);
                }
            });
        });
        function activateAccountingYear(getAccountingYear){
            var getAccountingYear = getAccountingYear;
            var passdata = "sentAccountingYear="+ getAccountingYear;
            var response = confirm("Are you sure you want to activate accounting year?");
            if(response == true){            
                //post operation
                $.post(baseUrl + "admin/activateaccountingyear", passdata).done(function(data){
					var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";                                
					if(data != "" && data !=0){
						var data = $.parseJSON(data);
						alert('Accounting year successfully activated');
						// $("#accounting_year").val('');
						for(var i = 0; i < data.length; i++) {
							if(data[i].accounting_year_status =='Activated'){
								btnAction += "<button type='button' id='"+data[i].accounting_year_id+"' name='"+data[i].accounting_year_id+"' class='btn btn-success px-2' onclick='activateAccountingYear(this.id)'>Active</button>&nbsp;&nbsp;";
							}else{
								btnAction += "<button type='button' id='"+data[i].accounting_year_id+"' name='"+data[i].accounting_year_id+"' class='btn btn-warning px-2' onclick='activateAccountingYear(this.id)'>Activate</button>&nbsp;&nbsp;";
							}
							recordCount ++;
							tableObjBuilder +="<tr>"
								tableObjBuilder +="<td>"+recordCount+"</td>"
								tableObjBuilder +="<td>"+data[i].accounting_year+"</td>"
								tableObjBuilder +="<td>"+btnAction+"</td>"
							tableObjBuilder +="</tr>"
							btnAction = "";
						}
						$("#tbl_accounting_year").html(tableObjBuilder);
						// getInitialYearDefinition();
					}else{
						// on error
						// alert(data);
					}
                }); 
            }
        }

		//check whether year has been defined and disable the field
		function getInitialYearDefinition(){
			//get operation
			$.get(baseUrl + "admin/getinitialyeardefinition").done(function(data){
				if(data != "" && data !=0){
					var data = $.parseJSON(data);
					var nextYear = parseInt(data[0].accounting_year) + 1;					
					$("#accounting_year").val(nextYear);
					$("#accounting_year").attr('disabled',true);
				}else{
					// do nothing
				}
			});     
		}	
			
    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>