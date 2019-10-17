<?php include('../../library/db.php');
		include('../../library/functions.php');
?>
<?php
if (isset($_POST['joe']) && $_POST['joe'] == "boy"){
	
	$vision = (strtoupper(clean($_POST['vision'])));
	$mission = (strtoupper(clean($_POST['mission'])));
	$values=(clean(strtoupper( $_POST['values'])));
	$r_id = $_POST['r_id'];
	$passport = $_FILES['passport']['tmp_name'];

	/*----------section for uploading photo---------------*/
		$file1 =rand(1000,100000)."-".$_FILES['passport']['name'];
    $file_loc1 = $passport;
	$folder="uploads/";
	$new_file_name1 = strtolower($file1);
	$final_file1 =str_replace(' ','-',$new_file_name1);

		$sqli = "SELECT * FROM profile WHERE r_id='".$r_id."' ";
			$result = query($sqli);
			if(row_count($result) == 1){
				
				$queri = "UPDATE profile SET r_id='$r_id', mission='$mission', vision='$vision', core_values='$values', file='$final_file1' WHERE r_id='$r_id' ";
				query($queri);
		move_uploaded_file($file_loc1,$folder.$final_file1);
		echo "
			<div class='alert alert-success  mesefhere fade-in' role='alert'>
					<meta http-equiv=\'refresh\' content=\'5;URL=./\'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p style='color:green;'> Data updated  </p> 
			</button>
			</div> ";

				
			}
			elseif(row_count($result) == 0){
			$insert = "INSERT INTO profile(r_id,mission,vision,core_values,file) VALUES('$r_id','$mission','$vision','$values','$final_file1')";
	    	$result = query($insert);
	    	move_uploaded_file($file_loc1,$folder.$final_file1);
	    	echo  "
				<div class='alert alert-success  mesefhere fade-in' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p> Your info is save to db. close and continue if you wish </p> 
				</button>
				</div>";

			}
			else{
					echo "
				<div class='alert alert-danger  mesefhere fade-in' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p> Error Occur. Try Again Later </p> 
				</button>
				</div>";
				
			}

}

	else{
		header("../");
		exit();
		
		
		}

?>