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
    <h2>Herzlichen Glückwunsch!!</h2>
        <p>Du bist ein echter Quizmaster!!!</p>
        <p>Deine Punktzahl beträgt: <?php echo $_SESSION['score']; ?></p>
    <a href="question.php?n=1" class="button">Neustart</a>
    <?php $_SESSION['score'] = 0; ?>
</main>
<footer>
    <div class="container">
        WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna Welter - Kevin Dreyer - Louis Punak
    </div>
</footer>
</body>
</html>


