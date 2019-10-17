<?php include("includes/homefunc.php"); 

if(!isset($_SESSION['usr_id'])){
  header("location:404.php");
  }

?>
<?php $title = 'B & C';
	$fulname = 'Inyang Charles';
	$usertype = 'Administrator';

	$sql= query("SELECT * FROM sitesettings");
	$row = fetch_array($sql);
	extract($row);

	

		 $us_id = $_SESSION['usr_id'] ;
		 $usr_id = $_SESSION['usr_id'];
		 $c_id = $_SESSION['c_id'] ;
 
		if (isset($_GET['page']) && $_GET['page'] == 'message') {							//
			$page = 'messages';
			$pageName = 'B & C';
		}  else if (isset($_GET['page']) && $_GET['page'] == 'home') {						// 
			$page = 'company';
			$pageName = 'B & C';
		}  else if (isset($_GET['page']) && $_GET['page'] == 'profile') {					//
			$page = 'profile';
			$pageName = 'B & C';
		} else {
			$page = 'company';															// All
			$pageName = 'B & C';
		}
		
?>

<?php include('pages/head.php'); ?>

<body>	

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include('pages/header.php'); ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
			<!--inner block start here-->
					
	<div class="inner-block">
		<?php include('pages/user_banner.php'); ?>
    <?php 
		if (file_exists('pages/'.$page.'.php')) {

			include('pages/'.$page.'.php');
		} else {
			//include 'includes/navigation.php';
			// Else Display an Error
			echo '
					<div class="content">
						<h3>Page Error Details &mdash; $pageName. Return Error</h3>
						<div class="alertMsg default">
							<i class="fa fa-warning"></i>
						</div>
					</div>
				';
		}
	?>
				<?php //include('pages/company.php'); ?>
	</div>
<!--inner block end here-->
<!--copy rights start here-->
		<div class="copyrights">
			<p>© 2017  <?php echo $title;?>	. All Rights Reserved | Design by  
				<a href="http://springlight.org/" target="_blank">Springlight Technology</a>
			</p>
		</div>	
<!--COPY rights end here-->

     </div>
</div>
<!--slider menu-->
     <?php include('pages/menu_link.php');?>	
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     