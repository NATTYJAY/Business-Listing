
    <div class="inbox">
    	<br/>
    	 <div class="col-md-4 compose">   	 	
    	 
    	 	<div class="compose-bottom">
    	 		  <nav class="nav-sidebar">
					<ul class="nav tabs">
						 <!--<li class=""><a href="#tab" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Compose</a></li>-->
			          <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-inbox"></i>Inbox <span><?php  $sql=query("SELECT * FROM inbox WHERE r_id = $usr_id ");
						echo $rol = row_count($sql);
						
						?></span><div class="clearfix"></div></a></li>
			          <li class=""><a href="#tab2" data-toggle="tab"><i class="fa fa-envelope-o"></i>Sent  <span><?php  $sql=query("SELECT * FROM sent WHERE r_id = $usr_id");
						echo $rol = row_count($sql);
						
						?></span></a></li>
			                                     
					</ul>
				</nav>
    	 	</div>
    	 </div>
    	
		<div class="col-md-8 mailbox-content  tab-content tab-content-in">
			 <div class="tab-pane  text-style" id="tab">
	    	 	 <div class="mailbox-border">
	               <div class="inbox">
    	 
    	  	 
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
								<div class="col-lg-6 col-lg-offset-3">
								<?php compose()?>
								<?php display_message();?>

								<span><?php message_display(); ?></span>

								</div>
							</div>
							<form class="com-mail" id="register-form" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">

								<input type="text" name="sender" value="To :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'To';}" required="">
								<input type="text" name="subject"  value="Subject :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
								
								<textarea rows="6" name="message"  value="Message :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required="">Message </textarea>

								<input type="hidden" class="hidden" name="r_id" id="r_id" value="<?php echo $_SESSION['usr_id']; ?>">
								
								<input type="submit" value="Register" id="send-submit" name="send-submit"> 
							</form>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>
	              </div>   
               </div>
    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				       
				        <div class="clearfix"> </div>
				    </div>
				   
	               </div>
	                <table class="table tab-border">
	                <div class="row">
								<div class="col-lg-6 col-lg-offset-3">
	                
	                			</div>
	                </div>
	                    <tbody>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                &nbsp;
	                            </td>
	                            <td class="hidden-xs">
	                                &nbsp;
	                            </td>
	                            <td class="hidden-xs">
	                                Sender
	                            </td>
	                            <td>
	                                Subject
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                Date
	                            </td>
	                            <td>
	                                View Message
	                            </td>
	                        </tr>

	                       <?php 
					$result = "SELECT * FROM inbox WHERE r_id = $usr_id ";
				      $select = query($result);
                      $g=1;
                      while ($row = fetch_array($select)) {
						  extract($row);
						  $results = "SELECT cname, r_id FROM reg_details WHERE r_id = $s_id ";
						$selects = query($results);
						$rows = fetch_array($selects);

						$cnames = $rows['cname'];
						$r_ids =$row['r_id'];

						  ?>
							
							 <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" name="ch[]" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                <?php echo $cnames;?>
	                            </td>
	                            <td>
	                                <?php echo $subject;?>
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                <?php echo $date_time;?>

	                            </td>
	                            <td>

	                       <input type="button" name="message" value="Message" class="btn btn-warning btn-xs message_data" id="<?php echo $mail_id; ?>" >
	                            	

	                            </td>


	                        </tr>

	                         <?php  ?>
                
                <?php 
                $g++; }?>
	                        
							
	                       
	                    </tbody>
	                </table>
	               </div>   
               </div>





               <div class="tab-pane text-style" id="tab2">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        
				        <div class="clearfix"> </div>
				    </div>
				    
	               </div>
	                <table class="table tab-border">
	                    <tbody>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                &nbsp;
	                            </td>
	                            <td class="hidden-xs">
	                                &nbsp;
	                            </td>
	                            <td class="hidden-xs">
	                                Sender
	                            </td>
	                            <td>
	                                Subject
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                Date
	                            </td>
	                            <td>
	                                View Message
	                            </td>
	                        </tr>

	                       <?php 
					$result = "SELECT * FROM sent WHERE r_id = $usr_id ";
				      $select = query($result);
                      $g=1;
                      while ($row = fetch_array($select)){
						  extract($row);


						  ?>
							
							 <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" name="ch[]" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                <?php echo $sender;?>
	                            </td>
	                            <td>
	                                <?php echo $subject;?>
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                <?php echo $date_time;?>

	                            </td>
	                            <td>

	                       <input type="button" name="message" value="message" class="btn btn-warning btn-xs sent_data" id="<?php echo $sent_id; ?>" >
	                            	

	                            </td>


	                        </tr>

	                         <?php  ?>
                
                <?php 
                $g++; }?>
	                        
							
	                       
	                    </tbody>
	                </table>
	               </div>   
               </div>
                </div>
          <div class="clearfix"> </div>     
   </div>



   <!--*****************modal for inbox messages*******************-->

   <div class="modal fade" tabindex="-1" role="dialog" id="message_send">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">
                            	<i class="glyphicon glyphicon-message"></i> Messages
                            </h4> 
                       </div> 
      <div class="modal-body" class="delpp">
     <!--************************************-->

                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="./images/ajax-loader.gif">
                       	   </div>
                           <!-- content will be load here -->                          
                           <div id="dynamic-content"></div>
                             
                     
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



<!--*****************modal for sent messages*******************-->

   <div class="modal fade" tabindex="-1" role="dialog" id="send_message">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">
                            	<i class="glyphicon glyphicon-message"></i> Messages
                            </h4> 
                       </div> 
      <div class="modal-body" class="delpp">
     <!--************************************-->

                       	  
                           <!-- content will be load here -->                          
                           <div id="dynamic-contents"></div>
                             
                     
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

