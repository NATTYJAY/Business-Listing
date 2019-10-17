<?php 
      include("../library/db.php");
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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<?php include("../library/future.php");?>
<!--static chart-->
<style type="text/css">
        pre {
            border: solid 1px #bbb;
            padding: 10px;
            margin: 2em;
        }

        img {
            border: solid 1px #ccc;
            margin: 0 2em;
        }
    </style>
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
			
			<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
		 <?php 
 				display_message();
 				?>

 				<?php validate_user_login();?>
		</div>
	</div>
	<br/>
				<form id="register-form" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
					<input type="text" name="user" placeholder="User Name" required="">
					<input type="password" name="pass" class="lock" placeholder="Password">
					
					<input name="pcode" id="pcode" type="text" value="<?php echo $_SESSION['captcha']['code'];?>"/>
        
      <p>
       <img src="<?php echo $_SESSION['captcha']['image_src']; ?>" alt="CAPTCHA code">
       </p>
        
           
       <input name="captcha" id="captcha" type="text" placeholder="ENTER CAPTCHA" required>
      
					<div class="forgot-top-grids">
						
						<div class="forgot">
							<a href="#">Forgot password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Login Here" id="login" name="login">	
					<h3>Not a member?<a href="register.php"> Sign up now</a></h3>				
					
				</form>
				<h5><a href="index.php">Go Back to Home</a></h5>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
