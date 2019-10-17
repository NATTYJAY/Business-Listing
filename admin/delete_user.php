<?php
include'headeradmin.php';
if(!isset($_SESSION['admin_id'])){
  header("location:../home/404.php");
  }
?>
                 <?php
                
                $id = @$_GET['c_id'];
                 $idr = @$_GET['r_id'];
                 $sql = "DELETE m,a FROM reg_details m JOIN profile a ON m.r_id = a.r_id WHERE m.c_id='".$id."' AND a.r_id='".$idr."'";
                    $warri =query($sql);
                      if($warri){
                        redirect("index.php?yesdelete=yesokay");
                      }

                      else{
                         redirect("index.php?nodelete=yesokay");
                      }
                ?>

  
   