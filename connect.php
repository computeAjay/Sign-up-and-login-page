<?php

use function PHPSTORM_META\elementType;

$server = "localhost";
$use = "root";
$pass = "";
$db = "login";

$conn = mysqli_connect($server, $use, $pass, $db);
// check connection 
if(!$conn){
   die(mysqli_errno($conn));
}


?>