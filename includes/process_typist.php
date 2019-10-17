<?php
	//messages processings
	require_once('../system_load.php');
	require_once('../file_load.php');
	//loading system.
	
	authenticate_user('subscriber');
	
	extract($_POST);
	
	//form validation first important part.
	
	if($client_id == '') { 
		HEADER('LOCATION: ../manage_typist.php?message=Please select vendor.');
		exit();
	}
	
	if(!isset($title_work)) { 
		HEADER('LOCATION: ../manage_typist.php?message=Please Work Title.');
		exit();
	}
	
	$typist_id = $typist->add_typist($date, $invoice_no, $title_work, $client_id, $unit_charge, $pages, $discount, $total);
	//add purchase ends here.
	
	
HEADER('LOCATION: ../typist.php?message=Record was saved successfuly.');
	
	