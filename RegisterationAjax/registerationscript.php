<?php

include('database.php');
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
if(isset($_POST))
{
 
    $full_name=htmlspecialchars(stripslashes(trim($_POST['username'])));
    $email= htmlspecialchars(stripslashes(trim($_POST['email'])));
    $age=htmlspecialchars(stripslashes(trim($_POST['age'])));
    $password = $_POST["password"];
   
    $query="INSERT INTO User(full_name,email_address,age,password)VALUES('$full_name','$email',$age,'$password')";
    $exec= mysqli_query($connection,$query);
        
  if($exec){
		echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button> 
					Register Successfully  
			 </div>';		
	}	else	{
    echo "failed";
    $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
    echo $msg;
	}
}
?>        