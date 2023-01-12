<?php
session_start();
?>
<center>
  <br>
<div id="main-content">
    <h2>Update Record</h2>
    <hr>
<?php
  $conn = new mysqli("localhost","root", "","crud");

  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error());
}
//getting url id value and assigning
$id = $_GET['id'];

//using that id to select that record for editing change
  $sql = "SELECT * FROM record where sid={$id}";
  $result = $conn->query($sql);

  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
             
  ?>
  <br>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>"/>
          <input type="text" name="sname" value="<?php echo $row['name'] ?>"/>
      </div>
      <br>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['address'] ?>"/>
      </div>
      <br>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['phone'] ?>"/>
      </div>
      <br>
      <input class="submit" type="submit" value="Update Now"/>
    </form>

    <?php }} ?>
</div>
</div>
</center>
</body>
</html>
