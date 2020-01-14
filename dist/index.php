<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/styles.min.css" />
    <title>LeiDesign || Home</title>
    <link
      href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap"
      rel="stylesheet"
    />
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
        <a class="active" href="./index.php"
          ><i class="fas fa-home" id="icon"></i> <?php echo $page1; ?>
        </a>
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
        <a href="./Contact.php"
          ><i class="fas fa-address-book" id="icon"></i> <?php echo $page4; ?>
        </a>
      </li>
    </ul>
    <div class="page" id="mijzelf">
      <div class="jumbotron" style="padding: 0.5%;">
        <div class="container" >
          <h1 class="indexdisplay">Paul van der Lei</h1>
          <img src="./images/image1.png" alt="" class="fotovanmij">
          </p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Wie ben ik?</h2>
            <p>
              Ik ben Paul en ben 16 jaar oud, ik woon in sleeuwijk. Ik volg de opleiding Media- en Applicatieontwikkelaar op het davinci College in gorinchem
            </p>
            <p><a class="btn btn-secondary" href="./overmij.php" role="button">Meer info »</a></p>
          </div>

          <div class="col-md-4">
            <h2>Mijn beroep</h2>
            <p>
             Momenteel ben ik een Applicatieontwikkelaar in opleiding op het davinci college en doe daar veel ervaring op. ook ben ik momenteel werkzaam bij de Albert Heijn in sleeuwijk
            </p>
            <p><a class="btn btn-secondary" href="./overmij.php" role="button">Meer info »</a></p>
          </div>

          <div class="col-md-4">
            <h2>Mijn Skills</h2>
            <p>
              Mijn skills liggen bij het ontwikkelen van nieuwe websites, vooral de back-end staat bij mij voorop. Zo kan ik bijvoorbeeld: "HTML5, CSS, JS en PHP", en daarmee kan ik al prima mee werken
            </p>
            <p><a class="btn btn-secondary" href="./overmij.php" role="button">Meer info »</a></p>
          </div>
        </div>

        <hr />
      </div>
      <div class="footer">
        <p style="margin-top: 1vh;"><?php
          echo $footer;
          ?>
        </p>
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
