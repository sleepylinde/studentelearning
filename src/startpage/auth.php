<?php

//Mysqli object
$mysqli = new mysqli($db_host = 'db', $db_user = 'root', $db_pass = 'example', $db_name = 'user');

//Mysqli object
if (isset($_POST["submit-login-form"])) {
    // Code zum Anmelden
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $stmt = $mysqli->prepare("SELECT * FROM userdata WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $val = $result->fetch_all();

    if (count($val) == 1) {
        header("Location: ../coursepages/kursuebersicht.php"); // Hinter dem Slash kommt der relative Pfad zum Home Seite
    } else {
        echo "Invalid User";
    }
}
if (isset($_POST["submit-register-form"])) {
    echo "Hallo";
    // Code zum Registrieren
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $email = $_POST["email"];
    $mysqli->query("INSERT INTO userdata VALUES ('" . $email . "', '" . $username . "', '" . $password . "', '" . $role . "')");
    echo "erfolgreich";
    //header('Location: /'); Hinter dem Slash kommt der relative Pfad zum Home Seite

}
?>

