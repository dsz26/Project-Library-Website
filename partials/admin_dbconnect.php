<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "admin";

$co = mysqli_connect($server, $username, $password, $database);
if (!$co){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>