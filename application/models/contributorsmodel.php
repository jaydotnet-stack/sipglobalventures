<?php

	error_reporting(0);
	session_start();
	
	ini_set('max_execution_time',0);
	ini_set('memory_limit','256M');
	
	class Contributorsmodel extends CI_Model
	{		
		public function __construct(){
			parent::__construct();
			$_SESSION['accountingyear']  =  0;
			$query = $this->db->get('utility');
			if ($query->num_rows() == 1){
				# Select Current Accounting Year
				# ------------------------------
				$_SESSION['accountingyear'] = $query->row(0)->thriftyear;
			}
		}
		

		# New Contributor's Registration
		# ------------------------------
		public function registration(){
			
			extract($_POST);

			$password 	= MD5($password1);
			$regdate  	= date('Ymd');
			
			$DataArray 	= array(
				'fullname'			=> $fullname,
				'email'				=> $email,
				'password'			=> $password,
				'registrationdate'	=> $regdate
			);	

			$query = $this->db->get_where('contributors', array('email'=>$email));
			if ($query->num_rows() == 0){
				# Insert Record as new
				# --------------------
				$this->db->insert('contributors',$DataArray);			
				return 1;
			}else{
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;	
			}	
		}		

		# Contributor's Login
		# -------------------
		public function login(){
			$_SESSION['email']	=	"";
			$_SESSION['membershipstatus']	=	"";
			$_SESSION['membershipref']		=	"";
			$_SESSION['fullname']			=	"";
			$_SESSION['contributoraccess']	=	"AD";
			extract($_POST);
			$emailaddress 	= strtolower($emailaddress);
			$password 		= MD5($password);
			$DataArray 	= array(
				'email'		=> $emailaddress,
				'password'	=> $password
			);	

			$query = $this->db->get_where('contributors', array('email'=>$emailaddress));
			if ($query->num_rows() == 1){
				# Insert Record as new
				# --------------------
				$dbpassword 	= $query->row(0)->password;
				if($dbpassword==$password){
					$_SESSION['membershipstatus'] 	=	$query->row(0)->membershipstatus;
					$_SESSION['membershipref']    	=	$emailaddress;
					$_SESSION['fullname']		  	=	$query->row(0)->fullname;
					$_SESSION['contributoraccess']	=	"AG";	
					return 1;
				//	return $_SESSION['email'].$_SESSION['contributoraccess'];
				}else{
					return -2;
				}
			}else{
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;	
			}

			//	getcontributorsrecord
		}


		public function getprofileinfo(){
			$srcparam = $_SESSION['membershipref'];
			$query = $this->db->get_where('contributors',array('email'=>$srcparam));
			if ($query->num_rows() == 1){
				return json_encode($query->row_array());
			}else{
				return 0;
			}
		}

		public function getprofileinfox(){
			$srcparam = $_SESSION['membershipref'];
			$str="SELECT cp.*,ct.amount FROM contributors as cp INNER JOIN contributiontype as ct ON cp.contributioncategory=ct.category WHERE cp.email='$srcparam'";
			$query = $this->db->query($str);
			if ($query->num_rows() == 1){
				return json_encode($query->row_array());
			}else{
				return 0;
			}
		}


		public function fetchaccountnumber(){
			$accountno = $this->input->post('accountno');
			$query = $this->db->get_where('thriftaccount', array('accountno'=>$accountno));
			if ($query->num_rows() == 1){
				return json_encode($query->row_array());
			}else{
				return 0;
			}	
		}


		public function updaterecord(){
			extract($_POST);
			$DataArray 	= array(
				'fullname'				=> $fullname,
				'phoneno'				=> $phoneno,
				'contributioncategory'	=> $ctype,
				'contactaddress'		=> $contactaddr,
				'updatestatus'			=> 1
			);	
			$query = $this->db->get_where('contributors', array('email'=>$emailaddress));
			if ($query->num_rows() == 1){
				# Update Existing Records
				# -----------------------
				$this->db->where(array('email'=>$emailaddress))->update('contributors',$DataArray);		
				return 1;
			}else{
				return "Indescribable Error";
			}		
		}

		public function updatecontribution(){
			extract($_POST);

			# Check if payment has been previously made
			# -----------------------------------------
			$query = $this->db->get_where('contributions', array('email'=>$emailaddress,'accountingyear'=>$accountingyear,'accountingmonthid'=>$accountingmonthid));
			if ($query->num_rows() == 1){
				return -1;
			}else{

				$expectedprevmonth 		=  $accountingmonthid-1;
				$previousaccountinfo	=  explode("~",$this->getpreviousbalanceinfo($emailaddress,$accountingyear));
				$previousmonth			=	$previousaccountinfo[1];

				if ($expectedprevmonth!=$previousmonth){
					return -2;
				}

				$previousbalance 		=	$previousaccountinfo[0];
				$newbalance 			=	$previousbalance + $amount;

				$getmonthname 			=	$this->getthemonthname($accountingmonthid);
				
				$particulars 			=	"Contribution for the month of ".$getmonthname;

				$DataArray 	= array(
					'email'					=> $emailaddress,
					'transactiondate'		=> $transactiondate,
					'accountingyear'		=> $accountingyear,
					'accountingmonthid'		=> $accountingmonthid,
					'accountingmonthname'	=> $getmonthname,
					'particulars'			=> $particulars,
					'credit'				=> $amount,
					'accountbalance'		=> $newbalance,
					'receivingaccount'		=> $accountno,
					'receivingbank'			=> $bank
				);	
				$this->db->insert('contributions',$DataArray);	
				return 1;
			}			
		}
		
		# Fetch Valid Collector for the selected specification
		# ----------------------------------------------------
		public function fetchcollector(){
			extract($_POST);
			$getmonthname = $this->getthemonthname($monthid);
			$query = $this->db->get_where('contributors', array('contributioncategory'=>$category,'batch'=>$batch,'collectionmonth'=>$getmonthname));
			if ($query->num_rows() == 1){
				return $query->row(0)->fullname;
			}else{
				return 0;
			}
		}

		public function fetchpaymenthistory(){
			$srcparam 		= 	$_SESSION['membershipref'];
			$accountingyear =	$_SESSION['accountingyear'];
			$query = $this->db->order_by('accountingmonthid','ASC')->get_where('contributions', array('email'=>$srcparam,'accountingyear'=>$accountingyear));	
			if($query->num_rows() > 0){
	            foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
	        }else{
	        	return 0;
	        }	
		}

		# Fetching Contributor's Current Balance based on the specified accounting year
		# -----------------------------------------------------------------------------
		public function getpreviousbalanceinfo($getemail,$accountingyear){
			$sqlstr	= "SELECT accountbalance,accountingmonthid FROM contributions WHERE email='$getemail' AND accountingyear=$accountingyear ORDER BY accountingmonthid DESC LIMIT 1";
			$query = $this->db->query($sqlstr);
			if ($query->num_rows() == 1){
				return $query->row(0)->accountbalance."~".$query->row(0)->accountingmonthid;
			}else{
				return '0'."~".'0';
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