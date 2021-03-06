<?php
session_start();

if ($_SESSION['authUser'] == "student") {
    header("Location: ../coursepages/kursuebersicht.php");
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Kursübersicht</title>
        <meta charset="utf-8" name="Kursuebersicht" content="text/hmtl">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Roboto:wght@100&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="../css/kursuebersicht.css">
    </head>
    
    <body>


        <main>
        
         <div id="mainbox">
             
            <div id="topbox">
                <h3>Kursübersicht</h3>
            </div>
            
            <div> 
                
                <div class="Ueberschrift">
                    <h2 class="text_shadows">Kursauswahl</h2>
                </div>
                
                <div class="Auswahl">
                    <p><b>Hier gelangst du zu deinen Kursen:</b></p>
                </div>
                <div class="buttons">
                    <p>Web Development</p>
                    <button onclick="window.location.href = 'webdev/webdev_student.php';">Hier klicken</button>
                    <br/>
                    <p>Softwaremanagement</p>
                    <button onclick="window.location.href = 'softwaremanagement/softwaremanagement_student.php';">Hier klicken</button>
                    <br/>
                    <p>IT-Research</p>
                    <button onclick="window.location.href = 'itresearch/itresearch_student.php';">Hier klicken</button>
                    <p>Wöchentliches Quiz</p>
                    <button onclick="window.location.href = '../Quiz/index.php';">Jetzt spielen!</button>
                </div> 
                
            </div>
        </div>
            
        <div id="werbung">
             <img src=https://i.pinimg.com/originals/a6/e2/dd/a6e2dd6a5e67dfd213b6a1928d3f43c3.jpg>
             <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUtOlksL6sqFfN3EzuD9d2TH2GHe_rgwOqJA&usqp=CAU width=200px height="275">
            
             <br/>
            
            <iframe width="405" height="215" src="https://www.youtube.com/embed/bS4aOhRFgdw?controls=0;autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; &autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        </div>

            
        </main>

        <footer>
        </footer>
        
    </body>
</html>
