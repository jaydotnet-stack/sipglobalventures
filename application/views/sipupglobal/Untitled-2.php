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

		//function which is triggered when week option is selected from a select tag 
		function selectWeek(){
			var week = $("#week").val();
			var tableObjBuilderRow = ""; 
			if(week != ""){
				$.post(baseUrl + "admin/getdebtorsbyinspector").done(function(data){
					var recordCount = 0; var loanRepayment = ""; var loanSavings = "";  var loanDetails = ""; var dayId = 0; var dayName = ""; var dayDBName = ""; var chkbxId = ""; var accountNumber = ""; var agreementId = "";
					var data = $.parseJSON(data);
					if(data != "" || data != 0){
						//get debtors
						for(var i = 0; i < data['row'].length; i++) {
							recordCount ++; 
							tableObjBuilderRow +="<tr>"
								tableObjBuilderRow +="<td scope='row'>" + recordCount + "</td>";
									accountNumber = data['row'][i].account_number;
									agreementId = data['row'][i].transaction_year_advance_agreement_id;
									tableObjBuilderRow +="<td>" + accountNumber + "</td>";
									tableObjBuilderRow +="<td>" + data['row'][i].fullname + "</td>";
									tableObjBuilderRow +="<td>" + data['row'][i].amount + "</td>";
									loanSavings =  data['row'][i].savings;
									loanRepayment = parseInt(data['row'][i].repayment) - parseInt(data['row'][i].savings);

									//get debtor's savings 
									var debtordetails = "account_number=" + accountNumber + "&agreement_id=" + data['row'][i].transaction_year_advance_agreement_id + "&week=" + week;

									$.post(baseUrl + "admin/getdebtorssavingsbyinspector", debtordetails).done(function(data1){
										var data1 = $.parseJSON(data1);
										if(data1 != 0 ){
											for(var day = 0; day < 5; day++){
												dayDBName = data1['column'][day].dayname;
												dayId = getDayId(dayDBName);//this function convert day of the week name to day number
												dayName = getDayName(day);//this function convert day of the week number to day name 

												chkbxId =  agreementId + "_" + dayName;
												loanDetails = agreementId + "&" + loanSavings + "&" + accountNumber + "&" + day + "&" + week;

												tableObjBuilderRow +="<td>[" + loanSavings + "] <input type='checkbox' id='"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailySavings(this)'></td>";

												tableObjBuilderRow +="<td>[" + loanRepayment + "] <input type='checkbox' id='' name='' value='"+ loanDetails +"' onclick='dailyRepayment(this)'></td>";	

											}
										}else{
											// on error
											// alert(data);
										}
									}); 	

									tableObjBuilderRow +="<td id='weeklytotal_" + accountNumber + "'></td>";
							tableObjBuilderRow +="</tr>"
						}
						//last row for column total
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
					}else{
						// alert(data);
					}
				});
			}
		}

		// function getSavingsByAgreementId(getDebtorDetails){
		// 	// return "Inner Loop:" + getDebtorDetails;
		// 	$.post(baseUrl + "admin/getdebtorssavingsbyinspector", getDebtorDetails).done(function(data1){
		// 		returnData = $.parseJSON(data1);
		// 		return returnData;
		// 		// alert("Inner Loop:" + debtordetails);
		// 		// if(data1 != 0 ){
		// 		// 	tableObjBuilderColumn = "";
		// 		// 	for(var k = 0; k < 5; k++){
		// 		// 		dayDBName = data1['column'][k].dayname;
		// 		// 		dayId = getDayId(dayDBName);
		// 		// 		dayName = getDayName(k);

		// 		// 		chkbxId =  agreementId + "_" + dayName;
		// 		// 		loanDetails = agreementId + "&" + loanSavings + "&" + accountNumber + "&" + k + "&" + week;

		// 		// 		//populate column array
		// 		// 		tableObjBuilderColumn +="<td>[" + loanSavings + "] <input type='checkbox' id='"+ chkbxId + "' name='' value='"+ loanDetails +"' onclick='dailySavings(this)'>33</td>";
		// 		// 	}
		// 		// 	tableObjBuilderColumnArray.push(tableObjBuilderColumn);
		// 		// }else{
		// 		// 	// on error
		// 		// 	// alert(data);
		// 		// }
		// 	});			
		// }

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
			if(checked == true){
				postdata = "agreement_id=" + loanDetails[0] + "&savings=" + loanDetails[1] + "&accountnumber=" + loanDetails[2]+ "&day=" + loanDetails[3] + "&week=" + loanDetails[4];
				$.post(baseUrl + "admin/processdailysavings", postdata).done(function(data){
					alert(data);
					// if(data != "" ){
					// 	var data = $.parseJSON(data);
					// 	for(var i = 0; i < data.length; i++) {
					// 		options +="<option value='"+data[i].market_description+"'>"+ data[i].market_description+"</option>";
					// 	}
					// 	$("#market_location").append(options); 
					// }else{
					// 	// on error
					// 	// alert(data);
					// }
				}); 				
			}
			// sendId = "#"+sendId;
			// $(sendId).prop("checked", false);
		}

		function dailyRepayment(getThis){
			alert(getThis.id);
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
<tr>
	<td scope='row'>1</td><td>SIP_000001</td><td>Johnson Favour</td><td>10000</td><td id='weeklytotal_SIP_000001'></td></tr>
<tr>
	<td scope='row'>2</td><td>SIP_000002</td><td>Thomas John</td><td>10000</td><td id='weeklytotal_SIP_000002'></td>
</tr>
<tr>
	<td scope='row'>3</td><td>SIP_000001</td><td>Johnson Favour</td><td>40000</td><td id='weeklytotal_SIP_000001'></td>
</tr>
<tr>
	<th colspan='3'></th><th style='text-align:center;'>C-Total</th><th id='mon_savings_total'></th><th id='mon_repayment_total'></th><th id='tue_savings_total'></th><th id='tue_repayment_total'></th><th id='wed_savings_total'></th><th id='wed_repayment_total'></th><th id='thur_savings_total'></th><th id='thur_repayment_total'></th><th id='fri_savings_total'></th><th id='fri_repayment_total'></th>
</tr>

[
  {
    "transaction_year_id": "1",
    "account_number": "SIP_000001",
    "transaction_year_advance_agreement_id": "1",
    "particulars": "DEBIT, for business boost",
    "loan_dr": "10000",
    "loan_cr": "0",
    "loan_bl": "-10000",
    "savings_dr": "0",
    "savings_cr": "0",
    "savings_bl": "0",
    "dayid": "",
    "dayname": "0",
    "week": "0",
    "transaction_month_name": "JUNE",
    "transaction_month_id": "06",
    "year": "2022",
    "transaction_date": "2022-06-17 10:51:24",
    "transaction_date_q": "",
    "complete_repayment_status": "F",
    "loan_status": "Active",
    "fullname": "Johnson Favour",
    "savings": "100",
    "repayment": "500",
    "amount": "10000"
  },
  {
    "transaction_year_id": "2",
    "account_number": "SIP_000002",
    "transaction_year_advance_agreement_id": "2",
    "particulars": "DEBIT, for building project",
    "loan_dr": "10000",
    "loan_cr": "0",
    "loan_bl": "-10000",
    "savings_dr": "0",
    "savings_cr": "0",
    "savings_bl": "0",
    "dayid": "",
    "dayname": "0",
    "week": "0",
    "transaction_month_name": "JUNE",
    "transaction_month_id": "06",
    "year": "2022",
    "transaction_date": "2022-06-17 10:51:30",
    "transaction_date_q": "",
    "complete_repayment_status": "F",
    "loan_status": "Active",
    "fullname": "Thomas John",
    "savings": "100",
    "repayment": "500",
    "amount": "10000"
  },
  {
    "transaction_year_id": "3",
    "account_number": "SIP_000001",
    "transaction_year_advance_agreement_id": "3",
    "particulars": "DEBIT, for school fee",
    "loan_dr": "40000",
    "loan_cr": "0",
    "loan_bl": "-40000",
    "savings_dr": "0",
    "savings_cr": "0",
    "savings_bl": "0",
    "dayid": "",
    "dayname": "0",
    "week": "0",
    "transaction_month_name": "JUNE",
    "transaction_month_id": "06",
    "year": "2022",
    "transaction_date": "2022-06-17 10:51:34",
    "transaction_date_q": "",
    "complete_repayment_status": "F",
    "loan_status": "Active",
    "fullname": "Johnson Favour",
    "savings": "350",
    "repayment": "2000",
    "amount": "40000"
  }
]