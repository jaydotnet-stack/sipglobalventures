<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	error_reporting(0);
	session_start();

	class Admin extends CI_Controller {

		var $data  		=	array();

		# This is a constructor. It is invoked each time this class is called
		# -------------------------------------------------------------------	
		public function __construct(){
			parent::__construct();
			require_once('sitegenerics.php');
			$this->load->model('adminmodel');
			//get activated transaction year
			$this->adminmodel->getactivetransactionyear();
		}

		# Section for calling views
		# -------------------------
		public function index(){
			$this->load->view('sipupglobal/login',$this->data);		
		}
		# Section for calling views
		# -------------------------
		public function loadregister(){
			$this->load->view('sipupglobal/register',$this->data);		
		}		
		public function register(){
			$result = $this->adminmodel->register();
			echo $result;	            
		}		
		public function login(){
			$result = $this->adminmodel->login();
			echo $result;	            
		}		
		public function landingpage(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/landingpage',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		}		
		public function createaccount(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/createaccount',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		}			

		public function userprofile(){

			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/userprofile',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		}	

		public function updateuserprofile(){
			$_SESSION['picture_handler'] = "";
			$result = $this->adminmodel->updateuserprofile();
			if ($result !=-1 && $_SESSION['user_profile_picture']!=''){
				extract($_POST);	
				$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
				$value = $_FILES['userfile']['name'];  // This gets the file name
				$value = trim($value);
				$fileNameParts   = explode(".",$value); // explode file name to two parts
				$fileExtension   = end($fileNameParts); // give extension
				$fileExtension   = strtolower($fileExtension); // convert to lower case
				if ($CountArray>=2){
					$folderName = "userspicture";
					$_SESSION['sessdir'] = './'.$folderName;
					$upload_dir = './'.$folderName.'/';
					if(is_dir($upload_dir)){
						//Directory already exist
					}else{
						mkdir($upload_dir);
					}
					$_SESSION['picture_handler'] = $_SESSION['user_profile_picture'];
					$this->do_upload();
				}
			}
			echo $result;
			exit;
		}	

		public function accountingyear(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/accountingyear',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 

		public function addaccountingyear(){
			$result = $this->adminmodel->addaccountingyear();
			echo $result;	            
		}	
		public function fetchaccountingyear(){
			$result = $this->adminmodel->fetchaccountingyear();
			echo $result;	            
		}	
		public function activateaccountingyear(){
			$result = $this->adminmodel->activateaccountingyear();
			echo $result;	            
		}	
		public function getinitialyeardefinition(){
			$result = $this->adminmodel->getinitialyeardefinition();
			echo $result;	            
		}		
		public function marketlocation(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/marketlocation',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 
		public function addmarketlocation(){
			$result = $this->adminmodel->addmarketlocation();
			echo $result;	            
		}						
		public function fetchmarketlocation(){
			$result = $this->adminmodel->fetchmarketlocation();
			echo $result;	            
		}												
		public function editmarketlocation(){
			$result = $this->adminmodel->editmarketlocation();
			echo $result;	            
		}																						
		public function loancategories(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/loancategories',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			
		}						
		public function addloancategories(){
			$result = $this->adminmodel->addloancategories();
			echo $result;	            
		}	
		public function fetchloancategory(){
			$result = $this->adminmodel->fetchloancategory();
			echo $result;	            
		}	
		public function editloancategory(){
			$result = $this->adminmodel->editloancategory();
			echo $result;	            
		}		
		public function allocateusertomarket(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/allocateusertomarket',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}	
		}	
		public function getmarketlocations(){
			$result = $this->adminmodel->getmarketlocations();
			echo $result;	            
		}							
		public function populatloanrequesttable(){
			$result = $this->adminmodel->populatloanrequesttable();
			echo $result;	            
		}							
		public function populatloanrequesttableforloandisbursement(){
			$result = $this->adminmodel->populatloanrequesttableforloandisbursement();
			echo $result;	            
		}							

		public function populatcontributionrequesttable(){
			$result = $this->adminmodel->populatcontributionrequesttable();
			echo $result;	            
		}							
		public function populateuserstable(){
			$result = $this->adminmodel->populateuserstable();
			echo $result;	            
		}							
		public function retrieveuser(){
			$result = $this->adminmodel->retrieveuser();
			echo $result;	            
		}							
		public function mapusertomarket(){
			$result = $this->adminmodel->mapusertomarket();
			echo $result;	            
		}	
		public function getloanbytype(){
			$result = $this->adminmodel->getloanbytype();
			echo $result;	            
		}										
	
		public function loanapplicationprocess(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/loanapplicationprocess',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 

		public function contributionapplicationprocess(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/contributionapplicationprocess',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 

		public function loansetupformfee(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/loansetupformfee',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 

		public function disburseloan(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/disburseloan',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 	
				
		public function loanweeklyrepaymentbyinspector(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/loanweeklyrepaymentbyinspector',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 	

		public function dailycontributionbyinspector(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/dailycontributionbyinspector',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 

		public function startcontribution(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/startcontribution',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 

		public function postday25th(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/postday25th',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 

		public function getcontributionbyinspector(){
			$result = $this->adminmodel->getcontributionbyinspector();
			echo $result;	            
		}	
		
		public function generatecustomeruniquenumber(){
			$result = $this->adminmodel->generatecustomeruniquenumber();
			echo $result;	            
		}	

		public function getcustomerbyuniquenumber(){
			$result = $this->adminmodel->getcustomerbyuniquenumber();
			echo $result;	            
		}	

		public function getcontributionbasedcustomerbyuniquenumber(){
			$result = $this->adminmodel->getcontributionbasedcustomerbyuniquenumber();
			echo $result;	            
		}	

		public function getaccount(){
			$result = $this->adminmodel->getaccount();
			echo $result;	            
		}									

		public function getcontributors(){
			$result = $this->adminmodel->getcontributors();
			echo $result;	            
		}									

		public function dailycontributioncard(){
			$result = $this->adminmodel->dailycontributioncard();
			echo $result;	            
		}									

		public function processcontributionrepaymment(){
			$result = $this->adminmodel->processcontributionrepaymment();
			echo $result;	            
		}									

		public function populatloan25thdaydefualtertable(){
			$result = $this->adminmodel->populatloan25thdaydefualtertable();
			echo $result;	            
		}									
															
		public function createcustomeraccount(){

			// echo "count:". count($_FILES["files"]["name"])." ". $_FILES["files"]["name"][3];
			// exit;
			$_SESSION['picture_handler'] = "";
			$result = $this->adminmodel->createcustomeraccount();
			if($result != 0 && $_SESSION['applicant_passport'] != "" /*&& $_SESSION['applicant_signature'] != "" && $_SESSION['guarantor_signature'] != ""*/){
				extract($_POST);
				$filename = ""; 
				$filenamex = ""; 
				$i = 0;
				// while($i < count($_FILES["files"]["name"])){

					// $filenamex .= $_FILES['files']['name'][$i].",";

					if($_FILES['files']['name'][$i] == ""){
						//Do nothing because image is not selected
					}else{
						
						
						// if($i == 0){//guarantor signature
							$CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
							$filename = $_FILES['files']['name'][$i]; //gets the file name
							// $filenamex .= trim($filename);
							$fileNameParts   = explode(".",$filename); // explode file name to two parts
							$fileExtension   = end($fileNameParts); // give extension
							$fileExtension   = strtolower($fileExtension); // convert to lower case
							if ($CountArray>=2){
								$folderName = "customerpicture";
								$_SESSION['sessdir'] = './'.$folderName;
								$upload_dir = './'.$folderName.'/';
								if(is_dir($upload_dir)){
									//Directory already exist
								}else{
									mkdir($upload_dir);
								}
								$this->load->library('upload');//loading the library
								$imagePath = realpath(APPPATH . '../customerpicture');
								$_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
								$_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
								$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
								$_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
								$_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
								//configuration for upload your images
								$config = array(
									'file_name'     => $_SESSION['applicant_passport'],
									'allowed_types' => 'jpg|jpeg|png|gif',
									'max_size'      => 3000,
									'overwrite'     => TRUE,
									'upload_path'
									=>$imagePath
								);	
								$this->upload->initialize($config);
								if (!$this->upload->do_upload())
								{
									// do nothing
								}else{
									$filename = $this->upload->data();
									// $guarantorsignatureuploadstatus = 1;
								}
							}
						// }else{//customer signature

						// }							
					}
					$i++;
				// }
			}
			// echo $filenamex;
			echo $result;
			exit;	
		}	

		public function createcontributionbasedcustomeraccount(){
			$_SESSION['picture_handler'] = "";
			$result = $this->adminmodel->createcontributionbasedcustomeraccount();
			if($result != 0 && $_SESSION['applicant_passport'] != "" /*&& $_SESSION['applicant_signature'] != "" && $_SESSION['guarantor_signature'] != ""*/){
				extract($_POST);
				$filename = "";
				$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
				$filename = $_FILES['userfile']['name']; //gets the file name
				$filename = trim($filename);
				$fileNameParts   = explode(".",$filename); // explode file name to two parts
				$fileExtension   = end($fileNameParts); // give extension
				$fileExtension   = strtolower($fileExtension); // convert to lower case
				if ($CountArray>=2){
					$folderName = "customerpicture";
					$_SESSION['sessdir'] = './'.$folderName;
					$upload_dir = './'.$folderName.'/';
					if(is_dir($upload_dir)){
						//Directory already exist
					}else{
						mkdir($upload_dir);
					}
					$_SESSION['picture_handler'] = $_SESSION['applicant_passport'];
					$this->do_upload();	
				}
			}
			echo $result;
			exit;	
		}	

		public function inspectionform(){
			$_SESSION['guarantor_signature'] = "";
			$_SESSION['applicant_signature'] = "";
			$result = $this->adminmodel->inspectionform();
			$guarantorsignatureuploadstatus = 0; $customersignatureuploadstatus = 0;
			if($result != "" && $_SESSION['applicant_signature'] != "" && $_SESSION['guarantor_signature'] != ""){
				extract($_POST);
				$filename = ""; 
				$filenamex = ""; 
				$i = 0;
				while($i < count($_FILES["files"]["name"])){
					// $filenamex .= $_FILES['files']['name'][$i].",";
					if($_FILES['files']['name'][$i] == ""){
						//Do nothing because image is not selected
					}else{
						if($i == 0){//guarantor signature
							$CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
							$filename = $_FILES['files']['name'][$i]; //gets the file name
							$filename = trim($filename);
							$filenamex .= trim($filename);
							$fileNameParts   = explode(".",$filename); // explode file name to two parts
							$fileExtension   = end($fileNameParts); // give extension
							$fileExtension   = strtolower($fileExtension); // convert to lower case
							if ($CountArray>=2){
								$folderName = "guarantorsignature";
								$_SESSION['sessdir'] = './'.$folderName;
								$upload_dir = './'.$folderName.'/';
								if(is_dir($upload_dir)){
									//Directory already exist
								}else{
									mkdir($upload_dir);
								}
								$this->load->library('upload');//loading the library
								$imagePath = realpath(APPPATH . '../guarantorsignature');
								$_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
								$_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
								$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
								$_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
								$_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
								//configuration for upload your images
								$config = array(
									'file_name'     => $_SESSION['guarantor_signature'],
									'allowed_types' => 'jpg|jpeg|png|gif',
									'max_size'      => 3000,
									'overwrite'     => TRUE,
									'upload_path'
									=>$imagePath
								);	
								$this->upload->initialize($config);
								if (!$this->upload->do_upload())
								{
									$guarantorsignatureuploadstatus = 0;
								}else{
									$filename = $this->upload->data();
									$guarantorsignatureuploadstatus = 1;
								}
							}
						}else{//customer signature
							$CountArray = count(explode(".",$_FILES["files"]["name"][$i]));
							$filename = $_FILES['files']['name'][$i]; //gets the file name
							$filename = trim($filename);
							$filenamex .= trim($filename);
							$fileNameParts   = explode(".",$filename); // explode file name to two parts
							$fileExtension   = end($fileNameParts); // give extension
							$fileExtension   = strtolower($fileExtension); // convert to lower case
							if ($CountArray>=2){
								$folderName = "customersignature";
								$_SESSION['sessdir'] = './'.$folderName;
								$upload_dir = './'.$folderName.'/';
								if(is_dir($upload_dir)){
									//Directory already exist
								}else{
									mkdir($upload_dir);
								}
								$this->load->library('upload');//loading the library
								$imagePath = realpath(APPPATH . '../customersignature');
								$_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
								$_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
								$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
								$_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
								$_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
								//configuration for upload your images
								$config = array(
									'file_name'     => $_SESSION['applicant_signature'],
									'allowed_types' => 'jpg|jpeg|png|gif',
									'max_size'      => 3000,
									'overwrite'     => TRUE,
									'upload_path'
									=>$imagePath
								);	
								$this->upload->initialize($config);
								if (!$this->upload->do_upload())
								{
									$customersignatureuploadstatus = 0;
								}else{
									$filename = $this->upload->data();
									$customersignatureuploadstatus = 1;
								}
							}
						}							
					}
					$i++;
				}
			}
			// $return = [$guarantorsignatureuploadstatus, $customersignatureuploadstatus, $result];
			$return = array(
				'guarantorsignatureuploadstatus'=> $guarantorsignatureuploadstatus,
				'customersignatureuploadstatus'=> $customersignatureuploadstatus,
				'result'=> $result,
			);
			echo json_encode($return);
			// echo json_encode($filenamex);
		}	

		public function approvecontribution(){
			$result = $this->adminmodel->approvecontribution();
			echo $result;
		}	

		public function getcustomerinfo(){
			$result = $this->adminmodel->getcustomerinfo();
			echo $result;	            
		}		
		
		public function getcontributionbasedcustomerinfo(){
			$result = $this->adminmodel->getcontributionbasedcustomerinfo();
			echo $result;	            
		}		
		
		public function submitloanagreement(){
			$_SESSION['picture_handler'] = "";
			$result = $this->adminmodel->submitloanagreement();
			if($result != 0 && $_SESSION['grantor_signature'] != ""){
				extract($_POST);				
				$filename = "";
				$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
				$filename = $_FILES['userfile']['name']; //gets the file name
				$filename = trim($filename);
				$fileNameParts   = explode(".",$filename); // explode file name to two parts
				$fileExtension   = end($fileNameParts); // give extension
				$fileExtension   = strtolower($fileExtension); // convert to lower case
				if ($CountArray>=2){
					$folderName = "grantorsignature";
					$_SESSION['sessdir'] = './'.$folderName;
					$upload_dir = './'.$folderName.'/';
					if(is_dir($upload_dir)){
						//Directory already exist
					}else{
						mkdir($upload_dir);
					}
					$_SESSION['picture_handler'] = $_SESSION['grantor_signature'];
					$this->do_upload();		
				}
			}
			echo $result;
			exit;	
		}	

		public function retrieveuserbyloanagreementforformsetupfee(){
			$result = $this->adminmodel->retrieveuserbyloanagreementforformsetupfee();
			echo $result;	            
		}		
		public function retrieveuserbyloanagreementforloandisbursement(){
			$result = $this->adminmodel->retrieveuserbyloanagreementforloandisbursement();
			echo $result;	            
		}		

		public function retrieveinfoforcontributionsetup(){
			$result = $this->adminmodel->retrieveinfoforcontributionsetup();
			echo $result;	            
		}		
		public function loansetupfee(){
			$result = $this->adminmodel->loansetupfee();
			echo $result;	            
		}		

		public function processdisburseloan(){
			$result = $this->adminmodel->processdisburseloan();
			echo $result;	      
		}		
		
		public function reinbursesystem(){
			if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
				$this->load->view('sipupglobal/reinbursesystem',$this->data);	
			}else{
				$this->load->view('sipupglobal/login',$this->data);
			}			            
		} 		

		public function retrieveloandefaulters(){
			$result = $this->adminmodel->retrieveloandefaulters();
			echo $result;	      
		}																			

		public function getreceipts(){
			$result = $this->adminmodel->getreceipts();
			echo $result;	      
		}																			

		public function flagoffaccount(){
			$result = $this->adminmodel->flagoffaccount();
			echo $result;	      
		}																			

		public function proceedwithcontribution(){
			$result = $this->adminmodel->proceedwithcontribution();
			echo $result;	      
		}																			
		// public function getdebtorsbyinspector(){
		// 	$result = $this->adminmodel->getdebtorsbyinspector();
		// 	echo $result;	      
		// }																			
		public function getdebtorsandsavingsbyinspector(){
			$result = $this->adminmodel->getdebtorsandsavingsbyinspector();
			echo $result;	      
		}																			
																			
		public function processdailysavings(){
			$result = $this->adminmodel->processdailysavings();
			echo $result;	      
		}

		public function processrepaymment(){
			$result = $this->adminmodel->processrepaymment();
			echo $result;	      
		}	

		public function cashierreinbursesystem(){
			$_SESSION['cashier_payment_receipts'] = "";
			$result = $this->adminmodel->cashierreinbursesystem();
			if ($result != ''  && $_SESSION['cashier_payment_receipts']!=''){
				extract($_POST);	
				$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
				$value = $_FILES['userfile']['name'];  // This gets the file name
				$value = trim($value);
				$fileNameParts   = explode(".",$value); // explode file name to two parts
				$fileExtension   = end($fileNameParts); // give extension
				$fileExtension   = strtolower($fileExtension); // convert to lower case
				if ($CountArray>=2){
					$folderName = "cashierreceipts";
					$_SESSION['sessdir'] = './'.$folderName;
					$upload_dir = './'.$folderName.'/';
					if(is_dir($upload_dir)){
						//Directory already exist
					}else{
						mkdir($upload_dir);
					}
					$_SESSION['picture_handler'] = $_SESSION['cashier_payment_receipts'];
					$this->do_upload();
				}
			}
			echo $result;
			exit;			

		}	
		
		public function admincreateaccount(){
			$_SESSION['picture_handler'] = "";
			$result = $this->adminmodel->admincreateaccount();
			if ($result != ''  && $_SESSION['user_account_picture']!=''){
				extract($_POST);	
				$CountArray = count(explode(".",$_FILES["userfile"]["name"]));
				$value = $_FILES['userfile']['name'];  // This gets the file name
				$value = trim($value);
				$fileNameParts   = explode(".",$value); // explode file name to two parts
				$fileExtension   = end($fileNameParts); // give extension
				$fileExtension   = strtolower($fileExtension); // convert to lower case
				if ($CountArray>=2){
					$folderName = "userspicture";
					$_SESSION['sessdir'] = './'.$folderName;
					$upload_dir = './'.$folderName.'/';
					if(is_dir($upload_dir)){
						//Directory already exist
					}else{
						mkdir($upload_dir);
					}
					$_SESSION['picture_handler'] = $_SESSION['user_account_picture'];
					$this->do_upload();
				}
			}
			echo $result;
			exit;			
		}	

		public function logout(){
			session_start();
			session_destroy();
			$_SESSION['activetransactionyear'] = '';
			$_SESSION['email'] = '';
			$_SESSION['userinformation'] = '';
			$_SESSION['customerinformation'] = '';
			$_SESSION['loan_advancement_agreement_debtor_information'] = '';
			$_SESSION['applicant_passport'] = '';
			$_SESSION['guarantor_signature'] = '';
			$_SESSION['grantor_signature'] = '';
			$_SESSION['applicant_signature'] = '';
			$_SESSION['picture_handler'] = '';
			$_SESSION['loan_advance_agreement_information']  = "";
			$_SESSION['approved_contribution_information']  = "";


			$_SESSION['loan_details'] = "";
			$_SESSION['contribution_setup_information'] = "";
			$this->load->view('sipupglobal/login',$this->data);
		}

		/*
		|------------------------------ 
		| Picture/image upload section
		|------------------------------ 
		*/				
		function do_upload(){
		    $this->load->library('upload');
			$_FILES['userfile']['name']= $_SESSION['picture_handler'];
		    $this->upload->initialize($this->set_upload_options());
		    $this->upload->do_upload();
		}

		/*
		|------------------------------ 
		| File upload settings
		|------------------------------ 
		*/				
		private function set_upload_options(){   
			$upload_dir = $_SESSION['sessdir']; 
		    $config = array();
		    $config['upload_path'] 		= 	$upload_dir;
		    $config['allowed_types'] 	= 	'gif|jpg|png|jpeg';
		    $config['max_size']      	= 	'0';
		    $config['overwrite']     	= 	TRUE;
		    return $config;
		}		
	}
?>