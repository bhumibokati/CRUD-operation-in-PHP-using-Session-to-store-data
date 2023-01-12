<?php
   $name = $_POST['sname'];
   $address = $_POST['saddress'];
   $phone = $_POST['sphone'];
   $conn = new mysqli("localhost","root", "","crud");
   if($conn->connect_error){
     die("Connection failed: ".$conn->connect_error());
 }
   $sql = "INSERT INTO record (name,address,phone) VALUES ('{$name}','{$address}', '{$phone}'); ";
   $result = $conn->query($sql);
   header("location: http://localhost/crudproject/add.php");
   $conn->close();


   ?>