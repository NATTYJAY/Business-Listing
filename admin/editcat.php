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
                 <div class="x_content">
                    <p>This is the platform where you can view and edit category! Happy right?</p>

                   

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">S/N</th>
                          <th style="width: 20%">Category Name</th>
                          <th>Category description</th>
                          <!--<th>Credit</th>
                          <th>Level / Semester</th>-->
                          <th style="width: 20%">Edit Option</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                    $sql ="SELECT * FROM category ORDER BY c_id ASC";
                    $warri =query($sql);
                      while ($row = fetch_array($warri)) {
                       
                        ?>
                        <tr>
                          <td><?php echo $row['c_id'];?></td>
                          <td><?php echo $row['cat_name'];?></td>
                          <td><?php echo $row['cat_desc'];?></td>
                          <!--<td></td>
                          <td></td>-->
                            <td><a href="update.php?cc_id=<?php echo $row['c_id'];?>" class="btn btn-info btn-xs"> Edit</a>

                                 <a href="#delete_cat<?php echo $row['c_id'];?>" data-toggle="modal" class="btn btn-danger btn-xs"><i class="icon-trash icon-large"></i>&nbsp; Delete</a>

                                <?php include('delete_user_modal.php'); ?>


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
   