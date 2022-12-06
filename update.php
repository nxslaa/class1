<?php
include 'dp.php';

$sql = "UPDATE MyGuest SET lastname='ale' WHERE lastname='ale'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>