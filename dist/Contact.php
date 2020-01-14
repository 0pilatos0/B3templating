
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/styles.min.css" />
    <title>LeiDesign || Contact</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/232c8928c9.js"
      crossorigin="anonymous"
    ></script>
    <?php
    include "variables.php";
    ?>
  </head>
  <body>
    <ul>
      <li><img src="./images/Coming.png" alt="" class="Comingsoon" /></li>
      <li class="top">
        <a href="./index.php"><i class="fas fa-home" id="icon"></i> <?php echo $page1; ?></a>
      </li>
      <li>
        <a href="./overmij.php"
          ><i class="fas fa-info-circle" id="icon"></i> <?php echo $page2; ?>
        </a>
      </li>
      <li>
        <a href="./fotos.php"
          ><i class="fas fa-images" id="icon"></i> <?php echo $page3; ?>
        </a>
      </li>
      <li>
        <a class="active" href="./Contact.php"
          ><i class="fas fa-address-book" id="icon"></i> <?php echo $page4  ; ?>
        </a>
      </li>
    </ul>
    <div class="page">
      <h1 class="contact">Neem Contact op met mij</h1>
      <form class="contact-form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="formGroupExampleInput">Naam</label>
          <input
            type="text"
            class="form-control"
            id="formGroupExampleInput"
            placeholder="Naam"
            required=""
            autofocus=""
            name="name"
            autocomplete="off"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Email address"
            required=""
            name="mail"
            autocomplete="off"
          />
          <small id="emailHelp" class="form-text text-muted"
            >Uw email word nooit gedeeld</small
          >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Telefoon nummer:</label>
          <input
            type="text"
            class="form-control"
            id="formGroupExampleInput"
            placeholder="nummer"
            name="nummer"
            autocomplete="off"
          />
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Bericht</label>
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="6"
            placeholder="typ hier uw bericht"
            required=""
            name="bericht"
            autocomplete="off"
          ></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload hier uw bestanden, alleen afbeeldingen worden geaccepteerd</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1"autocomplete="off" name="upload">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

      <div class="footer">
        <p style="margin-top: 1vh;"><?php
          echo $footer;
          ?></p>
      </div>
    </div>
    <!-- 
        |
        |   
        |
        |
        |
        |
        |
    -->

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
