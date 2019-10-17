<?php
  //  ini_set( 'session.use_trans_sid', FALSE );
    ini_set( 'session.use_only_cookies', TRUE );               
   
 function startmysession($lifetime, $path, $domain, $secure, $httponly){
      session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);
      
    session_regenerate_id(true);
      @session_start();
    }
    $domain = $_SERVER['SERVER_NAME'];

    startmysession(0, '/', $domain, false, true);
   // 
   
   
    date_default_timezone_set('Africa/Lagos');
  
 $con=mysqli_connect('localhost', 'root', '', 'business_cat');
 // Put all the things needed for databse here
  define('MAX_IDLE_TIME', 5);
 if (!isset($_SESSION['timeout_idle'])) {
    $_SESSION['timeout_idle'] = time() + MAX_IDLE_TIME;
} else {
    if ($_SESSION['timeout_idle'] < time()) {    
        //destroy session
    } else {
        $_SESSION['timeout_idle'] = time() + MAX_IDLE_TIME;
    }
}

 function row_count($result){
 	
 	return mysqli_num_rows($result);

 }

function escape($string){
	global $con;
 return mysqli_real_escape_string($con, $string);


}
 function query($query){
 	global $con; // to enable db connection to work in this funtion
 	return mysqli_query($con, $query);
 
 } 

 function confirm($result){
 	global $con;

 	if(!$result){
 		die("QUERY FAILED". mysqli_error($con));
 	}

 }

 function fetch_array($result){
 	
 	global $con;

 	return mysqli_fetch_array($result);


 }

 //mysqli_query($con, $query);

?>