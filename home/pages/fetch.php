<?php include('../../library/db.php');
		include('../../library/functions.php');

if (isset($_POST['itiswell']) && $_POST['itiswell'] == "getnow")
{
	$r_id = $_POST['getcus'];
	$query = "SELECT * FROM reg_details WHERE r_id = '$r_id' ";
	$result = query($query);
	$row = fetch_array($result);
	echo json_encode($row);
	
}

?>