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
    <h2>Füge eine neue Frage hinzu</h2>
    <form method="post" action="add.php">
        <p>
            <label>Fragennummer: </label>
            <input type="number" name="question_number"/>
        </p>
        <p>
            <label>Fragentext: </label>
            <input type="text" name="question_text"/>
        </p>
        <p>
            <label>Antwort #1:</label>
            <input type="text" name="choice1"/>
        </p>
        <p>
            <label>Antwort #2:</label>
            <input type="text" name="choice2"/>
        </p>
        <p>
            <label>Antwort #3:</label>
            <input type="text" name="choice3"/>
        </p>
        <p>
            <label>Antwort #4:</label>
            <input type="text" name="choice4"/>
        </p>
        <p>
            <label>Antwort #5:</label>
            <input type="text" name="choice5"/>
        </p>
        <p>
            <label>Richtige Antwortnummer:</label>
            <input type="number" name="correct_choice"/>
        </p>
        <p>
            <input type="submit" value="Bestätigen" />
        </p>
    </form>
</main>
<footer>
    <div class="container">
        WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna ? - Kevin Dreyer - Louis Punak
    </div>
</footer>
</body>
</html>

