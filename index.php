<!doctype html>
<html lang="da">
<?php
$IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
include $IPATH . 'head.php';
?>

<body class="bg-light">

  <div id="intro-logo" class="intro-logo">

    <svg width="3000" height="2200" viewBox="0 0 1080 1080" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <mask id="mask1" maskUnits="userSpaceOnUse" maskContentUnits="userSpaceOnUse" x="0" y="0" width="100%" height="auto">
          <?php echo file_get_contents("assets/svg_elements/ArtFarmLogoMask.svg"); ?>
        </mask>
        <style>
          .a {
            fill: #e82827;
          }

          .b {
            fill: #fcc326;
          }

          .c {
            fill: #fdf600;
          }

          .d {
            fill: #4069af;
          }

          .e {
            fill: #ed64a3;
          }
        </style>
      </defs>
     <?php echo file_get_contents("assets/svg_elements/ArtFarmLogoTracing.svg"); ?>
      <!-- Simplified parallelograms -->
      <g mask="url(#mask1)">
        <g class="animated-swipe">
          <?php echo file_get_contents("assets/svg_elements/colorSwipe.svg"); ?>
        </g>
      </g>
    </svg>




    
    
      </div>
  <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
  include $IPATH . 'header.php';
  ?>





  <div class="fixed-bottom text-center my-5">
    <a id="scroll-btn" class="btn btn-blur btn-lg btn-outline-light shadow">Repertoire
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi-arrow-down-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
      </svg>
    </a>
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
          <a href="/repertoire/danceomatic" class="btn btn-outline-light btn-lg btn-blur shadow">Start</a>

        </div>
      </div>
    </div>






    <div class="card text-white text-uppercase" id="censorship">
      <img src="/img/ntvrkTW.jpg" alt="" class="card-img vh-100" style="object-fit:cover; filter: brightness(70%);">
      <div class="card-img-overlay">
        <div class="position-absolute top-50 p-md-5 px-3">
          <p class="card-text"></span>Worskhop & netværk i Taiwan</p>
          <h1 class="card-title;">Co-Laboratorie omkring censur</h1>
          <a href="/co-lab/ntwrkTW.php" class="btn btn-outline-light btn-lg btn-blur shadow">Info</a>
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
    <script src="/js/scroll_on_press.js"></script>
<script>
window.addEventListener('load', () => {
  const intro = document.getElementById('intro-logo');

  // 1️⃣ Fade‑in
  requestAnimationFrame(() => {           // ensures the style change happens after paint
    intro.style.opacity = '1';
  });

  // 2️⃣ Keep it visible for 1.5 s (adjust as you like)
  const visibleTime = 1600;

  // 3️⃣ After the visible period, start fade‑out
  setTimeout(() => {
    intro.style.opacity = '0';

    // 4️⃣ Remove the element after the fade‑out transition (1 s here)
    setTimeout(() => intro.remove(), 1000);
  }, visibleTime + 1000);   // +1000 accounts for the 1 s fade‑in duration
});

</script>


<script>
window.addEventListener("load", function() {
    const logo = document.querySelector(".intro-logo");
    if (logo) {
        logo.style.opacity = 1;
    }
});
</script>


</body>


</html>