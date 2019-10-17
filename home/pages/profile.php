
<?php
                 $id = $_GET['id'];
                 $c_id=$_GET['c_id'];
                 $sql ="SELECT * FROM reg_details 
        INNER JOIN profile ON reg_details.r_id = profile.r_id WHERE c_id='".$c_id."' AND profile.r_id='".$id."' ";
                    $warri =query($sql);
                    $row = fetch_array($warri);

?>

<div class="chit-chat-layer1">
	
               
		<div class="row">
		<div class="col-md-4">
		<div class="climate-grid1">
			<div class="popular-follow">
				<div class="col-md-6 popular-follo-left">
					<h4><p>OUR CORE VALUES</p></h4>
				</div>
				<div class="col-md-12 popular-follo-right">
					<h3><?php echo $row['core_values'];?></h3>
					
				</div>
			  
			</div>
		</div>
	</div>
		
		<div class="col-md-4">
			<div class="climate-grid3">
		<img src="<?php echo'../home/pages/uploads/'.$row['file']; ?>" width="385" height="350">
		<span style="color:orange;">Mobile1 :<?php echo $row['mobile1'];?> </span>
		<span style="color:orange;">Mobile2 :<?php echo $row['mobile2'];?> </span>
			</div>
		</div>

		
	
    
      <div class="col-md-4">
		<div class="climate-grid3">
			<div class="popular-follow">
				<div class="col-md-6 popular-follo-right">
					<h4><p>OUR MISSION:</p></h4>
				</div>
				<div class="col-md-12 popular-follo-left">
					<h3><?php echo $row['mission'];?></h3>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
			
		</div>
	</div>

</div>

<div class="row">
		<div class="col-md-4">
	<div class="popular-follow">
				<div class="col-md-6 popular-follo-left">
					<h4><p>OUR VISION</p></h4>
				</div>
				<div class="col-md-12 popular-follo-right">
					<h3><?php echo $row['vision'];?></h3>
					
				</div>
			  <div class="clearfix"> </div>
			</div>
	</div>
</div>



























     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
























