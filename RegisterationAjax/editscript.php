<?php
include('database.php');
if($_SERVER['REQUEST_METHOD']==='PUT'){
$data = json_decode(file_get_contents('php://input'));

    $id=$data->ID;
    $age=$data->age;
    $email=$data->email_address;
    $name=$data->full_name;

        $query="UPDATE User 
        SET full_name='$name', age=$age,email_address='$email' WHERE id=$id";
        $exec=mysqli_query($connection, $query);
        
        if($exec){
            
         echo("updated");      
        }else{
         $msg= "Error: " . $query . mysqli_error($connection);
         echo $msg;  
      }

}
?>