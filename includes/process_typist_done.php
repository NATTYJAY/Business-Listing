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
$date = date('Y-m-d').' '.date('h:i:sa');
	$typist->done_typist($date, $typist_id);
	//add purchase ends here.	
	//$typist_id=$_POST['type_id'];
HEADER('LOCATION: ../typist.php?message=Done.');
	
	