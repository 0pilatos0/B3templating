<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/styles.min.css" />
    <title>LeiDesign || Fotos</title>
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
        <a href="./index.php"><i class="fas fa-home" id="icon"></i> <?php echo $page1; ?> </a>
      </li>
      <li>
        <a href="./overmij.php"
          ><i class="fas fa-info-circle" id="icon"></i> <?php echo $page2; ?>
        </a>
      </li>
      <li>
        <a class="active" href="./fotos.php"
          ><i class="fas fa-images" id="icon"></i> <?php echo $page3; ?>
        </a>
      </li>
      <li>
        <a href="./Contact.php"
          ><i class="fas fa-address-book" id="icon"></i> <?php echo $page4  ; ?>
        </a>
      </li>
    </ul>
    <div class="page">
      <h1 class="fototop">
        Hier staan foto's van opdrachten die ik eerder heb gedaan
      </h1>
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/image2.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">The adventure game</h5>
              <p class="note2">
                Een game waar je doormiddel van keuzes wint of verliest.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image3.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">Lingo</h5>
              <p class="note2">Nederlands leukste TV programma online</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image4.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">Rijschool jakobs</h5>
              <p class="note2">
                Een website voor een rijschool die niet bestaat.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image5.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">DavinciHandy</h5>
              <p class="note2">
                Een website die nagebouwd is van een ontwerp.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image6.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">Over all</h5>
              <p class="note2">
                Een website die nagebouwd is van een ontwerp.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image7.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">Boss template</h5>
              <p class="note2">
                Een website die nagebouwd is van een ontwerp.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image8.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">Mastermind</h5>
              <p class="note2">
                Het leukste denkspel om online te spelen.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image9.PNG" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
              <h5 class="note">Cafe GG WP</h5>
              <p class="note2">
                Een berekeningstool voor het berekenen van prijzen voor een
                cafe.
              </p>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
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
