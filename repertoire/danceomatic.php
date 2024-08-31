<!doctype html>
<html lang="da">

<?php
$IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
include $IPATH . 'head.php';
?>


<body class="bg-light">

  <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
  include $IPATH . 'header.php';
  ?>

  <main>
    <div class="container-fluid;">




      <img src="/img/2017_dmaskine.jpg" alt="picture of danceOmatic machine" class="header-img">
      <div class="card-img-overlay">
          <div class="d-flex justify-content-center align-items-center">
          <div class="col-7 mt-5 col-md-6 col-lg-3">
            <!-- The danceOmatic overlay logo -->
            <object type="image/svg+xml" data="/assets/danceOmatic_logoT2.svg" id="danceOmatic_logo">
              <script src="/js/my_script.js"></script>
            </object>
          </div>
        </div>
      </div>



      <div class="container my-5" id="skeleton">


        <div class="d-flex justify-content-center align-items-center">
          <div class="col-7">
            <h2 class="text-center">En fusion mellem en spillemaskine og live danseforestilling</p>
          </div>
        </div>

        <main>

          <div class="row align-items-center my-5">
            <div class="col-md-5 col-12 text-md-end text-center">
              <h2 class="featurette-heading">Indkast en mønt <span class="text-muted">i den unikke danceOmatic maskine</span></h2>
              <p class="lead mx-3 d-none d-sm-block">
                Få nu valget mellem forskellige professionelle danseforestillinger. Som var det en ’danseautomat!’
              </p>
            </div>

            <div class="col-md-7 col-12"> <!-- <-- denne som wrapper det hele -->
              <div class="zoomed-svg">
                <object data="/assets/svg_elements/arcade.svg" id="arcade" class="" type="image/svg+xml"></object>
                <div class="svg-container">
                  <object type="image/svg+xml" data="/assets/danceOmatic_logoT2.svg" id="danceOmatic_logo" class="overlay-danceOmatic-logo"></object>
                  <object data="/assets/svg_elements/coin8bit.svg" type="image/svg+xml" id="coin8bit" class="overlay-coin"></object>
                  <object data="/assets/svg_elements/Bling.svg" type="image/svg+xml" id="bling" class="bling-container"></object>
                </div>
              </div>

            </div>

            <div class="col-12 d-block d-sm-none">
              <p class="lead mx-3">
                Få nu valget mellem forskellige professionelle danseforestillinger. Som var det en ’danseautomat!’
              </p>
            </div>
          </div>

          <div class="row align-items-center my-md-5 item-appear">
            <div class="col-lg-6 col-12">
              <img src="/img/dOm_withMachineblurBG.jpg" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-5 col-12">
              <h2 class="featurette-heading">Vælg hvad <span class="text-muted">der skal ses</span></h2>
              <p class="lead mt-3 mx-3">Danseforestillingerne er professionelt opførte værker af dansere, der hver favner om forskellige tematikker og dansestilarter. Dette vil fremgå af softwarens brugergrænseflade.</p>
            </div>
          </div>


          <div class="row align-items-center my-md-5">
            <div class="col-md-7">
              <h2 class="featurette-heading">60 sekunder... <span class="text-muted"> -Og så performance</span></h2>
              <p class="lead mt-3 mx-3">Danserne skynder sig at gøre klar til den valgte forestilling. -En dans tager mellem 3-5 minutter. DanceOmatics legende tilgang appellerer til børn og unge, og dans som scenekunst helt tæt på tilskueren.</p>
              </p>
            </div>
            <div class="col-md-5">
              <figure>
                <img src="/img/dmaskine_kolding2017.jpg" class="img-fluid rounded shadow" alt="dancers performing Siblings">
              </figure>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-12">
              <h2 class="text-center">Trailer og Anmeldelse</p>
            </div>
          </div>
          <div class="col-12">
            <a href="/pdf/danceOmatic_expl_da.pdf" class="link-container p-3 border rounded" target="_blank">
              <img src="/img/Ico_pdf_explainr.png" alt="Anmeldelse Teater Avisen" class="link-image">
              <div>
                <h5 class="mb-1 text-with-icon">Se explainer i pdf format<object data="/assets/svg_elements/arrow-right-short.svg" id="arrow-right-short" class="" type="image/svg+xml"></object></h5>
              </div>
            </a>
          </div>
          <div class="row align-items-center">
            <div class="col-md-5 py-5">
              <p class="lead text-left">Trailer</p>
              <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/237552947?h=d5b71c92d0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="what is danceomatic"></iframe></div>
              <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
            <div class="col-md-7 py-5">
              <h2 class="featurette-heading">Beskrivelse<span class="text-muted"></span></h2>
              <p class="lead mt-3 mx-3">Se hvordan publikum ved hjælp af specialudviklet software bestiller professionel dans! Ved at indkaste en mønt aktiveres programmet, hvorefter publikum får mulighed for at vælge mellem et udvalg af korte dansekoreografier, hver med sit eget tema og udtryk.</p>
            </div>
            <div class="col-12">
              <a href="https://teateravisen.dk/tilbud-dance-on-demand/" class="link-container p-3 border rounded" target="_blank">
                <img src="https://teateravisen.dk/wp-content/uploads/2024/05/Art-Farm-danceOmatic.jpg" alt="Anmeldelse Teater Avisen" class="link-image">
                <div>
                  <p class="mb-0 text-muted">Morten Hede, teaterjournalist og anmelder:</p>
                  <p class="mb-0 text-muted fst-italic">"(...) underholdende, fortællende og fysisk imponerende. Og netop fordi de både er korte og tilgængelige, bliver ’danceOmatic’ også en slags intro til moderne dans."</p>
                  <h5 class="mb-1 text-with-icon">Læs hele anmeldelsen<object data="/assets/svg_elements/arrow-right-short.svg" id="arrow-right-short" class="" type="image/svg+xml"></object></h5>
                </div>
              </a>
            </div>
          </div>

          <div class="row align-items-center my-md-5">

          </div>

          <hr>

          <div class="row pt-5 align-items-center">
            <div class="col-md-6">
              <h2 class="featurette-heading">Historiske turnéer</h2>
              <p class="lead mt-3 mx-3">Gennem årene har danceOmatic været oplevet forskellige steder i verden, fra pulserende metropoler til afsidesliggende øer. Således fastholder vi den oprindelige hensigt om at dele kunst og kultur med fjerntliggende steder.</p>
            </div>
          </div>
          <div class="row pt-5 align-items-center">
            <div class="col-md-6">
              <h2 class="featurette-heading">danceOmatic - <span class="text-muted">Jumping Islands</span></h2>
              <h2 class="featurette-heading">Turné i <span class=""><img src="../img/taiwanTxt.png" width="115" height="45" class="d-inline-block align-text-bottom"></a></span></h2>
              <p class="lead mt-3 mx-3">I 2019 optrådte vi med danceOmatic i Taiwan. Se en hurtig opsummering af turen i denne video<object data="/assets/svg_elements/arrow-right-short.svg" id="arrow-right-short" class="" type="image/svg+xml"></object></p>
            </div>
            <div class="col-md-6">
              <div style="padding:100% 0 0 0;position:relative;">
                <iframe src="https://player.vimeo.com/video/792985911?h=9a0a695931&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="CarryTheArtDocVideo.mp4"></iframe>
              </div>
              <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
          </div>





          <!-- Footer -->
          <?php
          $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
          include $IPATH . 'footer.php';
          ?>

        </main>

        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/my_script.js"></script>


</body>

</html>