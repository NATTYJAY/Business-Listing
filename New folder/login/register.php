<?php include("headerlogin.php");?>
<!--inner block start here-->
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
                  		<div class="col-md-6 col-sm-6 col-xs-6">
                    		<input type="text" id="mobile1" name="mobile1" required class="form-control col-md-4 col-xs-4" placeholder="Company Mobile 1" tabindex="1">	
                    	</div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                    		<input type="text" id="mobile2" name="mobile2" required class="form-control col-md-4 col-xs-4" placeholder="Company Mobile 2" tabindex="1">
                    
                    </div>
                  </div>
					<input type="text" name="email" placeholder="Email" required="">

                
					
					<select class="form-control" id="category" name ="category" required>
                         <option>select category</option>
                         	<?php get_category();  ?>
                        </select>
					
					<div class="forgot-top-grids">
						
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Register" id="register-submit" name="register-submit" required class="btn-info form-control col-md-4 col-xs-4">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.html"> Login here.</a></h4>
				  <h5><a href="../index.php">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->

<?php include("footerlogin.php");?>

                      
						
