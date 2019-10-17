<br>
<?php
if(!isset($_SESSION['usr_id'])){
  header("location:../404.php");
  }
?>

 <?php
                 //$id = @$_GET['c_id'];

 if(isset($_SESSION['usr_id'])){

                  $idr = $_SESSION['usr_id'];
                 $sql ="SELECT * FROM reg_details WHERE r_id='".$idr."' ";
                    $warri =query($sql);
                    $row = fetch_array($warri);
                      
                  
                  if($_SERVER['REQUEST_METHOD']== "POST"){
                   
                    $rx_id  = $_POST['rx_id'];
                    
                    $mission  = clean($_POST['mission']);
                    $vision  = clean($_POST['vision']);
                    $values  = clean($_POST['values']);
                    $passport = $_FILES['pix']['tmp_name'];
  /*----------section for uploading photo---------------*/
                       $file1 =rand(1000,100000)."-".$_FILES['pix']['name'];
                       $file_loc1 = $passport;
                      $folder="./pages/uploads/";
                      $new_file_name1 = strtolower($file1);
                      $final_file1 =str_replace(' ','-',$new_file_name1);
                      
                      $insert= "INSERT INTO profile(r_id, mission, vision, core_values, file) VALUES('$rx_id','$mission','$vision','$values','$final_file1') ";
                        $result =  query($insert);
                      if($result){
                        $move = move_uploaded_file($file_loc1,$folder.$final_file1);

                        echo "<meta http-equiv=\"refresh\" content=\" 0;URL=./index.php\">";
                           
                      }
                      else{
                        redirect("index.php?extension=notgood");
                      }

                /*}*/
                

                }
  }

                ?>

                <?php if(isset($_GET['extension']) && $_GET['extension'] == 'notgood' ): ?>
     <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <b style="color:red;">Error in Registration</b>
</div>
<?php endif; ?>


<div class="row">

<div class="panel panel-success">
  <div class="panel-heading">
      <div class="x_content"><p>Welcome !----Please Fill in your profile to view businesses.</p>
      </div>
  </div>
</div>


<form name="joeboy" method="post" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
<br/>
  
  <div class="col-md-4">
    <table class="table table-bordered table-responsive">
        <tr>
            <td>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  
                   <label for="firstname">Mission Statement</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                       <textarea rows="3" name="mission"> </textarea>
                    </div>
                    
                </div>
            </td>
        </tr>
    </table>
  </div>


  <div class="col-md-4">
    <table class="table table-bordered table-responsive">
        <tr>
            <td>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  
                   <label for="firstname">Vision Statement</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                       <textarea rows="3" name="vision"> </textarea>
                    </div>
                    
                </div>
            </td>
        </tr>
    </table>
  </div>


  <div class="col-md-4">
    <table class="table table-bordered table-responsive">
        <tr>
            <td>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  
                   <label for="firstname">Core Values</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-male"></i></span>
                       <textarea rows="3" name="values"> </textarea>

                       
                    </div>
                    
                </div>
            </td>
        </tr>
    </table>
  </div>

  <div class="col-md-offset-4">
    <table class="table table-responsive">
        <tr>

            <td> <div class="input-group">
                        <input type="file" name="pix">
                    </div>
               
            </td>

            <td>
             <div class="form-group" hidden=""><span class="input-group-addon"><i class="fa fa-th-large"></i></span><input type="text" name = "rx_id" class="form-control" id="rx_id" type="text" value="<?php echo $row['r_id'];?>" readonly="" hidden="">
             </div>
            </td>
        </tr>
        <tr>
        <td>
                <input type="submit" id="register" value="Submit" class="btn btn-success" />
                  
            </td>

        </tr>
    </table>
  </div>
  <hr/>

  

</form>

</div>