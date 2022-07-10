<?php
session_start();

if ($_SESSION['authUser'] == "student") {
    header("Location: ../coursepages/kursuebersicht.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DozentenKursübersicht</title>

        <meta http-equiv="content-type" content="text/hmtl" charset="utf-8" name="Kursuebersicht_Dozent"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Roboto+Mono:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/kursuebersicht_prof.css">

    </head>

    <style type="text/css">

        body {
          font-family: Roboto Mono;
          background-image: url('https://us.123rf.com/450wm/microone/microone1707/microone170700356/83074030-flaumige-wei%C3%9Fe-karikaturwolken-im-vektorsatz-des-blauen-himmels.jpg?ver=6');
              }

        #weisserbalken {
          background-color: white; 
          height: 40px;
          margin-bottom: 5px;
          text-decoration: none;
          padding-top: 1px;
          border-radius: 5px;  
          text-align: center; 
        }

        #topbox {
          background-color: paleturquoise;
          margin-left: auto;
          margin-right: auto;
          height: 150px;
          width: 1050px;
          border-radius: 5px; 
          text-align: center; 
        }

        #mittlererblock {
          width: 1050px;
          height: 400px;
          margin-top: 20px;
          margin-left: auto;
          margin-right: auto;
          background-color: skyblue;
          border-radius: 5px;
        }

        .mittlerebloecke {
          width: 330px;
          margin: 10px;
          float: left;

        }

          #balken {
              width: 290px;
              height: 30px;
              background-color: white;
              margin-bottom: 10px;
              padding-left: 40px;
              padding-top: 15px;
              border-radius: 5px; 
            }

      </style>

    <body>
        <div id="topbox">
            <div id="weisserbalken">
                <p>Dozenten Kursübersicht</p>
            </div>
            <div >
                <p style="font-family: Luckiest Guy" ><span style="font-size:40px" margin-left="20px"><b>Student-E-Learning</b></span></p>
            </div>

        </div>

        <div id="mittlererblock">

            <div class="mittlerebloecke">
                <div id="balken">Web Development</div>
                <img src="https://goadfuel.com/wp-content/uploads/2022/03/website-design-development.jpg" width="330px" height="200px"/>
                <p>Hier gelangen Sie zu dem Kurs Web Development</p>
                <br/>
                <button onclick="window.location.href = 'webdev/webdev_prof.php';">Hier klicken</button>
            </div>

            <div class="mittlerebloecke">
                <div id="balken">Softwaremanagement</div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNy9bAl54_inYtPpR-_EySywQKJ2lywEPBdA&usqp=CAU" width="330px" height="200px"/>
                <p>Hier gelangen Sie zu dem Kurs Softwaremanagement</p>
                <br/>
                <button onclick="window.location.href = 'softwaremanagement/softwaremanagement_prof.php';">Hier klicken</button>
            </div>

            <div class="mittlerebloecke">
                <div id="balken">IT-Research</div>
                <img src="https://ethz.ch/staffnet/de/it-services/it-in-der-forschung/_jcr_content/par/fullwidthimage/image.imageformat.fullwidth.1305934233.jpg" width="330px" height="200px"/>
                <p>Hier gelangen Sie zu dem Kurs IT-Research</p>
                <br/>
                <button onclick="window.location.href = 'itresearch/itresearch_prof.php';">Hier klicken</button>
            </div>

        </div>
    </body>
</html> 