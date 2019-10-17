 
<div class="banner-bottom">
		<div class="container">
			
			
			<div class="agile_banner_bottom_grids">
				<ul id="flexiselDemo1">	
				<?php

  	$sql ="SELECT * FROM reg_details 
  			INNER JOIN profile ON reg_details.r_id = profile.r_id 
  			";
  			
            $warri =query($sql);
            
                     
                      while ($row = fetch_array($warri)) {
                        
              extract($row);
          
    ?>
					<li>
						<div class="agile_banner_bottom_grid">
							<div class="w3layouts_banner_bottom_grid">
								<img  class="img-responsive" <?php echo "src='home/pages/uploads/$file'"; ?>  />
								<div class="w3layouts_banner_bottom_grid_pos">
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $cname; ?></p>
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $mobile1; ?>,<?php echo $mobile2; ?></p>
								</div>
							</div>
						</div>
					</li>

					<?php 
                 }?>
					<!--<li>
						<div class="agile_banner_bottom_grid">
							<div class="w3layouts_banner_bottom_grid">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_banner_bottom_grid_pos">
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Magnetblog Reading</p>
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Latest Inovation</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="agile_banner_bottom_grid">
							<div class="w3layouts_banner_bottom_grid">
								<img src="images/3.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_banner_bottom_grid_pos">
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Magnetblog Reading</p>
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Latest Inovation</p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="agile_banner_bottom_grid">
							<div class="w3layouts_banner_bottom_grid">
								<img src="images/1.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_banner_bottom_grid_pos">
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Magnetblog Reading</p>
									<p><i class="fa fa-angle-double-right" aria-hidden="true"></i>Latest Inovation</p>
								</div>
							</div>
						</div>
					</li>-->
				</ul>
			</div>
		</div>
	</div>