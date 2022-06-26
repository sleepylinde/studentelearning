<?php include 'database.php';?>

<?php
//Get total Number of Questions
$query = "Select * from question";

//Get results
$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $results->num_rows;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=""utf-8" />
    <title>Teste dein Wissen! :-)</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>BIST DU DER QUIZMASTER?</h1>
        </div>
    </header>
    <main>
        <div class="center_container">
            <h2>TESTE DEIN WISSEN JETZT!</h2>
            <div>Unten erwartet dich ein Multiple-Choice Quiz, bei dem es nur eine richtige Antwort gibt. Starte jetzt und finde heraus ob du der Quizmaster bist!!! :-)  </div>
        </div>
        <div class="info_container">
            <ul>
                <p><span><strong>Anzahl der Fragen:</strong><?php echo $total?></span></p>
                <p><strong>Quizform:</strong>Multiple-Choice</p>
                <p><strong>Fachbereich:</strong>WebDev</p>
                <p><strong>Dauer:</strong><?php echo $total * .5;?> Minuten </p>
            </ul>
            <br>
            <br>
        </div>
        <div class="center_container">
            <a href="question.php?n=1" class="button">Start</a>
            <a href="add.php" class="button">Frage hinzufügen</a>
        </div>
    </main>
    <footer>
        <div class="container">
            WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna Welter - Kevin Dreyer - Louis Punak
        </div>
    </footer>
</body>
</html>
