<?php include 'database.php'; include 'process.php';?>
<?php session_start(); ?>
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
        <?php
        //Get total questions
        $query = "Select * from question";
        $results = $mysqli->query($query) or die($mysqli->error - __LINE__);
        $total = $results->num_rows;

        if ($_SESSION['score']/$total >= 0.51 )
        {
            echo '<h2>Herzlichen Glückwunsch!!!</h2>';
            echo '<p>Du bist ein echter Quizmaster!!</p>';
        }
        else
        {
            echo '<h2>Schade, versuche es noch einmal!!</h2>';
            echo '<p>Es ist noch kein Meister vom Himmel gefallen!</p>';
        }
        ?>
        <p>Deine Punktzahl beträgt: <?php echo $_SESSION['score']?></p>
        <?php $runde = round(($_SESSION['score'] / $total) * 100);?>
        <p>Insgesamt sind <?php echo $runde?> % deiner Antworten richtig!</p>
        <a href="question.php?n=1" class="button">Neustart</a>
        <a href="index.php?n=1" class="button">Zur Homepage</a>
    </div>
    <div class="scam1">
        <img src="../resources/images/scam3.gif" alt="scam3.gif" WIDTH="400" HEIGHT="300">
        <img src="../resources/images/scam2.gif" alt="scam2.gif" WIDTH="400" HEIGHT="300">
        <img src="../resources/images/scam1.webp" alt="scam1.webp" WIDTH="400" HEIGHT="300">
    </div>
    </div>
    <?php $_SESSION['score'] = 0; ?>
</main>
<footer>
    <div class="container">
        WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna Welter - Kevin Dreyer - Louis Punak
    </div>
</footer>
</body>
</html>


