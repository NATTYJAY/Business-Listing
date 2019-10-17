<?php
include'headeradmin.php';
if(!isset($_SESSION['admin_id'])){
  header("location:../home/404.php");
  }
if(isset($_GET['lock_id']) && $_GET['lock_id'] !='')
{  

  //  
    if($_GET['ltype'] =='0')
    $num = 1;
    elseif ($_GET['ltype'] =='1')
      $num =0;
    

 $r_id =$_GET['lock_id'];
      $sql ="UPDATE locks SET 
              premium = '$num' 
            WHERE(r_id ='$r_id')";
      query($sql);

 header('location : lock.php');
}


?>

        <!-- page content -->
<div class="right_col" role="main"><br/><br/><br/>
    <div class="">
        <div class="panel panel-danger">
             <div class="panel-heading">
                 <div class="x_content">
                    <p>This is where admin can lock or unlock users  Happy right?</p>

                   

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">S/N</th>
                          <th style="width: 20%">Company Name</th>
                          <th>Mobile 1</th>
                          <!--<th>Credit</th>
                          <th>Level / Semester</th>-->
                          <th style="width: 20%">Mobile 2</th>
                          <th style="width: 20%">Status</th>
                          <th style="width: 20%">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                    $sql = "SELECT * FROM reg_details 
        INNER JOIN locks ON reg_details.r_id = locks.r_id";

                   
                    $warri =query($sql);
                      while ($row = fetch_array($warri)) {
                       
                        ?>
                        <tr>
                           <td><?php echo $row['r_id'];?></td>
                          <td><?php echo $row['cname'];?></td>
                          <td><?php echo $row['mobile1'];?></td>
                          <td><?php echo $row['mobile2'];?></td>
                          <td><?php 
                          if($row['premium'] == '0')
                                    echo "Not Active";
                            elseif($row['premium'] == '1') echo "Active";
                            else"Unknown";

                          ?></td>

                         
                          <!--<td></td>
                          <td></td>-->
                            <td><a href="lock.php?lock_id=<?php  echo $row['r_id']; ?>&ltype=<?php  echo $row['premium']; ?>" class="btn btn-info btn-xs"><?php if($row['premium'] == '0')
                                    echo "UNLOCK";
                            elseif($row['premium'] == '1') echo "LOCK";
                            else"Unknown"; ?>
                          </a>

                           </td>
                        </tr>
                  <?php 
                  }
                  ?>
              
						         </tbody>
               
                    </table>
                    <!-- end project list -->

        </div>
                       <button class="btn btn-warning ">
      </div><!--close panel body-->
    </div>
  </div>
</div>
          
         
   <?php
   include'footeradmin.php';
   ?>
   