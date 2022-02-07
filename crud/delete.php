<?php 
include('../connection/sdatabase.php');

if(isset($_GET['id'])){
	$id=$_GET["id"];
	//$id=htmlspecialchars(stripslashes(trim($_DELETE["id"])));
	$query ="DELETE from studentDatabase WHERE roll_no = $id;";
	$exec=mysqli_query($connection,$query);
	
	if($exec){
		$data = ["data"  => $exec, "status" => 200, "message" => "Record Deleted"];
		echo json_encode($data);
	}else{
		$msg="ERROR: " .$query ."<br>" . mysqli_error($connection);
		echo $msg;
	}
}
?>