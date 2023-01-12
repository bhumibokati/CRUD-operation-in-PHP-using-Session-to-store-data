<?php
include('login.php');
if(isset($_POST["logout"])){
    session_start();

    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    session_destroy();
}
else
{
    echo"your session end ! plese login to continue";
}
?>