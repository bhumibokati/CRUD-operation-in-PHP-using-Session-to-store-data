<?php include 'header.php'; ?>
<center>
    <br>
<div id="main-content">
    <hr>
    <h2>Update Record</h2>
    <form class="post-form" action="<?php  $_SERVER['PHP_SELF'] 
    ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php 
    if(isset($_POST['showbtn'])){
      $conn = new mysqli("localhost","root", "","crud");

      if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error());
    }
    
    $id = $_POST['sid'];
    
      $sql = "SELECT * FROM record where sid={$id}";
      $result = $conn->query($sql);
    
      if($result->num_rows>0){
        while($row = $result->fetch_assoc())
        {
    ?>
    <br>
   <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid'] ?>" />
            <input type="text" name="sname" value="<?php echo $row['name'] ?>" />
        </div>
        <br>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['address'] ?>" />
        </div>
        <br>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['phone'] ?>" />
        </div>
        <br>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php 
    }
}
} 
   ?>
</div>
</div>
</center>
</body>
</html>
