<?php
include ('../connection/sdatabase.php');
if(isset($_GET)){
	$id = '';
	if($_GET['id']){
		$id =   "WHERE roll_no=".$_GET['id'];
	}

$query = "SELECT * FROM studentDatabase ".$id ;
$exec = mysqli_query($connection, $query);

if ($exec) {
		$data = mysqli_fetch_all($exec, MYSQLI_ASSOC);
		
		$data = ["data" => $data, "status" => 200, "message" => "Showng record"];
		echo json_encode($data);
} else {
		$msg = "ERROR:" . $query . "<br>" . mysqli_error($connection);
		echo $msg;
}
}
?>