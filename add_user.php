<?php
include("config.php");
if($_POST['Submit']=="Submit"){

   

    $sql1 = "INSERT INTO radcheck(username,attribute,op,value)  
                       VALUES ( '".$_POST['username']."','Cleartext-Password',':=','".$_POST['pass']."' )";
     mysqli_query($conn, $sql1) or   die('Could not connect: ' . mysqli_error());

      

   
    $conn->close();

    echo "<br><br><a href='index.php'>INDEX</a><br>";
}
?>
<h1>ADD USER </h1>
<br><br>
<form action="add_group.php" method="post">
  User name:
  <input type="text" name="username" value=""><br><br>
  Pass:
  <input type="text" name="pass" value=""><br><br>
  <input type="submit" name="Submit"  value="Submit">
</form>