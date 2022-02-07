<?php
include('readscript.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<style>
     table, td, th {  
      border: 1px solid #ddd;
      text-align: left;
    }
    
    table {
      border-collapse: collapse;
      max-width: 100%;
     width:90%;
    }
    .table-data{
      
      width:65%;
      float: right;
    }
    th, td {
      padding: 15px;
    }
body{
    overflow-x: hidden;
}
* {
  box-sizing: border-box;}
</style>
</head>
<body>
<div class="table-data">
        <div class="list-title">
 <h2>Registered Person</h2>
          
            </div>
    <table>
        <tr>
            <th>S.N</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
<?php
        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){

?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['full_name']; ?></td>
<td><?php echo $data['email_address'];?></td>
<td><?php echo $data['age']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> 
<?php
      $sn++; 
      ?>
      <?php

    }
 }
 ?>
 
    </table>
    </div>
</body>
</html>