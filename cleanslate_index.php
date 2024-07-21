<!doctype html>
<html lang="da">
<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'head.php';
    ?>
    
<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(1, 1fr);
        width: 100%;
        height: 100%;
        grid-gap: 5px;
    }



    .grid-item1 {
        background-image: url(/img/terminusHorsensTogstation.png);
        background-size: cover;
        background-position: center;
        grid-column: 1/3;
        grid-row: 1;
        clip-path: polygon(0 0, 80% 0, 0% 100%, 0 100%);
    }

    .grid-item2 {
        background-image: url(/img/frikaAmarMain.jpg);
        background-size: cover;
        background-position: center;
        grid-column: 1/4;
        grid-row: 1;
        clip-path: polygon(54% 0%,
                   100% 0%,
                   40% 100%,
                    1% 100%);
    }

    .grid-item3 {
        background-image: url(/img/dmaskine_kolding2017.jpg);
        background-size: cover;
        background-position: center;
        grid-column: 2/4;
        grid-row: 1;
        clip-path: polygon(102% 0%,
                   100% 0%,
                   100% 100%,
                    0% 112%);
    }

    
</style>

<body class="bg-light">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/dmaskine_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/dmaskine_2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/dmaskine_3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'header.php';
?>

<div class="grid">
    <div class="grid-item1"></div>
    <div class="grid-item2"></div>
    <div class="grid-item3"></div>
</div>

<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'footer.php';
?>

</body>




</html>