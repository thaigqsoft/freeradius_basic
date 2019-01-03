<?php
include("config.php");
if($_POST['Submit']=="Submit"){

    $download_db=$_POST['download']*1000000;
    $upload_db=$_POST['upload']*1000000;

    $sql1 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
                       VALUES ( '".$_POST['group_name']."','WISPr-Bandwidth-Min-Down',':=','$download_db' )";
     mysqli_query($conn, $sql1) or   die('Could not connect: ' . mysqli_error());

     $sql2 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
                        VALUES ( '".$_POST['group_name']."','WISPr-Bandwidth-Min-Up',':=','$upload_db' )";
     mysqli_query($conn, $sql2) or   die('Could not connect: ' . mysqli_error());

      $sql3 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
                       VALUES ( '".$_POST['group_name']."','WISPr-Redirection-URL',':=','".$_POST['url']."' )";
     mysqli_query($conn, $sql3) or   die('Could not connect: ' . mysqli_error());
 
     $sql4 = "INSERT INTO radgroupreply(groupname,attribute,op,value)  
     VALUES ( '".$_POST['group_name']."','Mikrotik-Address-List',':=','".$_POST['adrr_list']."' )";
     mysqli_query($conn, $sql4) or   die('Could not connect: ' . mysqli_error());

   
    $conn->close();

    echo "<br><a href='index.php'>INDEX</a><br>";
}
?>
<form action="add_group.php" method="post">
  Group name:
  <input type="text" name="group_name" value=""><br><br>
  Download:
  <input type="text" name="download" value="">M<br><br>
  UPload:
  <input type="text" name="upload" value="">M<br><br>
  Redirect URL:
  <input type="text" name="url" value="http://www.google.co.th"><br><br>
  Address list:
  <input type="text" name="adrr_list" value=""><br><br>
  <input type="submit" name="Submit"  value="Submit">
</form>