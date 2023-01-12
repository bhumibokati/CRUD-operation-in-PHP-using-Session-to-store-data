<?php
session_start();
$user = "admin";
$pass = "admin";
if(isset($_POST['btn']))
{
    if ($user==$_POST["email"] && $pass==$_POST["pass"])
    {
        $_SESSION["email"]=$_POST["email"];
        header("location:home.php");
    }
    else{
        echo"!invalid username or password ! please enter valid username or password";
    }
}

if(isset($_SESSION['email'])){
    header("location.insert.php");
}
if(isset($_GET['msg'])){
    $msg=$_GET["msg"];
    echo"<p style='color:red;'>$msg</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
   <center>
    <h1>Admin Login Form</h1>
    <hr>
</center> 
<center>
    <form method="POST" action="">
        <br><br>
        Email :  <input type="text" name="email" placeholder="Enter email"><br><br>
        Password : <input type="password" name="pass" placeholder="Enter Password"><br>
        <br>
        <br>
        <input type="submit" name="btn" value="login">
    </form>
</center>
</body>
</html>