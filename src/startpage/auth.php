<?php
include '../Quiz/database.php';

//Mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
echo "erfolgreich";
if(isset($_POST["submit-login-form"])) {
    // Code zum Anmelden
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = $mysqli->query("SELECT * FROM User Where username=" . $username . " AND password=" . $password);
    if(isset($result)){
        //Login erfolgreich
        header("Location:../coursepages/kursuebersicht.html"); // Hinter dem Slash kommt der relative Pfad zum Home Seite
    } else {
        echo "Anmeldedaten fehlerhaft";
        // Falsche Anmeldedaten, am besten eine Nachricht ausgeben.
    }
    // Eventuell Sessions einbauen
} if (isset($_POST["submit-register-form"])){
    echo "Hallo";
    // Code zum Registrieren
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $email = $_POST["email"];
    $mysqli->query("INSERT INTO user VALUES ('". $email ."', '". $username ."', '" . $password . "', '". $role ."')");
    echo "erfolgreich";
    //header('Location: /'); Hinter dem Slash kommt der relative Pfad zum Home Seite
}

