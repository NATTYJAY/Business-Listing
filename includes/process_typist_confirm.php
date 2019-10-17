<?php
	//messages processings
	require_once('../system_load.php');
	require_once('../file_load.php');
	//loading system.
	
	authenticate_user('subscriber');
	if(!isset($_GET['typist_id']) || $_GET['typist_id'] == '') { 
		HEADER('LOCATION: typist.php?');
	}else{
		$typist_id = $_GET['typist_id'];
		} //select company redirect ends
	extract($_GET);
//$date = date('Y-m-d').' '.date('h:i:sa');
$check=$typist->get_typist_info($_GET['typist_id'], 'payment');
	if($check == 'UNPAID' || $check == '' )
	{$typist->confirm_typist($typist_id);}
	elseif($check == 'PAID')
	{ $typist->cancel_typist($typist_id);}

	
	//add purchase ends here.	
	//$typist_id=$_POST['type_id'];
HEADER('LOCATION: ../cash_typist.php?message=Done.');
	
	