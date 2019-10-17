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
	
	if(!isset($memo)) { 
		HEADER('LOCATION: ../manage_digital.php?message=Please work Description.');
		exit();
	}
	
	
	if($payment == '' || $payment == '0') { 
		HEADER('LOCATION: ../manage_digital.php?message=Please select a payment method.');
		exit();
	}
	
	$digital_id = $digital->add_digital($date, $invoice_no, $memo, $client_id, $size, $cost, $echarge, $apay, $total, $balance, $payment, $quantity);
	//add purchase ends here.
	if($payment_method == 'cash') { 
		$transaction_type = 'Cash Sale';
	} else if($payment_method == 'credit_card') {
		$transaction_type = 'Credit Card Sale';	
	} else { 
		$transaction_type = 'Sale Invoice';
	}
	
HEADER('LOCATION: ../manage_digital.php?message=Sale was saved successfuly.');
	
	