<?php
include'headeradmin.php';
if(!isset($_SESSION['admin_id'])){
  header("location:../home/404.php");
  }
?>
<?php 
    session_regenerate_id();
    session_unset();
    session_destroy();

    redirect("../")
	
	
?>