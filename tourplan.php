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
    <div class="container">  
    <main>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-6 mx-auto">
            <h1 class="fw-light">Tourplan</h1>
          </div>
        </div>  
      <div class="loop-wrapper">
        <div class="mountain"></div>
        <div class="hill"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="rock"></div>
        <div class="truck"><div class="logo"></div></div>
        <div class="wheels"></div>
      </div> 

  
        
        

        <div class="row pt-5">
          <div class="col">
            <h1 class="fw-bold text-center mb-5" >Turné i Danmark</h1>
          </div>
        </div>
  
  
      <div class="row pt-5">
        <div class="col">
          <h1 class="fw-bold">August</h1>
        </div>
      </div>

      <div class="card text-white text-center mb-4">
        <picture>
          <source media="(min-width: 700px)" 
                  srcset="/img/frikaAmarMain.jpg">
        
          <source media="(min-width: 450px)" 
                  srcset="/img/frikaAmarMain.jpg" class="img-fluid">
        
          <img src="/img/frikaAmarMain.jpg"
              alt="GFG" class="img-fluid card-img rounded" style="filter: brightness(75%);">
        </picture>
          <div class="card-img-overlay align-center">
                <h1 class="">FRIKADELLE</h1>
                <div class="col-md-5 mx-auto py-2">
                <table class="table text-white">
                  <tr class="table-secondary" style="opacity: 70%;">
                    <td class="text-start">Sønderborg Bibliotek<br>Biblioteket Hørup</td>
                    <td>Aug. 7.</td>
                    <td>10:00<br>13:00</td>
                    </tr>
                    <tr class="table-secondary" style="opacity: 70%;">
                      <td class="text-start">Street Cut festival<br>
                      4700 Næstved</td>
                      <td>Aug. 11.</td>
                      <td>11:15<br>13:30</td>
                      </tr>
                      <tr class="table-secondary" style="opacity: 70%;">
                        <td class="text-start">Børnekulturstedet Karens
                        Minde<br>København SV</td>
                        <td>Aug. 29</td>
                        <td>16:00</td>
                      </tr>
                </table>
              </div>
          </div>
        </div>

        <div class="row pt-5">
        <div class="col">
          <h1 class="fw-bold">September</h1>
        </div>
      </div>

        <div class="card text-white text-center mb-4">
        <picture>
          <source media="(min-width: 700px)" 
                  srcset="/img/2017_dmaskine.jpg">
        
          <source media="(min-width: 450px)" 
                  srcset="/img/2017_dmaskine.jpg" class="img-fluid">
        
          <img src="/img/2017_dmaskine.jpg"
              alt="GFG" class="img-fluid card-img rounded" style="filter: brightness(75%);">
        </picture>
          <div class="card-img-overlay align-center">
                <h1 class="">DANCEOMATIC</h1>
                <div class="col-md-5 mx-auto py-2">
                <table class="table text-white">
                  <tr class="table-secondary" style="opacity: 70%;">
                    <td class="text-start">Horsens teaterfestival<br>Pladsen foran Søndergade 26</td>
                    <td>Sep. 20</td>
                    <td>16.00-17.30</td>
                    </tr>
                </table>
              </div>
          </div>
        </div>

        <!-- <div class="row pt-5">
          <div class="col">
            <h1 class="fw-bold">International</h1>
          </div>
        </div> -->
  
      
      
  

  </div>

  
 
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
