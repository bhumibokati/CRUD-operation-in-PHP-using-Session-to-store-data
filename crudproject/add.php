<center>
<div id="main-content">
    <h2>Insert Data</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <br>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
                <?php
                //providing selection option that will come from database if availabele only
        $conn = new mysqli("localhost","root", "","crud");

           if($conn->connect_error){
              die("Connection failed: ".$conn->connect_error());
}
         $sql = "SELECT * FROM record";
        $result = $conn->query($sql);

    
      while($row = $result->fetch_assoc()){ 
      ?>

<?php }?>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <br>
        <input class="submit" type="submit" value="Submit"  />
    </form>
    <form action="home.php" method="post">
    <input class="submit" type="submit" value="View Data"  />
    </form>
</div>
</div>
</center>
</body>
</html>








