<?php
	//messages processings
	require_once('../system_load.php');
	require_once('../file_load.php');
	//loading system.
	
	authenticate_user('subscriber');
	
	extract($_POST);

	$typist->update_typist($date, $invoice_no, $title_work, $client_id, $unit_charge, $pages, $discount, $total, $type_id);
	//add purchase ends here.
	
	$typist_id=$_POST['type_id'];
HEADER('LOCATION: ../typist.php?message=Record was Updated successfuly.');
	
	