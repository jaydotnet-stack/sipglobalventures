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
									<li class="breadcrumb-item active" aria-current="page">Market Location</li>
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
									<!-- <div class="card-body p-5"> -->
									<div class="card-body">
										<div class="card-title">
											<div><i class=' mr-1 font-24 text-primary'></i>
											</div>
											<h4 class="mb-0 text-primary">Setup Market Location</h4>
										</div>
										<hr/>
										<div class="form-body">
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Market Code</label>
													<input type="text" id="market_code" name="market_code" class="form-control" placeholder="market code"/>
													<label id="market_code_error" name="market_code_error" style="color:red;display:none">market code field is required</label>	                                                
												</div>
											</div>										
											<div class="form-row">
												<div class="form-group" style="width:100%">
													<label>Market description.</label>
													<input type="text" id="market_description" name="market_description" class="form-control" placeholder="market description"/>
													<label id="market_description_error" name="market_description_error" style="color:red;display:none">market description field is required</label>	                                                
												</div>
											</div>										
										
											<button type="button" id="reset_form" name="reset_form" class="btn btn-warning px-5">Reset</button>

											<button type="button" id="btn_add_market" name="btn_add_market" class="btn btn-primary px-5">Add/Update</button>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="col-12 col-lg-6">

							<div class="card border-lg-top-danger">
								<div class="card radius-15">
									<div class="card-body">
										<div class="card-title">
											<h4 class="mb-0 text-danger">Market(s)</h4>
										</div>
										<hr/>
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th scope="col">#</th>
														<th scope="col">Market(s)</th>
														<th scope="col" style="text-align:center">Action</th>
													</tr>
												</thead>
												<tbody id="tbl_market_location" name="tbl_market_location">
													
												</tbody>
											</table>
										</div>
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
        $(document).ready(function(){
            $("#market_code").focus();
			//trigger the function
			// getInitialYearDefinition();
            $.get(baseUrl + "admin/fetchmarketlocation").done(function(data){
                var data = $.parseJSON(data);
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
                if(data != "" ){
					for(var i = 0; i < data.length; i++) {
						btnAction += "<button type='button' id='"+data[i].market_location_id +"' name='"+data[i].market_location_id +"' class='btn btn-success px-2 lni lni-pencil' onclick='editMarketLocation(this.id)' style=''>Edit</button>";
						recordCount ++;
						tableObjBuilder +="<tr>"
							tableObjBuilder +="<td>"+recordCount+"</td>"
							tableObjBuilder +="<td>"+data[i].market_code+"</td>"
							tableObjBuilder +="<td>"+btnAction+"</td>"
						tableObjBuilder +="</tr>"
						btnAction = "";
					}
					$("#tbl_market_location").html(tableObjBuilder);
                }else if(data == 0) {
                    // do nothing
                }else{
                    alert(data);
                }
            });
        });
        function editMarketLocation(getMarketLocationId){
            var getMarketLocationId = getMarketLocationId;
            var passdata = "sentMarketLocationId="+ getMarketLocationId;
            var response = confirm("Are you sure you want to edit market location?");
            if(response == true){            
                //post operation
                $.post(baseUrl + "admin/editmarketlocation", passdata).done(function(data){
					var data = $.parseJSON(data);
                    if(data != "" ){
						$("#market_code").val(data[0].market_code);
						$("#market_code").attr('disabled', true);
						$("#market_description").val(data[0].market_description);
                    }else{
                        // on error
                        alert(data);
                    }
                }); 
            }
        }

		$("#reset_form").click(function(){
			$("#market_code").val('');
			$("#market_description").val('');
			$("#market_code").attr('disabled', false);
		});
		// //check whether year has been defined and disable the field
		// function getInitialYearDefinition(){
		// 	//get operation
		// 	$.get(baseUrl + "admin/getinitialyeardefinition").done(function(data){
		// 		var data = $.parseJSON(data);
		// 		var nextYear = parseInt(data[0].accounting_year) + 1;
		// 		if(data != ""){
		// 			$("#accounting_year").val(nextYear);
		// 			$("#accounting_year").attr('disabled',true);
		// 		}else{
		// 			// do nothing
		// 		}
		// 	});     
		// }		
    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>