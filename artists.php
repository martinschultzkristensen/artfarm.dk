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
            <h1 class="fw-light">Artists</h1>
          <img src="../img/artfarm_logo.svg" alt="Art Farm Logo" class="img-fluid" style="max-height: 100px
          ;">
        </div>
    </section>
      
    <div class="container">
     
      <div class="row pt-5">
        <div class="col">
          <img src="../img/team/Martin_sqr.jpg" class="img-fluid rounded-circle" alt="Picture of Martin">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Martin Schultz Kristensen</h2>
          <p class="lead">Projektleder</p> 
          <p>Martin danser i øvrigt også med i Frikadelle, 
            <a class="link-primary" href="/repertoire/akrylarium">test</a> og <a href="/repertoire/danceomatic">danceOmatic</a></p>
        </div>
      </div>

      <div class="row pt-5">
        <div class="col">
          <img src="../img/team/Shannon_sqr.jpg" class="img-fluid rounded-circle" alt="Picture of Shannon">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Shannon Leypoldt</h2>
          <p class="lead">Dancer<br>Currently performing in AKRYLARIUM</p>
          <p>Shannon working as a freelance dancer, based in Berlin</p>
          <a class="btn btn-outline-dark btn-sm" href="https://www.shannonleypoldt.com/" role="button" target="_blank">Website &raquo;</a>
        </div>
      </div>

      <div class="row pt-5">
        <div class="col">
          <img src="../img/team/Marco_sqr.jpg" class="img-fluid rounded-circle" alt="Picture of Marco">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Marco Zavarise</h2>
          <p class="lead">Actor<br>Currently performing in AKRYLARIUM</p>
          <p>Marco is based in the artistic director of Human lab, based in Horsens, Denmark</p>
          <a class="btn btn-outline-dark btn-sm" href="https://www.humanlab.studio/about.html" role="button" target="_blank">Company Website &raquo;</a>
        </div>

        <div class="row pt-5">
        <div class="col">
          <img src="../img/team/MT_sqr.jpg" class="img-fluid rounded-circle" alt="Picture of Meng-Ting">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Meng-Ting Liu</h2>
          <p class="lead">Choreographer and assistant<br></p>
          <p>Meng-Ting is rehearsal director of AKRYLARIUM, and the artistic director in the co-production <i>conTEMPORARY PAINTER.</i><br>
          Remotly she is directing the Taiwanese dance company: <i>Mai Ti Dance Company</i></p>
          <a class="btn btn-outline-dark btn-sm" href="https://www.maitidancecompany.org/" role="button" target="_blank">Company Website &raquo;</a>
        </div>
      </div>

      <div class="row pt-5 mb-4">
        <div class="col">
          <img src="../img/team/Jon_sqr.jpg" class="img-fluid rounded-circle" alt="Picture of Meng-Ting">
        </div>
        <div class="col-lg-10 col-8 align-self-center">
          <h2>Jon Stage</h2>
          <p class="lead">Musician<br>Music artist in the performance <i>conTEMPORARY PAINTER</i></p>
          <p>Jon is actually educated as a dancer, but has a strong musician bacground. His artistic work can be followed at<i>jonstage.com</i></p>
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
      <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>