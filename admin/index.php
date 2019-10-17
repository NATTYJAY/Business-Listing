<?php
include'headeradmin.php';

if(!isset($_SESSION['admin_id'])){
  header("location:../home/404.php");
  }
?>
        <!-- page content -->
        <div class="right_col" role="main">
        <br/><br/><br/>

        <?php if(isset($_GET['yesdelete']) && $_GET['yesdelete'] == 'yesokay' ): ?>
                 <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:green;">User deleted succesfully ?? <br/></b>
</div>
<?php endif; ?>

<?php if(isset($_GET['nodelete']) && $_GET['nodelete'] == 'yesokay' ): ?>
                 <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:green;">User cannot be deleted succesfully ?? <br/></b>
</div>
<?php endif; ?>

         <?php if(isset($_GET['del']) && $_GET['del'] == 'yesokay' ): ?>
                 <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:green;">Category delete succesfully ?? <br/><a href="http://localhost/magnetblog/admin/editcat.php"> Click Here to update another</a> </b>
</div>
<?php endif; ?>

         <?php if(isset($_GET['this']) && $_GET['this'] == 'yesokay' ): ?>
                 <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:green;">User details Updated succesfully ?? <br/><a href="http://localhost/magnetblog/admin/editcat.php"> Click Here to update another</a> </b>
</div>
<?php endif; ?>


<?php if(isset($_GET['thisisokay']) && $_GET['thisisokay'] == 'yesokay' ): ?>
                 <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:green;">Category Updated succesfully ?? <br/><a href="http://localhost/magnetblog/admin/edit.php"> Click Here to update another</a> </b>
</div>
<?php endif; ?>

<?php if(isset($_GET['extension']) && $_GET['extension'] == 'notgood' ): ?>
     <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:red;">Error in deleting category</b>
</div>
<?php endif; ?>

	
            <?php  include('./include/total.php');?>

<div class="row">
                <div class="col-lg-12">
                   
                        <div class="panel-body">
                            <div class="col-md-4">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                         <i class="fa fa-database fa-spin fa-3x fa-fw"></i>
                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <div class="huge"><!--?php echo $count2[0]; ?--></div>
                                                        <div><h4>ADD<br/> CATEGORY</h4></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a  href="addcat.php">
                                                <div class="panel-footer">
                                                    <span class="pull-left">Add Category Here</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right fa-spin fa-3x fa-fw"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!--close md-->

                                   

                                     <div class="col-md-4">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-5 pull-left">
                                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                                    </div>
                                                    <div class="col-xs-6  text-right">
                                                        <div class="huge"><!--?php echo $count2[0]; ?--></div>
                                                        <div><h4>Edit Category</h4></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="editcat.php">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View & Edit Category</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right fa-spin fa-3x fa-fw"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="col-md-4">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <i class="fa fa-database fa-3x"></i>
                                                    </div>
                                                    <div class="col-xs-6  text-right">
                                                        <div class="huge"><!--?php echo $count4[0]; ?--></div>
                                                        <div><h4>ADD<br> Users</h4></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="add.php">
                                                <div class="panel-footer">
                                                    <span class="pull-left">Create Priviledge</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right fa-spin fa-3x fa-fw"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <i class="fa fa-database fa-3x"></i>
                                                    </div>
                                                    <div class="col-xs-6  text-right">
                                                        <div class="huge"><!--?php echo $count4[0]; ?--></div>
                                                        <div><h4>VIEW USERS</h4></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="edit.php">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Users Here</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right fa-spin fa-3x fa-fw"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-5 ">
                                                        <i class="fa fa-upload  fa-spin fa-3x fa-fw"></i>
                                                    </div>
                                                    <div class="col-xs-6  text-right">
                                                        <div class="huge"><!--?php echo $count1[0]; ?--></div>
                                                        <div><h4>Lock Database</h4></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="lock.php">
                                                <div class="panel-footer">
                                                    <span class="pull-left">Lock Database</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right fa-spin fa-3x fa-fw"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    

                                     

                                     <div class="col-md-4">
                                       
                                    </div>

                                     <div class="col-md-4">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <a href=""><div class="row">
                                                    <div class="col-xs-5 ">
                                                        
                                                    </div>
                                                    <div class="col-xs-6  text-center">
                                                        <div class="huge"><!--?php echo $count1[0]; ?--></div>
                                                       <a href="logout.php"> <div><h3>LOG-OUT</h3></div></a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>

                                    

 

                        </div><!--close panel body-->
                    </div>
                </div>
            </div>
          
           </div>

          
           
           </div><!--close class body middle with class=""-->
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
      

   <?php
   include'footeradmin.php';
   ?>
   