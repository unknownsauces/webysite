<?php
$servername = "localhost";   //local host or name of server
$dbUsername = "root";
$dbPassword = "Jeffyjeffyjeffy123!@#";  //when ur using xamp its empty
$dbName = "loginsystemtut";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
  die("connection failed:".mysqli_connect_error());
  // code...
}
