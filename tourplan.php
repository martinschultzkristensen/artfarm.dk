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
        <div class="col-12">
          <h1 class="fw-bold text-center mb-5">Aktivitetskalender</h1>
        </div>
      </div>

      <?php
      $tourplan = include 'tourplan_data.php';
      ?>
      <div class="row">
        <div class="col-12">
          
          <table class="table small-screen-font">
            <thead>
              <tr>
                <th><object type="image/svg+xml" data="assets/svg_elements/icon_calender.svg"></object></th>
                <th><object type="image/svg+xml" data="assets/svg_elements/icon_theater.svg"></object></th>
                <th><object type="image/svg+xml" data="assets/svg_elements/icon_geo-alt.svg"></object></th>
                <th><object type="image/svg+xml" data="assets/svg_elements/icon_clock.svg"></object></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tourplan as $row): ?>
                <tr>
                  <th scope="row"><?= $row['date'] ?></th>
                  <td><a href="/repertoire/<?= strtolower($row['title']) ?>.php"><?= $row['title'] ?></a></td>
                  <td><?= $row['city'] ?><br><?= $row['location'] ?></td>
                  <td><?= $row['time'] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>


      <div class="row pt-5">
        <hr>
        <div class="col text-muted text-center">
          <h2 class="fw-bold my-5">Forrige års turné</h2>
          <p>Få et overblik over hvor vi har været i 2025</p>
        </div>
        <?php
        $tourplan = include 'past_tourplan_data.php';
        $currentTitle = null;
        $currentCountry = null;
        $firstRow = true;
        ?>
      </div>

      <?php
      $tourplan = include 'past_tourplan_data.php';
      ?>
      <div class="row">
        <div class="col-12 align">
          
          <table class="table small-screen-font text-muted w-100">
            <thead>
              <tr>
                <th><object type="image/svg+xml" data="assets/svg_elements/icon_calender.svg"></object><span class="text-center"> 2025</span></th>
                <th><object type="image/svg+xml" data="assets/svg_elements/icon_theater.svg"></object></th>
                <th><object type="image/svg+xml" data="assets/svg_elements/icon_geo-alt.svg"></object></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tourplan as $row): ?>
                <tr >
                  <th scope="row"><?= $row['date'] ?></th>
                  <td><a href="/repertoire/<?= strtolower($row['title']) ?>.php"><?= $row['title'] ?></a></td>
                  <td><?= $row['city'] ?><br><?= $row['location'] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>


    </div>






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