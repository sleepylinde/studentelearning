<?php
session_start();
//Mysqli object
$mysqli = new mysqli($db_host = 'db', $db_user = 'root', $db_pass = 'example', $db_name = 'user');

//Mysqli object
if (isset($_POST["submit-login-form"])) {
    // Code zum Anmelden
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $role;

    $stmt = $mysqli->prepare("SELECT * FROM userdata WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $val = $result->fetch_all();

    $stmt2 = $mysqli->prepare("SELECT role FROM userdata WHERE username=? AND password=?");
    $stmt2->bind_param("ss", $username, $password);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $val2 = $result2->fetch_all();
    $role = $val2[0][0];
    
    if (count($val) == 1) {
        $_SESSION['authUser'] = $role;
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

