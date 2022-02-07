<?php 
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
include('../connection/sdatabase.php');
print_r(json_decode(file_get_contents('php://input')));

if(isset($_POST)){
	$first_name=htmlspecialchars(stripslashes(trim($_POST["first_name"])));
	$last_name=htmlspecialchars(stripslashes(trim($_POST["last_name"])));
	$email=htmlspecialchars(stripslashes(trim($_POST["email"])));

	$Photos=$_FILES['Photos']['name'];
	$tempname=$_FILES['Photos']['tmp_name'];
	$folder=realpath(__DIR__.'/..').'/images'."/".$Photos;
	$query="INSERT INTO studentDatabase(email,first_name,last_name,Photos) VALUES('$email','$first_name','$last_name','$Photos');";
	$isMoved = move_uploaded_file($tempname,$folder);
	echo $isMoved;
	if($isMoved){
		$exec=mysqli_query($connection,$query);
		if($exec){
			$data = ["data" => $exec, "Image" => $isMoved, "status" => 200, "message" => "Record Added"];
			echo json_encode($data);
		}else{
			$msg="ERROR:".$query."<br>".mysqli_error($connection);
			echo $msg;
		}
	}
}else{
	echo "-----";
}
?>