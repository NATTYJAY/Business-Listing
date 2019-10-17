<?php
if(isset($_FILES['tmp_pic'])) //check uploaded file
    {
        //get file details we need
        $file_tmp_name    = $_FILES['tmp_pic']['tmp_name'];
        $file_size        = $_FILES['tmp_pic']['size'];
		$image_prop = getimagesize($file_tmp_name);
		if ($image_prop['mime']!= "image/jpeg"){
			echo "1";
		}
			else{
				$get_con = file_get_contents($file_tmp_name);
				$con_encod = base64_encode($get_con);
				echo "<img src='data:".$image_prop['mime'].";base64,{$con_encod}' width=96 height=126 />";
				}			
		
	}
	else{
		header("location: ../");
	
	}