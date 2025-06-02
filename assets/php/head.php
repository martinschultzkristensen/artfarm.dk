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
    </style>