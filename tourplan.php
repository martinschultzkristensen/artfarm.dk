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
                <th scope="row">7. Jun</th>
                <td><a href="/repertoire/frikadelle.php">Frikadelle</a></td>
                <td>Horsens<br>Søndergade 26<br><a href="https://horsensholder.dk/mec-category/arr-teater/" target="_blank">Horsens Holder</a></td>
                <td>10:30<br>11:30<br>13:00<br>14:00</td>
              
              </tr>
          <tr>
            <th scope="row">21. Jun</th>
            <td><a href="/repertoire/danceomatic.php">danceOmatic</a></td>
            <td>København SV<br>Børnekulturstedet Karens Minde<br><a href="https://bkultur.dk/portfolio-item/mobilt_kulturhus/" target="_blank">Mobil Kulturindsats</a>
            </td>
            <td>17:00
            <br>19:00
            <br>21:00</td>
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