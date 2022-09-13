<?php
	// print_r($_SESSION['loan_details']);
	// print_r($_SESSION['userinformation']);
	// die();
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
						<div class="breadcrumb-title pr-3">Daily Contribution By Inspector</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Daily Contribution</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->

					<div class="row">

						<div class="col-12 col-lg-8">
							<div class="card radius-15 border-lg-top-primary">
								<div class="card-body">
									<div class="card-title">
									<h4 class="mb-0"><?php echo 'Year '.$_SESSION['activetransactionyear'].' '; ?>Contributors</h4>
									</div>
									<hr/>
									<!-- <div class="form-body">
										<div class="form-row">
											<div class="form-group col-md-2">
												<label style="font-weight:bold;">Select Week</label>	                                                
											</div>
											<div class="form-group col-md-3">
												<select id="week" name="week"class="form-control" onchange="selectWeek();">
													<option value=''>---</option>
													<option value='week 1'>Week 1</option>
													<option value='week 2'>Week 2</option>
													<option value='week 3'>Week 3</option>
													<option value='week 4'>Week 4</option>
												</select>
											</div>
										</div>
									</div> -->
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th style="width:5px;">SN</th>
													<th style="width:30px;">Account No.</th>
													<th style="width:40px;">Fullname</th>
													<th style="width:25px;text-align:center;">Action</th>
												</tr>
											</thead>
											<tbody id="tbl_contributors" name="tbl_contributors">
												<!-- <tr>
													<td scope="col" colspan="" style="">SN</td>
													<td scope="col" colspan="" style="">Account No.</td>
													<td scope="col" colspan="" style="">Fullname</td>
													<td scope="col" colspan="" style="">Action</td>
												</tr> -->
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-4">
							<div class="card radius-15 border-lg-top-danger">
								<div class="card-body">
									<div class="card-title">
									<h4 class="mb-0">Daily Cash Card</h4>
									</div>
									<hr/>

									<div class="table-responsive">
										<table class="table table-bordered">
											<thead id='tableHeadTop'>

											</thead>
											<thead>
												<tr>
													<th scope="col" colspan="" style="">#</th>
													<th scope="col" colspan="" style="text-align:center;">Repayment</th>
												</tr>
											</thead>
											<tbody id="tbl_contribution" name="tbl_contribution">
												<!-- <tr>
													<td scope="col" style=''></td>
													<td scope="col" style=''></td>
													<td scope="col" style=''></td>
												</tr> -->
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



        $(document).ready(function(){
			getContributors();
        });

		function getContributors(){
			$.get(baseUrl + "admin/getcontributors").done(function(data){
				// alert(data);
				if(data != 0 && data != -1 && data != ''){
					$("#tbl_contributors").html(data);
				}else{
					// No contributors with active contribution history
				}
			});
		}

		function previewContributorByContributorYearId(getContributorUniqueIds){
			var sendContributorUniqueIds = "sendContributorUniqueIds=" + getContributorUniqueIds;
			$.post(baseUrl + "admin/dailycontributioncard", sendContributorUniqueIds).done(function(data){
				// alert(data);
				data = $.parseJSON(data);
				// alert(data);
				if(data != "" || data != -1 || data != 0){
					var tableHeadTop = '';
					tableHeadTop += "<tr>";
						tableHeadTop += "<th scope='col' colspan='2' style=''>Contribution No: <span id='contributor_contribution_no'>" + data['row'][0].customer_contribution_id + "</span></th>";
					tableHeadTop += "</tr>";
					tableHeadTop += "<tr>";
						tableHeadTop += "<th scope='col' colspan='2' style=''>Account No: <span id='contributor_account_no'>" + data['row'][0].account_number + "</span></th>";
					tableHeadTop += "</tr>";
					var tableRow = ""; dayIndex = 0; DBdayId = 0; totalContribution = 0;


					// var totalContribution = "";
					// totalContribution =  data['column'];
					// console.log(totalContribution);

					contributionArray = [];
					if(data['column'].length > 0){
						//alert('there is savings');
						for(var j = 0; j < data['column'].length; j++){
							contributionArray.push(data['column'][j]);
						}
						// alert(contributionArray);
						if(contributionArray.length > 0){//building contribution checkbox table data object for the current contributor
							// this get the monetary value of number of savings the customer has made 
							// rowSumArray.push(loanContribution * repaymentArray.length);
							totalContribution = data['row'][0].contribution_amount * contributionArray.length;
							for(var day = 0; day < 31; day++){
								try {//contribution was made in the selected day

									// chkbxId =  data['row'][0].customer_contribution_id + "_" + dayIndex;
									DBdayId = contributionArray[day].dayid;
									if(DBdayId == 0){
										//don't increment day index
									}else{
										dayIndex++;
									}
									// console.log(DBdayId);

									// contributionDetails = data['row'][0].customer_contribution_id + "&" + data['row'][0].account_number + "&" + data['row'][0].contribution_amount + "&" + dayIndex;	

									tableRow += "<tr>";
										tableRow += "<td scope='cols' style='width:5px;'>" + dayIndex +"</td>";
										tableRow += "<td scope='cols' style='text-align:center;color:green;'>[ " + data['row'][0].contribution_amount + " ]</td>";
									tableRow += "</tr>";	

								} catch (error) {//no contribution was made in the selected day
									dayIndex++;
									chkbxId =  data['row'][0].customer_contribution_id + "_" + dayIndex;
									contributionDetails = data['row'][0].customer_contribution_id + "&" + data['row'][0].account_number + "&" + data['row'][0].contribution_amount + "&" + dayIndex;	

									tableRow += "<tr>";
										tableRow += "<td scope='cols' style='width:5px;'>" + dayIndex +"</td>";
										tableRow += "<td scope='cols' style='text-align:center;color:red;'>[ " + data['row'][0].contribution_amount + " ] <input type='checkbox' name='' id='contribution_" + chkbxId + "' value='" + contributionDetails + "' onclick='dailyContribution(this)'></td>";
									tableRow += "</tr>";				
								}	
							}
						}else{// no contribution was made yet by the contributor
							// alert('dfd');
							// this get the monetary value of number of savings the customer has made 
							// rowSumArray.push(loanContribution * 0);
							for(var day = 0; day < 31; day++){
								dayIndex++;
								chkbxId =  data['row'][0].customer_contribution_id + "_" + dayIndex;
								

								contributionDetails = data['row'][0].customer_contribution_id + "&" + data['row'][0].account_number + "&" + data['row'][0].contribution_amount + "&" + dayIndex;	

								tableRow += "<tr>";
									tableRow += "<td scope='cols' style='width:5px;'>" + dayIndex +"</td>";
									tableRow += "<td scope='cols' style='text-align:center;color:red;'>[ " + data['row'][0].contribution_amount + " ] <input type='checkbox' name='' id='contribution_" + chkbxId + "' value='" + contributionDetails + "' onclick='dailyContribution(this)'></td>";
								tableRow += "</tr>";
							}
						}
					}else{//no contribution made yet
						// alert('no record');
						// this get the monetary value of number of savings the customer has made 
						// rowSumArray.push(loanContribution * 0);
						for(var day = 0; day < 31; day++){
							dayIndex++;
							chkbxId =  data['row'][0].customer_contribution_id + "_" + dayIndex;
							

							contributionDetails = data['row'][0].customer_contribution_id + "&" + data['row'][0].account_number + "&" + data['row'][0].contribution_amount + "&" + dayIndex;	

							tableRow += "<tr>";
								tableRow += "<td scope='cols' style='width:5px;'>" + dayIndex +"</td>";
								tableRow += "<td scope='cols' style='text-align:center;color:red;'>[ " + data['row'][0].contribution_amount + " ] <input type='checkbox' name='' id='contribution_" + chkbxId + "' value='" + contributionDetails + "' onclick='dailyContribution(this)'></td>";
							tableRow += "</tr>";
						}
					}

					tableRow += "<tr>";
						tableRow += "<td scope='cols' colspan='2' style='font-weight:bold;text-align:center;'>Total Contribution: <span id='total_contribution'>" + totalContribution + " </span></td>";
					tableRow += "</tr>";
					$("#tableHeadTop").html(tableHeadTop);
					$("#tbl_contribution").html(tableRow);
				}else if (data == 0){
					alert("No contribution proceed yet, kindly process and start contribtion first");
				}else if (data == -1){
					alert("No transaction year activated yet");
				}else{
					// alert(debtorsrepayment);
					alert("Something occured when trying to make repayment");
				}
			});
		}

		function dailyContribution(getThis){
			var sendId = getThis.id;
			// alert(sendId+'dfd');
			var contributionDetails = getThis.value;
			contributionDetails = contributionDetails.split("&");
			// alert(loanDetails);
			var checked = document.getElementById(sendId).checked;
			var toDisableChkbx = ""; var contributionId = "";
			if(checked == true){
				var response = confirm("Are you sure you want to make contributions?");
				if(response == true){
					postdata = "customercontributionid=" + contributionDetails[0] + "&accountnumber=" + contributionDetails[1] + "&contribuionamount=" + contributionDetails[2] + "&day=" + contributionDetails[3];
					$.post(baseUrl + "admin/processcontributionrepaymment", postdata).done(function(data){
						// alert(data);
						// data = $.parseJSON(data);
						if(data != -1 && data != 3 && data != 4){
							customercontributionid = contributionDetails[0];
							day = contributionDetails[3];
							toDisableChkbx = "#contribution_" + customercontributionid + "_" + day;
							$(toDisableChkbx).prop("disabled", true);
							alert("Contribution successfully made");
							$("#total_contribution").text(data);
						}else if(data == 3){
							// on error
							alert("You can't skip the previous day(s)/week(s) contribution");
							sendId = "#"+sendId;
							$(sendId).prop("checked", false);	
						}else if(data == 4){
							// on error
							alert("Contribution can not exceed 31 days");
							sendId = "#"+sendId;
							$(sendId).prop("checked", false);	
						}else{
							// on error
							alert("Error processing contribution");
							sendId = "#"+sendId;
							$(sendId).prop("checked", false);	
						}
					}); 				
				}else{
					sendId = "#"+sendId;
					$(sendId).prop("checked", false);					
				}
			}else{
				sendId = "#"+sendId;
				$(sendId).prop("checked", false);
			}
		}		

    </script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:11:36 GMT -->
</html>