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
    <div class="container-fluid;">

      <div class="card text-white text-uppercase">
        <img src="/img/mainTwCultWeek2026.png" alt="Grafisk Billede af Taiwansk danserinde" class="card-img" style="filter: brightness(70%); object-fit:cover ; max-block-size: 500px;">
        <div class="card-img-overlay">
          <h1 class="position-absolute text-center" style="top:50%; left: 50%; transform: translate(-50%,-50%);">Taiwansk Kulturuge<br>2026</h1>
        </div>
      </div>

      <div class="container my-5" id="skeleton">

        <div class="row align-items-center">
          <div class="col-12">
            <h2 class="text-center">Festlig danseforestilling og kreative workshops for både børn og voksne</p>
          </div>
          <div class="col-12 col-md-6 order-2 order-md-1">
            <p class="lead mt-3 mx-3">Mai-Ti Dance Company fra Taiwan
              <span class="inline-flag">
                <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/svg_elements/flag-tw.svg"); ?>
              </span>
              opfører en smuk, familievenlig forestilling baseret på østlige sagn og myter. Med flotte kostumer og rekvisitter, tages publikum på en rejse gennem Taiwans rige kulturarv.
              <br><br>
              <span class="d-inline-flex align-items-center">
                Mai-Ti Dance Company's
                website
                <object data="/assets/svg_elements/arrow-right-short.svg" id="arrow-right-short" class="bi-arrow-right-short me-3" type="image/svg+xml"></object>
                <a href="https://www.maitidancecompany.org" target="_blank" class="link-container border">
                  <img src="/img/support_logo/logoMaiTiTransparrent.png" alt="Mai-Ti Dance Company" height="80" class="shadow">
                </a>
              </span>
            </p>
          </div>
          <div class="col-12 col-md-6 order-1 order-md-2">
            <p class="lead text-left d-none d-md-block">Trailer</p>
            <div class="ratio ratio-16x9">
              <iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" src="https://player.vimeo.com/video/444212004 " title="what is danceomatic" class="w-100"></iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
          </div>

        </div>


        <div class="row align-items-center">

          <div class="mt-4 p-5 text-center">
            <h2 class="featurette-heading">Worshops <span class="text-muted">for hele familien</span></h2>
            <p class="lead mt-3 mx-3">I forlængelse af forestillingen inviteres publikum til at deltage i én af 3 forskellige workshops</p>
          </div>

          <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="mx-3">workshop 1</span>
            <hr class="flex-grow-1">
          </div>

          <div class="col-12 col-md-5">
            <img src="/img/twWorkshopKaligrafi.png" alt="" class="img-fluid shadow-1-strong rounded">
          </div>


          <div class="col-lg-7 pb-5">
            <p class="lead mt-3 mx-3"> <strong>Kalligrafi:</strong> Øv dig I at tegne med pensler og blæk, dog helt uden blæk! -På et ”magisk" stykke stof efterlader pensler med vand sig nemlig sorte streger. Efter lidt øvning kan du også skrive dekorative symboler på rigtigt keton, og tage det med hjem. <br>

          </div>

          <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="mx-3">workshop 2</span>
            <hr class="flex-grow-1">
          </div>

          <!-- extra row needed to order items correctly on small screens -->
          <div class="row align-items-center">

            <div class="col-lg-7 pb-5 order-2 order-lg-1">
              <p class="lead mt-3 mx-3"> <strong>Play With Clay:</strong> Udform flotte ting i noget ler som minder om Silk-Clay, beregnet til børn. Lær nye teknikker og lav noget du kan tage med dig hjem.<br>
            </div>

            <div class="col-12 col-md-5 order-1 order-lg-2">
              <img src="/img/twWorkshopClay.jpeg" alt="" class="img-fluid shadow-1-strong rounded">
            </div>

          </div>

          <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="mx-3">workshop 3</span>
            <hr class="flex-grow-1">
          </div>

          <div class="col-12 col-md-5">
            <img src="/img/twWorkshopDans.png" alt="billede af børn der danser i en cirkel" class="img-fluid shadow-1-strong rounded">
          </div>

          <div class="col-lg-7 pb-5">
            <p class="lead mt-3 mx-3"> <strong>Dans:</strong> Lær nogle af de Traditionelle Taiwanske Dansetrin, og dans med flotte rekvisitter som vifter, vimpler og spyd (legespyd), og få sat fantasien i gang.<br>

          </div>

        </div>

        <hr>




        <div class="col-12 my-5">
          <h2 class="featurette-heading">Praktisk <span class="text-muted">info</span></h2>
          <ul class="list-praktisk-info">
            <li><strong>Producent: </strong><a href="http://www.humanlab.studio/" rel="nofollow" target="_blank">HumanLab</a></li>
            <li><strong>Co-Producent: </strong>Art Farm</li>
            <li><strong>Komponist: </strong>Domenico Mannelli</li>
            <li><strong>Scenograf: </strong>Alessandra Faienza</li>
            <li><strong>Instruktør: </strong>Anna Carla Maria Penati</li>
            <li><strong>Medvirkende: </strong>Martin Schultz Kristensen, Meng-Ting Liu, Anna Carla Maria Penati, Marco Zavarise</li>
            <li><strong>Længde: </strong>40 minutter</li>
          </ul>
        </div>

        <hr>

        <div class="row align-items-left my-5">
          <div class="col-12">
            <h2 class="featurette-heading">Turné i Kolding, Vejle og Fredericia<span class="text-muted"> 28. Juni - 13. Juli 2024</span></h2>
          </div>
          <div class="col-12 d-flex flex-column flex-md-row align-items-center">
            <p class="lead mt-3 mx-3 mb-2 mb-md-0">
              Forestillingen Terminus turnerede i Taiwan 2024. En turné organiseret af Taiwanske Mai-Ti dance company.
            </p>
            <a href="https://www.maitidancecompany.org/%E4%BD%9C%E5%93%81%E8%88%87%E8%A8%88%E5%8A%83-project/terminus/"
              target="_blank"
              class="btn d-inline-block align-text-bottom px-2 hover-image ms-md-3">
              <img src="/img/support_logo/logoMaiTiTransparrent.png" alt="" height="85">
            </a>
          </div>
        </div>




        <?php
        $tourplan = include '../past_tourplan_data.php';
        $currentTitle = null;
        $currentCountry = null;
        $firstRow = true;
        ?>
        <div class="row">
          <div class="col-lg-8 col-md-12 d-flex order-1 order-lg-0">
            <div class="flex-grow-1">
              <table class="table h-100 text-muted small-screen-font">
                <thead>
                  <tr>
                    <th><object type="image/svg+xml" data="/assets/svg_elements/icon_calender.svg"></object></th>
                    <th><object type="image/svg+xml" data="/assets/svg_elements/icon_geo-alt.svg"></object></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tourplan as $row): ?>
                    <?php
                    if ($currentTitle !== $row['title'] || $currentCountry !== 'Taiwan') {
                      $currentTitle = $row['title'];
                      $currentCountry = 'Taiwan';
                    ?>
                      <tr>
                        <th colspan="2" class="text-center"><?= $currentTitle ?> - <?= $currentCountry ?></th>
                      </tr>
                    <?php
                    }
                    ?>
                    <tr>
                      <th scope="row"><?= $row['date'] ?></th>
                      <td><?= $row['city'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-4 mt-lg-5 col-md-12 d-flex p-2 order-0 order-lg-1">
            <img src="/img/TERMINUSTwTourPicBG.png" alt="picture of Taiwan Tour Map" class="img-fluid my-2 shadow-1-strong rounded">
          </div>
        </div>

      </div>





      <!-- Modal.. modal is hidden since there's no button trickering it -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Vælg presse materiale</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
              <a download href="/pdf/Kolding.png" target="_blank">Kolding.png</a><br>
              <a download href="/pdf/Middelfart.png" target="_blank">Middelfart.png</a><br>
              <a download href="/pdf/Vejen.png" target="_blank">Vejen.png</a><br>
              <a download href="/pdf/Vojens.png" target="_blank">Vojens.png</a><br>
              <a download href="/pdf/Fredericia.png" target="_blank">Fredericia.png</a><br>
              <a download href="/pdf/Grindsted.png" target="_blank">Grindsted.png</a><br>
              <a download href="/pdf/Jelling.png" target="_blank">Jelling.png</a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


















    </div> <!-- container -->










    <!-- Footer -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'footer.php';
    ?>

  </main>

  <!-- <div class="d-sm-inline-flex p-2 bd-highlight bg-danger">I'm a flexbox container!</div> -->
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>


</html>