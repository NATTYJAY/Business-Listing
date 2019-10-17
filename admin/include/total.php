 <div class="">
              
              <div class="panel panel-danger">
                                            <div class="panel-heading">
                                            
                                             <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
                                <div class="sm-st-info">
                                    <span><?php  $sql=query("SELECT * FROM category");
                        echo $rol = row_count($sql);
                        
                        ?></span>
                                    Total Number of Category Added
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
                                <div class="sm-st-info">
                                    <span><?php  $sql=query("SELECT * FROM reg_details");
                        echo $rol = row_count($sql);
                        
                        ?></span>
                                    Total Registered Companies
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
                                <div class="sm-st-info">
                                    <span><?php  $sql=query("SELECT * FROM inbox");
                        echo $rol = row_count($sql);
                        
                        ?></span>
                                    Messages Received
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
                                <div class="sm-st-info">
                                    <span><?php  $sql=query("SELECT * FROM sent");
                        echo $rol = row_count($sql);
                        
                        ?></span>
                                    Sent Messages
                                </div>
                            </div>
                        </div>