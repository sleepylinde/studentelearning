<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset=utf-8" />
    <link rel="stylesheet" href="../css/externalCSS.css" type="text/css" />
    <title>studentELearning login</title>
</head>


<body>

<header>
    <div class="header">
        <h1>Herzlich Willkommen auf studentELearning!</h1>
    </div>
</header>

<div class="register-interface">
    <h2>Registrierung</h2>
    <form method="post" action="auth.php">
        <p>
            <label>Email</label>
            <br>
            <input type="email" name="email" id="email" placeholder="Email Adresse eingeben" required class="userinput">
        </p>
        <p>
            <label>Username</label>
            <br>
            <input id="username" name="username" type="text" placeholder="Benutzername eingeben" required class="userinput">
        </p>
        <p>
            <label>Passwort</label>
            <br>
            <input id="password" name="password" type="password" placeholder="Passwort eingeben" required class="userinput">
        </p>
        <p>
            <label>Ich bin...</label>
            <br>
            <select name="role">
            <option value="student">Student</option>
            <option value="dozent">Dozent</option>
        </select>
        </p>
        <input type="submit" class="submit" name="submit-register-form" value="Registrieren">
        <br>
        <br>
</div>

<div class="registerhere">
    <p>Sie haben schon einen Account?</p>
    <a href="login.php" class="button">Einloggen</a>
    <br>
    <br>
</div>

<footer>
    <div>
        WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna Welter - Kevin Dreyer - Louis Punak
    </div>
</footer>


</body>

</html>