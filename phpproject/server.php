<?php
$name = "yourhost";
$dBUsername = "yourusername";
$dBPassword = "";
$dBName = "yourdbname";

$con = mysqli_connect($name, $dBUsername, $dBPassword, $dBName);

if(!$con) {
    die("connection failed:" . mysqli_connect_error()); 
}

?>