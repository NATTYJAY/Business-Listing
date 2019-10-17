<?php
include'headeradmin.php';
if(!isset($_SESSION['admin_id'])){
  header("location:../home/404.php");
  }
?>
                 
                 <?php

                 $id = $_GET['cc_id'];

                 $sql ="DELETE FROM category WHERE c_id='".$id."' ";
                    $warri =query($sql);
                    
                     if($warri){
                        redirect("index.php?del=yesokay");
                      }

                      else{
                        redirect("index.php?extension=notgood");
                      }
                 
                ?>

   <!--  ERROR MESSAGES-->

   

   
  
  