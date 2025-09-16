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
        <img src="/img/terminusHorsensTogstation.png" alt="picture of dancer with acrylic glass structure" class="card-img" style="filter: brightness(70%); object-fit:cover ; max-block-size: 500px;">
        <div class="card-img-overlay">
          <h1 class="position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%);">Terminus</h1>
        </div>
      </div>

      <div class="container my-5" id="skeleton">

        <div class="row align-items-center">
          <div class="col-12">
            <h2 class="text-center">Værdien af tid, empati og bæredygtig relationsdannelse.</p>
          </div>
          <div class="col-8 col-md-8">
            <p class="lead mt-3 mx-3">Terminus er produceret af Humanlab. Art Farm fungere som co-producenter af forestillingen. Besøg Humanlab på deres <a href="https://www.humanlab.studio/" target="_blank">hjemmeside</a></p>
          </div>
          <div class="col-4 col-md-3">
            <img src="/img/support_logo/humlabFaceBlack.png" alt="" class="img-fluid">
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-5">
            <p class="lead text-left">Trailer</p>

            <div style="padding:56.25% 0 0 0;position:relative;"><iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" src="https://player.vimeo.com/video/857624362?h=649e692bc6" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="what is danceomatic"></iframe></div>
            <script src="https://player.vimeo.com/api/player.js"></script>
          </div>





          <div class="col-lg-7 py-5">
            <h2 class="featurette-heading">Om <span class="text-muted">forestillingen</span></h2>
            <p class="lead mt-3 mx-3">I ”Terminus” møder man den gamle mand, der bor på den travle banegård. Han støder på forskellige forhastede og åndeligt afsporede mennesker, som i mødet med oldingen skruer ned for tempoet i deres liv og oplever pludselig at føle empati og se andre mennesker på nye måder.</p>
            <p class="lead mt-3 mx-3">Forestillingen gør brug af masker, special produceret i Italien, som repræsenterer menneskelige arketyper.<br>
              <span><a href="https://www.humanlab.studio/" target="_blank"><img src="/img/support_logo/humlabTextBlack.png" alt="" width="" height="60" class="d-inline-block align-text-center"></a></span> har med deres ekspertise omkring masketeknik,
              og teater stået for at levnagtigøre performernes brug af maskerne.<br>
              <span><img src="/assets/svg_elements/Aktiv 1ArtFarmLogo.svg" alt="" width="" height="45" class="d-inline-block align-text-bottom"></span> har til forestillingen udviklet et ordløst bevægelsessprog, med teknikker fra pantomime, klassisk ballet, moderne dans og hiphop.
            </p>

          </div>
        </div>

        <div class="col-12">
          <a href="https://teateravisen.dk/en-forrygende-ventetid/" class="link-container p-3 border rounded" target="_blank">
            <img src="https://teateravisen.dk/wp-content/uploads/2024/06/Human-Lab-Terminus.jpg" alt="Anmeldelse Teater Avisen" class="link-image">
            <div>
              <p class="mb-0">Randi K. Pedersen, teaterjournalist og anmelder:</p>
              <p class="mb-0 text-muted fst-italic">"En forrygende ventetid HumanLabs forestilling ’Terminus’ er et medrivende snapshot af et samfund, der er kørt af (tog)sporet."</p>
              <h5 class="mb-1 text-with-icon">Læs hele anmeldelsen<object data="/assets/svg_elements/arrow-right-short.svg" id="arrow-right-short" class="bi-arrow-right-short" type="image/svg+xml"></object></h5>
            </div>
          </a>
        </div>

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
            <h2 class="featurette-heading">Turné i Taiwan<span class="text-muted"> 28. Juni - 13. Juli 2024</span></h2>
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