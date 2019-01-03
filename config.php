<?php
$DB_IP="127.0.0.1";
$DB_USER="radius";
$DB_PASS="1@12347!";
$DB_NAME="radius";

$conn = mysqli_connect($DB_IP, $DB_USER, $DB_PASS,$DB_NAME);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
            exit();
         }
    //     mysqli_select_db( $DB_NAME );
 
 