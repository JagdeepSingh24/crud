<?php 
include('../connection/sdatabase.php');
if($_SERVER['REQUEST_METHOD']==='PUT'){
//	$myEntireBody = file_get_contents('php://input');
	$data = json_decode(file_get_contents('php://input')); 
	$id=$data->ID;
	$first_Name=$data->first_name;
	$last_Name=$data->last_name;
	$Email=$data->email;
	echo json_encode($data->Photos);
	$base64=$data->Photos;
	$decoder=base64_decode($base64);
	$img=imagecreatefromstring($decoder);
	if(!$img){
		echo"hi";
		die;
	}else{
		echo"img";
	}
	$query="UPDATE studentDatabase 
	SET first_name='$first_Name',
	last_name='$last_Name',
	email='$Email',
	Photos='$img'
	WHERE roll_no=$id;";
	
	
	$exec = mysqli_query($connection,$query);
	if($exec){
		$show=["data"=>$exec,"status"=> 200, "message" => "Record Edited"];
		echo json_encode($show);
	}else{
		$msg="ERROR: " .$query ."<br>". mysqli_error($connection);
		 	echo $msg;
	}
	 //$Photos=$_FILES['Photos']['name'];
	// $tempname=$_FILES['Photos']['tmp_name'];
	// $folder=realpath(__DIR__.'/..').'/images'."/".$Photos;
	// echo $folder."----------".$tempname;	
	// 	$query="UPDATE studentDatabase 
	// SET first_name='$first_name',
	// last_name='$last_name',
	// Photos='$Photos',
	// email='$email' WHERE roll_no=$roll_no;";
	
	
	// $isMoved = move_uploaded_file($tempname,$folder);
	

	// if($isMoved){
	// 	$exec = mysqli_query($connection,$query);
	// 	$data=["data" => $exec, "Image" => $isMoved, "status" => 200, "message" => "Record Edited"];
	// 	echo json_encode($data);
	// }else{
	// 	$msg="ERROR: " .$query ."<br>". mysqli_error($connection);
	// 	echo $msg;
	// }
}
?>