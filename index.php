	<?php
 	include('./library/db.php');
 	include('./library/functions.php');

 ?>
<?php $title = 'Bussiness Connect'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include('path/header_home.php');?>
<body>
<!-- header -->
	<div class="w3_agile_menu">
		<div class="agileits_w3layouts_nav">
			<div id="toggle_m_nav">
				<div id="m_nav_menu" class="m_nav">
					<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
					<div class="m_nav_ham" id="m_ham_2"></div>
					<div class="m_nav_ham" id="m_ham_3"></div>
				</div>
			</div>
			<div id="m_nav_container" class="m_nav wthree_bg">
				<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item active" id="m_nav_item_1"> <a href="index.html" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
						<li class="m_nav_item" id="moble_nav_item_2"> <a href="register/" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Services">Register</span></a></li>
						<li class="m_nav_item" id="moble_nav_item_3"> <a href="login/" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">Login</span></a></li>
						<li class="m_nav_item" id="moble_nav_item_4"> <a href="work.html" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
						<li class="m_nav_item" id="moble_nav_item_6"> <a href="mail.html" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="agileits_w3layouts_logo">
			<h1><a href="index.html"><?php echo $title; ?></a></h1>
		</div>
		<div class="w3_agileits_header_text">
			
		</div>

		<div class="agileinfo_social_icons">
			<ul class="agileits_social_list">
				<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="wthree_search">
			<form action="#" method="post">
				<input type="text" name="Search" placeholder="Search" required="">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>	
	<div>
		<?php display_message();


		?>


	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3ls_banner_info">
				<h3>small opportunities are often the beginning of great <span>enterprises</span></h3>
			</div>
			<div class="w3ls_banner_info_grids">
				<div class="col-md-4 w3ls_banner_info_grid">
					<a href="register/" >
					<div class="w3l_banner_info_grid">
						<div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
							<i class="hi-icon hi-icon-archive w3_fa_user"> </i>
						</div>
						<h4>SignUp</h4>
					</div>
					</a>
				</div>
				<div class="col-md-4 w3ls_banner_info_grid">
					<a href="login/" >
					<div class="w3l_banner_info_grid">
						<div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
							<i class="hi-icon hi-icon-archive w3_fa_ravelry"> </i>
						</div>
						<h4>Sign In</h4>
					</div>
					</a>
				</div>
				<div class="col-md-4 w3ls_banner_info_grid">
					<div class="w3l_banner_info_grid">
						<div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
							<i class="hi-icon hi-icon-archive w3_fa_cubes"> </i>
						</div>
						<h4>Payment</h4>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<?php include('path/banner-bottom.php');?>
<!-- //banner-bottom -->
<!-- flexisel -->
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
<!-- //flexisel -->

<!-- support-three_grids -->
	<div class="support_three_grids">
		<div class="container">
			<div class="col-md-8 agileinfo_support_three_grids_left">
			
			</div>
			<div class="col-md-4 agileinfo_support_three_grids_right">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //support-three_grids -->


<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h3>Follow Us</h3>
						<div class="w3ls_footer_grid_left1_pos">
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
								<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a></li>
								<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right">
					<p>&copy; <?php echo date('Y');?> . All rights reserved | Design by <a href="http://www.springlight.org">SpringLight Technology</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Economic
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<p>Very Funny Slides 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- testimonial-plugin -->
		<script src="js/mislider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>
<!-- //testimonial-plugin -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>