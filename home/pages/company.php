
<?php 
$pre =0;
 $qry ="SELECT premium FROM locks WHERE r_id = '$us_id'";
  $qry =query($qry);
    $rows = fetch_array($qry);
    $pre = $rows['premium'];

?>
    	
  <?php
          $sqll ="SELECT * FROM profile WHERE r_id = '$us_id'";
         $war = query($sqll);
         if(mysqli_num_rows($war)>=1){

          echo '<div class="product-block">
      <div class="pro-head">
        <h2>Companys Link</h2>
      </div>';

      if(!isset($_GET['begin'])){
          $begin = 0;
        } else{
          $begin= $_GET['begin'];
            }

$per_page =4;

$query = query("SELECT * FROM reg_details 
        INNER JOIN profile ON reg_details.r_id = profile.r_id 
         WHERE reg_details.r_id != '$us_id' ORDER BY p_id ASC");

$count  = row_count($query);
$total = $begin + $per_page;

$query =query(" SELECT * FROM reg_details 
        INNER JOIN profile ON reg_details.r_id = profile.r_id 
         WHERE reg_details.r_id != '$us_id' ORDER BY p_id ASC LIMIT $begin,$per_page");

$pag = $count/$per_page;
$pag = $pag+1;
?>
<?php
$g = 1;
while($list= fetch_array($query)) {

    extract($list);

    ?>
    	
    	<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="#" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
						
            <img class="img" src="<?php echo'./pages/uploads/'.$file; ?>" width="246" height="170">
				</div>
	    		<div class="produ-cost">
	    			<h4><?php echo $cname;?></h4>
	    			<h5><?php echo $mobile1;?></h5>
	    			
          <?php  
            if($pre == '1'){
          ?>
          <input type="button" name="delete" value="Message" class="btn btn-info btn-xs delete_data" id="<?php echo $r_id; ?>" />

          <a href="index.php?page=profile&id=<?php echo $r_id;?>&c_id=<?php echo $c_id;?>" class="btn btn-warning btn-xs" >View Profile </a>

          <?php
           
               }
               else echo"<span>Contact the admin to activate your account To Message This Contact. Thank You</span>";
          ?>
           <!--<a href="index.php?page=profile&id=<?php echo $r_id;?>&c_id=<?php echo $c_id;?>" class="btn btn-warning btn-xs" >View Profile </a>-->

	    		</div>
    		</div>
    	</div>
    	
    	<?php 
                $g++;

                ?>
                  <table>

                <?php

                if($g==1){
echo ("<tr>");
    }if($g<=3){
     
    }

 $take = 0;
          if($g<=3){
            $g++;
          }
            
            if($g==4){
              echo("</tr>");
              $g=1;
            }    
?>
</table>

<?php


                 }?> <!-- end of while loop is here-->

                 <!-- Thsis is the area for paginating numbers-->
                      <?php

                      ?>
                        <div id="control" align="center">
                            <div>
                  <strong>SELECT PAGE HERE</strong>
                 
                      <?php
                  $silent = $pag-1;

                  if($begin !=0){
                    $ss=$begin - $per_page;
                 ?>
                 <div class="btn-group" role="group" aria-label="...">
                 <a href="index.php?begin=<?php echo $ss;?>&name=<?php echo $cname; ?>">&laquo;Prev</a>
                  </div>
                 <?php
                      }
                      $hell_count = 1;
            
                      for($i=1;$i<=$pag;$i++)
                      {
                        if($i>=$begin/$per_page){

                          if($hell_count<=10){
                 ?>
                    <a href="index.php?begin=<?php echo $take;?>&name=<?php echo $cname; ?>"><?php echo $i ?></a>

                    <?php
                        $hell_count++;
                      }
                    }
                    $take = $take + $per_page;
                  }
                  ?>
                  <?php
                    if($begin!=$take - $per_page){
                      $ss = $begin + $per_page;
                      ?>
                      <a href="index.php?begin=<?php echo $ss;?>&name=<?php echo $cname; ?>">&laquo; Next</a>
                      <?php
                    }

                    ?>
                    </div>
                    </div>
                    </div>

                    <?php

                  ?>
                  



                 <!-- pagination numbers ends here ooo-->

                
             <?php } else{
				 
				 include("firstupdate.php");
				 
				 }?>
                 
                 
             
    	
		
    	
    	
      <div class="clearfix"> </div>
    </div>


    <!-- ************************************MODAL******************************************-->

<div class="modal fade" tabindex="-1" role="dialog" id="delete_course">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" class="delpp">
     <!--************************************-->

      <div class="col-md-12 compose-right">
          <div class="inbox-details-default">
            <div class="inbox-details-heading">
              Compose New Message 
            </div>

            <div class="inbox-details-body">
              <div class="alert alert-info">
                Please fill details to send a new message
              </div>
                <div class="row">
                
              </div>
              <form class="com-mail" id="jaeboi" >

                <input type="text" name="sender" required="" id="senda" readonly="">
                <input type="text" name="subject"  value="Subject :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="" id="subject">
                
                <textarea rows="6" name="message"  value="Message :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="" id="message">Message</textarea>

                  <div class="form-group" hidden="">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="pass">r id</label>
                      <div class="input-group" readonly="">
                       
                       
                       <input name = "course_id" class="form-control" id="cos_id" hidden="" readonly="">
                    </div>
                   </div>
                  </div>

                 <input type="button" id="subsitu" class="btn btn-default" />
                <label class="control-label col-xs-offset-0" for="last-name" id="datano">
                
              </form>
            </div>
          </div>
        </div>


     <!--*************************************-->
      <label class="control-label col-xs-offset-0" for="last-name" id="datadel">
      </div>
     
       <div class="modal-footer">
       
        
      </div>
      </div>
      <!--<div class="modal-footer">
       <input type="button" name="dele" value="Yes" id="yes" class="btn btn-danger btn-sm" />
      <button class="btn btn-info btn-sm" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
        
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->