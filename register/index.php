<?php include("../library/db.php");
include("../library/functions.php");

$title = 'Bussiness Connect'; 
    include("../library/captcha.php");
     $_SESSION['captcha'] = simple_php_captcha();

     ?>

     <!DOCTYPE HTML>
<html>
<head>
<title> <?php echo $title; ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="../home/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="../home/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	

<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>

			<div class="signup-block">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3">
					<?php

					 validate_user_registration();
					 ?>

					</div>
				</div>
				<form id="register-form" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<input type="text" id="cname" name="cname" required class="form-control col-md-4 col-xs-4" placeholder="Company Name" tabindex="1">
					</div>
					 
					<div class="form-group">
							<input type="text" id="mobile1" name="mobile1" required class="form-control col-md-4 col-xs-4" placeholder="Company Mobile 1" tabindex="1">

                  </div>

                  <div class="form-group">
						
                    		<input type="text" id="mobile2" name="mobile2" required class="form-control col-md-4 col-xs-4" placeholder="Company Mobile 2" tabindex="1">
                    
                  </div>


                  <div class="form-group">
					<input type="text" name="username" placeholder="username" required="" class="form-control col-md-4 col-xs-4" tabindex="1">
				</div>

				<div class="form-group">
                    		<input type="password" id="password1" name="password" required class="form-control col-md-4 col-xs-4" placeholder="password" tabindex="1">	
                    
                  </div>
                  <div class="form-group">

                  <input type="password" id="password2" name="confirm_password" required class="form-control col-md-4 col-xs-4" placeholder="Confirm Password" tabindex="1">
                  </div>
                  
                  <div class="form-group">
					<input type="email" name="email" placeholder="Email" required="" required class="form-control col-md-4 col-xs-4" tabindex="1">
				</div>

                 <div class="form-group">
					
					<select class="form-control" id="category" name ="category"  class="form-control col-md-4 col-xs-4" tabindex="1">
                         <option>select category</option>
                         	<?php get_category();  ?>
                        </select>
                </div>
					
					<div class="forgot-top-grids">
						
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Register" id="register-submit" name="register-submit" required class="btn-info form-control col-md-4 col-xs-4">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login/"> Login here.</a></h4>
				  <h5><a href="../index.php">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->


<div class="copyrights">
	 <p>© 2017 <?php echo $title; ?>. All Rights Reserved | Design by  <a href="http://springlight.org/" target="_blank">Springlight Technology</a> </p>
</div>	
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>