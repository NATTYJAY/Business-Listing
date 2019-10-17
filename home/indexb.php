<?php $title = 'Business Connect';
	$fulname = 'Inyang Charles';
	$usertype = 'Administrator';
 ?>
<?php 

	// Check if install.php is present
	if(isset($setss)){
		session_start();
		if (!isset($_SESSION['empId'])) {
			header ('Location: login.php');
			exit;
		}

		// Logout
		if (isset($_GET['action'])) {
			$action = $_GET['action'];
			if ($action == 'logout') {
				session_destroy();
				header('Location: login.php');
			}
		}

		// Access DB Info
		include('config.php');

		// Get Settings Data
		include ('includes/settings.php');
		$set = mysqli_fetch_assoc($setRes);

		// Set Localization
		$local = $set['localization'];
		switch ($local) {
			
			case 'en':		include ('language/en.php');		break;
			
		}

		// Include Functions
		include('includes/functions.php');

		// Keep some User data available
		$empId 			= $_SESSION['empId'];
		$isAdmin 		= $_SESSION['isAdmin'];
		$isMgr 			= $_SESSION['isMgr'];
		$empEmail 		= $_SESSION['empEmail'];
		$empName 		= $_SESSION['empName'];
		$empPosition	= $_SESSION['empPosition'];
		
		// Link to the Page
		if (isset($_GET['page']) && $_GET['page'] == 'myProfile') {							// All
			$page = 'myProfile';
			$pageName = $myProfilePage;
		}  else if (isset($_GET['page']) && $_GET['page'] == 'tasks') {						// All
			$page = 'tasks';
			$pageName = $myTasksPage;
		} else if (isset($_GET['page']) && $_GET['page'] == 'DayToDay') {					// Primary Admin Only
			$page = 'DayToDay';
			$pageName = $importPage;
		} else {
			$page = 'dashboard';															// All
			$pageName = $dashboardPage;
		}
	
		
		if (file_exists('pages/'.$page.'.php')) {
			// Load the Page
			
			include('pages/'.$page.'.php');
		} else {
			include 'includes/navigation.php';
			// Else Display an Error
			echo '
					<div class="content">
						<h3>'.$pageError1.' &mdash; '.$pageName.' '.$pageError2.'</h3>
						<div class="alertMsg default">
							<i class="fa fa-warning"></i> '.$pageError3.'
						</div>
					</div>
				';
		}
		

		
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
  if (isset($_GET['page']) && $_GET['page'] == 'myProfile') {							// All
			$page = 'myProfile';
			$pageName = $myProfilePage;
		}  else if (isset($_GET['page']) && $_GET['page'] == 'tasks') {						// All
			$page = 'tasks';
			$pageName = $myTasksPage;
		} else if (isset($_GET['page']) && $_GET['page'] == 'DayToDay') {					// Primary Admin Only
			$page = 'DayToDay';
			$pageName = $importPage;
		} else {
			$page = 'dashboard';															// All
			$pageName = $dashboardPage;
		}
		
		if (file_exists('pages/'.$page.'.php')) {
			// Load the Page
			
			include('pages/'.$page.'.php');
		} else {
			include 'includes/navigation.php';
			// Else Display an Error
			echo '
					<div class="content">
						<h3>'.$pageError1.' &mdash; '.$pageName.' '.$pageError2.'</h3>
						<div class="alertMsg default">
							<i class="fa fa-warning"></i> '.$pageError3.'
						</div>
					</div>
				';
		}
	?>
	 

	<?php include('pages/company.php'); ?>

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	  <p>© 2017  <?php echo $title;?>	. All Rights Reserved | Design by  <a href="http://springlight.org/" target="_blank">Springlight Technology</a> </p>
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