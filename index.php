<?php
// A first-ever visitor is met by the big opening logo; from then on the logo
// animates in the navbar instead. The cookie is what tells the two apart.
$FIRST_VISIT = !isset($_COOKIE['artfarm_seen_intro']);
if ($FIRST_VISIT) {
  setcookie('artfarm_seen_intro', '1', time() + 60 * 60 * 24 * 365, '/');
}
?>
<!doctype html>
<html lang="da">
<?php
$IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
include $IPATH . 'head.php';
?>

<body class="bg-light">

  <?php if ($FIRST_VISIT): ?>
    <div id="intro-logo" class="intro-logo">
      <?php
      $LOGO_CLASS = 'artfarm-logo';
      $ANIMATE_LOGO = true;
      include $_SERVER['DOCUMENT_ROOT'] . '/assets/php/logo_animated.php';
      unset($LOGO_CLASS);
      ?>
    </div>
  <?php endif; ?>

  <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
  // Draw the navbar logo on the landing page, but not while the overlay is up.
  $ANIMATE_LOGO = !$FIRST_VISIT;
  include $IPATH . 'header.php';
  ?>





  <div class="fixed-bottom text-center my-5" style="z-index: 1;">
    <a id="scroll-btn" class="btn btn-blur btn-lg btn-outline-light shadow">Repertoire
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi-arrow-down-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
      </svg>
    </a>
  </div>



    <div class="container-fluid;" id="twcultweek">
      <div class="card text-white text-uppercase">
        <img src="/img/mainTwCultWeek2026.png" alt="" class="card-img vh-100" style="object-fit:cover; filter: brightness(70%);">
        <div class="card-img-overlay">
          <div class="text-end top-0 p-md-5 px-3 my-5 py-5">
            <p class="card-text"></span>Dans & Krea-workshops</p>
            <h1 class="card-title;">Taiwansk Kulturuge</h1>
            <a href="/co-lab/TWcultWeek.php" class="btn btn-outline-light btn-lg shadow">Info</a>
          </div>
        </div>
      </div>


  <div class="container-fluid;" id="dOmKreaWeek">
    <div class="card text-white text-uppercase">
      <img src="/img/MainDomKreaWeek_notext.png" alt="" class="card-img vh-100 dom-kreauge-img" style="object-fit:cover;">
      <div class="card-img-overlay d-flex align-items-center">
        <div class="text-start px-3 px-md-5 dom-kreauge-textbox">
          <h1 class="dom-kreauge-title mb-0"><strong>danceOmatic</strong></h1>
          <h1 class="dom-kreauge-title-sub mb-3">Kreativ Kulturuge</h1>
          <p class="card-text fs-5 mb-3">Projektuge på skoler</p>
          <a href="/workshops/danceomatic_kulturuge" class="btn btn-outline-light btn-lg shadow">Info</a>
        </div>
      </div>
    </div>

  <div class="container-fluid;" id="frikadelle">
    <div class="card text-white text-uppercase">
      <img src="/img/frikadelleMain.jpg" alt="" class="card-img vh-100" style="object-fit:cover; filter: brightness(70%);">
      <div class="card-img-overlay">
        <div class="text-end top-0 p-md-5 px-3 my-5 py-5">
          <p class="card-text"></span>En Kulinarisk Forestilling</p>
          <h1 class="card-title;">Frikadelle!</h1>
          <a href="/repertoire/frikadelle" class="btn btn-outline-light btn-lg shadow">Info</a>
        </div>
      </div>
    </div>



    <div class="card text-white text-uppercase" id="danceomatic">
      <img src="/img/dOm_HTF2024cFotoFrankRosgaard.jpg" alt="" class="card-img vh-100" style="object-fit:cover; filter: brightness(70%);">
      <div class="card-img-overlay">
        <div class="text-end top-0 p-md-5 px-3 my-5 py-5">
          <p class="card-text">danceomatic!</p>
          <h1 class="card-title;">Start en dans</h1>
          <a href="/repertoire/danceomatic" class="btn btn-outline-light btn-lg">Start
            <?php echo file_get_contents("assets/svg_elements/greenBtn.svg"); ?>
          </a>

        </div>
      </div>
    </div>






    <div class="card text-white text-uppercase" id="censorship">
      <img src="/img/ntvrkTW.jpg" alt="" class="card-img vh-100" style="object-fit:cover; filter: brightness(70%);">
      <div class="card-img-overlay">
        <div class="position-absolute top-50 p-md-5 px-3">
          <p class="card-text"></span>Worskhop & netværk i Taiwan</p>
          <h1 class="card-title;">Co-Laboratorie omkring censur</h1>
          <a href="/co-lab/uncensored.php" class="btn btn-outline-light btn-lg btn-blur shadow">Info</a>
        </div>
      </div>
    </div>


    <div id="terminus">
      <div class="card text-white text-uppercase">
        <img src="/img/terminusHorsensTogstation.png" alt="" class="card-img index-img" style="height: 100svh ; object-fit:cover; filter: brightness(70%);">
        <div class="card-img-overlay">
          <div class="text-end top-0 p-md-5 px-3 my-5 py-5">
            <p class="card-text">Et samfund, der er kørt af (tog)sporet</p>
            <h1 class="card-title;">Terminus</h1>
            <a href="/co-lab/terminus.php" class="btn btn-lg btn-blur btn-outline-light shadow">Info</a>
          </div>
        </div>
      </div>
    </div>

    <div class="card text-white text-uppercase" id="akyrlarium">
      <img src="/img/akryla_shan_structure1.jpg" alt="" class="card-img vh-100" style="object-fit: cover; filter: brightness(70%);">
      <div class="card-img-overlay position-absolute">
        <div class="text-end top-0 p-md-5 px-3 my-5 py-5">
          <p class="card-text">Forestilling formidler Hudsult</p>
          <h1 class="card-title;">AKRYLARIUM</h1>
          <a href="/repertoire/akrylarium" class="btn btn-outline-light btn-lg btn-blur shadow">Info</a>
        </div>
      </div>
    </div>



      <!-- 
  <div class="card text-white text-uppercase">  
    <img src="/img/kinaShow2BigScreen.jpg" alt="" class="card-img vh-100" style="object-fit:cover; filter: brightness(70%);">
      <div class="card-img-overlay position-absolute">
        <div class="position-absolute bottom-0 p-md-5 px-3 py-5">
          <p class="card-text">performance i februar</p>
          <h1 class="card-title;">traditionelt Kinesisk<br>show</h1>
          <a href="#" class="btn btn-outline-light btn-lg">Info</a>
        </div>
      </div>
  </div> 
  -->
      <!-- Footer -->

      <?php
      $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
      include $IPATH . 'footer.php';
      ?>



      <script src="/js/bootstrap.bundle.min.js"></script>
      <?php if ($FIRST_VISIT): ?>
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            const intro = document.getElementById("intro-logo");

            // Fade-in
            requestAnimationFrame(() => intro.style.opacity = "1");

            const fadeInDuration = 1000;
            const visibleTime = 1600;

            setTimeout(() => {
              intro.style.opacity = "0";

              setTimeout(() => intro.remove(), fadeInDuration);
            }, fadeInDuration + visibleTime);
          });
        </script>
      <?php endif; ?>

      <script src="/js/scroll_on_press.js?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/scroll_on_press.js') ?>"></script>



</body>


</html>