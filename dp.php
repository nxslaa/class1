<?php
$servername = "localhost";
$username = "nx";
$password = "nx!";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Db connected succesfully";

?>