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
        echo '<script type="text/javascript" language="Javascript"> 
        alert("Username oder Passwort falsch!") 
        
        if(confirm("Bei Bestätigung werden Sie wieder zur Login-Seite weitergeleitet")) 
        {
        window.location.href = "login.php"
        }      
        </script>';
    }
}
if (isset($_POST["submit-register-form"])) {
    // Code zum Registrieren
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $email = $_POST["email"];

    $eintrag = "INSERT INTO userdata (email, username, password, role) VALUES ('$email', '$username', '$password', '$role')";
    $insert_row = $mysqli->query($eintrag) or die ($mysqli->error . __LINE__);

    echo '<script type="text/javascript" language="Javascript"> 
        alert("Registrierung erfolgreich.") 
        
        if(confirm("Bei Bestätigung werden Sie zur Login-Seite weitergeleitet")) 
        {
        window.location.href = "login.php"
        }      
        </script>';
}



