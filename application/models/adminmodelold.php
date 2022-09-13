<?php

	error_reporting(0);
	// session_start();
	
	ini_set('max_execution_time',0);
	ini_set('memory_limit','256M');
	
	class Adminmodel extends CI_Model
	{	
		
		# Get Active Transaction Year
		public function getactivetransactionyear(){
			$_SESSION['activetransactionyear']	=	"";
			$query = $this->db->get_where('accounting_year', array('accounting_year_status'=>'Activated'));
			if ($query->num_rows() == 1){
				$_SESSION['activetransactionyear'] 	= $query->row(0)->accounting_year;
				return 1;
			}else{	
				$_SESSION['activetransactionyear'] = '0000';
				return 0;
			}	
		}		

		# Login
		# -------------------
		public function login(){
			$_SESSION['userinformation']	=	"";
			// $_SESSION['usercategory']	=	"";
			// $_SESSION['noofinstructors']	=	"";
			// $_SESSION['noofregisteredcourses']	=	"";
			extract($_POST);
			$email  		= trim($email);
			$password 		= MD5(trim($password));

			$query = $this->db->get_where('users_account', array('email'=>$email));
			if ($query->num_rows() == 1){
				$dbpassword 	= $query->row(0)->users_account_password;
				if($dbpassword==$password){
					$_SESSION['userinformation'] 	=	$query->row(0);
				    return 1;
				}else{
					return -2;
				}
			}else{	
				return 2;	
			}	
		}

		# Login
		# -------------------
		public function register(){
			//setting session variables			
			$_SESSION['email']	=	"";
			//extract posted form fields
			extract($_POST);

			// $firstname 		= ucwords(refineInput($firstname)); 
			// $email 			= refineInput($email);
			// $phone_number   = refineInput($phone_number);
			// $password 	    = md5(refineInput($password));

			//refine post 
			function refineInput($data) {	
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			// $email 			= 		trim($email);			
			// $firstname 		= 		trim($firstname);
			// $lastname 		=  		trim($lastname);
			// $gender 		=  		$gender;
			// $phone_number 	= 		trim($phone_number);
			// $password 		= 		md5(trim($password));		

			$DataArray 	= array(
				'email'								=> trim($email),			
				'users_account_firstname'			=> trim($firstname),
				'users_account_lastname'			=> trim($lastname),
				'users_account_sex'					=> $gender,
				'users_account_phone_number'		=> trim($phone_number),
				'users_account_password'			=> md5(trim($password)),
				'users_account_approval_status'	=> 'F'
			);	
			// $DataArray 	= array(
			// 	'email'								=> $email,
			// 	'users_account__firstname'			=> $firstname,
			// 	'users_account__lastname'			=> $lastname,
			// 	'users_account_sex'					=> $gender,
			// 	'users_account_phone_number'		=> $phone_number,
			// 	'users_account_password'			=> $password,
			// 	'users_account__approval_status'	=> 'F'
			// );	
			$query = $this->db->get_where('users_account', array('email'=>trim($email)));
			if ($query->num_rows() > 0){
				return 2;
			}else{
				$this->db->insert('users_account',$DataArray);
				// $query = $this->db->get_where('users_account', array('email'=>trim($email)));	
				$_SESSION['email'] 	=	$email;
				return 1;	
			}	
		}

		public function admincreateaccount(){
			extract($_POST);	
			$_SESSION['user_account_picture'] ="";
			// $username = $_SESSION['username'];
			$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
			if($CountArray>=2){		
				$DataArray 	= array(
					'email'								=> trim($email),			
					'users_account_firstname'			=> trim($firstname),
					'users_account_lastname'			=> trim($lastname),
					'users_account_sex'					=> $gender,
					'users_account_phone_number'		=> trim($phone_number),
					'users_account_address'				=> trim($address),
					'users_account_dob'					=> trim($dob),
					'users_account_password'			=> md5(trim($password)),
					'users_account_category'			=> trim($user_category),
					'users_account_passport_tag'		=> 'T',
					'users_account_approval_status'		=> 'T',
					'users_account_market_location'		=> trim($market_location),
					'users_account_lga'					=> $lga
					// 'users_account_location_id_status'	=> $lga
				);
			}else{
				$DataArray 	= array(
					'email'								=> trim($email),			
					'users_account_firstname'			=> trim($firstname),
					'users_account_lastname'			=> trim($lastname),
					'users_account_sex'					=> $gender,
					'users_account_phone_number'		=> trim($phone_number),
					'users_account_address'				=> trim($address),
					'users_account_dob'					=> trim($dob),
					'users_account_password'			=> md5(trim($password)),
					'users_account_category'			=> trim($user_category),
					// 'users_account_passport_tag'		=> 'T',
					'users_account_approval_status'		=> 'T',
					'users_account_market_location'		=> trim($marketLocation),
					'users_account_lga'					=> $lga
					// 'users_account_location_id_status'	=> $lga
				);
			}
			$query = $this->db->get_where('users_account', array('email'=>trim($email)));
			if ($query->num_rows() > 0){
				$DataArray 	= array(
					// 'email'								=> trim($email),			
					'users_account_firstname'			=> trim($firstname),
					'users_account_lastname'			=> trim($lastname),
					'users_account_sex'					=> $gender,
					'users_account_phone_number'		=> trim($phone_number),
					'users_account_address'				=> trim($address),
					'users_account_dob'					=> trim($dob),
					'users_account_password'			=> md5(trim($password)),
					// 'users_account_category'			=> trim($user_category),
					// 'users_account_passport_tag'		=> 'T',
					// 'users_account_approval_status'		=> 'T',
					// 'users_account_market_location'		=> trim($marketLocation),
					'users_account_lga'					=> $lga
					// 'users_account_location_id_status'	=> $lga
				);
				if($this->db->where(array('email'=>$email))->update('users_account',$DataArray)){
					//get user updated information
					$query = $this->db->get_where('users_account', array('email'=>$email));
					if ($query->num_rows() == 1){
						$userId =  $query->row(0)->users_account_id;
						$_SESSION['user_account_picture'] = $userId . ".jpg";
						// $_SESSION['userinformation'] = '';
						// $_SESSION['userinformation'] 	=	$query1->row(0);
						return $userId;	
					}			
				}else{
					return 0;
				}
			}else{
				$this->db->insert('users_account',$DataArray);
				//get user updated information
				$query = $this->db->get_where('users_account', array('email'=>$email));
				if ($query->num_rows() == 1){
					$userId =  $query->row(0)->users_account_id;
					$_SESSION['user_account_picture'] = $userId . ".jpg";
					// $_SESSION['userinformation'] = '';
					// $_SESSION['userinformation'] 	=	$query1->row(0);
					return $userId;	
				}
			}	
		}

		public function updateuserprofile(){
			extract($_POST);	
			$_SESSION['user_profile_picture'] ="";
			$email = $_SESSION['userinformation']->email;
			// $username = $_SESSION['username'];
			$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
			if($CountArray>=2){
				$DataArray 	= array(
					'users_account_firstname'		=> trim($firstname),
					'users_account_lastname'		=> trim($lastname),
					'users_account_sex'				=> $gender,
					'users_account_phone_number'	=> trim($phone_number),
					'users_account_address'			=> trim($address),
					'users_account_dob'				=> $dob,
					'users_account_lga'				=> $lga,
					'users_account_passport_tag'	=> 'T'
				);	
			}else{
				$DataArray 	= array(
					'users_account_firstname'		=> trim($firstname),
					'users_account_lastname'		=> trim($lastname),
					'users_account_sex'				=> $gender,
					'users_account_phone_number'	=> trim($phone_number),
					'users_account_address'			=> trim($address),
					'users_account_dob'				=> $dob,
					'users_account_lga'				=> $lga
				);	
			}
			$query = $this->db->get_where('users_account', array('email'=>$email));
			if ($query->num_rows() > 0){
				$userId =  $query->row(0)->users_account_id;
				if($this->db->where(array('email'=>$email))->update('users_account',$DataArray)){
					$_SESSION['user_profile_picture'] = $userId . ".jpg";
					//get user updated information
					$query1 = $this->db->get_where('users_account', array('email'=>$email));
					if ($query1->num_rows() == 1){
						$_SESSION['userinformation'] = '';
						$_SESSION['userinformation'] 	=	$query1->row(0);
						return $userId;	
					}			
				}else{
					return -1;
				}
			}
		}

		public function addaccountingyear(){
			extract($_POST);
			$DataArray 	= array(
				'accounting_year'		=> trim($accounting_year)
			);				
			$query = $this->db->get_where('accounting_year', array('accounting_year'=>$accounting_year));
			if ($query->num_rows() > 0){
				return 2;			
			}else{

				$this->db->insert('accounting_year',$DataArray);
				// create loan transaction table by accounting year
				$tblString = "";
				$tblString .= "CREATE TABLE IF NOT EXISTS loan_transaction_".trim($accounting_year);
				$tblString .= " (transaction_year_id INT(11) NOT NULL AUTO_INCREMENT, ";
				$tblString .= " account_number VARCHAR(50) DEFAULT '', ";
				$tblString .= " transaction_year_advance_agreement_id VARCHAR(50) DEFAULT '', ";
				$tblString .= " particulars VARCHAR(500) DEFAULT '', ";
				$tblString .= " loan_dr VARCHAR(50) DEFAULT '', loan_cr VARCHAR(50) DEFAULT '', loan_bl VARCHAR(50) DEFAULT '', ";

				// $tblString .= " loan_interest VARCHAR(50) DEFAULT NULL, loan_repayment VARCHAR(50) DEFAULT NULL, ";
				$tblString .= " repayment_dr VARCHAR(50) DEFAULT '', repayment_cr VARCHAR(50) DEFAULT '', ";
				$tblString .= " repayment_bl VARCHAR(50) DEFAULT '', ";

				$tblString .= " savings_dr VARCHAR(50) DEFAULT '', savings_cr VARCHAR(50) DEFAULT '', ";
				$tblString .= " savings_bl VARCHAR(50) DEFAULT '', ";
				// $tblString .= " form_fee VARCHAR(50) DEFAULT NULL, ";
				// $tblString .= " disburseme	nt_fee VARCHAR(50) DEFAULT NULL, insurance_fee VARCHAR(50) DEFAULT NULL, ";

				$tblString .= " dayid VARCHAR(50) DEFAULT '', ";				
				$tblString .= " dayname VARCHAR(50) DEFAULT '', ";				
				$tblString .= " week VARCHAR(50) DEFAULT '', ";				
				$tblString .= " transaction_month_name VARCHAR(50) DEFAULT '', ";
				$tblString .= " transaction_month_id VARCHAR(50) DEFAULT '', ";
				$tblString .= " year VARCHAR(50) DEFAULT '', ";						
				$tblString .= " transaction_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, ";
				$tblString .= " transaction_date_q VARCHAR(50) DEFAULT '', ";				

				$tblString .= " contribution_type VARCHAR(50) DEFAULT '', ";				

				$tblString .= " complete_repayment_status CHAR(1) DEFAULT 'F' , ";
				$tblString .= " loan_status VARCHAR(50) DEFAULT 'Active', PRIMARY KEY (transaction_year_id))";		
				$query = $this->db->query($tblString);

				// create dialy contribution table by accounting year
				$tblString = "";
				$tblString .= "CREATE TABLE IF NOT EXISTS dialy_contribution_transaction_".trim($accounting_year);
				$tblString .= " (dialy_contribution_year_id INT(11) NOT NULL AUTO_INCREMENT, ";
				$tblString .= " account_number VARCHAR(50) DEFAULT '', ";
				$tblString .= " customer_contribution_id VARCHAR(50) DEFAULT '', ";
				$tblString .= " contribution_amount VARCHAR(50) DEFAULT '', ";
				$tblString .= " contribution_cr VARCHAR(50) DEFAULT '', contribution_bl VARCHAR(50) DEFAULT '', ";

				$tblString .= " dayid VARCHAR(50) DEFAULT '', ";	
				$tblString .= " transaction_month_name VARCHAR(50) DEFAULT '', ";	
				$tblString .= " transaction_month_id VARCHAR(50) DEFAULT '', ";	
				$tblString .= " year VARCHAR(50) DEFAULT '', ";	
				$tblString .= " transaction_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, ";
				$tblString .= " transaction_date_q VARCHAR(50) DEFAULT '', ";	

				$tblString .= " complete_contribution_status CHAR(1) DEFAULT 'F' , ";
				$tblString .= " contribution_status VARCHAR(50) DEFAULT 'Active', PRIMARY KEY (dialy_contribution_year_id))";		
				$query = $this->db->query($tblString);				

				// get accounting years
				$sqlstr	= "SELECT * FROM accounting_year";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					foreach($query->result() as $row){
						$mdata[] = $row;
					}
					return json_encode($mdata);
				}else{
					return 0;
				}				
			}
		}

		public function fetchaccountingyear(){
			$sqlstr	= "SELECT * FROM accounting_year";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
			}else{
				return 0;
			}
		}

		public function activateaccountingyear(){
			extract($_POST);
			$sqlstr	= "UPDATE accounting_year SET accounting_year_status='Deactivated'";
			$query = $this->db->query($sqlstr);
			if ($query == true){
				$sqlstr	= "UPDATE accounting_year SET accounting_year_status='Activated' WHERE accounting_year_id = '$sentAccountingYear'";
				$query = $this->db->query($sqlstr);
				$sqlstr1	= "SELECT * FROM accounting_year";
				$query1 = $this->db->query($sqlstr1);
				if ($query1->num_rows() > 0){
					foreach($query1->result() as $row){
						$mdata[] = $row;
					}
					return json_encode($mdata);
				}				
			}else{
				return 0;
			}
		}

		public function getinitialyeardefinition(){
			$sqlstr	= "SELECT accounting_year FROM accounting_year ORDER BY accounting_year_id DESC LIMIT 1";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				$row = $query->result();
				return json_encode($row);
			}else{
				return 0;
			}
		}

		public function addmarketlocation(){
			extract($_POST);
			$DataArray 	= array(
				'market_code'			=> trim(strtoupper($market_code)),
				'market_description'	=> trim($market_desciption)
			);				
			$query = $this->db->get_where('market_location', array('market_code'=>$market_code));
			if ($query->num_rows() > 0){				
				$sqlstr	= "UPDATE market_location SET market_description='$market_desciption' WHERE market_code='$market_code'";
				$query = $this->db->query($sqlstr);	
				$sqlstr	= "SELECT * FROM market_location";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					foreach($query->result() as $row){
						$mdata[] = $row;
					}
					return json_encode($mdata);
				}else{
					return 0;
				}							
				return 2;			
			}else{
				$this->db->insert('market_location',$DataArray);
				$sqlstr	= "SELECT * FROM market_location";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					foreach($query->result() as $row){
						$mdata[] = $row;
					}
					return json_encode($mdata);
				}else{
					return 0;
				}				
			}
		}

		public function fetchmarketlocation(){
			$sqlstr	= "SELECT * FROM market_location";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
			}else{
				return 0;
			}
		}	

		public function editmarketlocation(){
			extract($_POST);
			$sqlstr	= "SELECT * FROM market_location WHERE market_location_id='$sentMarketLocationId'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}
		}

		public function addloancategories(){
			extract($_POST);
			$DataArray 	= array(
				'loan_category_level'				=> trim($loan_level),
				'loan_category_amount'				=> trim($loan_amount),
				'loan_category_interest'			=> trim($loan_interest),
				'loan_category_repayment'			=> trim($loan_repayment),
				'loan_category_savings'				=> trim($loan_savings),
				'loan_category_form_fees'			=> trim($form_fees),
				'loan_category_disbursement_fees'	=> trim($disbursement_fee),
				'loan_category_insurance_fees'		=> trim($insurance_fee)
			);				
			$query = $this->db->get_where('loan_category', array('loan_category_amount'=>$loan_amount));
			if ($query->num_rows() > 0){
				// DataArray for update
				$DataArrayX 	= array(
					'loan_category_level'				=> trim($loan_level),
					'loan_category_interest'			=> trim($loan_interest),
					'loan_category_repayment'			=> trim($loan_repayment),
					'loan_category_savings'				=> trim($loan_savings),
					'loan_category_form_fees'			=> trim($form_fees),
					'loan_category_disbursement_fees'	=> trim($disbursement_fee),
					'loan_category_insurance_fees'		=> trim($insurance_fee)
				);				
				$this->db->where(array('loan_category_amount'=>$loan_amount))->update('loan_category',$DataArrayX);
				$sqlstr	= "SELECT * FROM loan_category";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					foreach($query->result() as $row){
						$mdata[] = $row;
					}
					return json_encode($mdata);
				}else{
					return 0;
				}
			}else{
				$this->db->insert('loan_category',$DataArray);
				$sqlstr	= "SELECT * FROM loan_category";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					foreach($query->result() as $row){
						$mdata[] = $row;
					}
					return json_encode($mdata);
				}else{
					return 0;
				}				
			}
		}

		public function fetchloancategory(){
			$sqlstr	= "SELECT * FROM loan_category";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
			}else{
				return 0;
			}
		}

		public function editloancategory(){
			extract($_POST);
			$sqlstr	= "SELECT * FROM loan_category WHERE loan_category_id='$sentLoanCategoryId'";
			$query = $this->db->query($sqlstr);	
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}
		}	

		public function getmarketlocations(){
			extract($_POST);
			$sqlstr	= "SELECT * FROM market_location";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}
		}	

		public function retrieveuser(){
			extract($_POST);
			$sqlstr	= "SELECT * FROM users_account WHERE users_account_id='$sentUserId'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}
		}

		public function mapusertomarket(){
			extract($_POST);
			$DataArray 	= array(
				'users_account_approval_status'				=> "T",
				'users_account_market_location'				=> trim($sentMarketLocation)
			);			
			$this->db->where(array('users_account_id '=>$hiddenId))->update('users_account',$DataArray);
			return 1;
		}	

		public function getloanbytype(){
			extract($_POST);
			$sqlstr	= "SELECT loan_category_amount FROM loan_category WHERE loan_category_level='$sentLoanType'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}else{
				return 0;
			}
		}

		public function generatecustomeruniquenumber(){			
			$sqlstr	= "SELECT customers_id FROM customers_biodata ORDER BY customers_id DESC LIMIT 1";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				$row = $query->result();
				return json_encode($row);
			}else{
				return 0;
			}
		}

		public function getcustomerbyuniquenumber(){
			$sentString = $_POST['sentString'];
			$sqlstr	= "SELECT * FROM customers_biodata WHERE customer_unique_no='$sentString' && contribution_type='loan-based'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}else{
				return 0;
			}
		}	

		public function getcontributionbasedcustomerbyuniquenumber(){
			$sentString = $_POST['sentString'];
			$sqlstr	= "SELECT * FROM customers_biodata WHERE customer_unique_no='$sentString' && contribution_type='contribution-based'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}else{
				return 0;
			}
		}	

		public function getaccount(){
			$sentEmail = $_POST['sentEmail'];
			$sqlstr	= "SELECT * FROM users_account WHERE email='$sentEmail'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}else{
				return 0;
			}
		}	
											
		public function createcustomeraccount(){
			extract($_POST);
			$_SESSION['applicant_passport'] ="";
			$_SESSION['customerinformation'] ="";
			$inspector_id = $_SESSION['userinformation']->users_account_id;
			if($customer_picture_hidden_tag == "T"){
				$DataArray 	= array(
					'customer_unique_no'			=> trim($customer_unique_number),
					'title'							=> trim($title),
					'firstname'						=> trim($firstname),
					'surname'						=> trim($lastname),
					'sex'							=> trim($gender),
					'home_address'					=> trim($home_address),
					'business_address'				=> trim($business_address),
					'business_type'					=> trim($business_type),
					'year_in_business'				=> trim($year_in_business),
					'town'							=> trim($town),
					'city'							=> trim($city),
					'lga'							=> trim($lga),
					/*'type_of_loan'					=> trim($type_of_loan),
					'amount_of_loan'				=> trim($amount_of_loan),*/
					'customer_bank_name'			=> trim($bank_name),
					'customer_bank_account_name'	=> trim($account_name),
					'customer_bank_account_type'	=> trim($bank_account_type),
					'customer_bank_account_number'	=> trim($account_number),
					'customer_account_bvn'			=> trim($bvn),
					'customer_phone_number'			=> trim($phone_number),
					'name_of_guarantor'				=> trim($name_of_guarantor),
					'guarantor_address'				=> trim($guarantor_address),
					'guarantor_phone_number'		=> trim($guarnator_phone_number),
					'guarantor_occupation'			=> trim($guarantor_occupation),
					'application_date'				=> trim($application_date),
					'declaration'					=> trim($declaration),
					// 'guarantor_signature'			=> "T",
					// 'applicant_signature'			=> "T",
					'applicant_passport'			=> "T",
					'account_officer_fullname'		=> trim($account_officer),
					'inspector_id'					=> trim($inspector_id),
					'contribution_type'				=> 'loan-based'
				);
			}else{
				$DataArray 	= array(
					'customer_unique_no'			=> trim($customer_unique_number),
					'title'							=> trim($title),
					'firstname'						=> trim($firstname),
					'surname'						=> trim($lastname),
					'sex'							=> trim($gender),
					'home_address'					=> trim($home_address),
					'business_address'				=> trim($business_address),
					'business_type'					=> trim($business_type),
					'year_in_business'				=> trim($year_in_business),
					'town'							=> trim($town),
					'city'							=> trim($city),
					'lga'							=> trim($lga),
					/*'type_of_loan'					=> trim($type_of_loan),
					'amount_of_loan'				=> trim($amount_of_loan),*/
					'customer_bank_name'			=> trim($bank_name),
					'customer_bank_account_name'	=> trim($account_name),
					'customer_bank_account_type'	=> trim($bank_account_type),
					'customer_bank_account_number'	=> trim($account_number),
					'customer_account_bvn'			=> trim($bvn),
					'customer_phone_number'			=> trim($phone_number),
					'name_of_guarantor'				=> trim($name_of_guarantor),
					'guarantor_address'				=> trim($guarantor_address),
					'guarantor_phone_number'		=> trim($guarnator_phone_number),
					'guarantor_occupation'			=> trim($guarantor_occupation),
					'application_date'				=> trim($application_date),
					'declaration'					=> trim($declaration),
					'account_officer_fullname'		=> trim($account_officer),
					'inspector_id'					=> trim($inspector_id),
					'contribution_type'				=> 'loan-based'
				);				
			}
			$query = $this->db->get_where('customers_biodata', array('customer_unique_no'=>$customer_unique_number));
			if ($query->num_rows() > 0){
				$customers_id =  $query->row(0)->customers_id;
				if($this->db->where(array('customer_unique_no'=>$customer_unique_number))->update('customers_biodata',$DataArray)){
					$_SESSION['applicant_passport'] 	= $customers_id . ".jpg";
					$_SESSION['customerinformation'] = 	$query->row(0);
					return 1;		
					// return $_SESSION['applicant_passport'];		
				}
			}else{
				$this->db->insert('customers_biodata',$DataArray);
				$query1 = $this->db->get_where('customers_biodata',	array('customer_unique_no'=>$customer_unique_number));
				if ($query1->num_rows() == 1){
					$customers_id =  $query1->row(0)->customers_id;
					$_SESSION['applicant_passport'] 	= $customers_id . ".jpg";	
					$_SESSION['customerinformation'] = 	$query1->row(0);
					return 1;	
				}else{
					return 0;
				}			
			}
		}	

		// contributionapplicationprocess
		public function createcontributionbasedcustomeraccount(){
			extract($_POST);
			$_SESSION['applicant_passport'] ="";
			$_SESSION['customerinformation'] ="";
			$inspector_id = $_SESSION['userinformation']->users_account_id;
			if($customer_picture_hidden_tag == "T"){
				$DataArray 	= array(
					'customer_unique_no'			=> trim($customer_unique_number),
					'title'							=> trim($title),
					'firstname'						=> trim($firstname),
					'surname'						=> trim($lastname),
					'sex'							=> trim($gender),
					'home_address'					=> trim($home_address),
					'business_address'				=> trim($business_address),
					'business_type'					=> trim($business_type),
					'customer_phone_number'			=> trim($customer_phone_number),
					'year_in_business'				=> trim($year_in_business),
					'town'							=> trim($town),
					'city'							=> trim($city),
					'lga'							=> trim($lga),
					/*'type_of_loan'					=> trim($type_of_loan),
					'amount_of_loan'				=> trim($amount_of_loan),*/

					// 'customer_bank_name'			=> trim($bank_name),
					// 'customer_bank_account_name'	=> trim($account_name),
					// 'customer_bank_account_type'	=> trim($bank_account_type),
					// 'customer_bank_account_number'	=> trim($account_number),
					// 'customer_account_bvn'			=> trim($bvn),
					// 'customer_phone_number'			=> trim($phone_number),
					// 'name_of_guarantor'				=> trim($name_of_guarantor),
					// 'guarantor_address'				=> trim($guarantor_address),
					// 'guarantor_phone_number'		=> trim($guarnator_phone_number),
					// 'guarantor_occupation'			=> trim($guarantor_occupation),
					'application_date'				=> trim($application_date),
					'declaration'					=> trim($declaration),

					// 'guarantor_signature'			=> "T",
					// 'applicant_signature'			=> "T",

					'applicant_passport'			=> "T",
					'account_officer_fullname'		=> trim($account_officer),
					'inspector_id'					=> trim($inspector_id),
					'contribution_type'				=> 'contribution-based'
				);
			}else{
				$DataArray 	= array(
					'customer_unique_no'			=> trim($customer_unique_number),
					'title'							=> trim($title),
					'firstname'						=> trim($firstname),
					'surname'						=> trim($lastname),
					'sex'							=> trim($gender),
					'home_address'					=> trim($home_address),
					'business_address'				=> trim($business_address),
					'business_type'					=> trim($business_type),
					'customer_phone_number'			=> trim($customer_phone_number),
					'year_in_business'				=> trim($year_in_business),
					'town'							=> trim($town),
					'city'							=> trim($city),
					'lga'							=> trim($lga),
					/*'type_of_loan'					=> trim($type_of_loan),
					'amount_of_loan'				=> trim($amount_of_loan),*/

					// 'customer_bank_name'			=> trim($bank_name),
					// 'customer_bank_account_name'	=> trim($account_name),
					// 'customer_bank_account_type'	=> trim($bank_account_type),
					// 'customer_bank_account_number'	=> trim($account_number),
					// 'customer_account_bvn'			=> trim($bvn),
					// 'customer_phone_number'			=> trim($phone_number),
					// 'name_of_guarantor'				=> trim($name_of_guarantor),
					// 'guarantor_address'				=> trim($guarantor_address),
					// 'guarantor_phone_number'		=> trim($guarnator_phone_number),
					// 'guarantor_occupation'			=> trim($guarantor_occupation),
					'application_date'				=> trim($application_date),
					'declaration'					=> trim($declaration),

					// 'guarantor_signature'			=> "T",
					// 'applicant_signature'			=> "T",

					// 'applicant_passport'			=> "T",
					'account_officer_fullname'		=> trim($account_officer),
					'inspector_id'					=> trim($inspector_id),
					'contribution_type'				=> 'contribution-based'
				);				
			}
			$query = $this->db->get_where('customers_biodata', array('customer_unique_no'=>$customer_unique_number));
			if ($query->num_rows() > 0){
				$customers_id =  $query->row(0)->customers_id;
				if($this->db->where(array('customer_unique_no'=>$customer_unique_number))->update('customers_biodata',$DataArray)){
					$_SESSION['applicant_passport'] 	= $customers_id . ".jpg";
					$_SESSION['customerinformation'] = 	$query->row(0);
					return 1;		
					// return $_SESSION['applicant_passport'];		
				}
			}else{
				$this->db->insert('customers_biodata',$DataArray);
				$query1 = $this->db->get_where('customers_biodata',	array('customer_unique_no'=>$customer_unique_number));
				if ($query1->num_rows() == 1){
					$customers_id =  $query1->row(0)->customers_id;
					$_SESSION['applicant_passport'] 	= $customers_id . ".jpg";	
					$_SESSION['customerinformation'] = 	$query1->row(0);
					return 1;	
				}else{
					return 0;
				}			
			}
		}	

		public function getcustomerinfo(){
			$sentInspectorId = $_GET['sentInspectorId'];
			$customerUniqueNumber = $_GET['customerUniqueNumber'];

			// echo $sentInspectorId.' '.$customerUniqueNumber;
			// exit;
			$sqlstr = "SELECT users_account.*, customers_biodata.* FROM users_account LEFT JOIN customers_biodata ON users_account.users_account_id = customers_biodata.inspector_id WHERE customers_biodata.inspector_id = '$sentInspectorId' AND customer_unique_no ='$customerUniqueNumber' AND customers_biodata.contribution_type ='loan-based'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}else{
				return 0;
			}			
		}

		public function getcontributionbasedcustomerinfo(){
			$sentInspectorId = $_GET['sentInspectorId'];
			$customerUniqueNumber = $_GET['customerUniqueNumber'];
			$sqlstr = "SELECT users_account.*, customers_biodata.* FROM users_account LEFT JOIN customers_biodata ON users_account.users_account_id = customers_biodata.inspector_id WHERE customers_biodata.inspector_id = '$sentInspectorId' AND customer_unique_no ='$customerUniqueNumber' AND customers_biodata.contribution_type ='contribution-based'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}else{
				return 0;
			}			
		}

		public function inspectionform(){
			extract($_POST);
			$_SESSION['applicant_signature'] ="";
			$_SESSION['guarantor_signature'] ="";			
			$_SESSION['loan_advancement_agreement_debtor_information'] ="";			
			$inspector_hidden_id = $_SESSION['userinformation']->users_account_id;
			if($guarnator_signature_hidden_tag == "T" && $applicant_signature_hidden_tag == "T"){
				$DataArray 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),


					'applicant_signature'	=> "T",
					'guarantor_signature'	=> "T",
					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
				$DataArrayX 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					// 'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),


					'applicant_signature'	=> "T",
					'guarantor_signature'	=> "T",
					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
			}else if($guarnator_signature_hidden_tag == "T"){
				$DataArray 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),

					'guarantor_signature'	=> "T",
					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
				$DataArrayX 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					// 'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),

					'guarantor_signature'	=> "T",
					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
			}else if($applicant_signature_hidden_tag == "T"){
				$DataArray 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),

					'applicant_signature'	=> "T",
					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
				$DataArrayX 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					// 'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),

					'applicant_signature'	=> "T",
					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
			}else{
				$DataArray 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),

					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
				$DataArray 	= array(
					'inspection_form_user_account_id'	=> trim($inspector_hidden_id),
					// 'inspection_form_customer_unique_no'	=> trim($customer_unique_number),
					'inspector_form_fullname'	=> trim($inspector_form_fullname),
					'inspector_form_position'	=> trim($inspector_form_position),
					'location_to_inspect'	=> trim($location_to_inspect),
					'inspector_form_lga'	=> trim($inspector_form_lga),
					'inspector_form_office_area'	=> trim($inspector_form_office_area),
					'applicant_firstname'	=> trim($applicant_firstname),
					'applicant_surname'	=> trim($applicant_surname),
					'applicant_address'	=> trim($applicant_address),
					'applicant_phone_number'	=> trim($applicant_phone_number),
					'applicant_type_of_business'	=> trim($applicant_type_of_business),
					'applicant_marital_status'	=> trim($applicant_marital_status),
					'applicant_family_member_loan_awarness_status'	=> trim($applicant_family_member_loan_awarness_status),
					'applicant_spouse_fullname'	=> trim($applicant_spouse_fullname),
					'applicant_spouse_address'	=> trim($applicant_spouse_address),
					'applicant_spouse_phone_number'	=> trim($applicant_spouse_phone_number),
					'applicant_spouse_type_business'	=> trim($applicant_spouse_type_business),
					'applicant_guarantor_fullname'	=> trim($applicant_guarantor_fullname),
					'applicant_guarantor_office_address'	=> trim($applicant_guarantor_office_address),
					'applicant_guarantor_home_address'	=> trim($applicant_guarantor_home_address),
					'applicant_guarantor_type_of_business'	=> trim($applicant_guarantor_type_of_business),

					'applicant_guarantor_bank_name'	=> trim($guarantor_bank_name),
					'applicant_guarantor_account_name'	=> trim($guarantor_account_name),
					'applicant_guarantor_bank_account_type'	=> trim($guarantor_bank_account_type),
					'applicant_guarantor_account_number'	=> trim($guarantor_account_number),
					'applicant_guarantor_bvn'	=> trim($guarantor_bvn),

					'inspector_form_loan_amount	'	=> trim($inspector_form_loan_amount),
					'inspector_form_loan_purpose'	=> trim($inspector_form_loan_purpose),
					'inspector_form_loan_participation_history'	=> trim($inspector_form_loan_participation_history),
					'inspector_form_loan_history_statement_status'	=> trim($inspector_form_loan_history_statement_status),
					'inspector_form_manager_fullname'	=> trim($inspector_form_manager_fullname),
					'inspector_form_manager_comment'	=> trim($inspector_form_manager_comment),
					'inspection_form_application_date'	=> trim($inspection_form_application_date)
				);
			}
			// check if previous loan exist and not approved to previous duplicated unapproved laon 
			$sqlstr = "SELECT inspection_form_customer_unique_no FROM inspection_form WHERE inspection_form_customer_unique_no = '$customer_unique_number' AND inspection_form_application_process_status ='F'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				// update inspection table
				if($this->db->where(array('inspection_form_customer_unique_no'=>$customer_unique_number, 'inspection_form_application_process_status'=>'F'))->update('inspection_form',$DataArrayX)){
					$sqlstr = "SELECT inspection_form_id, inspection_form_customer_unique_no FROM inspection_form WHERE inspection_form_user_account_id= '$inspector_hidden_id' AND inspection_form_customer_unique_no='$customer_unique_number' ORDER BY inspection_form_id DESC LIMIT 1";
					$query = $this->db->query($sqlstr);
					if ($query->num_rows() > 0){
						$row = $query->result();
						$inspection_form_id 				=  $query->row(0)->inspection_form_id;
						$inspection_form_customer_unique_no =  $query->row(0)->inspection_form_customer_unique_no;
						$_SESSION['applicant_signature'] 	= $inspection_form_customer_unique_no . ".jpg";	
						$_SESSION['guarantor_signature'] 	= $inspection_form_id . ".jpg";	
						//get loan advancement agreement debtor information
						$inspector_id = $_SESSION['userinformation']->users_account_id;

						$sqlstr1 = "SELECT 
						CONCAT(inspection_form.applicant_firstname, ' ', inspection_form.applicant_surname) AS debtor_fullname, 
						inspection_form.inspection_form_customer_unique_no AS debtor_unique_number, inspection_form.applicant_phone_number AS debtor_phone_number, inspection_form.inspector_form_loan_amount AS loan_amount, inspection_form.applicant_guarantor_bank_name AS guarnator_bank_name, inspection_form.applicant_guarantor_account_name AS guarnator_account_name, inspection_form.applicant_guarantor_account_number AS guarnator_account_number, inspection_form.applicant_guarantor_bvn AS guarnator_bvn, inspection_form.inspection_form_id AS guarnator_signature_id, 
						customers_biodata.customer_bank_name AS customer_bank_name, 
						customers_biodata.customer_bank_account_name AS customer_account_name, customers_biodata.customer_bank_account_number AS customer_account_number, customers_biodata.customer_account_bvn AS customer_bvn, loan_category.loan_category_repayment AS loan_repayment, loan_category.loan_category_savings AS loan_savings,
						CONCAT(users_account.users_account_firstname, ' ', users_account.users_account_lastname) AS users_account_fullname, users_account.users_account_sex AS user_gender
						FROM inspection_form 
						LEFT JOIN loan_category ON inspection_form.inspector_form_loan_amount = loan_category.loan_category_amount 
						LEFT JOIN customers_biodata ON customers_biodata.customer_unique_no = inspection_form.inspection_form_customer_unique_no
						LEFT JOIN users_account ON users_account.users_account_id = inspection_form.inspection_form_user_account_id
						WHERE inspection_form.inspection_form_user_account_id = '$inspector_id' 
						AND inspection_form.inspection_form_customer_unique_no = '$inspection_form_customer_unique_no' 
						ORDER BY inspection_form.inspection_form_id DESC LIMIT 1";
						$query1 = $this->db->query($sqlstr1);
						if ($query1->num_rows() > 0){
							$row1 = $query1->result();
							$_SESSION['loan_advancement_agreement_debtor_information'] 	= $row1;	
							// return json_encode($_SESSION['loan_advancement_agreement_debtor_information'][0]);	
							// return json_encode($row1[0]);	
							return $row1[0];	
						}					
					}else{
						return 0;
					}		
				}			
			}else{
				//check insertion status
				if($this->db->insert('inspection_form',$DataArray)){
					$sqlstr = "SELECT inspection_form_id, inspection_form_customer_unique_no FROM inspection_form WHERE inspection_form_user_account_id= '$inspector_hidden_id' AND inspection_form_customer_unique_no='$customer_unique_number' ORDER BY inspection_form_id DESC LIMIT 1";
					$query = $this->db->query($sqlstr);
					if ($query->num_rows() > 0){
						$row = $query->result();
						$inspection_form_id 				=  $query->row(0)->inspection_form_id;
						$inspection_form_customer_unique_no =  $query->row(0)->inspection_form_customer_unique_no;
						$_SESSION['applicant_signature'] 	= $inspection_form_customer_unique_no . ".jpg";	
						$_SESSION['guarantor_signature'] 	= $inspection_form_id . ".jpg";	
						//get loan advancement agreement debtor information
						$inspector_id = $_SESSION['userinformation']->users_account_id;

						$sqlstr1 = "SELECT 
						CONCAT(inspection_form.applicant_firstname, ' ', inspection_form.applicant_surname) AS debtor_fullname, 
						inspection_form.inspection_form_customer_unique_no AS debtor_unique_number, inspection_form.applicant_phone_number AS debtor_phone_number, inspection_form.inspector_form_loan_amount AS loan_amount, inspection_form.applicant_guarantor_bank_name AS guarnator_bank_name, inspection_form.applicant_guarantor_account_name AS guarnator_account_name, inspection_form.applicant_guarantor_account_number AS guarnator_account_number, inspection_form.applicant_guarantor_bvn AS guarnator_bvn, inspection_form.inspection_form_id AS guarnator_signature_id, 
						customers_biodata.customer_bank_name AS customer_bank_name, customers_biodata.customer_bank_account_name AS customer_account_name, customers_biodata.customer_bank_account_number AS customer_account_number, customers_biodata.customer_account_bvn AS customer_bvn, loan_category.loan_category_repayment AS loan_repayment, loan_category.loan_category_savings AS loan_savings,
						CONCAT(users_account.users_account_firstname, ' ', users_account.users_account_lastname) AS users_account_fullname, users_account.users_account_sex AS user_gender
						FROM inspection_form 
						LEFT JOIN loan_category ON inspection_form.inspector_form_loan_amount = loan_category.loan_category_amount 
						LEFT JOIN customers_biodata ON customers_biodata.customer_unique_no = inspection_form.inspection_form_customer_unique_no
						LEFT JOIN users_account ON users_account.users_account_id = inspection_form.inspection_form_user_account_id
						WHERE inspection_form.inspection_form_user_account_id = '$inspector_id' 
						AND inspection_form.inspection_form_customer_unique_no = '$inspection_form_customer_unique_no' 
						ORDER BY inspection_form.inspection_form_id DESC LIMIT 1";
						$query1 = $this->db->query($sqlstr1);
						if ($query1->num_rows() > 0){
							$row1 = $query1->result();
							$_SESSION['loan_advancement_agreement_debtor_information'] 	= $row1;	
							// return json_encode($_SESSION['loan_advancement_agreement_debtor_information'][0]);	
							// return json_encode($row1[0]);	
							return $row1[0];	
						}					
					}else{
						return 0;
					}
				}else{
					//insertion failed
				}
			}
		}

		public function approvecontribution(){
			extract($_POST);
			// $_SESSION['approved_contribution_information'] ="";			
			$inspector_hidden_id = $_SESSION['userinformation']->users_account_id;
			
			$DataArray 	= array(
				'contribution_request_inspector_user_account_id'	=> trim($inspector_hidden_id),
				'contribution_request_customer_unique_no'	=> trim($customer_unique_number),
				'contribution_request_amount'	=> trim($contribution_amount),
				'contribution_request_date'	=> trim($contribution_date),
				// 'contribution_request_start'	=> "F"
				'contribution_request_status'	=> "Approved"
			);

			// check if previous contribution exist and not started to prevent duplicate
			$sqlstr = "SELECT contribution_request_status FROM contribution_request WHERE contribution_request_inspector_user_account_id = '$inspector_hidden_id' AND contribution_request_customer_unique_no = '$customer_unique_number' AND contribution_request_start ='F'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				// update contribution request table
				if($this->db->where(array('contribution_request_inspector_user_account_id'=>$inspector_hidden_id, 'contribution_request_customer_unique_no'=>$customer_unique_number, 'contribution_request_start'=>'F'))->update('contribution_request',$DataArray)){
					return 1;
					// $sqlstr1 = "SELECT 
					// CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS contributors_fullname, 
					// customers_biodata.customer_unique_no AS contributors_unique_number, customers_biodata.customer_phone_number AS contributors_phone_number, customers_biodata.inspector_id As inspector_id, contribution_request.contribution_request_amount AS contribution_amount, contribution_request.contribution_request_id AS contribution_request_id FROM customers_biodata 
					// LEFT JOIN contribution_request ON customers_biodata.customer_unique_no = contribution_request.contribution_request_customer_unique_no
					// WHERE contribution_request.contribution_request_inspector_user_account_id = '$inspector_hidden_id' 
					// AND customers_biodata.customer_unique_no = '$customer_unique_number' 
					// AND contribution_request.contribution_request_start = 'F' 
					// ORDER BY contribution_request.contribution_request_id DESC LIMIT 1";
					// $query1 = $this->db->query($sqlstr1);
					// if ($query1->num_rows() > 0){
					// 	$row1 = $query1->result();
					// 	$_SESSION['approved_contribution_information'] 	= $row1[0];	
					// 	return 1;	
					// }else{
					// 	return 0;
					// }				
				}else{
					// updating failed
					return 0;
				}		
			}else{
				//check insertion status
				if($this->db->insert('contribution_request',$DataArray)){
					return 1;
					// $sqlstr1 = "SELECT 
					// CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS contributors_fullname, 
					// customers_biodata.customer_unique_no AS contributors_unique_number, customers_biodata.customer_phone_number AS contributors_phone_number, customers_biodata.inspector_id As inspector_id, contribution_request.contribution_request_amount AS contribution_amount, contribution_request.contribution_request_id AS contribution_request_id FROM customers_biodata 
					// LEFT JOIN contribution_request ON customers_biodata.customer_unique_no = contribution_request.contribution_request_customer_unique_no
					// WHERE contribution_request.contribution_request_inspector_user_account_id = '$inspector_hidden_id' 
					// -- AND customers_biodata.customer_unique_no = '$customer_unique_number' 
					// AND contribution_request.contribution_request_start = 'F' 
					// ORDER BY contribution_request.contribution_request_id DESC LIMIT 1";
					// $query1 = $this->db->query($sqlstr1);
					// if ($query1->num_rows() > 0){
					// 	$row1 = $query1->result();
					// 	$_SESSION['approved_contribution_information'] 	= $row1[0];	
					// 	return 1;	
					// }else{
					// 	return 0;
					// }		
				}else{
					//insertion failed
					return 0;
				}
			}
		}

		public function submitloanagreement(){
			extract($_POST);
			$_SESSION['grantor_signature'] ="";
			$loan_advance_agreement_inspection_form_id = $_SESSION['loan_advancement_agreement_debtor_information'][0]->guarnator_signature_id;
			$loan_advance_agreement_applicant_account_no = $_SESSION['loan_advancement_agreement_debtor_information'][0]->debtor_unique_number;
			if($loan_agreement_grantor_signature_hidden_tag == "T"){
				$DataArray 	= array(
					'loan_advance_agreement_inspection_form_id'		=> trim($loan_advance_agreement_inspection_form_id),
					'loan_advance_agreement_applicant_account_no'	=> trim($loan_advance_agreement_applicant_account_no),
					'grantor_signature'								=> "T"
				);
			}else{
				$DataArray 	= array(
					'loan_advance_agreement_inspection_form_id'		=> trim($loan_advance_agreement_inspection_form_id),
					'loan_advance_agreement_applicant_account_no'	=> trim($loan_advance_agreement_applicant_account_no)
				);				
			}
			// check if previous loan exist and not approved to previous duplicated unapproved laon 
			$sqlstr = "SELECT loan_advance_agreement_applicant_account_no FROM loan_advance_agreement WHERE loan_advance_agreement_applicant_account_no = '$loan_advance_agreement_applicant_account_no' AND loan_setup_fee_payment_status ='F'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
				// update loan by loan advance agreement account no
				$sqlstr = "UPDATE loan_advance_agreement SET loan_advance_agreement_inspection_form_id='$loan_advance_agreement_inspection_form_id'
				WHERE loan_advance_agreement_applicant_account_no = '$loan_advance_agreement_applicant_account_no' AND loan_setup_fee_payment_status ='F'";
				$query = $this->db->query($sqlstr);

				//update inspection form table inspection_form_application_process_status
				$sqlstr = "UPDATE inspection_form SET inspection_form_application_process_status='T'
				WHERE inspection_form_customer_unique_no = '$loan_advance_agreement_applicant_account_no'";
				$query = $this->db->query($sqlstr);

				$sqlstr = "SELECT loan_advance_agreement_id FROM loan_advance_agreement WHERE loan_advance_agreement_applicant_account_no= '$loan_advance_agreement_applicant_account_no' ORDER BY loan_advance_agreement_id DESC LIMIT 1";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					$loan_advance_agreement_id = $query->row(0)->loan_advance_agreement_id;
					$_SESSION['grantor_signature'] = $loan_advance_agreement_id.".jpg";
					return 1;
				}else{
					return 0;
				}				
				
			}else{
				//check insertion status
				if($this->db->insert('loan_advance_agreement',$DataArray)){
					//update inspection form table inspection_form_application_process_status
					$sqlstr = "UPDATE inspection_form SET inspection_form_application_process_status='T'
					WHERE inspection_form_customer_unique_no = '$loan_advance_agreement_applicant_account_no'";
					$query = $this->db->query($sqlstr);

					$sqlstr = "SELECT loan_advance_agreement_id FROM loan_advance_agreement WHERE loan_advance_agreement_applicant_account_no= '$loan_advance_agreement_applicant_account_no' ORDER BY loan_advance_agreement_id DESC LIMIT 1";
					$query = $this->db->query($sqlstr);
					if ($query->num_rows() > 0){
						$loan_advance_agreement_id = $query->row(0)->loan_advance_agreement_id;
						$_SESSION['grantor_signature'] = $loan_advance_agreement_id.".jpg";
						return 1;
					}else{
						return 0;
					}
				}else{
					//insertion failed
				}				
			}			
		}

		public function populatloanrequesttable(){
			extract($_POST);
			// $_SESSION['loan_advance_agreement_information']  = "";
			$userId = $_SESSION['userinformation']->users_account_id;
			$sqlstr	= "SELECT loan_advance_agreement.*, CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname
			 FROM loan_advance_agreement 
			 LEFT JOIN customers_biodata ON loan_advance_agreement.loan_advance_agreement_applicant_account_no = customers_biodata.customer_unique_no 
			 LEFT JOIN inspection_form ON inspection_form.inspection_form_id = loan_advance_agreement.loan_advance_agreement_inspection_form_id 
			 WHERE loan_advance_agreement.loan_setup_fee_payment_status='F' AND inspection_form.inspection_form_user_account_id='$userId'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
				// $_SESSION['loan_advance_agreement_information']  = $row;
	            return json_encode($row);
			}else{
				return 0;
			}
		}

		public function populatloanrequesttableforloandisbursement(){
			extract($_POST);
			// $_SESSION['loan_advance_agreement_information']  = "";
			$userId = $_SESSION['userinformation']->users_account_id;
			$sqlstr	= "SELECT loan_advance_agreement.*, CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname
			 FROM loan_advance_agreement 
			 LEFT JOIN customers_biodata ON loan_advance_agreement.loan_advance_agreement_applicant_account_no = customers_biodata.customer_unique_no 
			 LEFT JOIN inspection_form ON inspection_form.inspection_form_id = loan_advance_agreement.loan_advance_agreement_inspection_form_id 
			 WHERE loan_advance_agreement.loan_setup_fee_payment_status='T' AND loan_advance_agreement.loan_disbursement_status='F' AND inspection_form.inspection_form_user_account_id='$userId'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
				// $_SESSION['loan_advance_agreement_information']  = $row;
	            return json_encode($row);
			}else{
				return 0;
			}
		}

		public function populatcontributionrequesttable(){
			extract($_POST);
			// $_SESSION['approved_contribution_information'] ="";	
			$userId = $_SESSION['userinformation']->users_account_id;
			$sqlstr	= "SELECT CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname, customers_biodata.customer_unique_no AS customer_unique_id FROM contribution_request 
			LEFT JOIN customers_biodata ON contribution_request.contribution_request_customer_unique_no = customers_biodata.customer_unique_no
			WHERE contribution_request.contribution_request_inspector_user_account_id='$userId' 
			AND contribution_request.contribution_request_start='F'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
				// $_SESSION['approved_contribution_information']  = $row;
	            return json_encode($row);
			}else{
				return 0;
			}
		}
		
		public function retrieveuserbyloanagreementforloandisbursement(){
			$_SESSION['loan_details']  = "";
			$sendLoanAgreementId = $_POST['sendLoanAgreementId'];
			$sqlstr	= "SELECT loan_advance_agreement.*, CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname,
			 customers_biodata.customers_id AS customer_passport_id, 
			 customers_biodata.customer_phone_number AS customer_phone_number,
			 customers_biodata.customer_account_bvn AS customer_account_bvn,
			 customers_biodata.home_address AS applicant_home_address,
			 customers_biodata.business_address AS applicant_business_address,
			 customers_biodata.business_type AS applicant_business_type,
			 inspection_form.inspector_form_loan_purpose AS inspector_form_loan_purpose,
			 inspection_form.inspector_form_loan_amount AS inspector_form_loan_amount,

			 loan_category.loan_category_interest AS loan_interest,
			 loan_category.loan_category_repayment AS loan_repayment,
			 loan_category.loan_category_savings AS loan_savings,
			 loan_category.loan_category_form_fees AS loan_form_fee,
			 loan_category.loan_category_disbursement_fees AS loan_disbursement_fee,
			 loan_category.loan_category_insurance_fees AS loan_insurance_fee

			 FROM loan_advance_agreement 
			 LEFT JOIN customers_biodata ON loan_advance_agreement.loan_advance_agreement_applicant_account_no = customers_biodata.customer_unique_no 
			 LEFT JOIN inspection_form ON inspection_form.inspection_form_id = loan_advance_agreement.loan_advance_agreement_inspection_form_id 

			 LEFT JOIN loan_category ON loan_category.loan_category_amount = inspection_form.inspector_form_loan_amount 

			 WHERE loan_advance_agreement.loan_setup_fee_payment_status='T' AND loan_advance_agreement.loan_advance_agreement_id='$sendLoanAgreementId'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
				// $_SESSION['loan_advance_agreement_information']  = $row;
				$_SESSION['loan_details'] = $row;
	            return json_encode($row);
			}else{
				return 0;
			}		
		}	

		public function retrieveloandefaulters(){
			$_SESSION['loan_details']  = "";
			$sendLoanAgreementId = $_POST['sendLoanAgreementId'];
			$sqlstr	= "SELECT loan_advance_agreement.*, CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname,
			 customers_biodata.customers_id AS customer_passport_id, 
			 customers_biodata.customer_phone_number AS customer_phone_number,
			 customers_biodata.customer_account_bvn AS customer_account_bvn,
			 customers_biodata.home_address AS applicant_home_address,
			 customers_biodata.business_address AS applicant_business_address,
			 customers_biodata.business_type AS applicant_business_type,
			 inspection_form.inspector_form_loan_purpose AS inspector_form_loan_purpose,
			 inspection_form.inspector_form_loan_amount AS inspector_form_loan_amount,

			 loan_category.loan_category_interest AS loan_interest,
			 loan_category.loan_category_repayment AS loan_repayment,
			 loan_category.loan_category_savings AS loan_savings,
			 loan_category.loan_category_form_fees AS loan_form_fee,
			 loan_category.loan_category_disbursement_fees AS loan_disbursement_fee,
			 loan_category.loan_category_insurance_fees AS loan_insurance_fee

			 FROM loan_advance_agreement 
			 LEFT JOIN customers_biodata ON loan_advance_agreement.loan_advance_agreement_applicant_account_no = customers_biodata.customer_unique_no 
			 LEFT JOIN inspection_form ON inspection_form.inspection_form_id = loan_advance_agreement.loan_advance_agreement_inspection_form_id 

			 LEFT JOIN loan_category ON loan_category.loan_category_amount = inspection_form.inspector_form_loan_amount 

			 WHERE loan_advance_agreement.loan_setup_fee_payment_status='T' AND loan_advance_agreement.loan_advance_agreement_id='$sendLoanAgreementId'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
				// $_SESSION['loan_advance_agreement_information']  = $row;
				$_SESSION['loan_details'] = $row;
	            return json_encode($row);
			}else{
				return 0;
			}		
		}	

		public function retrieveinfoforcontributionsetup(){
			$_SESSION['initiated_contribution_information'] ="";	
			$sendCustomerUniqueId = $_POST['sendCustomerUniqueId'];
			$sqlstr	= "SELECT *, contribution_request.contribution_request_id AS request_id, contribution_request.contribution_request_amount AS contribution_amount FROM customers_biodata
			LEFT JOIN contribution_request
			ON customers_biodata.customer_unique_no = contribution_request.contribution_request_customer_unique_no
			WHERE customer_unique_no='$sendCustomerUniqueId' AND contribution_request.contribution_request_start='F'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
				$_SESSION['initiated_contribution_information']  = $row;
	            return json_encode($row);
			}else{
				return 0;
			}		
		}	

		public function retrieveuserbyloanagreementforformsetupfee(){
			// $_SESSION['loan_details']  = "";
			$sendLoanAgreementId = $_POST['sendLoanAgreementId'];
			$sqlstr	= "SELECT 

			 customers_biodata.customers_id AS customer_passport_id, 			 
			--  loan_advance_agreement.loan_advance_agreement_id AS loan_advance_agreement_id, 
			 loan_advance_agreement.loan_advance_agreement_applicant_account_no AS applicant_account_no, 

			 loan_category.loan_category_amount AS loan_amount,
			 loan_category.loan_category_interest AS loan_interest,
			 loan_category.loan_category_form_fees AS loan_form_fee,
			 loan_category.loan_category_disbursement_fees AS loan_disbursement_fee,
			 loan_category.loan_category_insurance_fees AS loan_insurance_fee


			 FROM loan_advance_agreement 

			 LEFT JOIN customers_biodata ON loan_advance_agreement.loan_advance_agreement_applicant_account_no = customers_biodata.customer_unique_no 

			 LEFT JOIN inspection_form ON inspection_form.inspection_form_id = loan_advance_agreement.loan_advance_agreement_inspection_form_id 

			 LEFT JOIN loan_category ON loan_category.loan_category_amount = inspection_form.inspector_form_loan_amount 

			 WHERE loan_advance_agreement.loan_setup_fee_payment_status='F' AND loan_advance_agreement.loan_advance_agreement_id='$sendLoanAgreementId'";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
				// $_SESSION['loan_advance_agreement_information']  = $row;
				// $_SESSION['loan_details'] = $row;
	            return json_encode($row);
			}else{
				return 0;
			}		
		}		

		public function loansetupfee(){
			extract($_POST);
			$customeruniquenumber = $customer_unique_number;
			$DataArray 	= array(
				'loan_setup_fee_advance_agreement_id'	=> $loanAdvancementId
			);
			if($this->db->insert('loan_setup_fee', $DataArray)){				
				$sqlstr	= "UPDATE loan_advance_agreement SET loan_setup_fee_payment_status='T' WHERE loan_advance_agreement_applicant_account_no='$customeruniquenumber' AND loan_advance_agreement_id ='$loanAdvancementId'";
				if ($this->db->query($sqlstr)){
					$loanrequest = $this->populatloanrequesttable();
					return $loanrequest;
				}else{
					return -1;
				}					
			}else{
				return -1;
			}			
		}

		public function processdisburseloan(){
			extract($_POST);
			$accountingyear = "";
			$loan_advance_agreement_id = $_SESSION['loan_details'][0]->loan_advance_agreement_id;
			$inspector_form_loan_purpose = $_SESSION['loan_details'][0]->inspector_form_loan_purpose;
			$inspector_form_loan_amount = $_SESSION['loan_details'][0]->inspector_form_loan_amount;
			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				$TransactionYearDataArray 	= array(
					'account_number'						=> $customer_unique_number,
					'transaction_year_advance_agreement_id'	=> $loan_advance_agreement_id,
					'particulars'							=> "DEBIT, ". $inspector_form_loan_purpose,
					'loan_dr'								=> $inspector_form_loan_amount,
					'loan_cr'								=> 0,
					'loan_bl'								=> "-".$inspector_form_loan_amount,
					
					'repayment_dr'							=> 0,
					'repayment_cr'							=> 0,
					'repayment_bl'							=> 0,

					'savings_dr'							=> 0,
					'savings_cr'							=> 0,
					'savings_bl'							=> 0,
					
					'dayid'									=> 0,
					'dayname'								=> 0,
					'week'									=> 0,
					'transaction_month_name'				=> $this->getthemonthname(date('m')),
					'transaction_month_id'					=> date('m'),
					'year'									=> $accountingyear,
					// 'transaction_date'	=> $_SESSION['loan_details'][0]->loan_disbursement_fee,
					// 'transaction_date_q'	=> $_SESSION['loan_details'][0]->loan_disbursement_fee,
					'contribution_type'		=> 'loan-based',
					// 'complete_repayment_status'		=> "",
					'loan_status'							=> "Active"
				);

						
				if($this->db->insert('loan_transaction_'.$accountingyear, $TransactionYearDataArray)){
					//update loan fee setup table loan disbursement status
					$sqlstr	= "UPDATE loan_setup_fee SET loan_disbursement_status='T' WHERE loan_setup_fee_advance_agreement_id='$loan_advance_agreement_id'";
					$sqlstr2	= "UPDATE loan_advance_agreement SET loan_disbursement_status='T' WHERE loan_advance_agreement_id='$loan_advance_agreement_id'";
					if ($this->db->query($sqlstr) && $this->db->query($sqlstr2)){
						$loanfordisbursement = $this->populatloanrequesttableforloandisbursement();
						return $loanfordisbursement;
					}						
				}
			}else{
				return -1;
			}
		}

		public function flagoffaccount(){
			extract($_POST);
			$accountingyear = "";
			// $loan_advance_agreement_id = $_SESSION['loan_details'][0]->loan_advance_agreement_id;
			// $inspector_form_loan_purpose = $_SESSION['loan_details'][0]->inspector_form_loan_purpose;
			// $inspector_form_loan_amount = $_SESSION['loan_details'][0]->inspector_form_loan_amount;

			$customer_unique_number = $customer_unique_number;
			$loanadvanceagreementid = $loanAdvancementId;

			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				$TransactionYearDataArray 	= array(
					'defaulter_account_no'		=> $customer_unique_number,
					'defaulter_agreement_id'	=> $loanAdvancementId,
					'defaulter_amount'	=> '2500',
					// 'default_time'	=> '2500',
					'default_year'	=> $accountingyear
				);

				$sqlstr	= "SELECT * FROM defaulters WHERE defaulter_agreement_id='$loanadvanceagreementid'";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					return 2;
				}else{
					if($this->db->insert('defaulters', $TransactionYearDataArray)){
						return 1;
					}					
					return 0;
				}
			}else{
				return -1;
			}
		}

		public function proceedwithcontribution(){
			extract($_POST);
			$accountingyear = "";
			$userId = $_SESSION['userinformation']->users_account_id;
			$customer_unique_no = $_SESSION['initiated_contribution_information'][0]->customer_unique_no;
			$customer_contribution_id = $_SESSION['initiated_contribution_information'][0]->request_id;
			$contribution_amount = $_SESSION['initiated_contribution_information'][0]->contribution_amount;
			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				$TransactionYearDataArray 	= array(
					'account_number'					=> $customer_unique_no,
					'customer_contribution_id'			=> $customer_contribution_id,
					'contribution_amount'				=> $contribution_amount,
					'contribution_cr'					=> 0,
					'contribution_bl'					=> 0,
					'dayid'								=> 0,
					'transaction_month_name'			=> $this->getthemonthname(date('m')),
					'transaction_month_id'				=> date('m'),
					'year'								=> $accountingyear
				);
				if($this->db->insert('dialy_contribution_transaction_'.$accountingyear, $TransactionYearDataArray)){
					//update loan fee setup table loan disbursement status
					$sqlstr	= "UPDATE contribution_request SET contribution_request_start='T' WHERE contribution_request_id='$customer_contribution_id' AND contribution_request_start='F'";
					if ($this->db->query($sqlstr)){
						$sqlstr	= "SELECT CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname, customers_biodata.customer_unique_no AS customer_unique_id FROM contribution_request 
						LEFT JOIN customers_biodata ON contribution_request.contribution_request_customer_unique_no = customers_biodata.customer_unique_no
						WHERE contribution_request.contribution_request_inspector_user_account_id='$userId' 
						AND contribution_request.contribution_request_start='F'";
						$query = $this->db->query($sqlstr);
						if ($query->num_rows() > 0){
							$row = $query->result();
							// $_SESSION['approved_contribution_information']  = $row;
							return json_encode($row);
						}else{
							return 2;
						}	
					}else{
						return -2;
					}										
				}
			}else{
				return -1;
			}
		}

		public function populateuserstable(){
			extract($_POST);
			$sqlstr	= "SELECT * FROM users_account";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() > 0){
	            $row = $query->result();
	            return json_encode($row);
			}
		}	

		
		public function getdebtorsandsavingsbyinspector(){
			extract($_POST);
			//debtors
			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "loan_transaction_".$accountingyear;
			$inspectorId = $_SESSION['userinformation']->users_account_id;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				//Get Debtor
				$sqlstr	= "SELECT $transactionYear.*, ";
				$sqlstr	.= "CONCAT(customers_biodata.firstname,' ', customers_biodata.surname) AS fullname, ";
				$sqlstr	.= "loan_category.loan_category_savings AS savings, ";
				$sqlstr	.= "loan_category.loan_category_repayment AS repayment, ";
				$sqlstr	.= "loan_category.loan_category_amount AS amount ";

				$sqlstr	.= "FROM $transactionYear ";

				$sqlstr	.= "LEFT JOIN customers_biodata ON $transactionYear.account_number = customers_biodata.customer_unique_no ";
				$sqlstr	.= "LEFT JOIN loan_category ON $transactionYear.loan_dr = loan_category.loan_category_amount ";
				$sqlstr	.= "LEFT JOIN loan_advance_agreement ON $transactionYear.transaction_year_advance_agreement_id = loan_advance_agreement.loan_advance_agreement_id ";
				$sqlstr	.= "LEFT JOIN inspection_form ON loan_advance_agreement.loan_advance_agreement_inspection_form_id = inspection_form.inspection_form_id ";

				// $sqlstr	.= "WHERE $transactionYear.savings_dr <> '' && $transactionYear.complete_repayment_status = 'F' && $transactionYear.loan_status = 'Active' ";
				$sqlstr	.= "WHERE $transactionYear.repayment_cr = '0' && $transactionYear.complete_repayment_status = 'F' && $transactionYear.loan_status = 'Active' ";
				$sqlstr	.= "&& inspection_form.inspection_form_user_account_id = '$inspectorId' ORDER BY $transactionYear.transaction_year_id ASC";

				$query = $this->db->query($sqlstr);

				//Get Savings
				$sqlstr1	= "SELECT $transactionYear.*, ";
				$sqlstr1	.= "CONCAT(customers_biodata.firstname,' ', customers_biodata.surname) AS fullname ";

				$sqlstr1	.= "FROM $transactionYear ";

				$sqlstr1	.= "LEFT JOIN customers_biodata ON $transactionYear.account_number = customers_biodata.customer_unique_no ";

				$sqlstr1	.= "LEFT JOIN loan_category ON $transactionYear.loan_dr = loan_category.loan_category_amount ";

				$sqlstr1	.= "LEFT JOIN loan_advance_agreement ON $transactionYear.transaction_year_advance_agreement_id = loan_advance_agreement.loan_advance_agreement_id ";
				$sqlstr1	.= "LEFT JOIN inspection_form ON loan_advance_agreement.loan_advance_agreement_inspection_form_id = inspection_form.inspection_form_id ";

				$sqlstr1	.= "WHERE $transactionYear.repayment_cr <> '0' && ($transactionYear.complete_repayment_status = 'F' || $transactionYear.complete_repayment_status = 'T') && ($transactionYear.loan_status = 'Active' || $transactionYear.loan_status = 'Completed') ";
				$sqlstr1	.= "&& inspection_form.inspection_form_user_account_id = '$inspectorId' && $transactionYear.week='$week' ";
				$sqlstr1	.= "ORDER BY $transactionYear.transaction_year_id ASC";

				$query1 = $this->db->query($sqlstr1);				

				if ($query->num_rows() > 0){
					$debtors = $query->result();
					$repayment = $query1->result();
					$string = array(
						'row'=> $debtors,
						'column'=> $repayment
					);
					return json_encode($string);
				}else{
					return 0;
				}
			}else{
				return -1;
			}
		}		

		public function getcontributionbyinspector(){
			extract($_POST);
			//debtors
			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "loan_transaction_".$accountingyear;
			$inspectorId = $_SESSION['userinformation']->users_account_id;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				//Get Debtor
				$sqlstr	= "SELECT $transactionYear.*, ";
				$sqlstr	.= "CONCAT(customers_biodata.firstname,' ', customers_biodata.surname) AS fullname, ";
				$sqlstr	.= "loan_category.loan_category_savings AS savings, ";
				$sqlstr	.= "loan_category.loan_category_repayment AS repayment, ";
				$sqlstr	.= "loan_category.loan_category_amount AS amount ";

				$sqlstr	.= "FROM $transactionYear ";

				$sqlstr	.= "LEFT JOIN customers_biodata ON $transactionYear.account_number = customers_biodata.customer_unique_no ";
				$sqlstr	.= "LEFT JOIN loan_category ON $transactionYear.loan_dr = loan_category.loan_category_amount ";
				$sqlstr	.= "LEFT JOIN loan_advance_agreement ON $transactionYear.transaction_year_advance_agreement_id = loan_advance_agreement.loan_advance_agreement_id ";
				$sqlstr	.= "LEFT JOIN inspection_form ON loan_advance_agreement.loan_advance_agreement_inspection_form_id = inspection_form.inspection_form_id ";

				// $sqlstr	.= "WHERE $transactionYear.savings_dr <> '' && $transactionYear.complete_repayment_status = 'F' && $transactionYear.loan_status = 'Active' ";
				$sqlstr	.= "WHERE $transactionYear.repayment_cr = '0' && $transactionYear.complete_repayment_status = 'F' && $transactionYear.loan_status = 'Active' ";
				$sqlstr	.= "&& inspection_form.inspection_form_user_account_id = '$inspectorId' ORDER BY $transactionYear.transaction_year_id ASC";

				$query = $this->db->query($sqlstr);

				//Get Savings
				$sqlstr1	= "SELECT $transactionYear.*, ";
				$sqlstr1	.= "CONCAT(customers_biodata.firstname,' ', customers_biodata.surname) AS fullname ";

				$sqlstr1	.= "FROM $transactionYear ";

				$sqlstr1	.= "LEFT JOIN customers_biodata ON $transactionYear.account_number = customers_biodata.customer_unique_no ";

				$sqlstr1	.= "LEFT JOIN loan_category ON $transactionYear.loan_dr = loan_category.loan_category_amount ";

				$sqlstr1	.= "LEFT JOIN loan_advance_agreement ON $transactionYear.transaction_year_advance_agreement_id = loan_advance_agreement.loan_advance_agreement_id ";
				$sqlstr1	.= "LEFT JOIN inspection_form ON loan_advance_agreement.loan_advance_agreement_inspection_form_id = inspection_form.inspection_form_id ";

				// $sqlstr1	.= "WHERE $transactionYear.savings_dr = '' && $transactionYear.complete_repayment_status = 'F' && $transactionYear.loan_status = 'Active' ";
				$sqlstr1	.= "WHERE $transactionYear.repayment_cr <> '0' && $transactionYear.complete_repayment_status = 'F' && $transactionYear.loan_status = 'Active' ";
				$sqlstr1	.= "&& inspection_form.inspection_form_user_account_id = '$inspectorId' && $transactionYear.week='$week' ";
				$sqlstr1	.= "ORDER BY $transactionYear.transaction_year_id ASC";

				$query1 = $this->db->query($sqlstr1);				

				if ($query->num_rows() > 0){
					$debtors = $query->result();
					$repayment = $query1->result();
					$string = array(
						'row'=> $debtors,
						'column'=> $repayment
					);
					return json_encode($string);
				}else{
					return 0;
				}
			}else{
				return -1;
			}
		}		

		public function getcontributors(){
			//get the contributors
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "dialy_contribution_transaction_".$accountingyear;
			$inspectorId = $_SESSION['userinformation']->users_account_id;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				//Get Contributors
				$sqlstr	= "SELECT $transactionYear.*, CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) As fullname FROM $transactionYear ";
				$sqlstr	.= "LEFT JOIN contribution_request ";
				$sqlstr	.= "ON $transactionYear.customer_contribution_id = contribution_request.contribution_request_id ";
				$sqlstr	.= "LEFT JOIN customers_biodata ";
				$sqlstr	.= "ON $transactionYear.account_number = customers_biodata.customer_unique_no ";
				$sqlstr	.= "WHERE complete_contribution_status='F' AND contribution_request.contribution_request_inspector_user_account_id='$inspectorId' && contribution_cr = '0' ORDER BY dialy_contribution_year_id ASC";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					$result = $query->result();
					// return json_encode($result);
					// exit;
					$tr = ''; $recordNo = 0;
					for($i = 0; $i < count($result); $i++){
						$recordNo++;
						$btn = "<button type='button' class='btn btn-primary' id='".$result[$i]->dialy_contribution_year_id."' onclick='previewContributorByContributorYearId(this.id)'>Preview</button>";
						$tr .= "<tr>";
							$tr .= "<td scope='col' colspan='' style=''>$recordNo</td>";
							$tr .= "<td scope='col' colspan='' style=''>" .$result[$i]->account_number. "</td>";
							$tr .= "<td scope='col' colspan='' style=''>" .$result[$i]->fullname. "</td>";
							$tr .= "<td scope='col' colspan='' style=''>" .$btn. "</td>";
						$tr .= "<tr>";
					}
					return $tr;				
				}else{
					return 0;
				}
			}else{
				return -1;
			}
		}	
		
		public function dailycontributioncard(){
			$sendDailyContributionYearId = $_POST['sendDailyContributionYearId'];
			// echo $sendDailyContributionYearId;
			// exit;
			//debtors
			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "dialy_contribution_transaction_".$accountingyear;
			// echo $transactionYear;
			// exit;
			$inspectorId = $_SESSION['userinformation']->users_account_id;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				// echo 88;
				// exit;
				//Get contributors
				$sqlstr	= "SELECT $transactionYear.*, ";
				$sqlstr	.= "CONCAT(customers_biodata.firstname,' ', customers_biodata.surname) AS fullname ";

				$sqlstr	.= "FROM $transactionYear ";

				$sqlstr	.= "LEFT JOIN customers_biodata ON $transactionYear.account_number = customers_biodata.customer_unique_no ";
				$sqlstr	.= "LEFT JOIN contribution_request ON $transactionYear.customer_contribution_id = contribution_request.contribution_request_id ";
				
				$sqlstr	.= "WHERE $transactionYear.contribution_cr = '0' && $transactionYear.complete_contribution_status = 'F' && $transactionYear.contribution_status = 'Active' ";
				$sqlstr	.= "&& contribution_request.contribution_request_inspector_user_account_id = '$inspectorId' ";
				$sqlstr	.= "&& $transactionYear.dialy_contribution_year_id = '$sendDailyContributionYearId' ";
				$sqlstr	.= "ORDER BY $transactionYear.dialy_contribution_year_id ASC";

				// echo $sqlstr;
				// exit;

				// echo $sqlstr;
				// exit;

				$query = $this->db->query($sqlstr);

				//Get contributions
				$sqlstr1	= "SELECT $transactionYear.*, ";
				$sqlstr1	.= "CONCAT(customers_biodata.firstname,' ', customers_biodata.surname) AS fullname ";

				$sqlstr1	.= "FROM $transactionYear ";

				$sqlstr1	.= "LEFT JOIN customers_biodata ON $transactionYear.account_number = customers_biodata.customer_unique_no ";
				$sqlstr1	.= "LEFT JOIN contribution_request ON $transactionYear.customer_contribution_id = contribution_request.contribution_request_id ";
				
				$sqlstr1	.= "WHERE $transactionYear.contribution_cr <> '0' && ($transactionYear.complete_contribution_status = 'F' || $transactionYear.complete_contribution_status = 'T') && ($transactionYear.contribution_status = 'Active' || $transactionYear.contribution_status = 'Completed') ";
				$sqlstr1	.= "&& contribution_request.contribution_request_inspector_user_account_id = '$inspectorId' ";
				// $sqlstr1	.= "&& $transactionYear.dialy_contribution_year_id = '$sendDailyContributionYearId' ";
				$sqlstr1	.= "ORDER BY $transactionYear.dialy_contribution_year_id ASC";

				// echo $sqlstr1;
				// exit;

				$query1 = $this->db->query($sqlstr1);	
				
				

				if ($query->num_rows() > 0){
					$contributors = $query->result();
					$contributions = $query1->result();
					$string = array(
						'row'=> $contributors,
						'column'=> $contributions
					);
					return json_encode($string);
				}else{
					return 0;
				}
			}else{
				return -1;
			}
		}	

		public function populatloan25thdaydefualtertable(){
			//get the defaulters
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "loan_transaction_".$accountingyear;
			$inspectorId = $_SESSION['userinformation']->users_account_id;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				$sqlstr	= "SELECT $transactionYear.*, CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname

				FROM $transactionYear
				
				LEFT JOIN customers_biodata ON account_number = customers_biodata.customer_unique_no 
				
				LEFT JOIN loan_advance_agreement ON transaction_year_advance_agreement_id = loan_advance_agreement.loan_advance_agreement_id 

				LEFT JOIN inspection_form ON loan_advance_agreement.loan_advance_agreement_inspection_form_id = inspection_form.inspection_form_id

				WHERE inspection_form.inspection_form_user_account_id='$inspectorId' ORDER BY transaction_year_id DESC";

			   $query = $this->db->query($sqlstr);
			   if ($query->num_rows() > 0){
				   $row = $query->result();
				   // $_SESSION['loan_advance_agreement_information']  = $row;
				   return json_encode($row);
			   }else{
				   return 0;
			   }
			   
			}else{
				return -1;
			}
		}

		public function populatloan25thdaydefualtertableXX(){
			//get the defaulters
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "loan_transaction_".$accountingyear;
			$inspectorId = $_SESSION['userinformation']->users_account_id;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				$sqlstr	= "SELECT $transactionYear.*, CONCAT(customers_biodata.firstname, ' ', customers_biodata.surname) AS fullname

				FROM $transactionYear
				
				LEFT JOIN customers_biodata ON account_number = customers_biodata.customer_unique_no 
				
				LEFT JOIN loan_advance_agreement ON transaction_year_advance_agreement_id = loan_advance_agreement.loan_advance_agreement_id 

				LEFT JOIN inspection_form ON loan_advance_agreement.loan_advance_agreement_inspection_form_id = inspection_form.inspection_form_id

				WHERE loan_cr <> '0' AND inspection_form.inspection_form_user_account_id='$inspectorId' ORDER BY transaction_year_id DESC";

			   $query = $this->db->query($sqlstr);
			   if ($query->num_rows() > 0){
				   $row = $query->result();
				   // $_SESSION['loan_advance_agreement_information']  = $row;
				   return json_encode($row);
			   }else{
				   return 0;
			   }
			   
			}else{
				return -1;
			}
		}

		// public function processdailysavingsxxxx(){
		// 	extract($_POST);
		// 	//get the transaction year that is the one that is activated
		// 	$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
		// 	$query = $this->db->query($sqlstr);
		// 	$accountingyear =  $query->row(0)->accounting_year;
		// 	$transactionYear =  "loan_transaction_".$accountingyear;
		// 	if ($query->num_rows() > 0 && $accountingyear != ""){

		// 		//check if the previous day savings was made
		// 		$sqlstr	= "SELECT dayname FROM $transactionYear WHERE savings_cr <> '0' && transaction_year_advance_agreement_id = '$agreement_id' && week='$week' && complete_repayment_status = 'F' && loan_status = 'Active' ORDER BY transaction_year_id DESC LIMIT 1";
		// 		$query = $this->db->query($sqlstr);
		// 		if ($query->num_rows() > 0){
		// 			$dayname = $query->row(0)->dayname;
		// 			$dayid = $this->getdayid($dayname);
		// 			$nextid = $dayid + 1;
		// 			if($nextid == $day){//appropriate next contribution day
		// 				//would proceed to the next section of the module
		// 			}else{//incorrect contibution day
		// 				return 3;
		// 				exit;
		// 			}
		// 		}else{//first contribution and it must be for monday
		// 			if(($day == 0 && $week == "week 1") || ($day == 0 && $week == "week 2") || ($day == 0 && $week == "week 3") || ($day == 0 && $week == "week 4")){
		// 				//would proceed to the next section of the module
		// 			}else{//incorrect contibution day
		// 				return 3;
		// 				exit;
		// 			}
		// 		}

		// 		//check if the previous week savings was made
		// 		$sqlstr	= "SELECT dayname, week FROM $transactionYear WHERE savings_cr <> '0' && transaction_year_advance_agreement_id = '$agreement_id' && complete_repayment_status = 'F' && loan_status = 'Active' ORDER BY transaction_year_id DESC LIMIT 1";
		// 		$query = $this->db->query($sqlstr);
		// 		if ($query->num_rows() > 0){
		// 			$dayname = $query->row(0)->dayname;
		// 			$dayid = $this->getdayid($dayname);
		// 			$dbweek = $query->row(0)->week;
		// 			if($dayname == "Fri"){//last weekly contribution made already
		// 				//would proceed to the next section of the module
		// 			}else{//last weekly contribution is not made
		// 				if($dbweek == $week){//check whether database == posted week
		// 					//would proceed to the next section of the module

		// 					// $nextid = $dayid + 1;
		// 					// if($nextid == $day){//appropriate next contribution day
		// 					// 	//would proceed to the next section of the module
		// 					// }else{
		// 					// 	return 3;
		// 					// 	exit;
		// 					// }
		// 				}else{
		// 					return 3;
		// 					exit;
		// 				}
		// 			}
		// 		}else{//first contribution and it must be for monday and week 1
		// 			if($week == "week 1"){
		// 				//would proceed to the next section of the module
		// 			}else{//wrong week selection
		// 				return 3;
		// 				exit;
		// 			}
		// 		}

		// 		//get the number of savings already made
		// 		$sqlstr	= "SELECT transaction_year_id FROM $transactionYear WHERE savings_cr <> '0' && transaction_year_advance_agreement_id = '$agreement_id' && complete_repayment_status = 'F' && loan_status = 'Active'";
		// 		$query = $this->db->query($sqlstr);
		// 		$dayid = $query->num_rows();
		// 		if($dayid == 0){
		// 			$dayid += 1;
		// 		}else{
		// 			$dayid += 1;
		// 		}

		// 		$DataArray 	= array(
		// 			'account_number'	=> $accountnumber,
		// 			'transaction_year_advance_agreement_id'	=> $agreement_id,
		// 			'particulars'	=> 'Loan savings',

		// 			// 'loan_dr'	=> '',
		// 			// 'loan_cr'	=> '',
		// 			// 'loan_bl'	=> '',

		// 			// 'repayment_dr'	=> '',
		// 			// 'repayment_cr'	=> $savings,
		// 			// 'repayment_bl'	=> '',					

		// 			// 'savings_dr'	=> '',
		// 			'savings_cr'	=> $savings,
		// 			// 'savings_bl'	=> '',
					
		// 			'dayid'									=> $dayid,
		// 			'dayname'								=> $this->getdayname($day),
		// 			'week'									=> $week,						
		// 			'transaction_month_name'	=> $this->getthemonthname(date('m')),
		// 			'transaction_month_id'	=> date('m'),
		// 			'year'	=> $accountingyear,
		// 			// 'transaction_date'	=> $query->row(0)->transaction_year_advance_agreement_id,
		// 			// 'transaction_date_q'	=> $query->row(0)->transaction_year_advance_agreement_id,
		// 			'contribution_type'		=> 'loan-based'
		// 			// 'complete_repayment_status'	=> $query->row(0)->transaction_year_advance_agreement_id,
		// 			// 'loan_status'	=> $query->row(0)->transaction_year_advance_agreement_id,
		// 		);					
		// 		// insert loan savings payment
		// 		if($this->db->insert($transactionYear, $DataArray)){
		// 			// calculate and update total savings
		// 			$sqlstr	= "SELECT savings_cr FROM $transactionYear WHERE transaction_year_advance_agreement_id ='$agreement_id' && savings_cr <> '0' ORDER BY transaction_year_id ASC";
		// 			$query = $this->db->query($sqlstr);
		// 			if ($query->num_rows() > 0){
		// 				$row = $query->result();
		// 				// return $row[0]->loan_bl;
		// 				$savingTotal = 0;
		// 				for($i = 0; $i < count($row); $i++){
		// 					$savingTotal += $row[$i]->savings_cr;
		// 				}
		// 				//update total savings
		// 				$sqlstr	= "UPDATE $transactionYear SET savings_bl='$savingTotal' WHERE transaction_year_advance_agreement_id='$agreement_id' ORDER BY transaction_year_id DESC LIMIT 1";
		// 				if ($this->db->query($sqlstr)){
		// 					return 1;
		// 				}
		// 			}					
		// 		}
		// 	}else{
		// 		return -1;
		// 	}
		// }

		public function processrepaymment(){
			extract($_POST);
			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "loan_transaction_".$accountingyear;
			if ($query->num_rows() > 0 && $accountingyear != ""){

				//check if the previous day savings was made
				$sqlstr	= "SELECT dayname FROM $transactionYear WHERE repayment_cr <> '0' && transaction_year_advance_agreement_id = '$agreement_id' && week='$week' && complete_repayment_status = 'F' && loan_status = 'Active' ORDER BY transaction_year_id DESC LIMIT 1";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					$dayname = $query->row(0)->dayname;
					$dayid = $this->getdayid($dayname);
					$nextid = $dayid + 1;
					if($nextid == $day){//appropriate next contribution day
						//would proceed to the next section of the module
					}else{//incorrect contibution day
						return 3;
						exit;
					}
				}else{//first contribution and it must be for monday
					if(($day == 0 && $week == "week 1") || ($day == 0 && $week == "week 2") || ($day == 0 && $week == "week 3") || ($day == 0 && $week == "week 4")){
						//would proceed to the next section of the module
					}else{//incorrect contibution day
						return 3;
						exit;
					}
				}

				//check if the previous week savings was made
				$sqlstr	= "SELECT dayname, week FROM $transactionYear WHERE repayment_cr <> '0' && transaction_year_advance_agreement_id = '$agreement_id' && complete_repayment_status = 'F' && loan_status = 'Active' ORDER BY transaction_year_id DESC LIMIT 1";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() > 0){
					$dayname = $query->row(0)->dayname;
					$dayid = $this->getdayid($dayname);
					$dbweek = $query->row(0)->week;
					if($dayname == "Fri"){//last weekly contribution made already
						//would proceed to the next section of the module
					}else{//last weekly contribution is not made
						if($dbweek == $week){//check whether database == posted week
							//would proceed to the next section of the module

							// $nextid = $dayid + 1;
							// if($nextid == $day){//appropriate next contribution day
							// 	//would proceed to the next section of the module
							// }else{
							// 	return 3;
							// 	exit;
							// }
						}else{
							return 3;
							exit;
						}
					}
				}else{//first contribution and it must be for monday and week 1
					if($week == "week 1"){
						//would proceed to the next section of the module
					}else{//wrong week selection
						return 3;
						exit;
					}
				}

				//get the number of savings already made
				$sqlstr	= "SELECT transaction_year_id FROM $transactionYear WHERE repayment_cr <> '0' && transaction_year_advance_agreement_id = '$agreement_id' && (complete_repayment_status = 'F' || complete_repayment_status = 'T') && (loan_status = 'Active' || loan_status = 'Completed')";
				$query = $this->db->query($sqlstr);
				$dayid = $query->num_rows();
				if($dayid == 0){
					$dayid += 1;
					$completerepaymentstatus = 'F';
					$loanstatus = 'Active';
				}else{
					$dayid += 1;
					if($dayid == 20){
						$completerepaymentstatus = 'T';
						$loanstatus = 'Completed';						
					}else{
						$completerepaymentstatus = 'F';
						$loanstatus = 'Active';												
					}
				}

				$DataArray 	= array(
					'account_number'	=> $accountnumber,
					'transaction_year_advance_agreement_id'	=> $agreement_id,
					'particulars'	=> 'Loan savings',

					// 'loan_dr'	=> '',
					// 'loan_cr'	=> '',
					// 'loan_bl'	=> '',

					// 'repayment_dr'	=> '',
					'repayment_cr'	=> $repayment,
					// 'repayment_bl'	=> '',					

					// 'savings_dr'	=> '',
					'savings_cr'	=> $savings,
					// 'savings_bl'	=> '',
					
					'dayid'									=> $dayid,
					'dayname'								=> $this->getdayname($day),
					'week'									=> $week,						
					'transaction_month_name'	=> $this->getthemonthname(date('m')),
					'transaction_month_id'	=> date('m'),
					'year'	=> $accountingyear,
					// 'transaction_date'	=> $query->row(0)->transaction_year_advance_agreement_id,
					// 'transaction_date_q'	=> $query->row(0)->transaction_year_advance_agreement_id,
					'contribution_type'		=> 'loan-based',
					'complete_repayment_status'	=> $completerepaymentstatus,
					'loan_status'	=> $loanstatus
				);					
				// insert loan savings payment
				if($this->db->insert($transactionYear, $DataArray)){
					// calculate and update total savings
					$sqlstr	= "SELECT repayment_cr, savings_cr FROM $transactionYear WHERE transaction_year_advance_agreement_id ='$agreement_id' && repayment_cr <> '0' ORDER BY transaction_year_id ASC";
					$query = $this->db->query($sqlstr);
					if ($query->num_rows() > 0){
						$row = $query->result();
						// return $row[0]->loan_bl;
						$repaymentTotal = 0;
						$savingTotal = 0;
						for($i = 0; $i < count($row); $i++){
							$repaymentTotal += $row[$i]->repayment_cr;
							$savingTotal += $row[$i]->savings_cr;
						}
						//update total savings
						$sqlstr	= "UPDATE $transactionYear SET savings_bl='$savingTotal', repayment_bl='$repaymentTotal' WHERE transaction_year_advance_agreement_id='$agreement_id' ORDER BY transaction_year_id DESC LIMIT 1";
						if ($this->db->query($sqlstr)){
							return 1;
						}
					}					
				}
			}else{
				return -1;
			}
		}	

		public function processcontributionrepaymment(){
			extract($_POST);
			//get the transaction year that is the one that is activated
			$sqlstr	= "SELECT * FROM accounting_year WHERE accounting_year_status='Activated'";
			$query = $this->db->query($sqlstr);
			$accountingyear =  $query->row(0)->accounting_year;
			$transactionYear =  "dialy_contribution_transaction_".$accountingyear;
			if ($query->num_rows() > 0 && $accountingyear != ""){
				//check if no contribution made yet
				$sqlstr	= "SELECT dayid FROM $transactionYear WHERE contribution_cr <> '0' && customer_contribution_id = '$customercontributionid' && complete_contribution_status = 'F' && contribution_status = 'Active'";
				$query = $this->db->query($sqlstr);
				if ($query->num_rows() == 0){//no contribution
					if($day == 1){
						$completecontributionstatus = 'F';
						$contributionstatus = 'Active';						
					}else{
						return 3;
						exit;
					}
				}else{//check the last contribution made to know the next one to be made
					$sqlstr	= "SELECT dayid FROM $transactionYear WHERE contribution_cr <> '0' && customer_contribution_id = '$customercontributionid' && complete_contribution_status = 'F' && contribution_status = 'Active' ORDER BY dialy_contribution_year_id DESC LIMIT 1";
					$query = $this->db->query($sqlstr);
					if ($query->num_rows() > 0){//contribuion has been made
						$DBdayid = $query->row(0)->dayid;
						$nextDBdayid = $DBdayid + 1;
						if($nextDBdayid == $day){//appropriate next contribution day
							//would proceed to the next section of the module
							if($nextDBdayid == 31){
								$completecontributionstatus = 'T';
								$contributionstatus = 'Completed';
							}else{
								$completecontributionstatus = 'F';
								$contributionstatus = 'Active';
							}
						}else if($nextDBdayid > 31){//Contribution can not exceed 31 days
							return 4;
							exit;
						}else{
							return 3;
							exit;							
						}
					}else{//no contribution, something critical must have gone wrong
						return -1;
						exit;
					}
					// $sqlstr	= "SELECT dayid FROM $transactionYear WHERE contribution_cr <> '0' && dayid = '$day' && customer_contribution_id = '$customercontributionid' && complete_contribution_status = 'F' && contribution_status = 'Active'";
				}
				$DataArray 	= array(
					'account_number'					=> $accountnumber,
					'customer_contribution_id'			=> $customercontributionid,
					// 'contribution_amount'				=> $contribution_amount,
					'contribution_cr'					=> $contribuionamount,
					'contribution_bl'					=> 0,
					'dayid'								=> $day,
					'transaction_month_name'			=> $this->getthemonthname(date('m')),
					'transaction_month_id'				=> date('m'),
					'year'								=> $accountingyear,
					'complete_contribution_status'		=> $completecontributionstatus,
					'contribution_status'				=> $contributionstatus
				);	

				// insert contribution payment
				if($this->db->insert($transactionYear, $DataArray)){
					// calculate and update total contributions
					$sqlstr	= "SELECT contribution_cr FROM $transactionYear WHERE customer_contribution_id ='$customercontributionid' && contribution_cr <> '0' ORDER BY dialy_contribution_year_id ASC";
					$query = $this->db->query($sqlstr);
					if ($query->num_rows() > 0){
						$row = $query->result();
						// return $row[0]->loan_bl;
						$contributionTotal = 0;
						for($i = 0; $i < count($row); $i++){
							$contributionTotal += $row[$i]->contribution_cr;
						}
						//update total contribution
						$sqlstr	= "UPDATE $transactionYear SET contribution_bl='$contributionTotal' WHERE customer_contribution_id='$customercontributionid' ORDER BY dialy_contribution_year_id DESC LIMIT 1";
						if ($this->db->query($sqlstr)){
							if($contributionTotal > 0){
								return $contributionTotal;
							}else{
								return 1;
							}
						}
					}					
				}
			}else{
				return -1;
			}
		}	
	


		# Get the Appropriate Day ID
		# ------------------------------		
		public function getdayid($getdayname){
			if ($getdayname=="Mon"){
				return 0;
			}else if ($getdayname=="Tue"){
				return 1;
			}else if ($getdayname=="Wed"){
				return 2;
			}else if ($getdayname=="Thur"){
				return 3;
			}else if ($getdayname=="Fri"){
				return 4;
			}
		}

		
		# Get the Appropriate Day Name
		# ------------------------------		
		public function getdayname($getdayid){
			if ($getdayid==0){
				return "Mon";
			}elseif ($getdayid==1){
				return "Tue";
			}elseif ($getdayid==2){
				return "Wed";
			}elseif ($getdayid==3){
				return "Thur";
			}elseif ($getdayid==4){
				return "Fri";
			}
		}		
		# Get the Appropriate Month Name
		# ------------------------------		
		public function getthemonthname($getmonthid){
			if ($getmonthid==1){
				return "JANUARY";
			}elseif ($getmonthid==2){
				return "FEBRUARY";
			}elseif ($getmonthid==3){
				return "MARCH";
			}elseif ($getmonthid==4){
				return "APRIL";
			}elseif ($getmonthid==5){
				return "MAY";
			}elseif ($getmonthid==6){
				return "JUNE";
			}elseif ($getmonthid==7){
				return "JULY";
			}elseif ($getmonthid==8){
				return "AUGUST";
			}elseif ($getmonthid==9){
				return "SEPTEMBER";
			}elseif ($getmonthid==10){
				return "OCTOBER";
			}elseif ($getmonthid==11){
				return "NOVEMBER";
			}else{
				return "DECEMBER";
			}
		}		


	}	
?>