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
									<h4 class="mb-0">Weekly Cash Card</h4>
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
													<th scope="col" colspan="2" style="text-align:center">Mon</th>
													<th scope="col" colspan="2" style="text-align:center">Tue</th>
													<th scope="col" colspan="2" style="text-align:center">Wed</th>
													<th scope="col" colspan="2" style="text-align:center">Thur</th>
													<th scope="col" colspan="2" style="text-align:center">Fri</th>
												</tr>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Account No.</th>
													<th scope="col">Fullname</th>
													<th scope="col">L.Amount</th>
													<th scope="col">Savings</th>
													<th scope="col">Repymnt</th>
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col">Savings</th>
													<th scope="col">Repymnt</th>
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col">Savings</th>
													<th scope="col">Repymnt</th>
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col">Savings</th>
													<th scope="col">Repymnt</th>
													<!-- <th scope="col">L.Amount</th> -->
													<th scope="col">Savings</th>
													<th scope="col">Repymnt</th>
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


		// function selectWeek(){
		// 	var week = $("#week").val();
		// 	// I'm doing this because you can't perform a nexted loop on POST/GET Javascript Operation
		// 	// The outer loop is executed first before it goes into the inner loop
		// 	//  which defeats the intention for using nexted loop 
		// 	var tableObjBuilderRow = ""; 
		// 	var tableObjBuilderColumn = ""; 
		// 	formdata = "week=" +week;
		// 	if(week != ""){
		// 		$.post(baseUrl + "admin/getdebtorsbyinspectorX", formdata).done(function(data){
		// 			var recordCount = 0; var loanRepayment = ""; var loanSavings = "";  var loanDetails = ""; var dayId = 0; var dayName = ""; var dayDBName = ""; var chkbxId = ""; var accountNumber = ""; var agreementId = ""; var week = ""; var fullname = "";
		// 			var amount = "";
		// 			// alert(data);
		// 			var data = $.parseJSON(data);
		// 			// data = data['row'][0].account_number;
		// 			// alert(data['row'].length);
		// 			if(data != "" || data != 0){
		// 				// console.log(data['row']);
		// 				recordCount = 0;
		// 				for(var i = 0; i < data['row'].length; i ++){
		// 					//get savings from array
		// 					accountNumber = data['row'][i].account_number;
		// 					fullname = data['row'][i].fullname;
		// 					amount = data['row'][i].amount;
		// 					agreementId = data['row'][i].transaction_year_advance_agreement_id;							
		// 					week = data['row'][i].week;
		// 					loanSavings =  data['row'][i].savings;
		// 					loanRepayment = parseInt(data['row'][i].repayment) - parseInt(data['row'][i].savings);				
		// 					savingdr = data['row'][i].savings_dr;
		// 					//get debtor first record in the transaction table to prevent duplication
		// 					if(savingdr != ''){
		// 						recordCount ++; 
		// 						tableObjBuilderRow +="<tr>"
		// 							tableObjBuilderRow +="<td scope='row'>" + recordCount + "</td>";
		// 							tableObjBuilderRow +="<td id=''>" + accountNumber + "</td>";
		// 							tableObjBuilderRow +="<td>" + fullname + "</td>";
		// 							tableObjBuilderRow +="<td>" + amount + "</td>";
		// 							// tableObjBuilderRow +="<span id='column_" + agreementId + "'></span>";
		// 							tableObjBuilderRow +="<td>[" + loanSavings + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanRepayment + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanSavings + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanRepayment + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanSavings + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanRepayment + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanSavings + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanRepayment + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanSavings + "]</td>";
		// 							tableObjBuilderRow +="<td>[" + loanRepayment + "]</td>";
		// 							tableObjBuilderRow +="<td id='weeklytotal_" + accountNumber + "'></td>";
		// 						tableObjBuilderRow +="</tr>"								
		// 					}
		// 				}
		// 				tableObjBuilderRow +="<tr>"
		// 					tableObjBuilderRow +="<th colspan='3'></th>";
		// 					tableObjBuilderRow +="<th style='text-align:center;'>C-Total</th>";
		// 					tableObjBuilderRow +="<th id='mon_savings_total'></th>";
		// 					tableObjBuilderRow +="<th id='mon_repayment_total'></th>";
		// 					tableObjBuilderRow +="<th id='tue_savings_total'></th>";
		// 					tableObjBuilderRow +="<th id='tue_repayment_total'></th>";
		// 					tableObjBuilderRow +="<th id='wed_savings_total'></th>";
		// 					tableObjBuilderRow +="<th id='wed_repayment_total'></th>";
		// 					tableObjBuilderRow +="<th id='thur_savings_total'></th>";
		// 					tableObjBuilderRow +="<th id='thur_repayment_total'></th>";
		// 					tableObjBuilderRow +="<th id='fri_savings_total'></th>";
		// 					tableObjBuilderRow +="<th id='fri_repayment_total'></th>";
		// 				tableObjBuilderRow +="</tr>"

		// 				// alert(tableObjBuilderRow);
		// 				$("#tbl_loan_debtor").html(tableObjBuilderRow);

		// 			}else{
		// 				// alert(data);
		// 			}			
		// 		});
		// 	}
		// }

		




		function selectWeek(){
			var week = $("#week").val();
			if(week !=""){
				var formdata = "week=" + week;
				var recordCount = 0; var tableObjBuilderRow = ""; var loanRepayment = ""; var loanSavings = "";  var loanDetails = ""; var dayId = 0; var dayName = ""; var dayDBName = ""; var chkbxId = ""; var accountNumber = ""; var agreementId = "";
				$.post(baseUrl + "admin/getdebtorsandsavingsbyinspector", formdata).done(function(debtorssavings){
					// console.log(debtorssavings);
					debtorssavings = $.parseJSON(debtorssavings);
					if(debtorssavings != "" || debtorssavings != -1 || debtorssavings != 0){
						for(var i = 0; i < debtorssavings['row'].length; i++){
							recordCount++;
							accountNumber = debtorssavings['row'][i].account_number;
							agreementId = debtorssavings['row'][i].transaction_year_advance_agreement_id;
							loanSavings =  debtorssavings['row'][i].savings;
							loanRepayment = parseInt(debtorssavings['row'][i].repayment) - parseInt(debtorssavings['row'][i].savings);		
							tableObjBuilderRow +="<tr>"
								tableObjBuilderRow +="<td scope='row'>" + recordCount + "</td>";
								tableObjBuilderRow +="<td>" + accountNumber + "</td>";
								tableObjBuilderRow +="<td>" + debtorssavings['row'][i].fullname + "</td>";
								tableObjBuilderRow +="<td style='text-align:center;'>" + debtorssavings['row'][i].amount + "</td>";
								savingsArray = [];
								if(debtorssavings['column'].length > 0){
									// alert('there is savings');
									for(var j = 0; j < debtorssavings['column'].length; j++){
										if(agreementId == debtorssavings['column'][j].transaction_year_advance_agreement_id){
											savingsArray.push(debtorssavings['column'][j]);
										}else{
											//do nothing
										}
									}
									// alert(savingsArray.length+'df');
									// console.log(savingsArray);
									if(savingsArray.length > 0){//building contribution checkbox table data object for the current debtors
										for(var k = 0; k < 5; k++){
											dbrepayment = "";
											try {
												// alert('333');
												dayDBName = savingsArray[k].dayname;//enforces the control to enter the try at the last saving record
												dbrepayment = savingsArray[k].repayment_cr;

												dayId = getDayId(dayDBName);
												dayName = getDayName(k);
												chkbxId =  agreementId + "_" + dayName;

												loanDetails = agreementId + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;															

												loanRepaymentDetails = agreementId + "&" + loanRepayment + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;															

												tableObjBuilderRow +="<td style='text-align:center;color:green;' id=''>[" + loanSavings + "]</td>";
												
												if(dbrepayment == ''){
													tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanRepayment + "] <input type='checkbox' id='repayment_"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailyRepayment(this)'></td>";
												}else{
													tableObjBuilderRow +="<td style='text-align:center;color:green;' id=''>[" + loanRepayment + "]</td>";
												}

												// tableObjBuilderRow +="<td style='text-align:center;color:green;'>[" + loanRepayment + "] <input type='checkbox' id='' name='' value='"+ loanDetails +"' onclick='dailyRepayment(this)'></td>";
													
											} catch (error) {//no saving record made in the selected week
												// alert('333dfdf');
												// dayDBName = savingsArray[k].dayname;
												// dayId = getDayId(dayDBName);
												dayName = getDayName(k);
												chkbxId =  agreementId + "_" + dayName;
												
												loanDetails = agreementId + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;		
												
												loanRepaymentDetails = agreementId + "&" + loanRepayment + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;													

												tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanSavings + "] <input type='checkbox' id='savings_"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailySavings(this)'></td>";

												tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanRepayment + "] <input type='checkbox' id='repayment_"+ chkbxId + "' name='' value='"+ loanRepaymentDetails +"' onclick='dailyRepayment(this)'></td>";					
											}

										}
									}else{// no savings made yet by the current debtors
										for(var k = 0; k < 5; k++){
											dayName = getDayName(k);
											chkbxId =  agreementId + "_" + dayName;

											loanDetails = agreementId + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;																		
											
											loanRepaymentDetails = agreementId + "&" + loanRepayment + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;	
											
											tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanSavings + "] <input type='checkbox' id='savings_"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailySavings(this)'></td>";

											tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanRepayment + "] <input type='checkbox' id='repayment_"+ chkbxId + "' name='' value='"+ loanRepaymentDetails +"' onclick='dailyRepayment(this)'></td>";	
										}
									}
								}else{//no saving made yet by all the debtors
									// alert('no savings');
									for(var k = 0; k < 5; k++){
										dayName = getDayName(k);
										chkbxId =  agreementId + "_" + dayName;

										loanDetails = agreementId + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;			
										
										loanRepaymentDetails = agreementId + "&" + loanRepayment + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;	
										
										tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanSavings + "] <input type='checkbox' id='savings_"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailySavings(this)'></td>";

										tableObjBuilderRow +="<td style='text-align:center;color:red;'>[" + loanRepayment + "] <input type='checkbox' id='repayment_"+ chkbxId + "' name='' value='"+ loanRepaymentDetails +"' onclick='dailyRepayment(this)'></td>";	
									}
								}
								
								tableObjBuilderRow +="<td id='weeklytotal_" + accountNumber + "'></td>";
							tableObjBuilderRow +="</tr>"
						}

						tableObjBuilderRow +="<tr>"
							tableObjBuilderRow +="<th colspan='3'></th>";
							tableObjBuilderRow +="<th style='text-align:center;'>C-Total</th>";
							tableObjBuilderRow +="<th id='mon_savings_total'></th>";
							tableObjBuilderRow +="<th id='mon_repayment_total'></th>";
							tableObjBuilderRow +="<th id='tue_savings_total'></th>";
							tableObjBuilderRow +="<th id='tue_repayment_total'></th>";
							tableObjBuilderRow +="<th id='wed_savings_total'></th>";
							tableObjBuilderRow +="<th id='wed_repayment_total'></th>";
							tableObjBuilderRow +="<th id='thur_savings_total'></th>";
							tableObjBuilderRow +="<th id='thur_repayment_total'></th>";
							tableObjBuilderRow +="<th id='fri_savings_total'></th>";
							tableObjBuilderRow +="<th id='fri_repayment_total'></th>";
						tableObjBuilderRow +="</tr>"	
						
						$("#tbl_loan_debtor").html(tableObjBuilderRow);	

					}else if (debtorssavings == 0){
						alert("No loan disbursement made yet, kindly process loan first");
					}else if (debtorssavings == -1){
						alert("No transaction year activated yet");
					}else{
						alert(debtorssavings);
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

		function dailySavings(getThis){
			var sendId = getThis.id;
			var loanDetails = getThis.value;
			loanDetails = loanDetails.split("&");
			var checked = document.getElementById(sendId).checked;
			var toDisableChkbx = ""; var dayName = ""; var agreementId = "";
			if(checked == true){
				var response = confirm("Are you sure you want to make savings contributions?");
				if(response == true){
					postdata = "agreement_id=" + loanDetails[0] + "&savings=" + loanDetails[1] + "&accountnumber=" + loanDetails[2]+ "&day=" + loanDetails[3] + "&week=" + loanDetails[4];
					$.post(baseUrl + "admin/processdailysavings", postdata).done(function(data){
						if(data != -1 && data != 3){
							agreementId = loanDetails[0];
							dayName = loanDetails[5];
							toDisableChkbx = "#savings_" + agreementId + "_" + dayName;
							$(toDisableChkbx).prop("disabled", true);
							alert("Loan savings successful");
						}else if(data == 3){
							// on error
							alert("You can't skip the previous day(s)/week(s) contribution");
							sendId = "#"+sendId;
							$(sendId).prop("checked", false);	
						}else{
							// on error
							alert("Error processing loan savings");
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
					// loanDetails = agreementId + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week + "&" + dayName;																		
					postdata = "agreement_id=" + loanDetails[0] + "&repayment=" + loanDetails[1] + "&accountnumber=" + loanDetails[2]+ "&day=" + loanDetails[3] + "&week=" + loanDetails[4];
					$.post(baseUrl + "admin/processrepaymment", postdata).done(function(data){
						alert(data);
						if(data != -1 && data != 3){
							agreementId = loanDetails[0];
							dayName = loanDetails[5];
							toDisableChkbx = "#repayment_" + agreementId + "_" + dayName;
							$(toDisableChkbx).prop("disabled", true);
							alert("Loan repayment successful");
						}else if(data == 3){
							// on error
							alert("You can't skip the previous day(s)/week(s) contribution");
							sendId = "#"+sendId;
							$(sendId).prop("checked", false);	
						}else{
							// on error
							alert("Error processing loan repayment");
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