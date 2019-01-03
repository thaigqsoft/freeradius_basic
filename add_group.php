<?php
include("config.php");
if($_POST['Submit']=="Submit"){

    $download_db=$_POST['download']*1000000;
    $upload_db=$_POST['upload']*1000000;

    $sql1 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
                       VALUES ( '".$POST['group_name']."','WISPr-Bandwidth-Min-Down',':=','$download_db' )";
     mysqli_query($conn, $sql1);

     $sql2 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
                        VALUES ( '".$POST['group_name']."','WISPr-Bandwidth-Min-Up',':=','$upload_db' )";
     mysqli_query($conn, $sql2);

      $sql3 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
                       VALUES ( '".$POST['group_name']."','WISPr-Redirection-URL',':=','".$POST['url']."' )";
     mysqli_query($conn, $sql3);
 
     $sql3 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
     VALUES ( '".$POST['group_name']."','Mikrotik-Address-List',':=','".$POST['adrr_list']."' )";
     mysqli_query($conn, $sql3);

   
    $conn->close();

    echo "<br><a href='index.php'>INDEX</a><br>";
}
?>
<form action="add_group.php" method="post">
  Group name:<br>
  <input type="text" name="group_name" value=""><br>
  Download:<br>
  <input type="text" name="download" value="">M<br><br>
  UPload:<br>
  <input type="text" name="upload" value="">M<br><br>
  Redirect URL:<br>
  <input type="text" name="url" value="http://www.google.co.th"><br><br>
  Address list:<br>
  <input type="text" name="adrr_list" value=""><br><br>
  <input type="submit" name="Submit"  value="Submit">
</form>