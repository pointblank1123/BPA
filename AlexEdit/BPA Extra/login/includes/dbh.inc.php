<?php

$servername = "127.0.0.1";
$dBUsername ="root";
$dBPassword = "toor";
$dBName = "loginsystemtut";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}