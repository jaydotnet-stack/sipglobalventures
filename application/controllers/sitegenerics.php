<?php
	//Initiate session
	// session_start();
	# FRONT-END GENERICS
	# ------------------ 
	$this->data['sitecss'] 			=	$this->load->view('sitegenerics/sitecss','', TRUE);
	$this->data['sidebar']			=	$this->load->view('sitegenerics/sidebar','', TRUE);
	$this->data['header']		=	$this->load->view('sitegenerics/header','', TRUE);
	// $this->data['status']			=	$this->load->view('sitegenerics/status','', TRUE);
	$this->data['footer']		=	$this->load->view('sitegenerics/footer','', TRUE);
	$this->data['switcher']		=	$this->load->view('sitegenerics/switcher','', TRUE);
	$this->data['sitescript']		=	$this->load->view('sitegenerics/sitescript','', TRUE);
	$this->data['custom_js']		=	$this->load->view('sitegenerics/custom_js','', TRUE);
	
	
?>

