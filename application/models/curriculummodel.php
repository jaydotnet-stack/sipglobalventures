<?php

	error_reporting(0);
	session_start();
	
	ini_set('max_execution_time',0);
	ini_set('memory_limit','256M');
	
	class Curriculummodel extends CI_Model
	{		
		public function curriculumbyinstructor(){
            extract($_POST);
            $username = trim($username);
			$query = $this->db->get_where('curriculum', array('course_instructor'=>$username));
			if ($query->num_rows() > 0){
	            foreach($query->result() as $row){
	                $mdata[] = $row;
	            }
	            return json_encode($mdata);
			}else{
				return 0;	
			}            
		}
		public function curriculumbycoursecode(){
            extract($_POST);
            $courseCode = trim($courseCode);
			$query = $this->db->get_where('curriculum', array('course_code'=>$courseCode));
			if ($query->num_rows() > 0){
	            // foreach($query->result() as $row){
	            //     $mdata[] = $row;
	            // }
	            return json_encode($query->result());
			}else{
				return 0;	
			}            
		}
		public function savecurriculum(){
			session_start();
			$_SESSION['curriculum'] = '';
			$courseInstructor = $_SESSION['username']; 
            //extract posted form fields
            extract($_POST);
			$courseCode						= ucwords(str_replace(" ", "", $courseCodeHidden));

			//get post
			// $courseCode       = mysqli_real_escape_string($conn, ucwords(refineInput(str_replace(" ", "", $courseCodeHidden))));
			// $qualificationInView = $qualificationInView; 
			// $highestQualification = $highestQualification; 
			// $academicSchool = mysqli_real_escape_string($conn, refineInput($academicSchool));
			// $courseTitle = mysqli_real_escape_string($conn, refineInput($courseTitle));
			// $modeOfDelivery = $modeOfDelivery; $courseCredits = $courseCredits;
			// $durationInWeeks = $durationInWeeks; $proposedStartDate = $proposedStartDate;
			// $courseLecturer = mysqli_real_escape_string($conn, refineInput($courseLecturer));
			// $courseDescription = mysqli_real_escape_string($conn, $courseDescription);
			// $targetAudience = $targetAudience;
			// $topicList = mysqli_real_escape_string($conn, $topicList);
			// $learningOutcomes = mysqli_real_escape_string($conn, $learningOutcomes);
			// $courseStatus = refineInput($courseStatus);
			// $enrolmentProjection = $enrolmentProjection;
			// $coursePrerequisites = mysqli_real_escape_string($conn, $coursePrerequisites);

			//technology checkboxex
			$techChked = '';
			foreach($tech as $chkbx) {
				if(isset($chkbx) && !empty($chkbx)) {
					$techChked .= $chkbx.',';
				}
			}    
			$techChked = $techChked;
			//resources checkboxex
			$resourcesChked = '';
			foreach($resources as $chkbx) {
				if(isset($chkbx) && !empty($chkbx)) {
					$resourcesChked .= $chkbx.',';
				}
			}    
			$resourcesChked = $resourcesChked;
			//personnel checkboxex
			$personnelChked = '';
			foreach($personnel as $chkbx) {
				if(isset($chkbx) && !empty($chkbx)) {
					$personnelChked .= $chkbx.',';
				}
			}   
			$personnelChked = $personnelChked;
			//assesment method checkboxex
			$assesmentMethod = '';
			foreach($assesment_method as $chkbx) {
				if(isset($chkbx) && !empty($chkbx)) {
					$assesmentMethod .= $chkbx.',';
				}
			}   
			$assesmentMethod = $assesmentMethod;
			$courseCompetencyMatrix = $courseCompetencyMatrix;

			$DataArray 	= array(
				'course_code'				=> ucwords(str_replace(" ", "", $courseCodeHidden)),
				'qualification_in_view'		=> $qualificationInView,	
				'highest_qualification'		=> $highestQualification,
				'academic_school'			=> $academicSchool,
				'course_title'				=> $courseTitle,
				'mode_of_delivery'			=> $modeOfDelivery,
				'course_credits'			=> $courseCredits,
				'duration_in_weeks'			=> $durationInWeeks,
				'proposed_start_date'		=> $proposedStartDate,
				'course_lecturer'			=> $courseLecturer,
				'course_description'		=> $courseDescription,
				'target_audience'    		=> $targetAudience,
				'topic_list'				=> $topicList,
				'learning_outcome'			=> $learningOutcomes,
				'course_status'				=> $courseStatus,
				'enrolment_projection'		=> $enrolmentProjection,
				'course_prerequisite'		=> $coursePrerequisites,
				'technology'				=> $techChked,
				'resources'					=> $resourcesChked,
				'personnel'					=> $personnelChked,
				'assesment_method'			=> $assesmentMethod,
				'course_competency_matrix'	=> $courseCompetencyMatrix,
				'course_instructor'			=> $courseInstructor
			);

			//refine post 
			// function refineInput($data) {	
			// 	$data = trim($data);
			// 	$data = stripslashes($data);
			// 	$data = htmlspecialchars($data);
			// 	return $data;
			// }
			$query = $this->db->get_where('curriculum', array('course_code'=>$courseCode));
			if ($query->num_rows() > 0){
				if($this->db->where(array('course_code'=>$courseCode))->update('curriculum',$DataArray)){
					//get learning activity to send to the pdf page
					$query = $this->db->get_where('curriculum', array('course_instructor'=>$courseInstructor,'course_code'=>$courseCode));
					if ($query->num_rows() == 1){
						$_SESSION['curriculum'] = $query->result();					
					}								
					return 2;								
				}else{
					return -2;
				}
			}else{
				if($this->db->insert('curriculum',$DataArray)){
					//get learning activity to send to the pdf page
					$query = $this->db->get_where('curriculum', array('course_instructor'=>$courseInstructor,'course_code'=>$courseCode));
					if ($query->num_rows() == 1){
						$_SESSION['curriculum'] = $query->result();		
						$query2 = $this->db->get_where('curriculum');
						$_SESSION['noofregisteredcourses']  =	$query2->num_rows();									
					}            
					return 1;
				}else{
					return -1;
				} 
			}			
		}
		public function getcurriculum(){
    		//get post
    		$courseCode = ucwords($_POST['courseCode']);
			$query = $this->db->get_where('curriculum', array('course_code'=>$courseCode));
			if ($query->num_rows() == 1){
				return json_encode($query->result());
			}else{
				return 0;
			}
		}
		public function deletecurriculum(){
    		//get post
    		$courseCode = ucwords($_POST['courseCode']);
			$query = $this->db->get_where('curriculum', array('course_code'=>$courseCode));
			if ($query->num_rows() > 0){
				$this->db->where('course_code', $courseCode)->delete('curriculum');
				return 1;
			}else{
				return 0;
			}
		}
	}	
?>