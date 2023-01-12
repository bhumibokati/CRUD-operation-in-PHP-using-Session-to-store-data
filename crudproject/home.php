<?php
session_start();

if(isset($_SESSION["email"]))
{
    echo "<center>
         <h1>Welcome To Dashboard</h1>
           </center>" .$_SESSION["email"];
}
else
{
    header("location:login.php");
}
?>
<hr>
<center>
    <a href= "logout.php">
     <input type="submit" name="btn" value="logout">
    </a>
</center>
<hr>
<?php
include 'header.php';
?>
<center>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone No.</th>
        <th>Action</th>
        </thead>
        <tbody>
</center>
     <?php
  $conn = new mysqli("localhost","root", "","crud");
   if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error());
}
  $sql = "SELECT * FROM record";
  $result = $conn->query($sql);
 if($result->num_rows>0){
      while($row = $result->fetch_assoc()){ 
        ?>  
        <tr>
        <td>
          <?php echo $row["sid"] 
        ?>
        </td>
        <td>
          <?php echo  $row["name"]
         ?>
         </td>
        <td>
          <?php echo $row["address"] ?>
     </td> 
        <td>
          <?php echo $row["phone"]
        ?> 
        </td> 
        <td> 
        <a href='edit.php?id=<?php echo $row['sid'] 
         ?>'>Update</a> &nbsp; 
        <a href='delete-inline.php?id=<?php echo $row['sid'] ?>'>Delete</a> 
        </td>
       </tr>
         
     <?php 
    }
    }
    ?>
       </tbody>
    </table>
  </div>
 </div>
</body>
</html>
