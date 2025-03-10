<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "airline"

// Create connection

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "Not Connected";
}
else{
    echo "Connected";
}

// Start

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm-password'];

$sql = "INSERT INTO `test`(`user name`, `email`, `password`, `confirm password`) VALUES ('$username','$email','$password','$confirm_pass')";



?>