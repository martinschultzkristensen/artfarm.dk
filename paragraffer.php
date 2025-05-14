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





  <!-- !PAGE CONTENT! -->
  

  <main>
    <!-- <div class="margin-lg">
      <div class="container">
        <div class="row">
          <div class="col-4"><img src="img/ArtFarm.png" class="img-fluid"></div>
        </div>
    </div> -->

    <section class="py-5 text-center container">
      <div class="row pt-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Foreningsvedtægter</h1>
          <img src="../img/artfarm_logo.svg" alt="Art Farm Logo" class="img-fluid" style="max-height: 100px
          ;">
        </div>
      </div>
    </section>

      <div class="container">
          <article>

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    1. Navn og Hjemsted
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <ol>
                      <li>Foreningens navn er Art Farm.</li>
                      <li>Foreningen har hjemme i Kolding Kommune</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    2. Formål
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p>Foreningen er en almennyttig forening der har til formål at lave kunstneriske og kulturelle aktiviteter, med hovedfokus på dans. Andre kunstarter som foreningen i mindre grad vil lave indebære musik, design, digitalt design og billedkunst. herunder bl.a.:</p>
                    <ol>
                        <li>At bringe kunst ud til mennesket for herved at vække en interesse for forskellige udtryksformer, primært professionel dans, og give dem lysten til at opsøge steder der opfører dans og visuelt teater som scenekunst.</li>
                        <li>Involverende kunst.</li>
                        <li>At skabe, iscenesætte og optræde med scenekunstværker.</li>
                        <li>Give publikum et indblik i verdenen omkring os, og give udenlandsk publikum et indblik i dansk kultur.</li>
                        <li>At bygge lokale og internationale netværker for scenekunst, og give danske koreografer mulighed for at præsenterer danmark i verdenen.</li>
                        <li>Involver professionelle og ikke-professionelle i dans.</li>
                    </ol></li>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    3 Formue og Drift
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <ol>
                        <li>Ved foreningens stiftelse består dens formue af 0,00 kr.</li>
                        <li>Foreningens drift finansieres af projekt- og driftansøgninger, brugerbetaling, billetindtægter, co- produktioner, samarbejdspartnere, sponsorater, frivillige gaver og hjælp fra frivillige medarbejdere.</li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    4 Medlemskab og kontingent
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                  <div class="accordion-body">
                    <ol>
                      <li>Enhver, som har betalt kontingent til foreningen og som tilslutter sig foreningens formål og idégrundlag, er medlem af foreningen.</li>
                      <li>Bestyrelsen kan ekskludere medlemmer der modarbejder foreningens formål. Bestyrelsens afgørelse kan indbringes for generalforsamlingen.</li>
                      <li>Et medlem betragtes som udmeldt, når den pågældende ikke har tilkendegivet sit fortsatte medlemskab i forbindelse med indkaldelse til generalforsamling.</li>
                      <li>Foreningen fører kartotek over medlemmernes navne og kontaktoplysninger (herunder men ikke begrænset til: adresse, email, telefon - medlemmet kan altid få oplyst hvilke oplysninger foreningen har registreret).</li>
                      <li>Kontingent fastsættes på generalforsamlingen.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                    5 Organisering
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                  <div class="accordion-body">
                    <ol>
                      <li>Generalforsamlingen er foreningens øverste myndighed.</li>
                      <li>Bestyrelsen vælges på generalforsamlingen således at to medlemmer vælges på lige år og tre på ulige år - genvalg kan finde sted.</li>
                      <li>Bestyrelsen konstituerer sig selv med formand, næstformand og kasser.</li>
                      <li>Bestyrelsen leder foreningen i overensstemmelse med nærværende vedtægter og generalforsamlingens beslutninger.</li>
                      <li>Ved stemmelighed i bestyrelsen er formandens stemme udslagsgivende.</li>
                      <li>Bestyrelsen kan ansætte en daglig ledelse.</li>
                      <li>Bestyrelsen beslutter i øvrigt selv sin forretningsorden.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                    6 Generalforsamlingen
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                  <div class="accordion-body">
                    <ol>
                      <li>Generalforsamlingen er foreningens højeste myndighed.</li>
                      <li>Ordinær generalforsamling holdes én gang årligt, senest i marts måned og indvarsles pr. email til samtlige medlemmer senest 30 dage før.</li>
                      <li>Dagsordenen for den ordinære generalforsamling skal mindst indeholde følgende punkter:</li>
                      <ul class="text-muted" >
                          <li>Valg af dirigent.</li>
                          <li>Bestyrelsens beretning om foreningens virksomhed i det forløbne år.</li>
                          <li>Fremlæggelse af foreningens regnskab.</li>
                          <li>Eventuelle forslag.</li>
                          <li>Fastsættelse af budget, herunder kontingent.</li>
                          <li>Valg af bestyrelse.</li>
                          <li>Valg af revisor og revisor suppleant.</li>
                          <li>Eventuelt.</li>
                      </ul>
                      <li>Forslag skal være formanden skriftligt i hænde senest 14 dage før generalforsamlingen og videresendes af formanden umiddelbart efter modtagelsen til medlemmerne.</li>
                      <li>Ekstraordinær generalforsamling kan indkaldes med 14 dages varsel når minimum 1⁄2 af foreningens medlemmer ønsker det eller et flertal i bestyrelsen med angivelse af dagsorden og en motivation for indkaldelsen.</li>
                      <li>Alle beslutninger på en generalforsamling træffes ved almindeligt/simpelt stemmeflertal. Undtagelse heraf se §9 og §10.</li>
                      <li>Den til enhver tid lovligt indvarslede generalforsamling er beslutningsdygtig.</li>
                      <li>Over det på generalforsamlingen passerede føres en protokol, der underskrives af dirigenten. Her kan indføres at mindst 2/3 af foreningens medlemmer er til stede og lign.</li>
                      <li>Opstillingsret har foreningens medlemmer.</li>
                      <li>Stemmeret har foreningens medlemmer. Der kan ikke stemmes ved fuldmagt, undtagen hvis medlemmet er en virksomhed. Ingen kan som fuldmægtig repræsentere mere end eet medlem.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                    7 Hæftelse og tegning
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                  <div class="accordion-body">
                    <ol>
                      <li>For foreningens forpligtelser hæfter alene foreningens formue.</li>
                      <li>Foreningen tegnes af formanden og kassereren i foreningen.</li>
                      <li>Bestyrelsen kan meddele den daglige ledelse prokura, der fastsættes efter nærmere retningslinier.</li>
                      <li>Optagelse af lån, køb, salg og pantsætningen af fast ejendom skal godkendes af bestyrelsen.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                    8 Regnskab
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                  <div class="accordion-body">
                    <ol>
                      <li>Regnskabsåret er 1/1 til 31/12.</li>
                      <li>Regnskabet består af men er ikke begrænset til driftsregnskab, status samt bestyrelsens beretning.</li>
                      <li>Foreningen må ikke være formueskabende.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                    9 Vedtægtsændring
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                  <div class="accordion-body">
                    <ol>
                      <li>Disse vedtægter kan kun ændres med 2⁄3 flertal på en generalforsamling, hvor ændringsforslaget fremgår af dagsordenen.</li>
                      <li>Vedtægtsændringerne træder i kraft med virkning fra den generalforsamling, de vedtages på.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                    10 Opløsning
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                  <div class="accordion-body">
                    <ol>
                      <li>Foreningen kan kun opløses med 2⁄3 flertal på to på hinanden følgende generalforsamlinger, hvor ændringsforslaget fremgår af dagsordenen.</li>
                      <li>Ved ophør skal evt. overskud anvendes til almennyttige formål indenfor formålsparagraffen.</li>
                      <li>Ingen del af foreningens formue må tilfalde medlemmerne.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false" aria-controls="panelsStayOpen-collapseEleven">
                    11 Datering
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEleven">
                  <div class="accordion-body">
                    <ol>
                      <li>Vedtægtsændringer vedtaget på den ordinære generalforsamling 20/04/2018.</li>
                      <li>Således vedtaget på den stiftende generalforsamling.</li>
                  </ol>
                  </div>
                </div>
              </div>
            </div>

            <!-- <ol>
                <li>Navn og Hjemsted
                    <ol>
                        <li>Foreningens navn er Art Farm.</li>
                        <li>Foreningen har hjemme i Aarhus Kommune.</li>
                    </ol>
                </li>

                <li>Formål
                    <p>Foreningen er en almennyttig forening der har til formål at lave kunstneriske og kulturelle aktiviteter, med hovedfokus på dans. Andre kunstarter som foreningen i mindre grad vil lave indebære musik, design, digitalt design og billedkunst. herunder bl.a.:</p>
                    <ol>
                        <li>At bringe kunst ud til mennesket for herved at vække en interesse for forskellige udtryksformer, primært professionel dans, og give dem lysten til at opsøge steder der opfører dans og visuelt teater som scenekunst.</li>
                        <li>Involverende kunst.</li>
                        <li>At skabe, iscenesætte og optræde med scenekunstværker.</li>
                        <li>Give publikum et indblik i verdenen omkring os, og give udenlandsk publikum et indblik i dansk kultur.</li>
                        <li>At bygge lokale og internationale netværker for scenekunst, og give danske koreografer mulighed for at præsenterer danmark i verdenen.</li>
                        <li>Involver professionelle og ikke-professionelle i dans.</li>
                    </ol></li>
                <li>Formue og Drift
                    <ol>
                        <li>Ved foreningens stiftelse består dens formue af 0,00 kr.</li>
                        <li>Foreningens drift finansieres af projekt- og driftansøgninger, brugerbetaling, billetindtægter, co- produktioner, samarbejdspartnere, sponsorater, frivillige gaver og hjælp fra frivillige medarbejdere.</li>
                    </ol>
                </li>
                <li>Medlemskab og kontingent
                    <ol>
                        <li>Enhver, som har betalt kontingent til foreningen og som tilslutter sig foreningens formål og idégrundlag, er medlem af foreningen.</li>
                        <li>Bestyrelsen kan ekskludere medlemmer der modarbejder foreningens formål. Bestyrelsens afgørelse kan indbringes for generalforsamlingen.</li>
                        <li>Et medlem betragtes som udmeldt, når den pågældende ikke har tilkendegivet sit fortsatte medlemskab i forbindelse med indkaldelse til generalforsamling.</li>
                        <li>Foreningen fører kartotek over medlemmernes navne og kontaktoplysninger (herunder men ikke begrænset til: adresse, email, telefon - medlemmet kan altid få oplyst hvilke oplysninger foreningen har registreret).</li>
                        <li>Kontingent fastsættes på generalforsamlingen.</li>
                    </ol></li>
                <li>Organisering
                    <ol>
                        <li>Generalforsamlingen er foreningens øverste myndighed.</li>
                        <li>Bestyrelsen vælges på generalforsamlingen således at to medlemmer vælges på lige år og tre på ulige år - genvalg kan finde sted.</li>
                        <li>Bestyrelsen konstituerer sig selv med formand, næstformand og kasser.</li>
                        <li>Bestyrelsen leder foreningen i overensstemmelse med nærværende vedtægter og generalforsamlingens beslutninger.</li>
                        <li>Ved stemmelighed i bestyrelsen er formandens stemme udslagsgivende.</li>
                        <li>Bestyrelsen kan ansætte en daglig ledelse.</li>
                        <li>Bestyrelsen beslutter i øvrigt selv sin forretningsorden.</li>
                    </ol></li>
                <li>Generalforsamlingen
                    <ol>
                        <li>Generalforsamlingen er foreningens højeste myndighed.</li>
                        <li>Ordinær generalforsamling holdes én gang årligt, senest i marts måned og indvarsles pr. email til samtlige medlemmer senest 30 dage før.</li>
                        <li>Dagsordenen for den ordinære generalforsamling skal mindst indeholde følgende punkter:
                        <ol class="last">
                            <li>Valg af dirigent.</li>
                            <li>Bestyrelsens beretning om foreningens virksomhed i det forløbne år.</li>
                            <li>Fremlæggelse af foreningens regnskab.</li>
                            <li>Eventuelle forslag.</li>
                            <li>Fastsættelse af budget, herunder kontingent.</li>
                            <li>Valg af bestyrelse.</li>
                            <li>Valg af revisor og revisor suppleant.</li>
                            <li>Eventuelt.</li>
                        </ol></li>
                        <li>Forslag skal være formanden skriftligt i hænde senest 14 dage før generalforsamlingen og videresendes af formanden umiddelbart efter modtagelsen til medlemmerne.</li>
                        <li>Ekstraordinær generalforsamling kan indkaldes med 14 dages varsel når minimum 1⁄2 af foreningens medlemmer ønsker det eller et flertal i bestyrelsen med angivelse af dagsorden og en motivation for indkaldelsen.</li>
                        <li>Alle beslutninger på en generalforsamling træffes ved almindeligt/simpelt stemmeflertal. Undtagelse heraf se §9 og §10.</li>
                        <li>Den til enhver tid lovligt indvarslede generalforsamling er beslutningsdygtig.</li>
                        <li>Over det på generalforsamlingen passerede føres en protokol, der underskrives af dirigenten. Her kan indføres at mindst 2/3 af foreningens medlemmer er til stede og lign.</li>
                        <li>Opstillingsret har foreningens medlemmer.</li>
                        <li>Stemmeret har foreningens medlemmer. Der kan ikke stemmes ved fuldmagt, undtagen hvis medlemmet er en virksomhed. Ingen kan som fuldmægtig repræsentere mere end eet medlem.</li>
                    </ol></li>
                <li>Hæftelse og tegning
                 <ol>
                     <li>For foreningens forpligtelser hæfter alene foreningens formue.</li>
                     <li>Foreningen tegnes af formanden og kassereren i foreningen.</li>
                     <li>Bestyrelsen kan meddele den daglige ledelse prokura, der fastsættes efter nærmere retningslinier.</li>
                     <li>Optagelse af lån, køb, salg og pantsætningen af fast ejendom skal godkendes af bestyrelsen.</li>
                 </ol></li>
                <li>Regnskab
                 <ol>
                     <li>Regnskabsåret er 1/1 til 31/12.</li>
                     <li>Regnskabet består af men er ikke begrænset til driftsregnskab, status samt bestyrelsens beretning.</li>
                     <li>Foreningen må ikke være formueskabende.</li>
                 </ol></li>
                <li>Vedtægtsændring
                 <ol>
                     <li>Disse vedtægter kan kun ændres med 2⁄3 flertal på en generalforsamling, hvor ændringsforslaget fremgår af dagsordenen.</li>
                     <li>Vedtægtsændringerne træder i kraft med virkning fra den generalforsamling, de vedtages på.</li>
                 </ol></li>
                <li>Opløsning
                 <ol>
                     <li>Foreningen kan kun opløses med 2⁄3 flertal på to på hinanden følgende generalforsamlinger, hvor ændringsforslaget fremgår af dagsordenen.</li>
                     <li>Ved ophør skal evt. overskud anvendes til almennyttige formål indenfor formålsparagraffen.</li>
                     <li>Ingen del af foreningens formue må tilfalde medlemmerne.</li>
                 </ol></li>
                <li>Datering
                 <ol>
                     <li>Vedtægtsændringer vedtaget på den ordinære generalforsamling 20/04/2018.</li>
                     <li>Således vedtaget på den stiftende generalforsamling.</li>
                 </ol></li>
            </ol> -->
            <hr>
          </article>
          <p>Referater</p>
          <a href="/pdf/vedtægter.pdf" target="_blank">vedtægter</a><br> 
         <a href="/pdf/gen2018_referat.pdf" target="_blank">Founding General Assembly 2018</a><br>
         <a href="/pdf/gen2019_referat.pdf" target="_blank">General Assembly 2019</a><br>
         <a href="/pdf/gen2020_referat.pdf" target="_blank">General Assembly 2020</a><br>
         <a href="/pdf/gen2021_referat.pdf" target="_blank">General Assembly 2021</a><br>
         <a href="/pdf/gen2022_referat.pdf" target="_blank">General Assembly 2022</a><br>
         <a href="/pdf/xtraOrdnGen2022_referat.pdf" target="_blank">Ekstraordinær General Forsamling 2022</a><br>
         <a href="/pdf/gen2023_referat.pdf" target="_blank">General Assembly 2023</a>
      </div>
    </div>


      <!-- Footer -->
      <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'footer.php';
    ?>
  
  
</main>
<script src="../js/bootstrap.bundle.min.js"></script>
  
</body>
</html>