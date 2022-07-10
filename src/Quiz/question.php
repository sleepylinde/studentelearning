<?php include 'database.php'; include 'process.php'?>
<?php session_start(); ?>

<?php

    //Set question Number
    $number = (int)$_GET['n'];

    //Get Question
    $query = "Select * from question where question_number = $number";

    //Get result
    $result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
    $question = $result->fetch_assoc();


    //Get Choices
    $query = "Select * from choices where question_number = $number";

    //Get results
    $choices = $mysqli->query($query) or die ($mysqli->error.__LINE__);

    //Get total questions
    $query = "Select * from question";
    $results = $mysqli->query($query) or die($mysqli->error - __LINE__);
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
    <div class="container">
        <div class="current">
            Frage <?php echo $question['question_number']; ?> von <?php echo $total; ?>
        </div>
        <p class="question">
            <?php echo $question['question_text'];?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <?php while($row = $choices->fetch_assoc()): ?>
                    <li class="choicee"><input name="choice" type="radio" value="<?php echo $row['choice_id']?>"/><?php echo $row['choice_text']?></li>
                <?php endwhile; ?>
            </ul>
            <div class="center_container">
            <input type="submit" class="button" value="Bestätigen" />
            <input type="hidden" name="number" value="<?php echo $number?>";/>
            </div>
            <div class="nyan">
                <img src="../resources/images/nyan.gif" alt="nyan.gif" WIDTH="476" HEIGHT="180">
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="container">
        WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna Welter - Kevin Dreyer - Louis Punak
    </div>
</footer>
</body>
</html>

