<?php
include 'header.php';
session_start(); 
    if(isset($_POST['deletebtn'])){

        include 'config.php';

      if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error());
    }
    
    $stu_id = $_POST['sid'];
    
//using that id to select that record for deleting its data from db
$sql = "DELETE FROM record WHERE sid = {$stu_id};";
$result = $conn->query($sql);

header("location: http://localhost/crudproject/home.php");
$conn->close();
}

      ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
