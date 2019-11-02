<?php
$serverLoc = "localhost";
$username = "root";
$password = "";
$databaseName = "bpawebsite";

$conn = new mysqli($serverLoc, $username, $password ,$databaseName);
if($conn->connect_error){
    die("Connection Error:" . $conn->connect_error );
}
?>