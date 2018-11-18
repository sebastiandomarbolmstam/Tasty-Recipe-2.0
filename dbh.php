<?php
$severename = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "*****";
$dbName = "loginsystemtut";

$conn = mysqli_connect($severename, $dbUsername, $dbPassword, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
