
<?php include('../../library/db.php');
		include('../../library/functions.php');

if (isset($_POST['modal']) && $_POST['modal'] == "ye")
{
	$rx_id = $_POST['id'];
	$query1 = "SELECT message FROM inbox WHERE mail_id = '$rx_id' ";
	$result1 = query($query1);
	$row = fetch_array($result1);
	
	echo $row['message'];
	
	
}

?>


