<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/css/style.css?3asdf">

    <!-- Javascript app.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Custom FAwesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Scroll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script type="text/javascript"> var currenttime = '<?php print date("F d, Y H:i:s", time()) ?>';</script>

    <title>Biomasse Thurgau</title>
</head>

<body>

    <section id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <i class='fas fa-seedling'></i> <a class="navbar-brand theme-text" href="#">
                        &nbsp;Biomasse</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item m-2">
                                <a class="nav-link act" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item m-2">
                                <a class="nav-link" href="#">Datenschutz</a>
                            </li>
                            <li class="nav-item m-2">
                                <a class="nav-link" href="#">Kontakt</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- navbar code -->






            <div class="middle">
                <h1 class="text-white display-3 fw-bold"><span class="theme-text">Biomasse</span> – Energie der Zukunft?</h1>
            </div>

            

        </div>

        <div class="waves">
            <svg width="100%" height="220px" fill="none" version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#59FF38" />
                    <stop offset="50%" stop-color="#59FF38" />
                    <stop offset="100%" stop-color="#59FF38" />
                </linearGradient>
                <path
                        fill="url(#grad1)"
                        d="
          M0 67
          C 273,183
            822,-40
            1920.00,106

          V 359
          H 0
          V 67
          Z">
                    <animate
                            repeatCount="indefinite"
                            fill="url(#grad1)"
                            attributeName="d"
                            dur="10s"
                            attributeType="XML"
                            values="
            M0 77
            C 473,283
              822,-40
              1920,116

            V 359
            H 0
            V 67
            Z;

            M0 77
            C 473,-40
              1222,283
              1920,136

            V 359
            H 0
            V 67
            Z;

            M0 77
            C 973,260
              1722,-53
              1920,120

            V 359
            H 0
            V 67
            Z;

            M0 77
            C 473,283
              822,-40
              1920,116

            V 359
            H 0
            V 67
            Z
            ">
                    </animate>
                </path>
            </svg>
        </div>
    </section>


<!-- Apple Cards -->

<section>

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" >
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" data-aos-delay="300" data-aos="fade-right" data-aos-duration="1000" >
      <div class="my-3 py-3">
        <h2 class="display-5">Warum Biomasse?</h2>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </p>
      </div>
      <div>
      <img src="src/img/Biomasse_convert.png" class="img-fluid m-3 mx-auto" alt="" />
      </div>
    </div>
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" data-aos-delay="600" data-aos="fade-left">
      <div class="my-3 p-3">
        <h2 class="display-5">Woher kommen die Daten</h2>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </p>
      </div>
      <div>
      <img src="src/img/Data.png" class="img-fluid m-3 mx-auto" alt="">
      </div>
    </div>
  </div>


  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" data-aos="fade-up-right" data-aos-delay="600">
      <div class="my-3 py-3">
        <h2 class="display-5">Was ist Biomasse?</h2>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </p>
      </div>
      <div>
      <img src="src/img/Biomasse.png" class="img-fluid m-3 mx-auto" alt="" />
      </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" data-aos="fade-up-left" data-aos-delay="300">
      <div class="my-3 p-3">
        <h2 class="display-5">Feedback</h2>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </p>
      </div>
      <div>
      <img src="src/img/feedback.png" class="img-fluid m-3 mx-auto" alt="">
      </div>
    </div>
  </div>


  </section>


    <section id="Content">

    <div id="main_content">

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="text-center m-3" data-aos="zoom-in">
        <h1 class="title">Karten</h1>
        </div>

            <div data-aos-delay="1000" data-aos="zoom-in" id="map" class="mx-auto"></div>
        </div>
    </div>

    </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="src/javascript/app.js" charset="UTF-8"></script>
        <script src="src/javascript/app.js"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <div class="wrapper">
        <div class="divider div-transparent div-arrow-down"></div>
            <footer class = "lower container">
    <div id = "textbox">
    <p class ="left">&copy; 2021 Biomasse Thurgau</p>
    <p class = "right"><span class="text-muted" id="servertime" ></span> &middot; <a href="#">nach oben </a></p>
    </div>
</footer>
    </div>
    <script src="src/javascript/time.js"></script>
</body>

</html>


