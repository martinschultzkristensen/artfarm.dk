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
        <img src="/img/frikadelleMain.jpg" alt="billede af frikadelle forestilling" class="card-img" style="filter: brightness(70%); object-fit:cover ; max-block-size: 500px;">
        <div class="card-img-overlay">
          <h1 class="position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%);">Frikadelle</h1>
        </div>
      </div>

      <div class="container my-5" id="skeleton">

        <div class="col-12 mb-5">
          <h2 class="text-center">Oplev en overdådig kreation af en frikadelle!</h2>
        </div>


        <div class="row align-items-center">
          <div class="col-lg-6 col-12">
            <h2 class="featurette-heading">Beskrivelse</h2>
            <p class="lead mt-3 mx-lg-3">Denne 15 minutter lange forestilling fænger hjertet hos publikum i alle aldre, fra 4 år og op til selv de ældste publikummer. Det er en fejring af kultur, kreativitet og kulinarisk kunst, der lover at efterlade dig med et smil på læben og en fornyet appetit på livets glæder.</p>
          </div>
          <div class="col-lg-5 col-12 m-lg-3 mb-5">
            <img src="/img/frikadelle/compressjpeg/flatBrushOut-min.jpg" alt="" class="img-fluid rounded shadow">
          </div>
        </div>

        <div class="row align-items-center">
          <!-- This section takes over from any screen under lg -->
          <div class="col-lg-7 order-lg-2">
            <p class="lead mt-3 pb-3">Med musik af Vivaldi, professionel dans, og rigtig mad på scenen, følger vi den overdådige kreation af en frikadelle.</p>
          </div>
          <!-- comment end -->


          <div class="row align-items-center">
            <div class="col-lg-5">
              <h2 class="featurette-heading">Trailer</h2>

              <div style="padding:56.25% 0 0 0;position:relative;">
                <iframe src="https://player.vimeo.com/video/1096375240?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Frikadelle Trailer"></iframe>
              </div>
            </div>

            <div class="col-lg-7 mt-5 mb-5">
              <!-- underneat <p> repeated text becomes invisible when screen under lg -->
              <p class="lead  d-none d-lg-block">Med musik af Vivaldi, professionel dans, og rigtig mad på scenen, følger vi den overdådige kreation af en frikadelle.</p>
              <!-- comment end  -->
              <p class="lead">Koreografen, <a href="/artists">Meng Ting Liu</a>, oprindeligt fra Taiwan, bringer et unikt perspektiv på dansk kultur. Med sin evne til at transformere et letforståeligt emne til et dansemæssigt mesterværk, indkapsle hun essensen af dansk madkultur på en innovativ og engagerende måde.</p>
            </div>
          </div>

          <h2 class="featurette-heading mt-lg-5">Se forestillingen</h2>
          <div class="p-sm-2">
            <?php
            $tourplan = include '../tourplan_data.php'; // Adjust path as needed
            $filtered = array_filter($tourplan, fn($item) => strtolower($item['title']) === 'frikadelle');
            if (empty($filtered)) {
              echo '<p class="lead mt-3 mx-3">På nuværende tidspunkt er der ingen planlagte forestillinger. <br>Book os nu! <object data="/assets/svg_elements/arrow-right-short.svg" id="arrow-right-short" class="bi-arrow-right-short" type="image/svg+xml"></object> info@artfarm.dk</p>';
            } else {
              ?>


            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Dato</th>
                  <th scope="col">By</th>
                  <th scope="col">Hvor</th>
                  <th scope="col">Tid</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($filtered as $row): ?>
                  <tr>
                    <th scope="row"><?= $row['date'] ?></th>
                    <td><?= $row['city'] ?></td>
                    <td><?= $row['location'] ?></td>
                    <td><?= $row['time'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <?php
            }
            ?>
          </div>

          <div class="row align-items-center my-md-5">
            <div class="col-lg-2 col-4">
              <h2 class="featurette-heading">Baggrund: <span class="text-muted"></span></h2>
              <img src="/img/team/MT_sqr.jpg" class="img-fluid rounded-circle float-lg-none float-start me-3" alt="Billede af Meng-Ting">
            </div>
            <div class="col-lg-10 col-12">
              <p class="lead mt-3 mx-3">Frikadelle blev produceret i 2022 af den taiwanske koreograf Meng-Ting Liu. Med hendes unikke perspektiv på dansk kultur har hun skabt en underholdende og sofistikeret forestilling, der fremhæver vigtigheden af madkultur. Dette har gjort forestillingen til en umiddelbar klassiker.</p>
            </div>
          </div>

          <div class="row align-items-center">
            <p>Billeder af Kristina Pedersen</p>
            <div class="col-lg-4 col-md-12 ">
              <img src="/img/frikadelle/compressjpeg/flatBrushOut-min.jpg" alt="" class="w-100 shadow-1-strong rounded mb-4 ">
              <img src="/img/frikadelle/compressjpeg/tallHandstand-min.jpg" class="w-100 shadow-1-strong rounded mb-4 ">
              <img src="/img/frikadelle/compressjpeg/tallAudienceBack-min.jpg" alt="" class="w-100 shadow-1-strong rounded mb-4">
            </div>

            <div class="col-lg-4 col-md-6">
              <img src="/img/frikadelle/compressjpeg/tallFreeze-min.jpg" class="w-100 shadow-1-strong rounded mb-4 ">
              <img src="/img/frikadelle/compressjpeg/flatBow-min.jpg" alt="" class="w-100 shadow-1-strong rounded mb-4 ">
              <img src="/img/frikadelle/compressjpeg/tallFlipOver-min.jpg" alt="" class="w-100 shadow-1-strong rounded mb-4">
            </div>

            <div class="col-lg-4 col-md-6">
              <img src="/img/frikadelle/compressjpeg/tallBlowUp-min.jpg" alt="" class="w-100 shadow-1-strong rounded mb-4 ">
              <img src="/img/frikadelle/compressjpeg/tallFly-min.jpg" class="w-100 shadow-1-strong rounded mb-4 ">
              <img src="/img/frikadelle/compressjpeg/flatAudience-min.jpg" alt="" class="w-100 shadow-1-strong rounded mb-4">
            </div>


          </div>
          <div class="col-12">
            <h2 class="featurette-heading">Praktisk <span class="text-muted"> info </span></h2>
            <ul class="list-praktisk-info">
              <li><strong>Producent:</strong> Art Farm</li>
              <li><strong>Komponist:</strong> Antonio Vivaldi</li>
              <li><strong>Koreograf:</strong> Meng-Ting Liu</li>
              <li><strong>Medinstruktør:</strong> Marko E. Weigert</li>
              <li><strong>Medvirkende:</strong> Martin Schultz Kristensen, Meng-Ting Liu, Alexandre May</li>
              <li><strong>Længde:</strong>15 minutter</li>
            </ul>
          </div>
        </div>



































      </div> <!-- end nested container -->
    </div> <!-- container -->

    <!-- Footer -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'footer.php';
    ?>

  </main>

  <!-- <div class="d-sm-inline-flex p-2 bd-highlight bg-danger">I'm a flexbox container!</div> -->
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="https://player.vimeo.com/api/player.js"></script>
</body>


</html>