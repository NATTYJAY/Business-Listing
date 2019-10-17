<?php session_start();
include'connect.php';
include'security.php';

if (isset($_POST['notnow']) && $_POST['notnow'] == "nonow")
{
	$cus_id = $_POST['getcus'];
	$query = "SELECT * FROM addcourses WHERE course_id = '$cus_id' ";
	$result = mysqli_query($db,$query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);
	
}

?>