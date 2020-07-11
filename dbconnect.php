<?php
$host = "localhost";
$user = "id14317179_bwid";
$password = "Bookworm_123";
$dbname = "id14317179_bookworm";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
 die("error in connection");
}

//echo "database connected"
?>