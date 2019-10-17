
<?php

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
               echo "<option value='".$row['id']."'>".$row['cat_name']. $row['cat_desc']."</option>";
              }
}

function send_email($email, $subject, $msg, $headers){
///***writing generic function here**///
return mail($email, $subject, $msg, $headers);

}

 mt_srand((double) microtime()*1000000);
	$password =$rand_number = rand(0,999);
	
	//set user's password to this in database or return false

function validate_user_registration(){
 	$errors = [];
 	$min =3;
 	$max =20;
 	$num=11;

 	if($_SERVER['REQUEST_METHOD']== "POST"){
 		$cname  = clean($_POST['cname']);
 		$mobile1   = clean($_POST['mobile1']);
 		$mobile2    = clean($_POST['mobile2']);
 		$email       = clean($_POST['email']);
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

 		if(strlen($mobile1) > $max){
 			$errors[]= "your Phone Number cannot be greater than {$max} characters";
 		}
 		if(strlen($mobile2) < $min){
 			$errors[]= "your Phone Number cannot be less than {$min} characters";
 		}

 		if(strlen($mobile2) > $max){
 			$errors[]= "your Phone Number cannot be less than {$max} characters";
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
 		/*if($password !== $confirm_password){
 			$errors[]= "your password fields do not match";
 		}*/
 		if(!empty($errors)) {
 			  foreach($errors as $error){
 			 //error dis[play heere
 			  	echo validation_errors($error);
 			  }
 		} else{
 			if(register_user($cname, $mobile1, $mobile2, $email, $category)){
 				echo "user registered";
 				set_message("<p class='bg-success text-center'> $cname Registered, check your email for username and password for login</p>");
 				redirect("login.php");
 			}
 			else{
 				set_message("<p class='bg-danger text-center'> Sorry $cname cannot be registered !.</p>");
 				redirect("register.php");
 			}
 		}

  	} // post request

} //functions


/****************Reister user function here********/
function register_user($cname, $mobile1, $mobile2, $email, $category){

	if(email_exit($email)){
		return false;
	}
			else{
					
					$username=$cname.rand(100,999);
				 $password = $email.rand(100,999);

	$sql = "INSERT INTO reg_details(cname, mobile1, mobile2, email, id, pass, user)";
	$sql.= " VALUES('$cname','$mobile1','$mobile2','$email','$category','$password','$username')";
				$result = query($sql);
				confirm($result);

				$subject = "Username and password details for login";
				$msg ="<p class='bg-success text-center'> $username<br/> &password</p>";
				$headers = "From: noreply@yourwebsite.com";

				send_email($email, $subject, $msg, $headers);
				return true;

			}
}

	function validate_user_login(){
			 	$errors = [];
			 	$min =3;
			 	$max =20;

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
				 				 redirect('../home/index.php');
				 			} else{
				 				echo validation_errors('your credentials are not correct');
				 			}

				 		}

			 	}
	}



  function login_user($user, $pass){
			$sql = "SELECT pass, user FROM reg_details WHERE user='".$user."' ";
			$result = query($sql);

			if(row_count($result) == 1){
				$row = fetch_array($result);
				$db_password = $row['pass'];
				return true;
			}
			else{
				return false;
			}

		} // end of function


?>