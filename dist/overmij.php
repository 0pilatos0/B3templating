<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/styles.min.css" />
    <title>LeiDesign || Over mij</title>
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
        <a class="active" href="./overmij.php"
          ><i class="fas fa-info-circle" id="icon"></i> <?php echo $page2; ?>
        </a>
      </li>
      <li>
        <a href="./fotos.php"
          ><i class="fas fa-images" id="icon"></i><?php echo $page3; ?>
        </a>
      </li>
      <li>
        <a href="./Contact.php"
          ><i class="fas fa-address-book" id="icon"></i> <?php echo $page4  ; ?>
        </a>
      </li>
    </ul>
    <div class="page">
      <h1 class="titelinfo">Informatie over mij</h1>
      <small id="InfoHelp" class="form-text text-muted"
        >Klik op de knoppen voor informatie</small
      >
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button
                class="btn btn-link"
                data-toggle="collapse"
                data-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                Wie ben ik?
              </button>
            </h5>
          </div>

          <div
            id="collapseOne"
            class="collapse show"
            aria-labelledby="headingOne"
            data-parent="#accordion"
          >
            <div class="card-body">
              Ik ben Paul 16 jaar oud, ik volg een opleiding op het davinci
              college en leer daar een hoop nieuwe dingen. Zo heb ik eerst mijn
              diploma gehaald op het Altena College, ook daar was ik al bezig
              met programeren in een zogenoemde devcrew. daar zal ik 2 keer per
              week een uur doorbrengen om mijn skills met programmeren te
              verbeteren, ook hadden we avonden waar we binnen 5 uur een spel
              gingen maken en daar leerde ik ook een hoop van, door al deze
              bezigheiden heb ik al een hoop geleerd op programmeer vakgebied
              maar ook op het sociale gebied.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button
                class="btn btn-link collapsed"
                data-toggle="collapse"
                data-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                Mijn beroep
              </button>
            </h5>
          </div>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordion"
          >
            <div class="card-body">
              Ik ben een applicatie ontwikkelaar die nog in opleiding is, maar
              ik kan al best wel wat dingen maken. Zo heb ik een tijd aan het
              retail platform Fiver meegedaan en daar wat van mijn skills
              verkocht. Ik heb dat niet gedaan voor het Geld maar puur voor de
              ervaring, momenteel werk ik bij de Albert Heijn als vakkenvuller
              waar ik veel sociale ervaring op doe.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button
                class="btn btn-link collapsed"
                data-toggle="collapse"
                data-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Mijn Skills
              </button>
            </h5>
          </div>
          <div
            id="collapseThree"
            class="collapse"
            aria-labelledby="headingThree"
            data-parent="#accordion"
          >
            <div class="card-body">
              Ik Programmer momenteel in HTML5, CSS, JS en PHP. Dat zijn de
              programmeertalen waar ik momenteel mee bezig ben om ze verder te
              ontwikkelen, ook kan ik Java en C# maar die talen gebruik ik niet
              meer voor mijn websites en ook niet voor school. ik ben sociaal
              best wel vaardig en dat zorgt ervoor dat ik mijn werkt extra goed
              kan uitvoeren, ook zorgt dit ervoor dat de samenwerking met andere
              studenten (en eventueel klanten) goed kan verlopen.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button
                class="btn btn-link collapsed"
                data-toggle="collapse"
                data-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >
                Wat kan ik?
              </button>
            </h5>
          </div>
          <div
            id="collapseFour"
            class="collapse"
            aria-labelledby="headingFour"
            data-parent="#accordion"
          >
            <div class="card-body">
              Ik kan momenteel een website bouwen zowel server side als client
              side, ook kan ik de front- en backend van de website schijven. Ik
              en vooral gespecialiseerd in de backend van een website en besteed
              daar ook het meest tijd aan. Ook kan ik al goed omgaan met servers
              en ze instellen naar wens, elke stap van het maken van een website
              kan ik behandelen en uitvoeren.
            </div>
          </div>
        </div>
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
