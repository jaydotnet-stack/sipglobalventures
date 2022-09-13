<?php

	error_reporting(0);
	session_start();
	
	ini_set('max_execution_time',0);
	ini_set('memory_limit','256M');
	
	class Contributionmodel extends CI_Model
	{		

		# Contributor's Login
		# -------------------
		public function login(){
			$_SESSION['username']	 	=	"";
			$_SESSION['usertag'] 		=	"";
			$_SESSION['adminaccess']	=	"AD";

			extract($_POST);

			$email  		= strtolower($email);
			$password 		= MD5($password);

			$DataArray 	= array(
				'email'	=> $email,
				'password'	=> $password
			);	
			$query = $this->db->get_where('admin', array('email'=>$email));
			if ($query->num_rows() == 1){

				# Insert Record as new
				# --------------------
				$dbpassword 	= $query->row(0)->password;
				if($dbpassword==$password){
					$_SESSION['adminaccess']    =	"AG";					
					$_SESSION['username'] 		=	$query->row(0)->email;
					$_SESSION['usertag'] 		=	$query->row(0)->usertag;
					return 1;
				}else{
					return -2;
				}
			}else{
				
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;	
			}	
		}

		# Function call for record retrieval & edit
		# -----------------------------------------
		public function fetchstudentrecord(){
			extract($_POST);
			$getstring = trim($getstring);
			$query = $this->db->get_where('student', array('matricno' =>$getstring));
			if ($query ->num_rows()  > 0){
				return json_encode($query->row_array());
			}else{
				return 0;
			}	
		}

		# Function call for record retrieval & edit
		# -----------------------------------------
		public function fetchrecord(){
			extract($_POST);
			$getstring = trim($getstring);
			$query = $this->db->get_where('admin', array('email' =>$getstring));
			if ($query ->num_rows()  > 0){
				return json_encode($query->row_array());
			}else{
				return 0;
			}	
		}

		public function loaddept(){
			extract($_POST);
			$getfaculty = trim($getfaculty);
			$query = $this->db->get_where('department', array('fcode' =>$getfaculty));
			if($query->num_rows() > 0){
	            foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
	        }else{
	        	return 0;
	        }	
		}

		public function addupdatedept(){
			extract($_POST);	
			$deptcode = trim(strtoupper($deptcode));
			$dept 	  = trim(strtoupper($dept));

			$DataArray 	= array(
				'fcode'			=> $fcode,
				'deptcode'		=> $deptcode,
				'department'	=> $dept
			);

			$query = $this->db->get_where('department', array('deptcode' =>$deptcode));
			if ($query ->num_rows() == 0){
				$this->db->insert('department',$DataArray);					
				return 1;
			}else if($query ->num_rows() > 0){
				$this->db->where(array('deptcode'=>$deptcode))->update('department',$DataArray);					
				return 2;
			}else{
				return 0;
			}
		}

		public function addupdatefaculty(){
			extract($_POST);	
			$fcode = trim(strtoupper($fcode));
			$faculty = trim(strtoupper($faculty));

			$DataArray 	= array(
				'fcode'		=> $fcode,
				'faculty'		=> $faculty
			);

			$query = $this->db->get_where('faculty', array('fcode' =>$fcode));
			if ($query ->num_rows() == 0){
				$this->db->insert('faculty',$DataArray);					
				return 1;
			}else if($query ->num_rows() > 0){
				$this->db->where(array('fcode'=>$fcode))->update('faculty',$DataArray);					
				return 2;
			}else{
				return 0;
			}
		}

		# Function call for record retrieval & edit
		# -----------------------------------------
		public function editaccount(){
			extract($_POST);	
			$query = $this->db->get_where('admin', array('id' =>$getid));
			if ($query ->num_rows()  > 0){
				return json_encode($query->row_array());
			}else{
				return 0;
			}	
		}

		public function loadrecord()
		{						
			$query = $this->db->order_by('id','ASC')->get('admin');
		//	$query = $this->db->order_by('id','ASC')->get_where('admin', array('userstatus'=>'Active'));   
	        $sOutput = '{';
	        $sOutput .= '"aaData": [ ';       	         
	        if($query->num_rows() > 0) 
	        {
	            foreach($query->result() as $row) 
	            {
	                $mdata[] = $row;
	            }
	            $noo=0;
	            foreach($mdata as $tr) {
	            	$userstatus = "<center>".$tr->userstatus."</center>";
					$button1 = "<button type='button' style='width:20%; height:20px; background-color:green;' value='".$tr->id."' onclick='editaccount(this.value)'></button>";
	            	$button2 = "<button type='button' style='width:20%; height:20px; background-color:red;' value='".$tr->id."' onclick='deactivateaccount(this.value)'></button>";
	            	$buttons = "<center>".$button1." ".$button2."</center>";
					$noo++;
	                $sOutput .= "[";
	                $sOutput .= '"'.str_replace('"', '\"', $noo).'",';
	                $sOutput .= '"'.str_replace('"', '\"', $tr->fullname).'",';
	                $sOutput .= '"'.str_replace('"', '\"', $userstatus).'",';
	                $sOutput .= '"'.$buttons.'",';
	                $sOutput = substr_replace( $sOutput, "", -1 );
	                $sOutput .= "],";
	            }
	        }
	        $sOutput = substr_replace( $sOutput, "", -1 );
	        $sOutput .= '] }';
	        return $sOutput;			
		}

		public function updateaccount(){
			extract($_POST);
			$fullname		=	trim(strtoupper($fullname));
			$email  		=  	trim($email);
			$phoneno	 	=	trim($phoneno);
			$usertag	 	=	trim($usertag);
			$password       =   md5($password1);
			$contactaddr	=	trim($contactaddr);
			$DataArray 	= array(
				'fullname'		=> $fullname,
				'password'		=> $password,
				'email'			=> $email,			
				'phoneno'		=> $phoneno,
				'contactaddr'	=> $contactaddr,
				'usertag'		=> $usertag,
				'userstatus'	=> 'Active'

			);	

			$query = $this->db->get_where('admin', array('email'=>$email));
			if ($query->num_rows() == 1){
				# Insert Record as new
				# --------------------
				$this->db->where(array('email'=>$email))->update('admin',$DataArray);		
				$query1 = $this->db->get_where('admin', array('email'=>$email));
				if ($query1->num_rows() > 0){	
					$recordid = $query1->row(0)->id;	
					$_SESSION['imgref'] = "p".$recordid.".jpg";
					$_SESSION['foldername']='passports';
					$this->do_upload();						
				}	
				return 1;
			}else{
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;
			}			
		}

		public function fetchfaculty(){
			$query = $this->db->order_by('id','ASC')->get('faculty');
			if($query->num_rows() > 0){
	            foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
	        }else{
	        	return 0;
	        }
		}		

		public function addupdatestudentrecord(){
			extract($_POST); 
			$matricno			=	trim($matricno);
			$fullname			=	trim(strtoupper($fullname));
			$faculty			=	$faculty;
			$dept				=	$dept;
			$yearofadmission	=	$yearofadmission;
			$yearofgraduation	=	$yearofgraduation;
			$phoneno	 		=	trim($phoneno);
			$gradelevel			=	$gradelevel;
			$contactaddr		=	trim($contactaddr);
			$comment			=	trim($comment);

			$DataArray 	= array(
				'matricno'			=> $matricno,
				'fullname'			=> $fullname,
				'faculty'			=> $faculty,
				'dept'				=> $dept,
				'yearofadmission'	=> $yearofadmission,
				'yearofgraduation'	=> $yearofgraduation,
				'phoneno'			=> $phoneno,
				'gradelevel'		=> $gradelevel,
				'contactaddr'		=> $contactaddr,
				'comment'			=> $comment
			);	

			$query = $this->db->get_where('student', array('matricno'=>$matricno));
			if ($query->num_rows() == 0){
				# Insert Record as new
				# --------------------
				$this->db->insert('student',$DataArray);	
				$query1 = $this->db->get_where('student', array('matricno'=>$matricno));
				if ($query1->num_rows() > 0){	
					$recordid 	= $query1->row(0)->id;					
					$_SESSION['imgref'] = "s".$recordid.".jpg";
					$_SESSION['foldername']='studentmedia';
					$this->do_upload();						
				}	
				return 1;
			}else{
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;
			}			
		}

		public function createadminaccount(){
			extract($_POST); 
			$fullname		=	trim(strtoupper($fullname));
			$email 			=   trim(strtolower($email));
			$phoneno	 	=	trim($phoneno);
			$password       =   md5($password1);
			$contactaddr	=	trim($contactaddr);
			$DataArray 	= array(
				'fullname'		=> $fullname,
				'password'		=> $password,
				'email'			=> $email,
				'phoneno'		=> $phoneno,
				'contactaddr'	=> $contactaddr,
				'usertag'		=> 'admin',
				'userstatus'	=> 'Active'
			);	

			$query = $this->db->get_where('admin', array('email'=>$email));
			if ($query->num_rows() == 0){
				# Insert Record as new
				# --------------------
				$this->db->insert('admin',$DataArray);	
				$query1 = $this->db->get_where('admin', array('email'=>$email));
				if ($query1->num_rows() > 0){	
					$recordid 	= $query1->row(0)->id;					
					$_SESSION['imgref'] = "p".$recordid.".jpg";
					$_SESSION['foldername']='passports';
					$this->do_upload();						
				}	
				return 1;
			}else{
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;
			}			
		}


		# Function call for Account Activation 
		# ---------------------------------
		public function activateaccount(){
			extract($_POST);
	        $DataArray = array(
	            'userstatus'	=> 'Active'
	        );
			$query = $this->db->get_where('admin', array('email' =>$email));
			if ($query ->num_rows()  > 0){
				$this->db->where(array('email' =>$email))->update('admin',$DataArray);
				return 1;

			}else{
				return 0;
			}				
		}
		# Function call for Account Deactivation 
		# ---------------------------------
		public function deactivateaccount(){
			extract($_POST);
	        $DataArray = array(
	            'userstatus'	=> 'Deactive'
	        );

			$query = $this->db->get_where('admin', array('id' =>$getid));
			if ($query ->num_rows()  > 0){
				$this->db->where(array('id' =>$getid))->update('admin',$DataArray);
				return 1;

			}else{
				return 0;
			}				
		}		
		public function createuseraccount(){

			extract($_POST); 
			$fullname		=	trim(strtoupper($fullname));
			$email 			=   trim(strtolower($email));
			$phoneno	 	=	trim($phoneno);
			$password       =   md5($password1);
			$contactaddr	=	trim($contactaddr);
			$DataArray 	= array(
				'fullname'		=> $fullname,
				'password'		=> $password,
				'email'			=> $email,
				'phoneno'		=> $phoneno,
				'contactaddr'	=> $contactaddr,
				'usertag'		=> 'user',
				'userstatus'	=> 'Active'
			);	
	

			$query = $this->db->get_where('admin', array('email'=>$email));
			if ($query->num_rows() == 0){
				# Insert Record as new
				# --------------------
				$this->db->insert('admin',$DataArray);	
				$query1 = $this->db->get_where('admin', array('email'=>$email));
				if ($query1->num_rows() > 0){	
					$recordid 	= $query1->row(0)->id;					
					$_SESSION['imgref'] = "p".$recordid.".jpg";
					$_SESSION['foldername']='passports';
					$this->do_upload();						

				}	
				return 1;
			}else{
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;
			}

		}

		# ----------------------------------- #
		# SECTION FOR FILE UPLOAD TRANSACTION #
		# ----------------------------------- #

		# Picture/image/File upload section
		# -------------------------------- 

		public function do_upload()
		{
			$this->load->library('upload');
			$_FILES['userfile']['name'] = $_SESSION['imgref'];
			$this->upload->initialize($this->set_upload_options());
			$this->upload->do_upload();//Recursive to force file upload
		}

		# File upload settings
		# -------------------- 
		private function set_upload_options(){   
			//upload an image options
			$folderName =	$_SESSION['foldername'];
			$target_dir	=	realpath(APPPATH .'../');
			$image_path	=	$target_dir."\\".$folderName;

			$config = array();
			$config['upload_path'] 		=	$image_path;
			$config['allowed_types'] 	= 	'jpg|jpeg|jfif';
			$config['max_size']      	= 	'0';
			$config['overwrite']     	= 	TRUE;
			return $config;
		}	


















		# New Administrator's Registration
		# ------------------------------
		public function registration(){

			extract($_POST);

			$password 	= MD5($password1);
			$email 		= strtolower($email);
			
			$DataArray 	= array(
				'fullname'		=> $fullname,
				'username'		=> $username,
				'email'			=> $email,
				'password'		=> $password,
				'phoneno'		=> $phoneno
			);	

			$query = $this->db->get_where('admin', array('username'=>$username));
			if ($query->num_rows() == 0){
				# Insert Record as new
				# --------------------
				$this->db->insert('admin',$DataArray);			
				return 1;
			}else{
				# update existing record 
				# ---------------------- 
				//$this->db->where(array('email'=>$email))->update('contributors',$DataArray);
				return 2;	
			}	
		}

		# Updating Contribution Type
		# --------------------------
		public function updatecontributiontype(){
			extract($_POST);
			$DataArray = array(
				'category'	=> $category,
				'amount'	=> $amount
			);	
			$query = $this->db->get_where('contributiontype', array('category'=>$category));
			if ($query->num_rows() == 0){
				# Insert Record as new
				# --------------------
				$this->db->insert('contributiontype',$DataArray);			
				return 1;
			}else{
				# update existing record 
				# ---------------------- 
				$this->db->where(array('category'=>$category))->update('contributiontype',$DataArray);
				return 2;	
			}	
		}		
		# fetch All Registered Products into data table
		# --------------------------------------------- 
		

		public function dtcontributiontypes()
		{						
			$query = $this->db->order_by('id','ASC')->get('contributiontype');
	        $sOutput = '{';
	        $sOutput .= '"aaData": [ ';       	         
	        if($query->num_rows() > 0) 
	        {
	            foreach($query->result() as $row) 
	            {
	                $mdata[] = $row;
	            }
	            $noo=0;
	            foreach($mdata as $tr) {
	            	$amount = "<center>".number_format($tr->amount,2)."</center>";
					$button1 = "<button type='button' style='width:20%; height:20px; background-color:green;' value='".$tr->category."' onclick='editrecord(this.value)'></button>";
	            	$button2 = "<button type='button' style='width:20%; height:20px; background-color:red;' value='".$tr->category."' onclick='deleterecord(this.value)'></button>";
	            	$buttons = "<center>".$button1." ".$button2."</center>";
					$noo++;
	                $sOutput .= "[";
	                $sOutput .= '"'.str_replace('"', '\"', $noo).'",';
	                $sOutput .= '"'.str_replace('"', '\"', $tr->category).'",';
	                $sOutput .= '"'.str_replace('"', '\"', $amount).'",';
	                $sOutput .= '"'.$buttons.'",';
	                $sOutput = substr_replace( $sOutput, "", -1 );
	                $sOutput .= "],";
	            }
	        }
	        $sOutput = substr_replace( $sOutput, "", -1 );
	        $sOutput .= '] }';
	        return $sOutput;			
		}



 
 


		public function fetchcontributiontype(){
			$query = $this->db->order_by('id','ASC')->get('contributiontype');
			if($query->num_rows() > 0){
	            foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
	        }else{
	        	return 0;
	        }
		}

		public function fetchallapplicants(){
		/*	$query = $this->db->order_by('contributioncategory','ASC')->get_where('contributors', array('membershipstatus'=>'P'));     	         
		*/
			$query = $this->db->order_by('contributioncategory','ASC')->get_where('contributors', array('membershipstatus'=>'P', 'updatestatus'=>'1'));     	         
	        if($query->num_rows() > 0){
	            foreach($query->result() as $row) 
	            {
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
	        }else{
	        	return 0;
	        }
		}

		public function fetchallapplicantsX(){
			$query = $this->db->order_by('contributioncategory','ASC')->get('contributors');     	         
	        if($query->num_rows() > 0){
	            foreach($query->result() as $row) 
	            {
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
	        }else{
	        	return 0;
	        }
		}

		public function approveapplicants(){
			extract($_POST);
			foreach($applcnt as $nextapp){
				# Search for the existence of record id
				# --------------------------------------
				$query = $this->db->get_where('contributors', array('id'=>$nextapp));     	         
		        if ($query->num_rows() > 0){
		        	$batch=1;
		        	$passed = 1;
		        	$getctype =	$query->row(0)->contributioncategory;
		        	while($passed==1){
		        		$sb="B".$batch;
		        		$query2 = $this->db->get_where('contributors', array('contributioncategory'=>$getctype,'batch'=>$sb)); 
		        		$totalcontributors = $query2->num_rows();
		        		if ($totalcontributors<2){
		        			$this->db->where(array('id'=>$nextapp))->update('contributors',array('membershipstatus'=>'A','batch'=>$sb));
		        			$passed=0;
		        			break;
		        		}else{
		        			$batch = $batch + 1;
		        		}
		        	}
		        }				
			}
			return 1;
		}

		public function joggle(){
			$affected = 0;
			$sqlstr = "SELECT DISTINCT contributioncategory FROM contributors ORDER BY contributioncategory ASC";
			$query = $this->db->query($sqlstr);     	         
	        if($query->num_rows() > 0){
	            foreach($query->result() as $row){

	                $getcat = $row->contributioncategory;   //select category

	                # Get all batches for the selected category
					$sqlstrb = "SELECT DISTINCT batch FROM contributors WHERE contributioncategory='$getcat' AND batch<>'XX' ORDER BY batch ASC";
					$queryb = $this->db->query($sqlstrb);  
					if($queryb->num_rows() > 0){
						foreach($queryb->result() as $rowb){

							$getbatch = $rowb->batch;

							$contrArray = array();

							# Get all contributor for selected category and batch
							# ----------------------------------------------------
							$sqlstrc = "SELECT DISTINCT id FROM contributors WHERE contributioncategory='$getcat' AND batch='$getbatch' ORDER BY id ASC";
							$queryc = $this->db->query($sqlstrc);
							if ($queryc->num_rows() >0){
								foreach($queryc->result() as $rowc){
									$contrArray[] = $rowc->id;
								}
								$monthassigned = 0;
								shuffle($contrArray);
								foreach ($contrArray as $nextcontrid) {
									$monthassigned = $monthassigned + 1;
									$getmonthx = $this->getthemonthname($monthassigned);
									# Update Customer 
									# ---------------
									$affected++;
									$this->db->where(array('id'=>$nextcontrid))->update('contributors',array('collectionmonth'=>$getmonthx));
								}
							}
						}
					}
	            }
									
	            return $affected;
	        }else{
	        	return 0;
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

		public function fetchbeneficiaries(){
			$getmonthref 	= $this->input->post('getmonthref');
			$accountingyear = $_SESSION['accountingyear']; 
			$sqlstr = "SELECT a.*, b.amount FROM contributors  as a INNER JOIN contributiontype as b ON a.contributioncategory=b.category WHERE a.collectionmonth='$getmonthref'";
			$query = $this->db->query($sqlstr);
			$emailstr="";
			if($query->num_rows() > 0){
	            foreach($query->result() as $row){
	            	$email = $row->email;
	            	$emailstr.=$email."---";
	            	$queryx = $this->db->get_where('contributions', array('email'=>$email,'accountingyear'=>$accountingyear,'disbursed'=>'F')); 
	            	if ($queryx->num_rows() > 0){
	            		$mdata[] = $row;
	            	}
	            }
	            return json_encode($mdata);
	        }else{
	        	return 0;
	        }				
		}

		public function disbursement(){
			extract($_POST);
			$getmonthref 	= $accountingmonthid;
			$accountingyear = $_SESSION['accountingyear']; 	
			$n = count($emails);
			$affected = 0; 
			for($i=0;$i<$n;$i++){

				$getemail 	=	$emails[$i];
				$getamount 	=	$amounts[$i];
				$infoarray	=	explode("~",$this->contributorsinfo($getemail));
				$getname  	=	$infoarray[0];
				$getctype  	=	$infoarray[1];
				$getbatch  	=	$infoarray[2];


				$DataArray 	= array(
					'accountingyear'	=>	$accountingyear,
					'accountingmonth'	=>	$getmonthref,
					'email'				=> 	$getemail,
					'contributor'		=> 	$getname,
					'batch'				=> 	$getbatch,
					'amount'			=> 	$getamount,
					'category'			=>  $getctype
				);	

				# Inserting record into disbursement table
				# ----------------------------------------
				$query = $this->db->get_where('disbursement', array('email'=>$getemail,'accountingyear'=>$accountingyear));
				if ($query->num_rows() == 0){
					# Insert Record as new
					# --------------------
					$this->db->insert('disbursement',$DataArray);
					$affected = $affected + 1;			
				}

				# updating contribution table
				# ---------------------------
				$sqlstr = "UPDATE contributions SET disbursed='T' WHERE email='$getemail' AND accountingyear=$accountingyear";
				$query = $this->db->query($sqlstr);				
			}
			if ($affected>0){
				return $affected;
			}else{
				return 0;
			}
		}

		function contributorsinfo($passedemail){
        	$query = $this->db->get_where('contributors', array('email'=>$passedemail)); 
        	if ($query->num_rows() > 0){
        		return trim($query->row(0)->fullname)."~".trim($query->row(0)->contributioncategory)."~".trim($query->row(0)->batch);
        	}else{
        		return 0;
        	}
		}
		
	}	
?>