<?php
session_start(); //This is to start the session for the connection
$conn = mysqli_connect("localhost", "root", "", "redlinedb");
$result = mysqli_query($conn,"SELECT * FROM admintb");
  #
// Check connection
if ($conn->connect_error) {
    die("Connection failure: " 
        . $conn->connect_error);
} 
  
// Closing connection
$conn->close();
?>