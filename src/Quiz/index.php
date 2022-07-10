<?php include 'database.php';?>

<?php
//Get total amount of Questions which are shown in the general information about the quiz. You can find it under the Point "Anzahl der Fragen: *total amount of questions in the database*"
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
        <div class="h1">
            <h1><span class="blink">BIST DU DER QUIZMASTER???</span></h1>
        </div>
    </header>

    <main>
        <div class="center_container">
            <ul>
                <li><a href="../coursepages/kursuebersicht.php">Kursübersicht</a></li>
                <li style="float:right"><a class="active" href="../startpage/login.php">Ausloggen</a></li>
            </ul>
            <h2>TESTE DEIN WISSEN JETZT!</h2>
            <div>Unten erwartet dich ein Multiple-Choice Quiz, bei dem es nur eine richtige Antwort gibt. Starte jetzt und finde heraus ob du der Quizmaster bist!!! :-)  </div>
        </div>
        <div class="info_container">
            <ul>
                <p><span><strong>Anzahl der Fragen:</strong><?php echo $total?></span></p>
                <p><strong>Quizform:</strong>Multiple-Choice</p>
                <p><strong>Fachbereich:</strong>WebDev</p>
                <p><strong>Dauer:</strong><?php echo $total * .5;?> Minuten </p>
                 <div class="clickhere">
                      <img src="../resources/images/clickhere_red.gif" alt="clickhere_red.gif" WIDTH="88" HEIGHT="31">
                  </div>
                <div class="arrow">
                     <img src="../resources/images/arrowdown.gif" alt="arrowdown.gif" WIDTH="242" HEIGHT="360">
                 </div>
            </ul>
            <br>
            <br>
        </div>
        <div class="button_container">
            <a href="question.php?n=1" class="button">Quiz jetzt starten!</a>
        </div>
         <div class="button_container2">
             <a href="add.php?n=1" class="button">Erstelle deine eigenen Fragen!</a>
         </div>
    </main>

    <footer>
        <div class="container">
            WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna Welter - Kevin Dreyer - Louis Punak
        </div>
    </footer>

</body>
</html>
