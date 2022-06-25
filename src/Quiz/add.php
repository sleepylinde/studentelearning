<?php include 'database.php'; ?>
<?php
if (isset($_POST ['submit']))
{
    //get post variable
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];

    //Array of the choices
    $choices = array();
    $choices[1]= $_POST['choice1'];
    $choices[2]= $_POST['choice2'];
    $choices[3]= $_POST['choice3'];
    $choices[4]= $_POST['choice4'];
    $choices[5]= $_POST['choice5'];

    //Query of the Question
    $query = "INSERT INTO questions(question_number, question_text) VALUES($question_number,$question_text)";

    //Run the query
    $insert_row = $mysqli->query($query) or die ($mysqli->error.__LINE__);

    //Validation of the inserts
    if(insert_row)
    {
        foreach($choices as $choice => $value )
        {
            if($value != '')
            {
                if(correct_choice == $choice)
                {
                    $is_correct = 1;
                }
                else
                {
                    $is_correct = 0;
                }

                //Query of the choices
                $query = "INSERT INTO choices (question_number), ic_correct, choice_text) VALUES (question_number,$is_correct,$value)";

                //Run the Query
                $insert_row = mysqli->query($query) or die ($mysqli->error.__LINE__);

                //Validation of the inserts
                if($insert_row)
                {
                    continue;
                }
                else
                {
                    die('Error: ('.mysqli->errno.') '.mysqli->error);
                }
            }
        }
    }
    $message = 'Die Frage wurde hinzugefügt';

}

//Get total questions
$query = "Select * from question";
$results = $mysqli->query($query) or die($mysqli->error - __LINE__);
$total = $results->num_rows;
$next = $total+1;

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
    <h2>Füge eine neue Frage hinzu</h2>
    <?php
        if(isset($message))
        {
            echo '<p>'.$message.'</p>';
        }
    ?>
    <form method="post" action="add.php">
        <p>
            <label>Fragennummer: </label>
            <input type="number" value="<?php echo $next ?>"name="question_number"/>
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
        WebDev SoSe 2022 &copy; David Kalus - Hauke Thape - Johanna Welter - Kevin Dreyer - Louis Punak
    </div>
</footer>
</body>
</html>

