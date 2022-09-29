<?php
include '../dbconnection.php';
$conn = mysqli_connect("localhost", "root", "", "redlinedb");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];

    $query = "SELECT * FROM admintb WHERE username='" . $_POST['username'] . "' AND passwd='" . $_POST['passwd'] . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_fetch_assoc($result)) {
        $_SESSION['[username]'] = $_POST['username'];
        $_SESSION['[passwd]'] = $_POST['passwd'];
        // $_SESSION['pwd']=$_POST['pwd'];
        header("location:../homepage/home.html"); //../foldername to include file on another folder in root
    }
    else {
        header("location:../homepage/home.html? Invalid= Please enter correct username and password");
    }
}
else {
    echo 'Not Working';
}
?>