<?php 

error_reporting(1);
$link = mysqli_connect("localhost", "root", "", "Test_Web");
mysqli_query($link,"SET NAMES 'UTF8'");
mysqli_set_charset($link,'utf8');
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
 echo "Database created successfully";
?>