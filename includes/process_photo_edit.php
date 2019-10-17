<?php
	//messages processings
	require_once('../system_load.php');
	require_once('../file_load.php');
	//loading system.
	
	authenticate_user('subscriber');
	
	extract($_POST);
	
	//form validation first important part.
	
	if($photo_id == '') { 
		HEADER('LOCATION: ../manage_photocopy.php?message=Sorry System Integrity as been compromise.');
		exit();
	}
	
	
	if($ini_no == '' || $ini_no == '0') { 
		HEADER('LOCATION: ../edit_photocopy.php?message=Initial Number cannot be empty or Zero.');
		exit();
	}
	if($fin_no == '' || $fin_no == '0') { 
		HEADER('LOCATION: ../edit_photocopy.php?message=Final Number Cannot Be Empty or Zero.');
		exit();
	}
	if($unit_cost == '' || $unit_cost == '0') { 
		HEADER('LOCATION: ../edit_photocopy.php?message=Sorry Unit Cost Cannot be Zero(0) We Dont Run Free Services Here.');
		exit();
	}
	
	
	
	
	/*$digital_id=$_POST['quantity'];
	echo $digital_id;
	die();
	
	*/
	$photocopy->update_photo($fin_no, $unit_cost, $ini_no, $error,  $photo_id);
	//add purchase ends here.
	
	$photo_id=$_POST['photo_id'];
HEADER('LOCATION: ../cash_photocopy.php?message=Update was successfuly.');
	
