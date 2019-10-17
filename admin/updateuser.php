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

                 $id = @$_GET['c_id'];
                 $idr = @$_GET['r_id'];

                 $sql ="SELECT * FROM reg_details 
        INNER JOIN profile ON reg_details.r_id = profile.r_id WHERE c_id='".$id."' AND profile.r_id='".$idr."' ";
                    $warri =query($sql);
                    $row = fetch_array($warri);
                      
                  
                  if($_SERVER['REQUEST_METHOD']== "POST"){
                    $c_id  = $_POST['c_id'];
                    $rx_id  = $_POST['rx_id'];

                    $cname  = clean($_POST['cname']);
                    $mission  = clean($_POST['mission']);
                    $mobile1  = clean($_POST['mobile1']);
                    $vision  = clean($_POST['vision']);
                    $mobile2  = clean($_POST['mobile2']);
                    $values  = clean($_POST['values']);
                    $passport = $_FILES['pix']['tmp_name'];
  /*----------section for uploading photo---------------*/
                       $file1 =rand(1000,100000)."-".$_FILES['pix']['name'];
                       $file_loc1 = $passport;
                      $folder="../home/pages/uploads/";
                      $new_file_name1 = strtolower($file1);
                      $final_file1 =str_replace(' ','-',$new_file_name1);
                      /*$rightformat = array("jpg","jpeg");
                      if(!in_array($rightformat)){
                        redirect("http://localhost/magnetblog/admin/updateuser.php?picture=format");
                      }

                else{*/
                      $updated= "UPDATE reg_details 
        INNER JOIN profile ON reg_details.r_id = profile.r_id SET reg_details.cname = '$cname', reg_details.mobile1 = '$mobile1', reg_details.mobile2 = '$mobile2', profile.mission='$mission', profile.vision='$vision', profile.core_values='$values', profile.file='$final_file1' WHERE reg_details.r_id='".$rx_id."' AND profile.r_id='".$rx_id."'";
                        $result =  query($updated);
                      if($result){
                        move_uploaded_file($file_loc1,$folder.$final_file1);
                        redirect("index.php?thisisokay=yesokay");
                      }
                      else{
                        redirect("updateuser.php?extension=notgood");
                      }

                /*}*/
                

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
    <form name="joeboy" method="post" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                             <table class="table table-bordered table-responsive">
                               <tr>
                                 <td> <lable class="control-label"><b>Company Name</b></lable></td>
                                 <td><div class="input-group">
                                            <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                                            <input type="text" name ="cname" class="form-control" id="cname" placeholder="Company Name" required value="<?php echo $row['cname'];  ?>">
                                        </div></td>
                               </tr>

                      

                                <tr>
                                 <td> <lable class="control-label"><b>Mission</b></lable></td>
                                 <td><div class="input-group">
                                            <span class="input-group-addon rose" ><i class="glyphicon glyphicon-edit"></i></span>
                                             <textarea rows="3" cols="200" name="mission"><?php echo $row['mission'];?></textarea>
                                        </div></td>
                               </tr>

                                <tr>
                                 <td> <lable class="control-label"><b>Telephone 1</b></lable></td>
                                 <td><div class="input-group">
                                            <span class="input-group-addon rose" ><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input type="text" name ="mobile1" class="form-control" id="mobile1" placeholder="Telephone 1" required value="<?php echo $row['mobile1'];  ?>">
                                        </div></td>
                               </tr>

                                <tr>
                                 <td> <lable class="control-label"><b>Vision</b></lable></td>
                                 <td><div class="input-group">
                                            <span class="input-group-addon rose" ><i class="glyphicon glyphicon-pencil"></i></span>
                                             <textarea rows="3" cols="200" name="vision"><?php echo $row['vision'];?></textarea>
                                        </div></td>
                               </tr>

                                <tr>
                                 <td> <lable class="control-label"><b>Telephone 2</b></lable></td>
                                 <td><div class="input-group">
                                            <span class="input-group-addon rose" ><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input type="text" name ="mobile2" class="form-control" id="mobile2" placeholder="Telephone 2" required value="<?php echo $row['mobile2'];  ?>">
                                        </div></td>
                               </tr>

                               <tr>
                                 <td> <lable class="control-label"><b>Core Values</b></lable></td>
                                 <td><div class="input-group">
                                            <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                                             <textarea rows="3" cols="200" name="values"><?php echo $row['core_values'];?></textarea>
                                        </div></td>
                               </tr>

                                <tr>
                                 <td> <lable class="control-label"><b>Photo</b></lable></td>
                                 <td><div class="input-group">

                                 <img class="img" src="<?php echo'../home/pages/uploads/'.$row['file']; ?>" width="100" height="90">
                                            
                                             <br/><br/>

                                             <input type="file" id="pics" name="pix" required >
                                        </div>

                                       <!--<?php if(isset($_GET['picture']) && $_GET['picture'] == 'format' ): ?>
                                           <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">Error:</span>
                                        <b style="color:red;">Only .jpg and .jpeg format is allow oo, Take note</b>
                                      </div>
                                      <?php endif; ?>-->

                                        </td>
                               </tr>

                             </table>

                              <div class="form-group" hidden="">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <label for="pass">c_id</label>
                                  <div class="input-group">
                                   <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                                   
                                   <input type="text" name = "c_id" class="form-control" id="c_id" type="text" value="<?php echo $row['c_id'];?>">
                                </div>
                               </div>
                              </div> 

                              <div class="form-group" hidden="">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <label for="pass">r_id</label>
                                  <div class="input-group">
                                   <span class="input-group-addon"><i class="fa fa-th-large"></i></span>
                                   
                                   <input type="text" name = "rx_id" class="form-control" id="rx_id" type="text" value="<?php echo $row['r_id'];?>">
                                </div>
                               </div>
                              </div> 


                             <div class="col-md-12 col-sm-12 col-xs-12"><br/>
                              <input type="submit" id="update" value="Update" class="btn btn-danger" />
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

   <?php
   include'footeradmin.php';
   ?>
   