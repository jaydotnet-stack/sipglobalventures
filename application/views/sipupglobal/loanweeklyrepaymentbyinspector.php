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
						<div class="breadcrumb-title pr-3">Weekly Loan Repayment By Inspector</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Loan Repayment</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->

					<div class="row">
						<div class="col-12 col-lg-12">

							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title">
									<h4 class="mb-0"><?php echo 'Year '.$_SESSION['activetransactionyear'].' '; ?>Weekly Loan Cash Card</h4>
									</div>
									<hr/>
									<div class="form-body">
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
									</div>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th scope="col" colspan="4"></th>
													<th scope="col" colspan="1" style="text-align:center">Mon</th>
													<th scope="col" colspan="1" style="text-align:center">Tue</th>
													<th scope="col" colspan="1" style="text-align:center">Wed</th>
													<th scope="col" colspan="1" style="text-align:center">Thur</th>
													<th scope="col" colspan="1" style="text-align:center">Fri</th>
												</tr>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Account No.</th>
													<th scope="col">Fullname</th>
													<th scope="col">L.Amount</th>
													<th scope="col" style='text-align:center'>Savgs/Repymnt</th>
													<!-- <th scope="col">Repymnt</th> -->
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col" style='text-align:center'>Savgs/Repymnt</th>
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col" style='text-align:center'>Savgs/Repymnt</th>
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col" style='text-align:center'>Savgs/Repymnt</th>
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col" style='text-align:center'>Savgs/Repymnt</th>
													<th scope="col">R-Total</th>
												</tr>
											</thead>
											<tbody id="tbl_loan_debtor" name="tbl_loan_debtor">
												<!-- <tr>
													<td scope="row">1</td>
													<td>SIP_00001</td>
													<td>Abimbola</td>
													<td>10000</td>
													<td>[100] <input type="checkbox"  id='savings_advance_agreement_id_1' name='savings_advance_agreement_id_1' onclick="dailySavings(this)"></td>
													<td>[400] <input type="checkbox"  id='repayment_advance_agreement_id_1' name='repayment_advance_agreement_id_1 'onclick="dailyRepayment(this)"></td>
												</tr>												 -->
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

        });

		function selectWeek(){
			var week = $("#week").val();
			if(week !=""){
				var formdata = "week=" + week;
				var recordCount = 0; var tableObjBuilderRow = ""; var loanRepayment = ""; var loanContribution = ""; var loanSavings = "";  var loanDetails = ""; var dayId = 0; var dayName = ""; var dayDBName = ""; var chkbxId = ""; var accountNumber = ""; 
				var agreementId = ""; 
				var rowSumArray = []; 
				var columnSumArray = []; columnArray = []; rowColumnSum = 0;
				$.post(baseUrl + "admin/getdebtorsandsavingsbyinspector", formdata).done(function(debtorsrepayment){
					// console.log(debtorsrepayment);
					debtorsrepayment = $.parseJSON(debtorsrepayment);
					if(debtorsrepayment != "" || debtorsrepayment != -1 || debtorsrepayment != 0){

						// initialize the array with empty arrays (no of contributors) to make it a multidimensional array
						for(var i = 0; i < debtorsrepayment['row'].length; i++){
							columnArray.push([]);
						}
						// console.log(columnSumArray);

						for(var i = 0; i < debtorsrepayment['row'].length; i++){
							// rowsum = 0;
							recordCount++;
							accountNumber = debtorsrepayment['row'][i].account_number;
							agreementId = debtorsrepayment['row'][i].transaction_year_advance_agreement_id;
							loanSavings =  debtorsrepayment['row'][i].savings;
							loanRepayment = parseInt(debtorsrepayment['row'][i].repayment) - parseInt(debtorsrepayment
							['row'][i].savings);		
							loanContribution = debtorsrepayment['row'][i].repayment;
							
							// loanPayment = debtorsrepayment['row'][i].repayment;
							tableObjBuilderRow +="<tr>"
								tableObjBuilderRow +="<td scope='row'>" + recordCount + "</td>";
								tableObjBuilderRow +="<td>" + accountNumber + "</td>";
								tableObjBuilderRow +="<td>" + debtorsrepayment['row'][i].fullname + "</td>";
								tableObjBuilderRow +="<td style='text-align:center;'>" + debtorsrepayment['row'][i].amount + "</td>";
								repaymentArray = [];
								if(debtorsrepayment['column'].length > 0){
									//alert('there is savings');
									for(var j = 0; j < debtorsrepayment['column'].length; j++){
										if(agreementId == debtorsrepayment['column'][j].transaction_year_advance_agreement_id){
											repaymentArray.push(debtorsrepayment['column'][j]);
										}else{
											//do nothing
										}
									}
									// console.log(repaymentArray);
									if(repaymentArray.length > 0){//building contribution checkbox table data object for the current debtors
										// this get the monetary value of number of savings the customer has made 
										rowSumArray.push(loanContribution * repaymentArray.length);
										for(var k = 0; k < 5; k++){
											dbrepayment = "";
											dayDBName = '';
											try {//savings was made in the selected week
												dayDBName = repaymentArray[k].dayname;
												//this ensures that columnSumArray push function work if dayDBName is set
												if(dayDBName != ''){
													columnArray[i].push(loanContribution);
												}
												// columnSumArray[i].push(loanContribution);
												// alert(dayDBName + 'yes');
												// dayId = getDayId(dayDBName);
												// dayName = getDayName(k);
												// chkbxId =  agreementId + "_" + dayName;

												// loanDetails = agreementId + "&" + loanRepayment + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;															

												// loanRepaymentDetails = agreementId + "&" + loanRepayment + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;															

												tableObjBuilderRow +="<td style='text-align:center;color:green;' id=''>[" + loanContribution + "]</td>";
												
											
													
											} catch (error) {//no saving record made in the selected week
												columnArray[i].push(0);
												dayName = getDayName(k);
												chkbxId =  agreementId + "_" + dayName;
												// alert(dayName + 'no');
												loanDetails = agreementId + "&" + loanRepayment + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;			
												
												tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanContribution + "] <input type='checkbox' id='repayment_"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailyRepayment(this)'></td>";					
											}	
										}
									}else{// no savings made yet by the current debtors
										// this get the monetary value of number of savings the customer has made 
										rowSumArray.push(loanContribution * 0);
										for(var k = 0; k < 5; k++){
											columnArray[i].push(0);
											dayName = getDayName(k);
											chkbxId =  agreementId + "_" + dayName;
											loanDetails = agreementId + "&" + loanRepayment + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;																	
											
										
											tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanContribution + "] <input type='checkbox' id='repayment_"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailyRepayment(this)'></td>";	
										}
									}
								}else{//no saving made yet by all the debtors
									// this get the monetary value of number of savings the customer has made 
									rowSumArray.push(loanContribution * 0);
									for(var k = 0; k < 5; k++){
										columnArray[i].push(0);
										dayName = getDayName(k);
										chkbxId =  agreementId + "_" + dayName;

										loanDetails = agreementId + "&" + loanRepayment + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;	
										

										tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanContribution + "] <input type='checkbox' id='repayment_"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailyRepayment(this)'></td>";	
									}
								}
								
								tableObjBuilderRow +="<td id='weeklytotal_" + agreementId + "' value='0' style='font-weight:bold;text-align:center'>" + rowSumArray[i] + "</td>";
							tableObjBuilderRow +="</tr>"
						}

						//summing savings column wise
						var mon = 0;
						for(var i = 0; i < columnArray.length; i++){
							for(var j = 0; j < 1; j++){
								mon += parseInt(columnArray[i][j]);
							}
						}
						columnSumArray.push(mon);
						var tue = 0;
						for(var i = 0; i < columnArray.length; i++){
							for(var j = 1; j < 2; j++){
								tue += parseInt(columnArray[i][j]);
							}
						}
						columnSumArray.push(tue);
						var wed = 0;
						for(var i = 0; i < columnArray.length; i++){
							for(var j = 2; j < 3; j++){
								wed += parseInt(columnArray[i][j]);
							}
						}
						columnSumArray.push(wed);
						var thur = 0;
						for(var i = 0; i < columnArray.length; i++){
							for(var j = 3; j < 4; j++){
								thur += parseInt(columnArray[i][j]);
							}
						}
						columnSumArray.push(thur);
						var fri = 0;
						for(var i = 0; i < columnArray.length; i++){
							for(var j = 4; j < 5; j++){
								fri += parseInt(columnArray[i][j]);
							}
						}
						columnSumArray.push(fri);
						//row column sum
						for(var i = 0; i < columnSumArray.length; i++){
							rowColumnSum += parseInt(columnSumArray[i]);
						}

						tableObjBuilderRow +="<tr>"
							tableObjBuilderRow +="<th colspan='3'></th>";
							tableObjBuilderRow +="<th style='text-align:center;'>C-Total</th>";
							// tableObjBuilderRow +="<th id='mon_savings_total'></th>";
							tableObjBuilderRow +="<th id='mon_repymntsavings_total' style='text-align:center'>" + columnSumArray[0] + "</th>";
							// tableObjBuilderRow +="<th id='tue_savings_total'></th>";
							tableObjBuilderRow +="<th id='tue_repymntsavings_total' style='text-align:center'>" + columnSumArray[1] + "</th>";
							// tableObjBuilderRow +="<th id='wed_savings_total'></th>";
							tableObjBuilderRow +="<th id='wed_repymntsavings_total' style='text-align:center'>" + columnSumArray[2] + "</th>";
							// tableObjBuilderRow +="<th id='thur_savings_total'></th>";
							tableObjBuilderRow +="<th id='thur_repymntsavings_total' style='text-align:center'>" + columnSumArray[3] + "</th>";
							// tableObjBuilderRow +="<th id='fri_savings_total'></th>";
							tableObjBuilderRow +="<th id='fri_repymntsavings_total' style='text-align:center'>" + columnSumArray[4] + "</th>";
							tableObjBuilderRow +="<th id='row_column_repymntsavings_total' style='text-align:center'>" + rowColumnSum + "</th>";
						tableObjBuilderRow +="</tr>"	
						
						$("#tbl_loan_debtor").html(tableObjBuilderRow);	

					}else if (debtorsrepayment == 0){
						alert("No loan disbursement made yet, kindly process loan first");
					}else if (debtorsrepayment == -1){
						alert("No transaction year activated yet");
					}else{
						// alert(debtorsrepayment);
						alert("Something occured when trying to make repayment");
					}						
				});		
			}
		}

		//  Get the Appropriate Day Name from Day Id
		//  ------------------------------		
		function getDayName(getDayId){
			if (getDayId==0){
				return "Mon";
			}else if (getDayId==1){
				return "Tue";
			}else if (getDayId==2){
				return "Wed";
			}else if (getDayId==3){
				return "Thur";
			}else if (getDayId==4){
				return "Fri";
			}
		}

		//  Get the Appropriate Day Id from Day Name
		//  ------------------------------		
		function getDayId(getDayName){
			if (getDayName=="Mon"){
				return 0;
			}else if (getDayName=="Tue"){
				return 1;
			}else if (getDayName=="Wed"){
				return 2;
			}else if (getDayName=="Thur"){
				return 3;
			}else if (getDayName=="Fri"){
				return 4;
			}
		}


		function dailyRepayment(getThis){
			var sendId = getThis.id;
			var loanDetails = getThis.value;
			loanDetails = loanDetails.split("&");
			// alert(loanDetails);
			var checked = document.getElementById(sendId).checked;
			var toDisableChkbx = ""; var dayName = ""; var agreementId = "";
			if(checked == true){
				var response = confirm("Are you sure you want to make savings contributions?");
				if(response == true){
					// postdata = "agreement_id=" + loanDetails[0] + "&repayment=" + loanDetails[1] + "&accountnumber=" + loanDetails[2]+ "&day=" + loanDetails[3] + "&week=" + loanDetails[4];

					// loanDetails = agreementId + "&" + loanRepayment + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;	
					
					// id = agreementId dayName
					// value = agreementId loanRepayment loanSavings accountNumber day week dayName
					

					postdata = "agreement_id=" + loanDetails[0] + "&repayment=" + loanDetails[1] + "&savings=" + loanDetails[2] + "&accountnumber=" + loanDetails[3]+ "&day=" + loanDetails[4] + "&week=" + loanDetails[5];
					// alert(postdata);
					$.post(baseUrl + "admin/processrepaymment", postdata).done(function(data){
						// alert(data);
						if(data != -1 && data != 3){
							agreementId = loanDetails[0];
							dayName = getDayName(loanDetails[4]);
							toDisableChkbx = "#repayment_" + agreementId + "_" + dayName;
							$(toDisableChkbx).prop("disabled", true);
							alert("Loan contribution successful");
						}else if(data == 3){
							// on error
							alert("You can't skip the previous day(s)/week(s) contribution");
							sendId = "#"+sendId;
							$(sendId).prop("checked", false);	
						}else{
							// on error
							alert("Error processing loan contribution");
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