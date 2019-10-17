<?php
include'headeradmin.php';
if(!isset($_SESSION['admin_id'])){
  header("location:../home/404.php");
  }
?>

        <!-- page content -->
<div class="right_col" role="main"><br/><br/><br/>
    <div class="">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="x_content"> <p>This is the platform where admin can add category! Nice right?</p>
                    <!-- start form here -->
                 <div class="well">

                 <?php

                 $id = @$_GET['cc_id'];
                 $sql ="SELECT * FROM category WHERE c_id='".$id."' ";
                    $warri =query($sql);
                    $row = fetch_array($warri);
                      
                  if($_SERVER['REQUEST_METHOD']== "POST"){
                    $c_id  = $_POST['c_id'];
                    $cat_name  = clean($_POST['catname']);
                    $cat_desc   = clean($_POST['catdesc']);

                       $sql="UPDATE category SET cat_name ='$cat_name', cat_desc ='$cat_desc' WHERE c_id='".$c_id."' ";
                      $result =  query($sql);

                      if($result){
                        redirect("index.php?this=yesokay");
                      }

                      else{
                        redirect("update.php?extension=notgood");
                      }
                

                }

                ?>

   <!--  ERROR MESSAGES-->
  
  <?php if(isset($_GET['extension']) && $_GET['extension'] == 'notgood' ): ?>
     <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:red;">Error in updating category</b>
</div>
<?php endif; ?>

<!-- END OF PANEL-->
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
    <form name="joeboy" method="post" action="">
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                        <label for="firstname">Category Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                                            <input type="text" name ="catname" class="form-control" id="catname" placeholder="Category Name" required value="<?php echo $row['cat_name'];?>">
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                <label for="lastname">Category description</label>
                                <div class="input-group">
                                    <span class="input-group-addon rose" ><i class="fa fa-th-large"></i></span>
                                <input type="text" name ="catdesc" class="form-control" id="catdesc" placeholder="Course Code" required value="<?php echo $row['cat_desc'];?>">
                                </div>
                                
                                </div>
                              </div>

                              
                              <div class="form-group" hidden="">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <label for="pass">c_id</label>
                                  <div class="input-group">
                                   <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                                   
                                   <input type="text" name = "c_id" class="form-control" id="c_id" type="text" value="<?php echo $row['c_id'];?>">
                                </div>
                               </div>
                              </div> 
                             <div class="col-md-12 col-sm-12 col-xs-12"><br/>
                              <input type="submit" id="subsitu" value="Update" class="btn btn-success" />
                              <br> </br>
                            </div>
  </form>
            </div>
        </div>
      </div>

          </div>
                       <button class="btn btn-default ">
            </div><!--close panel body-->
        </div>
    </div>
</div>
          
          
</div>
</div><!--close class body middle with class=""-->
</div>
        
         <!--<div class="modal fade" tabindex="-1" role="dialog" id="course12">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Courses Here</h4>
      </div>
      <div class="modal-body">
       <div class="well">
     
      	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<form name="joeboy">
                
                	 
                  <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                  
                    <label for="firstname">Course Name</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                        <input type="text" name ="course" class="form-control" id="cnam" placeholder="Course Name" required>

                    </div>
                     <label class="control-label col-xs-offset-0" for="first-name" id="e11">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                  
                    <label for="lastname">Course Code</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-th-large"></i></span>
                        <input type="text" name ="code" class="form-control" id="ccod" placeholder="Course Code" required>
                    </div>
                    <label class="control-label col-xs-offset-0" for="last-name" id="e12">
                    </div>
                  </div>

                  <div class="form-group">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="email">Credit</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                       <input type="text" name = "credit2" class="form-control" id="credi" placeholder="Credit" required>
                    </div>
                    <label class="control-label col-xs-offset-0" for="last-name" id="e13">
                    </div>
                  </div>

                  <div class="form-group">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="faculty">Semester</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                         <select class="form-control" id="semmi" name ="semi" required>
                         <option>select Semester</option>
                         <option>semester 1</option>
                         <option>semester 2</option>
                        </select>
                        </div>
                      </div>
                      <label class="control-label col-xs-offset-0" for="fac-name" id="e14">
                  </div>

                 

                  <div class="form-group">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="semester">level</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>
                         <select class="form-control" id="levei" name="level" required>
                         <option>select level</option>
                         <option>level 1</option>
                         <option>level 2</option>
                         <option>level 3</option>
                         <option>level 4</option>
                         <option>level 5</option>
                          
          
                        </select>
                      </div>
                      <label class="control-label col-xs-offset-0" for="last-name" id="e15">
                      </div>
                      
                  </div>
                  
                  
                  
                  <div class="form-group" hidden="hidden">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="pass">course id</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                       
                       <input type="text" name = "course_id" class="form-control" id="cos_id" type="hidden">
                    </div>
                   </div>
                  </div>
                  
                  <div class="form-group" hidden="hidden" >
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="pass">dept_id</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                       
                       <input type="text" name = "deptid2" class="form-control" id="depti" placeholder="dept_id">
                    </div>
<label class="control-label col-xs-offset-0" for="last-name" id="e16">                    </div>
                  </div>
                 
                 
                 
		 <div class="col-md-12 col-sm-12 col-xs-12">
         <br/>
         
                  <input type="button" id="subsitu" class="btn btn-default" />
                  
                  <label class="control-label col-xs-offset-0" for="last-name" id="datano">
                   <br> </br>
</div>-->
<!--<label class="control-label col-xs-offset-0" for="last-name" id="data">-->
                  
                  
              <!--</form>
      
    
               
            </div>
            
        
        
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-sm-warning" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


 <!--<div class="modal fade" tabindex="-1" role="dialog" id="delete_course">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" class="delpp">
      <form name="joeboy">
       
                        <b>Are you Sure you want to Delete</b> <span style="font-weight:bold; font-size:15px;"><!--close div delete-->
                        <!--<label class="control-label col-xs-offset-0" for="last-name"></span>
                        <input type="text" name ="course" class="form-control control-label col-xs-offset-0 yes_data" id="delpp" readonly="readonly" required>
        </label>
        
         <div class="form-group" hidden="hidden">
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <label for="pass">course id</label>
                      <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                       
                       <input type="text" name = "course_id" class="form-control" id="cas_id" type="hidden">
                    </div>
                   </div>
                  </div>
        
         
        </form>
      <label class="control-label col-xs-offset-0" for="last-name" id="datadel">
      </div>
     
       <div class="modal-footer">
       <input type="button" name="dele" value="Yes" id="yes" class="btn btn-danger btn-sm" />
			<button class="btn btn-info btn-sm" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
        
      </div>
      </div>
      <!--<div class="modal-footer">
       <input type="button" name="dele" value="Yes" id="yes" class="btn btn-danger btn-sm" />
			<button class="btn btn-info btn-sm" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
        
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

			<!--open delete modal-->
            	
            <!--close modaal>
        <!-- /page content -->
        

        <!-- footer content -->
       
   <?php
   include'footeradmin.php';
   ?>
   