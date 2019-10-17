<?php
include'headeradmin.php';
if(!isset($_SESSION['admin_id'])){
  header("location:../home/404.php");
  }
?>

?>

        <!-- page content -->
<div class="right_col" role="main"><br/><br/><br/>
    <div class="">
        <div class="panel panel-danger">
             <div class="panel-heading">
                 <div class="x_content">
                    <p>This is the platform where courses can be view and edit ! Nice right?</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                      
                        <tr>
                          <th style="width: 1%">S/N</th>
                          <th>Company Name</th>
                          <th>Mobile 1</th>
                          <th>Mobile 2</th>
                          <th>Mission</th>
                          <th>Vision</th>
                          <th>Core Values</th>
                          <th>picture</th>
                          <th>Edit Option</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                    $sql = "SELECT * FROM reg_details 
        INNER JOIN profile ON reg_details.r_id = profile.r_id ";
                    $warri =query($sql);
                      while ($row = fetch_array($warri)) {
                       extract($row);
                        ?>
                      
                        <tr>
                        <td><?php echo $row['p_id'];?></td>
                          <td><?php echo $row['cname'];?></td>
                          <td><?php echo $row['mobile1'];?></td>
                          <td><?php echo $row['mobile2'];?></td>
                          <td><?php echo $row['mission'];?></td>
                          <td><?php echo $row['vision'];?></td>
                           <td><?php echo $row['core_values'];?></td>

                            
                            <td>  <img class="img" src="<?php echo'../home/pages/uploads/'.$file; ?>" width="50" height="50"></td>
                            <td style="width: 20%">
                              <a href="updateuser.php?c_id=<?php echo $row['c_id'];?>&r_id=<?php echo $row['r_id'];?>" class="btn btn-info btn-xs"> Edit</a>

                               <a href="#delete_user<?php echo $row['r_id'];?>" data-toggle="modal" class="btn btn-danger btn-xs"><i class="icon-trash icon-large"></i>&nbsp; Delete</a>

                                <?php include('delete_modal.php'); ?>

                             
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
   