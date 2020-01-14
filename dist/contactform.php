<?php

if(isset($_POST['submit'])){

    $file = $_FILES['upload'];

    $fileName = $_FILES['upload']['name'];
    $fileTmpName = $_FILES['upload']['tmp_name'];
    $fileSize = $_FILES['upload']['size'];
    $fileError = $_FILES['upload']['error'];
    $fileType = $_FILES['upload']['type'];
    $name = $_POST['name'];
    $subject = $_POST['nummer'];
    $mail = $_POST['mail'];
    $message = $_POST['bericht'];
    $mailto = "Contact@leidesign.nl";

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower($fileExt[count($fileExt) - 1]);

    $allowed = ['jpg', 'jpeg', 'png', 'pdf'];
    echo "test";
    var_dump($fileError);
    echo "test";

    if($fileError < 1 ){
        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0){
                if ($fileSize < 50000000){
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                }else{
                    $bericht = "Dit bestand is te groot";
                    echo "<script type='text/javascript'>alert('$bericht');</script>";
                }
            }else{
                $bericht = "Er was een error bij het uploaden";
                echo "<script type='text/javascript'>alert('$bericht');</script>";
            }
    
        }   else{
            $bericht = "dit bestandstype word niet ondersteund";
            echo "<script type='text/javascript'>alert('$bericht');</script>";
        }
        $bestand = "uploads/".$fileNameNew;
    }
    

$headers = 'From: '.$mail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($mailto, $subject, $message, $headers);
}
?>