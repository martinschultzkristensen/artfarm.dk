<!doctype html>
<html lang="en">

<head>
  <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
  include $IPATH . 'head.php';
  ?>
</head>

<body class="bg-light">

  <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
  include $IPATH . 'header.php';
  ?>

  <main>
    <div class="container">
      <div class="row pt-5 mt-5 text-center">
      </div>
      <div class="loop-wrapper">
        <div class="mountain"></div>
        <div class="hill"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="rock"></div>
        <div class="truck">
          <div class="logo"></div>
        </div>
        <div class="wheels"></div>
      </div>





      <div class="row pt-5">
        <div class="col">
          <h1 class="fw-bold text-center mb-5">Turné i Danmark</h1>
        </div>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col"><object type="image/svg+xml" data="assets/svg_elements/icon_calender.svg"></object></th>
            <th scope="col"><object type="image/svg+xml" data="assets/svg_elements/icon_theater.svg"></object></th>
            <th scope="col"><object type="image/svg+xml" data="assets/svg_elements/icon_geo-alt.svg"></object></th>
            <th scope="col"><object type="image/svg+xml" data="assets/svg_elements/icon_clock.svg"></object></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">7. Aug</th>
            <td><a href="/repertoire/frikadelle.php">Frikadelle</a></td>
            <td>Sønderborg Bibliotek<br>Biblioteket Hørup</td>
            <td>10:00<br>13:00</td>
          </tr>
          <tr>
            <th scope="row">11. Aug</th>
            <td><a href="/repertoire/frikadelle.php">Frikadelle</a></td>
            <td><a href="https://www.streetcutfestival.dk/art-farm-frikadelle" target="_blank">Street Cut festival<br></a>
              Festivalpladsen</td>
            <td>11.35<br>12.55</td>
          </tr>
          <tr>
            <th scope="row">22. Aug</th>
            <td>Den Lille Pige Med Svovlstikkerne</td>
            <td><a href="https://www.hcafestivals.dk/program-2024/den-lille-pige-med-svovlstikkerne-189133" target="_blank">HC Andersen Festivals</a>
            </td>
            <td>19:00</td>
          </tr>
          <tr>
            <th scope="row">23. Aug</th>
            <td>Den Lille Pige Med Svovlstikkerne</td>
            <td><a href="https://www.hcafestivals.dk/program-2024/den-lille-pige-med-svovlstikkerne-189134" target="_blank">HC Andersen Festivals</a>
            </td>
            <td>20:00</td>
          </tr>
          <tr>
            <th scope="row">23. Aug</th>
            <td><a href="/repertoire/danceomatic.php">danceOmatic</a></td>
            <td><a href="https://maps.app.goo.gl/JpiDraCHkyq4r2418" target="_blank">Det gamle Rådhus<br>Ebeltoft</a>
            </td>
            <td>14:30</td>
          </tr>
          <tr>
            <th scope="row">24. Aug</th>
            <td>Den Lille Pige Med Svovlstikkerne</td>
            <td><a href="https://www.hcafestivals.dk/program-2024/den-lille-pige-med-svovlstikkerne-189135" target="_blank">HC Andersen Festivals</a>
            </td>
            <td>13:00<br>16:00</td>
          </tr>
          <tr>
            <th scope="row">29. Aug.</th>
            <td><a href="/repertoire/frikadelle.php">Frikadelle</a></td>
            <td><span style=font-size:smaller>Børnekulturstedet</span> Karens
              Minde<br>København SV</td>
            <td>16:00</td>
          </tr>
          <tr>
            <th scope="row">14. Sep</th>
            <td><a href="/repertoire/frikadelle.php">Frikadelle</a></td>
            <td><a href="https://frugtfestival.dk/" target="_blank">Sydhavsøernes Frugtfestival</a><br>Torvet, 4990 Sakskøbing
            </td>
            <td>11:00<br>14:00</td>
          </tr>
          <tr>
            <th scope="row">20. Sep</th>
            <td><a href="/repertoire/danceomatic.php">danceOmatic</a></td>
            <td><a href="https://horsensteaterfestival.dk/events/danceomatic/" target="_blank">Horsens Teaterfestival</a>
            </td>
            <td>16:00</td>
          </tr>
          <tr>
            <th scope="row">12. Okt</th>
            <td><a href="/repertoire/danceomatic.php">danceOmatic</a></td>
            <td><a href="https://bornekulturhusamar.kk.dk/projekter/amager-boerneteaterfestival" target="_blank">Amager Børneteater Festival</a>
            </td>
            <td>10:30</td>
          </tr>
        </tbody>
      </table>











  </main>
  </div>
      <!-- Footer -->
      <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
      include $IPATH . 'footer.php';
      ?>


  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>