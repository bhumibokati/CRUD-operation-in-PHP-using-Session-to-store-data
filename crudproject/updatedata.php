<?php
   $id = $_POST['sid'];
   $name = $_POST['sname'];
   $address = $_POST['saddress'];
   $phone = $_POST['sphone'];

   //creating connection
   $conn = new mysqli("localhost","root", "","crud");
   if($conn->connect_error){
     die("Connection failed: ".$conn->connect_error());
 }
   $sql = "UPDATE record
           SET name='{$name}', address='{$address}', phone='{$phone}'
           WHERE sid='{$id}'; ";
   $result = $conn->query($sql);
 
//after saving user data to database redirecting user to add page
header("location: http://localhost/crudproject/home.php");
$conn->close();
 ?>

