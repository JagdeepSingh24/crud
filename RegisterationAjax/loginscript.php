<?php
session_start();
include('database.php');
if(isset($_POST['login'])){
     
    $msg=check_information($connection);
}

function check_information($connection){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM User WHERE email_address='$email'AND password='$password'";
    $exec= mysqli_query($connection,$query);
    $row = mysqli_fetch_array($exec,MYSQLI_ASSOC);
     $count = mysqli_num_rows($exec);
      if($exec){
          if($count>0 ){
         header("Location:http://localhost/RegisterationAjax/user-table.php");
          }
          else{
            $_SESSION['id_doesnot_Exists']="Email doesnot exists";
            header("Location:http://localhost/RegisterationAjax/login.php");
          }
      }
         else{
              $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
            echo $msg;
         }
}
?>