<?php include("../library/db.php"); 
		include("../library/functions.php");

?>
<?php

function message_display(){
	if(isset($_SESSION['message'])){

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function set_messg($message){

	if(!empty($message)){
		$_SESSION['message'] = $message;
	}

	else{
		$message = "";
	}
}



function compose(){

	$errors = [];

	if ($_SERVER['REQUEST_METHOD']== "POST"){
	
		$sender  = clean($_POST['sender']);
 		$subject   = clean($_POST['subject']);
 		$message    = clean($_POST['message']);
 		$r_id 		=	clean($_POST['r_id']);
 		$date_time =   date('Y-m-d H:i:s');

 		if(($sender) === "To :"){
 			$errors[]= "please fill in the sender";
 		}
 		if(($subject) === "Subject :"){
 			$errors[]= "please fill in subject";
 		}

 		if(($message) === "Message :"){
 			$errors[]= "please fill in message";
 		}
 		if(!empty($errors)) {
 			  foreach($errors as $error){
 			 //error dis[play heere
 			  	echo validation_errors($error);
 			  }
 		} else{

 			if(send_message($sender, $subject, $message, $r_id, $date_time)){
 				set_messg("<p class='bg-success text-center'>Message Sent</p>");
			}

				else{
					set_messg("<p class='bg-danger text-center'>Message could not be sent</p>");
				}
		 }
	}


}



function send_message($sender, $subject, $message, $r_id, $date_time){

	$sql = "INSERT INTO inbox(sender, subject, message, r_id,date_time)";
	$sql.= " VALUES('$sender','$subject','$message','$r_id','$date_time')";
				$result = query($sql);
				confirm($result);
				return true;
}


	



			







?>