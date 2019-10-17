
<?php
 require 'phpmailer/class.phpmailer.php';
			     require 'phpmailer/class.smtp.php';

function clean($data){
	global $con;
	$data = stripslashes($data);
        $data = htmlentities( $data, ENT_QUOTES, 'utf-8' );
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = mysqli_real_escape_string($con, $data);

        return $data;

}

function redirect($location){
	return header("Location:{$location}");// curly bracket means it is a variableoo.
}

function set_message($message){

	if(!empty($message)){
		$_SESSION['message'] = $message;
	}

	else{
		$message = "";
	}
}

function display_message(){
	if(isset($_SESSION['message'])){

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function email_exit($email){

	$sql = "SELECT r_id FROM reg_details WHERE email ='$email'";
	$result = query($sql);
	if(row_count($result)==1){
		return true;
	}

	else{
		return false;
	}


}

function validation_errors($error_message){

 $error_message = <<<ME
 			  	 <div class="alert alert-danger" role="alert">
  <a href="#" class="alert-link">...</a>
  <strong> Warning </strong> $error_message
</div>
ME;
return $error_message; 
}

function get_category(){
	$result = "SELECT * from category";
      $select = query($result);
             while( $row = fetch_array($select)){
               echo "<option value='".$row['c_id']."'>".$row['cat_name'] .'<--->'. $row['cat_desc']."</option>";
              }
}

function username_exit($username){

	$sql = "SELECT r_id FROM reg_details WHERE user ='$username'";
	$result = query($sql);
	if(row_count($result)==1){
		return true;
	}
	else{
		return false;
	}
}

function isLoginSessionExpired() {
	$login_session_duration = 10; 
	$current_time = time(); 
	if(isset($_SESSION['loggedin_time']) and isset($_SESSION["usr_id"])){  
		if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){ 
			return true; 
		} 
	}
	return false;
}



function send_email($email,$subject,$emailBody){
///***writing generic function here**///
  $mail = new PHPMailer;

                    $mail->isSMTP();
                    
                    $mail->SMTPAuth = true;

                    $mail->Host = 'n1plcpnl0113.prod.ams1.secureserver.net';

                    $mail->Port = 465;

                    $mail->SMTPSecure = 'ssl';

                    $mail->SMTPAuth = true;

                    $mail->Username = "info@magnateblogspot.com";

                    $mail->Password = "Active123@";

                    $mail->setFrom('info@magnateblogspot.com', 'MAGNATEBLOGSPOT');

                    $mail->addReplyTo('info@magnateblogspot.com', 'MAGNATEBLOGSPOT ');

                    $mail->addAddress($email);

                    $mail->Subject = $subject;

                    $mail->msgHTML($emailBody );

                    if (!$mail->send()) {
                       
                        header('location:fogiveme.php?error=sending');
                    } 
                    else {
                       header('location:fogiveme.php?noerror=insending');
                    }

                    return $mail;
               

}
/* **********-------GET RANDOM WORD FUNCTION HERE FOR USERNAME------************/
function getRandomUserName($len = 5) {
    $word = array_merge(range('0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

/* **********-------GET RANDOM WORD FUNCTION HERE FOR PASSWORD------************/
function getRandomPassWord($len = 10) {
    $word = array_merge(range('0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

 mt_srand((double) microtime()*1000000);
	$password =$rand_number = rand(0,999);
	
	//set user's password to this in database or return false

function validate_user_registration(){
 	$errors = [];
 	$min =3;
 	$max =100;
 	$num=11;

 	if($_SERVER['REQUEST_METHOD']== "POST"){
 		$cname  = clean($_POST['cname']);
 		$mobile1   = clean($_POST['mobile1']);
 		$mobile2    = clean($_POST['mobile2']);
 		$email       = clean($_POST['email']);
 		$username    = clean($_POST['username']);
 		$password    = clean($_POST['password']);
 		$confirm_password = clean($_POST['confirm_password']);
 		/*$password    = clean(md5($_POST['password']));
 		$confirm_password = clean(md5($_POST['confirm_password']));*/
 		$category       = clean($_POST['category']);

 		if(strlen($cname) < $min){
 			$errors[]= "your Cname cannot be less than {$min} characters";
 		}

 		if(strlen($cname) > $max){
 			$errors[]= "your Cname cannot be less than {$max} characters";
 		}

 		if(strlen($mobile1) < $min){
 			$errors[]= "your Phone Number cannot be less than {$min} characters";
 		}

 		if(strlen($mobile1) > $num){
 			$errors[]= "your Phone Number cannot be greater than {$num} characters";
 		}
 		if(strlen($mobile2) < $min){
 			$errors[]= "your Phone Number cannot be less than {$min} characters";
 		}

 		if(strlen($mobile2) > $num){
 			$errors[]= "your Phone Number cannot be less than {$num} characters";
 		}
 		if(username_exit($username)){
 			$errors[]= "Sorry username has already exit in the database";
 		}

 		if($mobile1 == $mobile2){
 			$errors[]= "your phone number cannot be the same";
 		}

 		if(email_exit($email)){
 			$errors[]= "Sorry email has already exit in the database";
 		}

 		if(strlen($email) > $max){
 			$errors[]= "your email cannot be more than {$max} characters";
 		}
 		if(isset($_POST['category']) && $_POST['category'] == 'select category'){
 			$errors[]= "please select category";
 		}
 		if($password !== $confirm_password){
 			$errors[]= "your password fields do not match";
 		}

 		/*if($password !== $confirm_password){
 			$errors[]= "your password fields do not match";
 		}*/
 		if(!empty($errors)) {
 			  foreach($errors as $error){
 			 //error dis[play heere
 			  	echo validation_errors($error);
 			  }
 		} else{
 			if(register_user($cname, $mobile1, $mobile2, $email, $category, $password, $username)){
 				set_message("<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
   <b><h3>$cname</h3></b> is <b>REGISTERED</b> <i><b>Check your email </b></i>
</div>");
 				redirect("../");
 				
 			}
 			else{
 				set_message("<p class='bg-danger text-center'> Sorry $cname cannot be registered !.</p>");
 				redirect("../register/");
 			}
 		}

  	} // post request

} //functions


/****************Reister user function here********/
function register_user($cname, $mobile1, $mobile2, $email, $category, $password, $username){

	if(email_exit($email)){
		return false;
	} elseif (username_exit($username)){
				return false;
		} 
			else{
					
					//$username = getRandomUserName();
				 	//$password = getRandomPassWord();

	$sql = "INSERT INTO reg_details(cname, mobile1, mobile2, email, c_id, pass, user)";
	$sql.= " VALUES('$cname','$mobile1','$mobile2','$email','$category','$password','$username')";
				$result = query($sql);

				global $con;

				$sql2 = "INSERT INTO locks(r_id, premium)";
	$sql2.= " VALUES('".mysqli_insert_id($con)."','0')";
				$result2 = query($sql2);

			 	$subject = "Login Details to magnateblogspot";
				$emailBody = "    <div><br>USERNAME:-<br>".$username."<br><br><p>PASSWORD:-<br>
								".$password."
				 <br><br></p>Best Regards,<br> MAGNATEBLOGSPOT Admin.</div>     ";

				send_email($email,$subject,$emailBody);
				return true;
				
				
	



			}





}

	function validate_user_login(){
			 	$errors = [];
			 	$min =3;
			 	$max =100;

			 	if($_SERVER['REQUEST_METHOD']== "POST"){

			 		$user       = clean($_POST['user']);
	 				$pass    =  clean($_POST['pass']);

	 				if(empty($user)){
	 					$errors[] = "Email field cannot be empty";
	 				}
	 				if(empty($pass)){
	 					$errors[] = "password field cannot be empty";
	 				}
	 					if(!empty($errors)) {
			 			  foreach($errors as $error){
			 			 //error dis[play heere
			 			  	echo validation_errors($error);
			 			  }
				 		} else{
				 			if(login_user($user, $pass)){
				 				 redirect('../home/');
				 			}elseif(log_user($user, $pass)){
				 					redirect('../admin/');
				 			} else{
				 				echo validation_errors('your credentials are not correct');
				 			}

				 		}

			 	}
	}



  function login_user($user, $pass){
			$sql = "SELECT * FROM reg_details WHERE user='".$user."' ";
			$result = query($sql);

			if(row_count($result) == 1){
				$row = fetch_array($result);
				$db_password = $row['pass'];
				$_SESSION['usr_id'] = $row['r_id'];
				$_SESSION['c_id'] = $row['c_id'];
				
				
				$_SESSION['cname'] = $row['cname'];

				return true;
			}
			else{
				return false;
			}

} // end of function


function log_user($user, $pass){
			$sql = "SELECT * FROM admin WHERE admin='".$user."' AND password='".$pass."' ";
			$result = query($sql);

			if(row_count($result) == 1){
				$row = fetch_array($result);
				$password = $row['password'];
				$_SESSION['admin_id'] = $row['admin_id'];
				$_SESSION['admin'] = $row['admin'];
				

				return true;
			}
			else{
				return false;
			}

} // end of function




?>