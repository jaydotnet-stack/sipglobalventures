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
						<div class="breadcrumb-title pr-3">Aprove/Allocations(s)</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Allocate Users to Market</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="row">
						<div class="col-12 col-lg-6">

							<div class="card border-lg-top-primary">
								<div class="card radius-15">
									<div class="card-body">
										<div class="card-title">
											<h4 class="mb-0 text-primary">Aprove/Allocate User(s)</h4>
										</div>
										<hr/>
										<form id="form_allocate_user" name="form_allocate_user">
											<div class="form-body">
												<div class="form-row">
													<div class="form-group col-md-6">				
													<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="user_picture" name="user_picture" class="rounded-circle shadow" width="130" height="130" alt="" />
													</div>											
												</div>											
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Firstname</label>
														<input type="hidden" id="hidden_id" name="hidden_id" class="form-control"/>
														<input type="text" id="firstname" name="firstname" class="form-control" placeholder="firstname" readonly/>
													</div>												
													<div class="form-group col-md-6">
														<label>Lastname</label>
														<input type="text" id="lastname" name="lastname" class="form-control" placeholder="lastname" readonly/>
													</div>																						
												</div>																												
												<div class="form-row">
													<div class="form-group col-lg-12 col-md-6">
														<label>Market Location</label>
														<select id="market_location" name="market_location"class="form-control">
															<option value='---'>---</option>
														</select>
														<label id="market_location_error" name="market_location_error" style="color:red;display:none">market location must be selected/retrieve user from the user's table</label>	 		
													</div>																							
												</div>																												
												<button type="button" id="btn_allocate_user" name="btn_allocate_user" class="btn btn-primary px-3" onclick="mapUserToMarket()">Allocate</button>
												<button type="button" id="btn_reset_form" name="btn_reset_form" class="btn btn-warning px-3" onclick="resetForm()">Reset</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">

							<div class="card border-lg-top-danger">
									<div class="card radius-15">
										<div class="card-body">
											<div class="card-title">
												<h4 class="mb-0 text-danger">Registered User(s)</h4>
											</div>
											<hr/>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Fullname</th>
                                                            <th scope="col" style="text-align:center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbl_user_account" name="tbl_user_account">

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
										<h4 class="mb-0 text-danger">Approve Registered User(s)</h4>
									</div>
									<hr/>
                                    <div class="card radius-15">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4 class="mb-0">Registered User(s)</h4>
                                            </div>
                                            <hr/>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Fullname</th>
                                                            <th scope="col" style="text-align:center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbl_approve_account" name="tbl_approve_account">

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
		// echo $custom_js; 
	?> 
    <script>
		//global base url variable
		baseUrl = window.location.origin+"/sipupglobalventures/";
        $(document).ready(function(){
            $("#firstname").val('');
            $("#lastname").val('');
			//triger this function
			getMarketLocations();

            $.get(baseUrl + "admin/populateuserstable").done(function(data){
                var tableObjBuilder = ""; var recordCount = 0; var btnAction = "";
                if(data != "" ){
					var data = $.parseJSON(data);
					for(var i = 0; i < data.length; i++) {
						btnAction += "<button type='button' id='"+data[i].users_account_id+"' name='"+data[i].users_account_id+"' class='btn btn-success px-3 lni lni-pencil' onclick='retrieveUser(this.id)'>Retrieve</button>";
						recordCount ++;
						var fullname = data[i].users_account_firstname +" " + data[i].users_account_lastname;
						tableObjBuilder +="<tr>"
							tableObjBuilder +="<td>"+recordCount+"</td>"
							tableObjBuilder +="<td>"+fullname+"</td>"
							tableObjBuilder +="<td>"+btnAction+"</td>"
						tableObjBuilder +="</tr>"
						btnAction = "";
					}
					$("#tbl_user_account").html(tableObjBuilder);
                }else{
                    // alert(data);
                }
            });

        });


        function getMarketLocations(){
			$.get(baseUrl + "admin/getmarketlocations").done(function(data){
				var options = "";
				if(data != "" ){
					var data = $.parseJSON(data);
					for(var i = 0; i < data.length; i++) {
						options +="<option value='"+data[i].market_description+"'>"+ data[i].market_description+"</option>";
					}
					$("#market_location").append(options); 
				}else{
					// on error
					// alert(data);
				}
			}); 
        }

        function retrieveUser(getUserId){
            var getUserId = getUserId;
            var passdata = "sentUserId="+ getUserId;            
			//post operation
			$.post(baseUrl + "admin/retrieveuser", passdata).done(function(data){
				if(data != "" ){
					var data = $.parseJSON(data);
					$("#hidden_id").val(data[0].users_account_id);  
					if(data[0].users_account_passport_tag !='F') {
						$("#user_picture").attr('src', baseUrl + 'userspicture/' + data[0].users_account_id + '.jpg' + `?v=${new Date().getTime()}`); 
					}else{
						$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
					}
					$("#firstname").val(data[0].users_account_firstname);   
					$("#lastname").val(data[0].users_account_lastname);
					if(data[0].users_account_market_location != ""){
						$("#market_location").val(data[0].users_account_market_location).change();
						// $("#market_location").attr('disabled', 'disabled');
						document.getElementById("market_location").disabled = false;
					}else{
						$("#market_location").val('---').change();
						document.getElementById("market_location").disabled = false;
					}

				}else{
					// on error
					// alert(data);
				}
			}); 
        }


		function mapUserToMarket(){
			var market_location = $("#market_location").val();
			var hidden_id = $("#hidden_id").val();
			if(market_location != "---" && hidden_id != ""){
				var response = confirm("Are you sure you want to approve user account?");
				if(response == true){
					//get form inputs
					passdata = "hiddenId="+hidden_id+"&sentMarketLocation="+market_location;
					//post operation
					$.post(baseUrl + "admin/mapusertomarket", passdata).done(function(data){
						if(data == 1){
							alert('User mapped to market successfully');
							$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
							$("#firstname").val('');
							$("#lastname").val('');
							$("#market_location").val('---').change();
							document.getElementById("market_location").disabled = false;
							$("#hidden_id").val(''); 
						}else{
							// on error
							// alert(data);
						}
					}); 
				}
			}else{
				$("#market_location_error").show();
				$("#market_location_error").fadeOut(5000); 
			}  			
		}

		function resetForm(){
			$("#user_picture").attr('src', baseUrl + 'assets/images/avatars/avatar-1.png' + `?v=${new Date().getTime()}`); 
			$("#firstname").val('');   
			$("#lastname").val('');
			$("#hidden_id").val(''); 
			document.getElementById("market_location").disabled = false;			
		}
		
    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>