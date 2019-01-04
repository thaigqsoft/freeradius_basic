<?php
include("config.php");
if($_POST['Submit']=="Submit"){

   

    $sql1 = "INSERT INTO radcheck(username,attribute,op,value)  
                       VALUES ( '".$_POST['username']."','Cleartext-Password',':=','".$_POST['pass']."' )";
     mysqli_query($conn, $sql1) or   die('Could not connect: ' . mysqli_error());

     $sql1 = "INSERT INTO radusergroup(groupname,username,priority)  
     VALUES ( '".$_POST['group_name']."',':=','".$_POST['username']."','1' )";
mysqli_query($conn, $sql1) or   die('Could not connect: ' . mysqli_error());   

   
    $conn->close();

    echo "<br><br><a href='index.php'>INDEX</a><br>";
}
?>
<h1>ADD USER </h1>
<br><br>
<form action="add_user.php" method="post">
  User name:
  <input type="text" name="username" value=""><br><br>
  Pass:
  <input type="text" name="pass" value=""><br><br>
  <select name="group_name" >
 
  <?php
  $sql = "SELECT * FROM radusergroup group by groupname order by groupname";
  $query = mysqli_query($conn,$sql);
 
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
 { ?>
  <option value="<?php echo $result["groupname"];?>"><?php echo $result["groupname"];?></option>
 
<?php }
 
?>
</select>
  <input type="submit" name="Submit"  value="Submit">
</form>