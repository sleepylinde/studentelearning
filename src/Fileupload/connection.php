<?
if ($_POST['uploadto'] == 1 )  $uploadto = '../../ressources/course files/itresearch';
if ($_POST['uploadto'] == 2 )  $uploadto = '../../ressources/course files/softwaremanagement';
if ($_POST['uploadto'] == 3 )  $uploadto = '../../ressources/course files/webdev';

// Check if the form was submitted ami
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
        $maxsize = 5 * 1024 * 1024;
        $filename = $_FILES['file']['name'];
        $filesize = $_FILES['file']['size'];

        if($filesize > $maxsize) die("Error: File size is larger than the limit.");

            if(file_exists($uploadto . "/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES['file']['tmp_name'], $uploadto . "/" . $filename);
                echo "Your file was uploaded successfully.";
            }
}