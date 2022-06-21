<?php include 'database.php'; ?>

<?php
    //Set question number
    $number = (int) $_GET['n'];

    $query= "SELECT * FROM 'questions' WHERE question_number = $number";

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=""utf-8" />
    <title>Teste dein Wissen! :-)</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<header>
    <div class="container">
        <h1>BIST DU DER QUIZMASTER?</h1>
    </div>
</header>
<main>
    <div class="container">
        <div class="current">
            Frage 1 von 5
        </div>
        <p class="question">
            <?php echo $question['text'];?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <li><input name="choice" type="radio" value="1"/>HyperText Markup Language</li>
                <li><input name="choice" type="radio" value="1"/>Hyper Processing Language</li>
                <li><input name="choice" type="radio" value="1"/>Heavy Text Making Level</li>
                <li><input name="choice" type="radio" value="1"/>HyperText Preprocessor</li>
            </ul>
            <div class="center_container">
            <input type="submit" value="Bestätigen" />
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="container">
        WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna ? - Kevin Dreyer - Louis Punak
    </div>
</footer>
</body>
</html>

