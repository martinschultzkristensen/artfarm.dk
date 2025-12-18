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
              <iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" src="https://player.vimeo.com/video/444212004 " title="Taiwanese Performance" class="w-100"></iframe>
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
            <p class="lead mt-3 mx-3"> <strong>Dans:</strong> Lær nogle af de traditionelle taiwanske dansetrin, dans sammen med danserne med flotte rekvisitter som vifter, vimpler og spyd (legespyd), og lad fantasien få frit spil.<br>

          </div>

        </div>

        <hr>


        <div class="row align-items-left my-5">
          <div class="col-12">
            <h2 class="featurette-heading">Aktivitets kalender<span class="text-muted"> Kolding, Vejle og Fredericia</span></h2>
          </div>

          <div class="p-sm-2">
            <?php
            $tourplan = include '../tourplan_data.php'; // Adjust path as needed

            $validTitles = [
              'Taiwansk Dans og Workshop',
              'Workshop - Taiwansk Dans',
              'Taiwansk Danseforestilling'
            ];

            $filtered = array_filter($tourplan, function ($item) use ($validTitles) {
              return in_array($item['title'], $validTitles);
            });
            ?>

            <table class="table small-screen-font text-muted w-100">
              <thead>
                <tr>
                  <th scope="col">Dato</th>
                  <th scope="col">Hvor</th>
                  <th scope="col">Event</th>
                  <th scope="col">Tid</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($filtered as $row): ?>
                  <tr>
                    <th scope="row"><?= $row['date'] ?></th>
                    <td><?= $row['location'] ?></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['time'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

                  <div class="col-12">

                    <p class="lead mt-3 mx-3 mb-2 mb-md-0">
                      Forestillinger og workshops præsenteres af Taiwanske Mai-Ti dance company. <span><a href="https://www.maitidancecompany.org" target="_blank"><img src="/img/support_logo/logoMaiTiTransparrent.png" alt="" width="" height="30" class="d-inline-block align-text-center"></a></span>
                      <br>
                      <br>
                      Eventet er gratis at deltage i, og er støttet af:
                      <span><img src="/img/support_logo/van_fonden_logo1.png" alt="SC Van Fonden Logo" height="40" class="d-inline-block align-text-center me-3 p-1"></span>
                      <span><img src="/assets/svg_elements/kildevaeld_logo.svg" alt="Kildevæld Efterskole Logo" height="40" class="d-inline-block align-text-center me-3 p-1"></span>
                      <span><img src="https://static.moliri.dk/koldingkommune/dist/icons/headerLogo.svg" alt="Kolding Kommune Logo" height="40" class="d-inline-block align-text-center me-3 p-1"></span>
                      <span><img src="https://www.dksfredericia.dk/media/5axjyhyp/denkreativeskole_black.svg" alt="Den Kreative Skole Fredericia Logo" height="40" class="d-inline-block align-text-center me-3 p-1"></span>
                      <!-- <span><img src="https://www.fredericia.dk/themes/custom/fds_fredericia_main_theme/logo.png" alt="Fredericia Kommune Logo" height="40" class="d-inline-block align-text-center me-3 p-1"></span> -->
                      <span><img src="/assets/svg_elements/vejleKommuneLogo.svg" alt="Vejle Kommune Logo" height="40" class="d-inline-block align-text-center me-3 p-1"></span> 
                      <span><img src="https://vejlebib.dk/sites/default/files/styles/logo/public/Navnetr%C3%A6k_Vejle_bibliotekerne_sort_100x220_web.png?itok=KLWCSSvA" alt="Vejle Bibliotek Logo" height="40" class="d-inline-block align-text-center me-3 p-1"></span>
                      
                      
                    </p>
                  </div>

        </div>


        <div class="col-12 my-5">
          <h2 class="featurette-heading">Praktisk <span class="text-muted">info</span></h2>
          <ul class="list-praktisk-info">
            <li><strong>Producent: </strong>Art Farm</li>
            <li><strong>Co-Producent: </strong>Mai-Ti Dance Company</li>
            <li><strong>Længde Forestilling: </strong>30 minutter</li>
            <li><strong>Længde Workshop: </strong>45 minutter</li>
            <li><strong>Deltager pris: </strong>Gratis</li>
            <li><strong>Medvirkende: </strong>Dansere - Mai-Ti dance company + Martin Schultz Kristensen</li>
            <li><strong>Støttegivere: </strong>Sc Van Fonden, Kildevæld Efterskole, Kolding Kommune, 
            <!-- Fredericia Kommune,  -->
            Vejle Bibliotek, Vejle Kommune</li>
          </ul>
        </div>

        <hr>

        <div class="col-12 my-5 text-center">
          <h2>Vi glæder os <span class="text-muted">til at se jer!</span></h2>
          <img src="/img/TWshow_2.jpg" alt="" class="img-fluid shadow-1-strong rounded my-4">
        </div>










        <!-- Modal.. modal is hidden since there's no button trickering it -->


















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