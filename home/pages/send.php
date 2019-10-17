
<?php include('../../library/db.php');
		include('../../library/functions.php');

if (isset($_POST['send']) && $_POST['send'] == "ya")
{
	$send_id = $_POST['id'];
	$query2 = "SELECT message FROM sent WHERE sent_id = '$send_id' ";
	$result2 = query($query2);
	$row = fetch_array($result2);
	
	echo $row['message'];
	
	
}

?>


