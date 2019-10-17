
<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									<a href="#"> <h2><?php echo $title; ?></h2> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 														
							</div>
							<!--search-box-->
								<!--<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"><?php  $sql=query("SELECT * FROM inbox WHERE r_id = $usr_id");

													
						echo row_count($sql);
						
						?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have <?php  $sql=query("SELECT * FROM inbox WHERE r_id = $usr_id");
										
													
						echo row_count($sql);
						
						?> new messages</h3>
												</div>
											</li>
											
											
											<!--<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Personal message</p>
												<p><span>Time</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a>
											</li>-->
											<li>
												<div class="notification_bottom">
													<a href="index.php?page=message#tab1">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
										
										
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img">
												<?php
  										$sql ="SELECT * FROM profile WHERE r_id = '$us_id'";
  			
            						$warri =query($sql);
            						$row = fetch_array($warri);
              						$image = $row['file'];
          
    ?>
								<img  <?php echo "src='./pages/uploads/$image'"; ?> alt="Not Image Uploaded" width="50" height="35" class="img-rounded"> </span> 
												<div class="user-name">
													<p><?php echo $_SESSION['cname']; ?></p>
													<span><?php echo $_SESSION['cname']; ?></span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											 
											<li> <a data-toggle="modal" data-target="#edit" href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="../home/pages/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>

				<?php
include('modal.php');

				?>