<?php

$dbserver = "localhost";
$dbUser = "root";
$dbPass = "";
$database = "registrationform";

$connection = new mysqli($dbserver, $dbUser, $dbPass, $database);

if($connection->connect_error){
    die('Connection error');
}else{
    echo'Connection ok';
}
?>
