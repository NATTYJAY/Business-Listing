<?php
include('../../library/db.php');
		include('../../library/functions.php');
		$usr_id = $_SESSION['usr_id'];
?>
<?php

if (isset($_POST['no']) && $_POST['no'] == "yes"){
	
	$sender = (strtoupper(clean($_POST['sender'])));
	$subject = (strtoupper(clean($_POST['subject'])));
	$message=(clean(strtolower( $_POST['message'])));
	  
	$re_id = $_POST['re_id'];
	
	$insert = "INSERT INTO inbox(sender,subject,message,r_id,date_time,s_id) VALUES('$sender','$subject','$message','$re_id', '".date('Y-m-d H:i:s')."', '$usr_id')";
    $result = query($insert);

    $insert = "INSERT INTO sent(sender,subject,message,r_id,date_time) VALUES('$sender','$subject','$message','$usr_id', '".date('Y-m-d H:i:s')."')";
    $results = query($insert);
    
						
						
	if($result==1 && $results ==1){
		echo "
			<div class='alert alert-success  mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p> Message Sent</p> 
			</button>
			</div>";
		
		}
		else{
			echo "
			<div class='alert alert-danger  mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p> Error Occur. Try Again Later </p> 
			</button>
			</div>";
			
			}
		
	
	}
	


?>