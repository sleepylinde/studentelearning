<?php
//Create Connection
$db_host = 'db';
$db_name = 'quiz';
$db_user = 'root';
$db_pass = 'example';

//Mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Errormessage
if($mysqli->connect_error){
    printf("Connection failed", $mysqli->connect_error);
    exit();
}
