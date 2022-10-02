<?php
include '../dbconnection.php';
$conn = mysqli_connect("localhost", "root", "", "redlinedb");

// define variables and set to empty values
$username = $passwd = "";
$usernameErr = $passwdErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($POST["username"])){
        $usernameErr = "username is required";
    }
}
?>