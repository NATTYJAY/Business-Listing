<?php
	//messages processings
	require_once('../system_load.php');
	require_once('../file_load.php');
	//loading system.
	
	authenticate_user('subscriber');
	
	extract($_POST);
	
	//form validation first important part.
	
	if($users_id == '') { 
		HEADER('LOCATION: ../manage_photocopy.php?message=Please select Staff.');
		exit();
	}
	
	
	$photo_id = $photocopy->add_photocopy($ini_no, $fin_no, $users_id, $ac_cost, $unit_cost, $total, $error);
	//add purchase ends here.
	
HEADER('LOCATION: ../cash_photocopy.php?message=File was saved successfuly.');
	exit();
	