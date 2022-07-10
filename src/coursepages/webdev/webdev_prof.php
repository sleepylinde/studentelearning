<?php
session_start();

if ($_SESSION['authUser'] == "student") {
    header("Location: ../coursepages/kursuebersicht.php");
}

if(isset($_POST['submit'])){
    $desc = $_POST['desc']."";


$file=fopen("webdev_desc.txt", "w");
fwrite($file, $desc);
fclose($file);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Fiktiver Web Dev Kurs an der RFH</title>
    <link rel="stylesheet" href="../../css/style.css" type="text/css" />
    <link rel="stylesheet" href="../../css/coursestyle.css" type="text/css" />
</head>
<body>
    <header>
        <h1>Willkommen zu Ihrem Web Dev Kursangebot! </h1>
    </header>
    <main>
        <div class="scroll text">
            <p align="left"><font size="4" color="#FFFFFF"><marquee style="border-left: 10; border-right: 10 dashed; border-top: 10 solid; 
            border-bottom: 10 double" behavior="alternate" scrollamount="20" scrolldelay="30" border="0">
            Hier können Sie ihre Infos bearbeiten!</marquee></font></p>
        </div>
       
            <div class="course", style="float:left;">
                <h3> Kursbeschreibung</h3>
                <h4> Ändern Sie hier ihre Kursbeschreibung!</h4>
                <form class="desc-text" method="post">
                <textarea name="desc" rows="40" cols="40"><?php echo trim(file_get_contents('webdev_desc.txt'));?></textarea>
                <input type="submit" name="submit" value="Speichern" class="course">
                
            </div>
            <div class="ads", style="float:left;">
                <br>
                <p align="center"><img style="height: 90%; width: 90%; object-fit: contain'" src="../../resources/images/werbungstehen.png"></p>
            </div>
            <div class="content", style="float:right;">
                <h3>Hier können Sie Ihre Files hochladen:</h3>
                <a href="/fileUpload.html">File Upload</a>
                    
                    <br>

                    <h3>Übersicht ihrer Files</h3>
                    <p><?php
                    $dir_path = "../../resources/course files/webdev/"; 
                    $ignoreList = array('.', '..', 'abgaben');

                        if (is_dir($dir_path)) {
                            if ($dir_handler = opendir($dir_path)) {
                                while (($file = readdir($dir_handler)) !== false) {
                                    if(!in_array($file, $ignoreList)){
                                        echo "<a href='{$dir_path}{$file}' download = '$file'> $file</a><br>";
                                    }
                                 }
                            closedir($dir_handler);
                            }
                        }
                    ?>
            </div>
            <div class="upload">
                <p> Hier sehen Sie die wöchentlichen Hausaufgaben der Studenten:</p>
                <p><?php
                    $dir_path = "../../resources/course files/webdev/abgaben/"; 
                    $ignoreList = array('.', '..');

                        if (is_dir($dir_path)) {
                            if ($dir_handler = opendir($dir_path)) {
                                while (($file = readdir($dir_handler)) !== false) {
                                    if(!in_array($file, $ignoreList)){
                                        echo "<a href='{$dir_path}{$file}' download = '$file'> $file</a><br>";
                                    }
                                 }
                            closedir($dir_handler);
                            }
                        }
                        ?>
                
            </div>

    </main>
    
</body>
