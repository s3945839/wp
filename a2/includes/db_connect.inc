<?php
//db_connect.inc
//Check what server you are accessing
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petsvictoria";
} else {
$servername = "talsprddb02.int.its.rmit.edu.au";
$username = "s3945839";
$password = "Iamluke12+";
$dbname = "s3945839";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Debugging function
function pre($var) {
  echo "<pre>";
  print_r($var);
  echo "</pre>";
}
?>

