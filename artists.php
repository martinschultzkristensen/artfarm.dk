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
    <section class="py-5 text-center container">
        <div class="row pt-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Team</h1>
          <img src="/img/artfarm_logo.svg" alt="Art Farm Logo" class="img-fluid" style="max-height: 100px
          ;">
        </div>
    </section>
      
    <div class="container">
     
      <div class="row pt-5">
        <div class="col">
          <img src="/img/team/Martin_sqr.jpg" class="img-fluid rounded-circle" alt="Picture of Martin">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Martin Schultz Kristensen</h2>
          <p class="lead">Projektleder</p> 
          <p>Martin danser også med i de fleste produktioner.</p>
        </div>
      </div>
      
      <div class="row pt-5">
        <div class="col">
          <img src="/img/team/MT_sqr.jpg" class="img-fluid rounded-circle" alt="Billede af Meng-Ting">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Meng-Ting Liu</h2>
          <p class="lead">Koreograf<br></p>
          <p>Meng-Ting er koreograf på det fleste produktioner og den kunstneriske leder i co-produktionen <i>conTEMPORARY PAINTER.</i><br>
          På distancen er hun kunstnerisk leder for det taiwanske dansekompani: <i>Mai Ti Dance Company</i></p>
          <a class="btn btn-outline-dark btn-sm" href="https://www.maitidancecompany.org/" role="button" target="_blank">Mai-Ti Website &raquo;</a>
        </div>
      </div>

      <div class="row pt-5">
        <div class="col">
          <img src="/img/team/Shannon_sqr.jpg" class="img-fluid rounded-circle" alt="Picture of Shannon">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Shannon Leypoldt</h2>
          <p class="lead">Danser<br>Performer med os i <a href="/repertoire/akrylarium">AKRYLARIUM</a></p>
          <p>Shannon arbejder som freelance-danser og er bosat i Berlin.</p>
          <a class="btn btn-outline-dark btn-sm" href="https://www.shannonleypoldt.com/" role="button" target="_blank">Website &raquo;</a>
        </div>
      </div>

      <div class="row pt-5">
    <div class="col">
      <img src="/img/team/Marco_sqr.jpg" class="img-fluid rounded-circle" alt="Billede af Marco">
    </div>
    <div class="col-lg-10 col-8 align-self-center">
      <h2>Marco Zavarise</h2>
      <p class="lead">Skuespiller<br>Optræder i <a href="/repertoire/akrylarium">AKRYLARIUM</a> og <a href="/repertoire/terminus">Terminus</a></p>
      <p>Marco er baseret i Horsens, Danmark og er den kunstneriske leder af Humanlab.</p>
      <a class="btn btn-outline-dark btn-sm" href="https://www.humanlab.studio/about.html" role="button" target="_blank"><img src="/img/support_logo/humanlabLogo.png" height="15" class="d-inline-block align-text-center"> &raquo;</a>
    </div>
  </div>


  <div class="row pt-5 mb-4">
    <div class="col">
      <img src="/img/team/Jon_sqr.jpg" class="img-fluid rounded-circle" alt="Billede af Jon">
    </div>
    <div class="col-lg-10 col-8 align-self-center">
      <h2>Jon Stage</h2>
      <p class="lead">Musiker<br>Musikartist i forestillingen <i>conTEMPORARY PAINTER</i></p>
      <p>Jon er egentlig uddannet som danser, men har en stærk musikalsk baggrund. Hans kunstneriske arbejde kan følges på <i>jonstage.com</i></p>
      <a class="btn btn-outline-dark btn-sm" href="http://www.jonstage.com/" role="button" target="_blank">Link &raquo;</a>
    </div>
  </div>



    </div>
        <!-- FOOTER -->
        <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'footer.php';
    ?>
</main>
      <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>