<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//Check to see, if the score is set
if(!isset($_SESSION['score']))
{
    $_SESSION['score'] =0;
}

if($_POST)
{
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;

    //Get total questions
    $query = "Select * from question";
    $results = $mysqli->query($query) or die($mysqli->error-__LINE__);
    $total = $results->num_rows;

    //Get the correct choice
    $query = "Select * from 'choices' where question_number = $number and is_correct = 1";

    //Get result
    $result = $mysqli->query($query) or die($mysqli->errpr.__LINE__);

    //Get row
    $row = $result->fetch_assoc();

    //Set correct choice
    $correct_choice = $row['choice_id'];

    //Comparison
    if($correct_choice == $selected_choice)
    {
        $_SESSION['score']++;
    }

    //Check if it is the last question
    if($number==$total)
    {
        header("Location: final.php");
        exit();
    }
    else
    {
        header("Location: question.php?n=".$next);
    }
}
?>
