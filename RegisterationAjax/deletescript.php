<?php
include('database.php');
if(isset($_GET)){
    $id= $_GET['id'];
   echo($id);
    $query="DELETE from User WHERE id=$id";
    $exec= mysqli_query($connection,$query);
    if($exec){
     echo ("deleted");
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo $msg;
    }
}
?>