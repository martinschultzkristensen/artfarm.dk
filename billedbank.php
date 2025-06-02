<!doctype html>
<html lang="da">
<?php
$IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
include $IPATH . 'head.php';
?>

<style>
  .gallery-img {
    cursor: zoom-in;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .gallery-img:hover {
    transform: scale(1.03);
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
  }
</style>

<body>

  <?php
  $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
  include $IPATH . 'header.php';
  ?>

  <section class="py-5 text-center container">
    <div class="row pt-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Billedbank</h1>
        <div class="col">
          <p>produktionsstøtte til forestilling Á la carte</p>
        </div>
      </div>
    </div>
  </section>


  <div class="container pb-5">
    <div class="row g-3">
      <div class="col-12 col-sm-6 col-md-4 position-relative">
        <img src="/img/AlaCarte/RoomEwiiHouse.jpeg" alt="Billede 1"
          class="img-fluid rounded shadow-sm img-thumbnail gallery-img"
          data-bs-toggle="modal" data-bs-target="#imageModal">

        <div class="overlay-caption bg-dark bg-opacity-75 text-white p-2 rounded position-absolute bottom-0 start-0 m-2 small">
          Foto af øvelokale i EWII House –<br>
          Anvendes i produktionsfaser og til forestilling. Rummet ryttes og udstyres med dansevinyl og AV-teknik.
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="position-relative d-inline-block w-100">
          <img src="/img/AlaCarte/KulturelStigmaWalk.png" alt="Billede 2"
            class="img-fluid rounded shadow-sm img-thumbnail gallery-img"
            data-bs-toggle="modal" data-bs-target="#imageModal">

          <div class="overlay-caption bg-dark bg-opacity-75 text-white p-2 rounded position-absolute bottom-0 start-0 m-2 small">
            kulturelle klichéer og stigmatiserede bevægelser undersøges
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="position-relative d-inline-block w-100">
          <img src="/img/AlaCarte/TtoolDuetLift.png" alt="Billede 3"
            class="img-fluid rounded shadow-sm img-thumbnail gallery-img"
            data-bs-toggle="modal" data-bs-target="#imageModal">

          <div class="overlay-caption bg-dark bg-opacity-75 text-white p-2 rounded position-absolute bottom-0 start-0 m-2 small">
            Koreografi på det særlige T-formede redskab, som bruges ved franske crêpes
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="position-relative d-inline-block w-100">
          <img src="/img/AlaCarte/FrikaUngKolding.JPG" alt="Billede 4"
            class="img-fluid rounded shadow-sm img-thumbnail gallery-img"
            data-bs-toggle="modal" data-bs-target="#imageModal">

          <div class="overlay-caption bg-dark bg-opacity-75 text-white p-2 rounded position-absolute bottom-0 start-0 m-2 small">
            Billede fra det succesfulde 15-minutters værk Frikadelle, som danner afsæt for udviklingen af Á la carte.
          </div>
        </div>
      </div>
      <!-- Tilføj flere billeder her -->
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content position-relative bg-white border-0 rounded shadow">

        <!-- Luk-knap -->
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
          data-bs-dismiss="modal" aria-label="Close" style="z-index: 1;"></button>

        <div class="modal-body text-center p-0 position-relative">
          <img src="" class="img-fluid rounded" id="modalImage" alt="Forstørret billede" style="z-index: 0; position: relative;">
        </div>
      </div>
    </div>
  </div>


  <script src="/js/bootstrap.bundle.min.js"></script>
  <script>
    const galleryImages = document.querySelectorAll('.gallery-img');
    const modalImage = document.getElementById('modalImage');

    galleryImages.forEach(img => {
      img.addEventListener('click', () => {
        modalImage.src = img.src;
        modalImage.alt = img.alt;
      });
    });
  </script>
</body>

</html>