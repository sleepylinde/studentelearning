<?php
$servername = "http://localhost:8080/";
$user = "root";
$password = "example";
$database = "User";

$con = mysqli_connect($servername, $user, $password, $database);

$con->query("SELECT * FROM User ");
echo "connected";
