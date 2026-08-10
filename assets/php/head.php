    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Martin">
    <meta name="author" content="Martin">
    <meta name="generator" content="Martin">
    <title>Art Farm</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Costume css -->
     <link href="/css/style.css" rel="stylesheet">
    <link href="/css/tourbus.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/timeline.css">
    <link rel="stylesheet" href="/css/openinglogo.css">

    <style>
      @keyframes moveRight {

        0%,
        100% {
          transform: translateX(0px);
        }

        50% {
          transform: translateX(5px);
        }
      }

      /* Arrow down animation is targeted (meant for) Repertoire btn on main page */
      @keyframes moveDown {

        0%,
        100% {
          transform: translateY(-1px);
        }

        50% {
          transform: translateY(7px);
        }
      }

      .bi-arrow-right-short {
        animation: moveRight 1.5s infinite;
      }

      .btn-blur {
        backdrop-filter: blur(10px);
      }

      .bi-arrow-down-short {
        animation: moveDown 1.5s infinite;
      }


      /* used to reduce the font size of the table on smaller screens. Active in table on tourplan.php and terminus.php*/
      @media (max-width: 768px) {
        .small-screen-font {
          font-size: 0.85rem;
          /* or fs-6 equivalent */
        }
      }

      /* Hover effect for images */
      .hover-image {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .hover-image:hover {
        transform: scale(1.05);
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
      }

      /* Gallery image styles used in billedbank.php */
      .gallery-img {
        cursor: zoom-in;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }

      .gallery-img:hover {
        transform: scale(1.03);
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
      }

      /* danceOmatic - Kreativ Kulturuge intro card title (mirrors the graphic previously baked into MainDomKreaWeek.png) */
      .dom-kreauge-textbox {
        max-width: 90%;
      }

      .dom-kreauge-img {
        object-position: right center;
      }

      @media (min-width: 768px) {
        .dom-kreauge-textbox {
          max-width: 60%;
        }

        .dom-kreauge-img {
          object-position: center center;
        }
      }

      .dom-kreauge-title {
        font-weight: 800;
        line-height: 1;
        font-size: clamp(1.3rem, 11vw, 4.5rem);
        white-space: nowrap;
        color: #ffffff;
        text-shadow:
          -1.5px -1.5px 0 #3953b7,
          1.5px -1.5px 0 #3953b7,
          -1.5px 1.5px 0 #3953b7,
          1.5px 1.5px 0 #3953b7,
          -1.5px 0 0 #3953b7,
          1.5px 0 0 #3953b7,
          0 -1.5px 0 #3953b7,
          0 1.5px 0 #3953b7;
      }

      .dom-kreauge-title-sub {
        font-weight: 600;
        line-height: 1;
        font-size: clamp(1.5rem, 5vw, 3.5rem);
        color: #4069b0 !important;
        -webkit-text-stroke: 0;
        text-shadow: none;
      }
    </style>