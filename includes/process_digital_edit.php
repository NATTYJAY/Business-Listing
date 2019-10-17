<?php
	//messages processings
	require_once('../system_load.php');
	require_once('../file_load.php');
	//loading system.
	
	authenticate_user('subscriber');
	
	extract($_POST);
	
	//form validation first important part.
	
	if($client_id == '') { 
		HEADER('LOCATION: ../manage_digital.php?message=Please select vendor.');
		exit();
	}
	
	if(!isset($demo)) { 
		HEADER('LOCATION: ../manage_digital.php?message=Please work Description.');
		exit();
	}
	
	
	if($payment == '' || $payment == '0') { 
		HEADER('LOCATION: ../manage_digital.php?message=Please select a payment method.');
		exit();
	}
	
	
	/*$digital_id=$_POST['quantity'];
	echo $digital_id;
	die();
	
	*/
	$digital->update_digital($date, $invoice_no, $demo, $client_id, $size, $cost, $echarge, $apay, $total, $balance, $payment, $quantity, $digital_id);
	//add purchase ends here.
	
	$digital_id=$_POST['digital_id'];
HEADER('LOCATION: ../digital.php?message=Sale was saved successfuly.');
	
	