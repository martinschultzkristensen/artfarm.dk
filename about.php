<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico"> 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<style>
  .my_img {margin-bottom: -7px;
    max-width: 100%;
    height: auto;
  }
  .w3-row-padding img {margin-bottom: 12px}
  
  .container2 {
    max-width: 960px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  * {
    box-sizing: border-box;
  }
  
  
  /* The actual timeline (the vertical ruler) */
  .timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  /* The actual timeline (the vertical ruler) */
  .timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: lightgray;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
  }
  
  /* Container around content */
  .container_timeline {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
  }
  
  /* The circles on the timeline */
  .container_timeline::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -13px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 18px;
    border-radius: 50%;
    z-index: 1;
  }
  
  /* Place the container to the left */
  .left {
    left: 0;
  }
  
  /* Place the container to the right */
  .right {
    left: 50%;
  }
  
  /* Add arrows to the left container (pointing right) */
  .left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 25px;
    border: medium solid lightgray;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent lightgray;
  }
  
  /* Add arrows to the right container (pointing left) */
  .right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 25px;
    border: medium solid lightgray;
    border-width: 10px 10px 10px 0;
    border-color: transparent lightgray transparent transparent;
  }
  
  /* Fix the circle for containers on the right side */
  .right::after {
    left: -13px;
  }
  
  /* The actual content */
  .content_timeline {
    padding: 20px 30px;
    background-color: lightgray;
    position: relative;
    border-radius: 6px;
  }
  
  /* Media queries - Responsive timeline on screens less than 600px wide */
  @media screen and (max-width: 600px) {
    /* Place the timelime to the left */
    .timeline::after {
    left: 31px;
    }
    
    /* Full-width containers */
    .container_timeline {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
    }
    
    /* Make sure that all arrows are pointing leftwards */
    .container_timeline::before {
    left: 60px;
    border: medium solid gray;
    border-width: 10px 10px 10px 0;
    border-color: transparent gray transparent transparent;
    }
  
    /* Make sure all circles are at the same spot */
    .left::after, .right::after {
    left: 15px;
    }
    
    /* Make all right containers behave like the left ones */
    .right {
    left: 0%;
    }
  }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<body class="bg-light">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand:focusable" href="../index.html"><img src="../img/artfarm_zeromargin_invert.png" height="40px" alt="Art Farm logo" class="ms-1"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" href="artists.html">Artists</a></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle me-3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Repertoire
                </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="terminus.html">Terminus</a></li>
                    <li><a class="dropdown-item" href="danceomatic.html">danceOmatic</a></li>
                    <li><a class="dropdown-item" href="akrylarium.html">Akrylarium</a></li>
                  </ul>
              </li>
          </ul>
          
         
        </div>
      </div>
    </nav>
  </header>




  <!-- !PAGE CONTENT! -->
  

  <main>

    <section class="py-5 text-center container">
      <div class="row pt-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Organization</h1>
        <img src="../img/artfarm_logo.svg" alt="Art Farm Logo" class="img-fluid" style="max-height: 100px
        ;">
      </div>
      <div class="row pt-5">
        <div class="col">
          <p>Art Farm is a nonprofit organization under danish law.</p>
        </div>
      </div>
    </section>


    <div class="container">

      <!-- make a section about the boardmembers-->
      
    <!-- <div class="row">
      <div class="col">
        <p>Boardmembers</p> 
      </div>
    </div> -->

    <div class="timeline">
      <div class="container_timeline left">
        <div class="content_timeline">
          <h2>2020</h2>
          <p>The name of the association is changed from danceOmatic to Art Farm to support a more professional association.
            The proposal is approved unanimously by the board. <br><br>
            <img src="../img/dom_to_artfarm.png" class="img-fluid" alt="danceomatic logo and artfarm logo"></p>
        </div>
      </div>
      <div class="container_timeline right">
        <div class="content_timeline">
          <h2>2019</h2>
          <p>We are doing our first traditional Chinese performance in Kolding Storcenter. Subsequently, we tour in Taiwan with <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/p/BxXIy_UHYtS/">danceOmatic “carry the art.”</a>
            <br> We do a voluntary performance for Red Cross holiday camps, and perform the performance<a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/p/B1nxBtIFMwE/">TALKER</a> at Kolding culturenight</p>
          <img src="../img/kinashow_main.jpg" alt="dancers in chinese costumes" class="img-fluid rounded">
        </div>
      </div>
      <div class="container_timeline left">
        <div class="content_timeline">
          <h2>2018</h2>
          <p>The association danceOmatic is founded on 24th of april 2018.<br>During the year, danceOmatic will be held at the ViaThea Straßen Theater Festival in Görlitz Germany and Kolding Kulturnat.</p>
            <img src="../img/dmaskine_viathea2018.jpg" alt="picture of danceOmatic at ViaThea Festival" class="img-fluid rounded"> 
        </div>
      </div>
      <div class="container_timeline right">
        <div class="content_timeline">
          <h2>2017 and before</h2>
          <p>The project <i>danceOmatic</i> receives support from the foundation <i> Aarhus 2017, </i> to develop danceOmatic’s dance machine in a collaboration with <i> Le-Yun’s dance group </i> from Taiwan.
            The support spans 2016 and 2017. <br>
            In collaboration with Danish and Taiwanese dancers, musicians and stage builders, the concept is performed and developed in Taiwan. The software in the dance machine gets a functional boost, and the dance machine is made mobile and gets a new design.
            In Taiwan, five dancers operate in 2016; three from Taiwan and two from Denmark. eqaully so in Denmark in 2017.  
          </p>
          <img src="../img/2017_dmaskine.jpg" alt="picture of danceOmatic first time in Taiwan" class="img-fluid rounded"> 
        </div>
      </div>
    </div>

      <div class="row py-5 text-center">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Articles of association</h1>
        </div>
      </div>

          <article>

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    1. Name and Place of Residence
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <ol>
                      <li>The name of the organisation is Art Farm.</li>
                      <li>The organisation is home in the municipality of Aarhus, Denmark.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    2. Objective
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <p>The association is a non-profit association that aims to create artistic and cultural activities, with the main focus on dance. Other art forms that the association will make to a lesser extent involve music, design, digital design and visual art. including:
                      <ol>
                        <li>To bring art out to the human being in order to arouse an interest in various forms of expression, primarily professional dance, and give them the desire to seek out places that perform dance and visual theater as performing arts.</li>
                        <li>Participating arts.</li>
                        <li>To create, stage and perform performing arts.</li>
                        <li>Give the audience an insight into the world around us, and give foreign audiences an insight into Danish culture.</li>
                        <li>To build local and international networks for performing arts, and give Danish choreographers the opportunity to present Denmark to the world.</li>
                        <li>Involve professionals and non-professionals in dance.</li>
                    </ol></li>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    3 Wealth and Operations
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <ol>
                        <li>At the foundation of the association, its assets consist of DKK 0.00.</li>
                        <li>The association's operations are financed by project and operation applications, user fees, ticket revenues, co-productions, partners, sponsorships, voluntary gifts and help from volunteers.</li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    4 Membership and fee
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                  <div class="accordion-body">
                    <ol>
                      <li>Anyone who has paid a membership fee to the association and who joins the association's purpose and idea base is a member of the association.</li>
                      <li>The board can exclude members who oppose the association's purpose. The decision of the Board of Directors can be brought before the general meeting.</li>
                      <li>A member is considered to have resigned when the person in question has not announced his or her continued membership in connection with the convening of a general meeting.</li>
                      <li>The association keeps a register of the members' names and contact information (including but not limited to: address, email, telephone - the member can always be informed what information the association has registered).</li>
                      <li>The membership fee is determined at the general meeting.</li>
              
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                    5 Organization
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                  <div class="accordion-body">
                    <ol>
                      <li>The general meeting is the association's supreme authority.</li>
                      <li>The board of directors is elected at the general meeting so that two members are elected in even years and three in odd years - re-election can take place.</li>
                      <li>The Board of Directors constitutes itself with a chairperson, deputy chairperson and cashier.</li>
                      <li>The board of directors leads the association in accordance with these articles of association and the resolutions of the general meeting.</li>
                      <li>In the event of a tie in the Board of Directors, the chairman's vote is decisive.</li>
                      <li>The Board of Directors may employ a day-to-day management.</li>
                      <li>The Board of Directors also decides its own rules of procedure.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                    6 The General Assembly
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                  <div class="accordion-body">
                    <ol>
                      <li>The general meeting is the highest authority of the association.</li>
                      <li>The Annual General Meeting is held once a year, no later than March and is announced per. email to all members no later than 30 days before.</li>
                      <li>The agenda for the annual general meeting must contain at least the following items:

                      <ul class="text-muted" >
                        <li>Election of conductor.</li>
                        <li>The board's report on the association's activities in the past year.</li>
                        <li>Presentation of the association's accounts.</li>
                        <li>Any suggestions.</li>
                        <li>Determination of budget, including contingent.</li>
                        <li>Election of board of directors.</li>
                        <li>Election of auditor and deputy auditor.</li>
                        <li>Optionally.</li>
                    </ul></li>
                    <li>Proposals must be received by the chairman in writing no later than 14 days before the general meeting and forwarded by the chairman immediately after receipt to the members.</li>
                    <li>Extraordinary general meetings can be convened with 14 days' notice when at least 1⁄2 of the association's members so wish or a majority of the board with an indication of the agenda and a motivation for the convening.</li>
                    <li>All decisions at a general meeting are made by a simple / simple majority of votes. Exceptions to this see §9 and §10.</li>
                    <li>The general meeting legally announced at any time has a quorum.</li>
                    <li>Minutes shall be taken of the proceedings of the general meeting, which shall be signed by the chairman. Here it can be introduced that at least 2/3 of the association's members are present and the like.</li>
                    <li>The association's members have the right to stand.</li>
                    <li>The members of the association have the right to vote. Voting by proxy is not possible unless the member is a company. As a proxy, no one can represent more than one member.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                    7 Liability
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                  <div class="accordion-body">
                    <ol>
                      <li>Only the association's assets are liable for the association's obligations.</li>
                      <li>The association is signed by the chairman and treasurer of the association.</li>
                      <li>The Board of Directors may notify the day-to-day management of the power of attorney, which is determined in accordance with detailed guidelines.</li>
                      <li>Borrowing, buying, selling and mortgaging real estate must be approved by the board of directors.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                    8 Financial Accounting
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                  <div class="accordion-body">
                    <ol>
                      <li>The financial year is 1/1 to 31/12.</li>
                      <li>The accounts consist of but are not limited to the operating accounts, status and the report of the Board of Directors.</li>
                      <li>The association must not create wealth.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                    9 Amendment of the Articles of Association
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                  <div class="accordion-body">
                    <ol>
                      <li>These articles of association can only be amended by a 2⁄3 majority at a general meeting, where the proposed amendment appears on the agenda.</li>
                      <li>The amendments to the articles of association enter into force with effect from the general meeting at which they are adopted.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                    10 Resolution
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                  <div class="accordion-body">
                    <ol>
                      <li>The association can only be dissolved by a 2⁄3 majority at two consecutive general meetings, where the amendment appears on the agenda.</li>
                      <li>Upon termination, any profits are used for non-profit purposes within the purpose clause.</li>
                      <li>No part of the association's assets may accrue to the members.</li>
                  </ol>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false" aria-controls="panelsStayOpen-collapseEleven">
                    11 Dating
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEleven">
                  <div class="accordion-body">
                    <ol>
                      <li>Amendments to the articles of association adopted at the annual general meeting 20/04/2018.</li>
                      <li>Thus passed at the founding general meeting.</li>
                  </ol>
                  </div>
                </div>
              </div>
            </div>

            
            <hr class=w3-border-black>
          </article>
          <p>Minutes of the general assemblies (in Danish)</p>
          <a href="../pdf/vedtægter.pdf" target="_blank">vedtægter</a><br> 
         <a href="../pdf/gen2018_referat.pdf" target="_blank">Founding General Assembly 2018</a><br>
         <a href="../pdf/gen2019_referat.pdf" target="_blank">General Assembly 2019</a><br>
         <a href="../pdf/gen2020_referat.pdf" target="_blank">General Assembly 2020</a><br>
         <a href="../pdf/gen2021_referat.pdf" target="_blank">General Assembly 2021</a>
      </div>
    </div>

   
      <!-- Footer -->
      <footer class="container-fluid">
        <hr>
        <div class="row mx-lg-2">
          <div class="col-sm-9">
            <h2 class="featurette-heading">Support and <span class="text-muted">collaborators</span></h2>
            <div class="row">
              <div class="col-3">
                  <img src="/img/support_logo/StKFond.png" alt="" srcset="" class="img-fluid">
                </div>
                <div class="col-3">
                  <img src="/img/support_logo/Altuglas.svg" alt="" srcset="" class="img-fluid p-1">
                  <img src="/img/support_logo/van_fonden_logo1.png" alt="" srcset="" class="img-fluid p-1">
                  <img src="/img/support_logo/humanlabLogo.png" alt="Mai-Ti dance company logo" class="img-fluid pt-sm-4 px-1">
                </div>
                <div class="col-2">
                  <img src="https://d2typry64h97y6.cloudfront.net/wp-content/uploads/2023/01/24135746/Globus-Opstart_Logo_BLACK_RGB.png" alt="logo globus opstart" class="img-fluid d-inline-flex pt-3">
                </div>
                <div class="col-2">
                  <img src="/img/support_logo/logoMaiTiTransparrent.png" alt="Mai-Ti dance company logo" class="img-fluid pt-3">
                </div>
                <div class="col-2">
                </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between mb-sm-2 mb-lg-5 mx-lg-2">
          <div class="col-4">
            <p>Art Farm<br>info@artfarm.dk<br>cvr: 39563886</p>
          </div>
          <div class="col-4">
            <p class="float-end"><br><br><a href="#">Back to top</a></p>
          </div>
        </div>
      </footer>
  
</main>
<script src="../js/bootstrap.bundle.min.js"></script>
  
</body>
</html>