<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShoppingFan</title>
  <!-- -------- anime css ------ -->
  <link rel="stylesheet" href="../../css/animate.css">
  <!-- --------- tiny slider css ------ -->
  <link rel="stylesheet" href="../../css/tiny-slider.css">
  <!-- --------- font awsome css ------ -->
  <link rel="stylesheet" href="../../css/all.css">
  <!-- -------- venobox css ------- -->
  <link rel="stylesheet" href="../../css/venobox.css" type="text/css" media="screen" />
  <!-- ---- Bootstrap css--- -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- ---------- default css --------- -->
  <link rel="stylesheet" href="../../css/default.css">
  <!-- --- style css -->
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
  <!-- --------- preloader ------------ -->
  <div class="preloader">
    <div class="loader">
      <div class="spinner">
        <div class="spinner-container">
          <div class="spinner-rotator">
            <div class="spinner-left">
              <div class="spinner-circle"></div>
            </div>
            <div class="spinner-right">
              <div class="spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-------   Header star ------>
  <header class="header-area">
    <div class="navbar-area">
      <!---- navbar star--->
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
           <!--<a class="navbar-brand" href="#">
              <img class="images" src="../../assets/img/Shopping1.png" alt="">
            </a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" data-scroll-nav="0" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="2" href="#about">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="3" href="#">Subastas</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="5" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="6" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="4" href="#">Contacto</a>
                </li>


              </ul>

            </div>
          </div>
        </nav>
      </div>
    </div>
    <!---- navbar end--->
    <div class="header-hero" data-scroll-index="0">
      <!---- home star ------>
      <div class="shape shape-1"></div>
      <div class="shape shape-2"></div>
      <div class="shape shape-3"></div>
      <div class="shape shape-4"></div>
      <div class="shape shape-5"></div>
      <div class="shape shape-6"></div>
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
          <div class="col-lg-6 col-md-10">
            <div class="header-hero-content">
              <h1 class="header-title wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.2s"><span>Bienvenido a ShoppingFAN</span></h1>
              <p class="text wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.4s">Vamos quién da más, ShoppingFan 
                te ofrece el mejor servicio de subastas online, ganar dinero se ha vuelto una manera mas divertida y segura
                por medio de sitios web.
              </p>
              <ul class="d-flex">
                <li><a href="" class="main-btn wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.8s">Comenzar...</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="header-image">
              <img src="../../assets/img/7.png" alt="" class="image-1  wow fadeInRightBig"
                data-wow-duration="3s" data-wow-delay="0.5s">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="header-shape-1"></div>
        <div class="header-shape-2">
          <img src="assets/img/header/header-shape-2.svg" alt="">
        </div>
      </div>
    </div>
    <!---- home star ------>
  </header>
  <!--------   Header End ----  -->

   <!-- ----------- About Section Start --------- -->
   <section class="about-area pt-70 pb-120" data-scroll-index="2" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-image wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.5s">
            <div class="about-shape"></div>
            <img src="../../assets/img/commpra.png" alt="" class="app">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content mt-50 wow fadeInRightBig" data-wow-duration="3s" data-wow-delay="0.5s">
            <div class="section-title">
              <h1 class="title">Acerca de Nosotros</h1>
              <p class="text">Nuestra empresa Shopping Fan esta dirigida a todas aquellas personas 
                que desean realizar subastas de diferentes articulos, haciendo que el
                proceso sea más facil mediante la innovación tecnologica.
              </p>

              <p class="text">Nuestra empresa Shopping Fan esta dirigida a todas aquellas personas 
                que desean realizar subastas de diferentes articulos, haciendo que el
                proceso sea más facil mediante la innovación tecnologica.
              </p>
            </div>
            <a href="" class="main-btn">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ----------- About Section End --------- -->

  <!-- --------------Footer Section Start ------- -->
  <footer class="footer-area">
    <div class="footer-shape shape-1"></div>
    <div class="footer-shape shape-2"></div>
    <div class="footer-shape shape-3"></div>
    <div class="footer-shape shape-4"></div>
    <div class="footer-shape shape-5"></div>
    <div class="footer-shape shape-6"></div>
    <div class="footer-widget pt-30 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-about mt-50">
              <a href="" class="logo">
                <img src="assets/img/header/logo/landapp-logo.png" alt="">
              </a>
              <p class="text">Día con día shoppingfan puede ser tu mejor aliado para subastar los articulos que desees</p>
              <ul class="social">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="footer-link d-flex flex-wrap">
              <div class="footer-link-wrapper mt-45">
                <div class="footer-title">
                  <h4 class="title">Quick Links</h4>
                </div>
                <ul class="link">
                  <li><a href="">Home</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Testimonial</a></li>
                  <li><a href="">Pricing</a></li>
                  <li><a href="">Download</a></li>
                </ul>
              </div>
              <div class="footer-link-wrapper mt-45">
                <div class="footer-title">
                  <h4 class="title">Support</h4>
                </div>
                <ul class="link">
                  <li><a href="">FAQ</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Terms OF Use</a></li>
                  <li><a href="">Legal</a></li>
                  <li><a href="">Site Map</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-contact mt-45">
              <div class="footer-title">
                <h4 class="title">Quick Links</h4>
              </div>
              <ul class="contact-list">
                <li>
                  <div class="contact-info">
                    <div class="info-content media-body">
                      <p class="text"><i class="fas fa-phone-alt"></i>
                        +6182319469 </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="contact-info">
                    <div class="info-content media-body">
                      <p class="text"><a href=""><i class="far fa-envelope"></i>
                          ShoppingFan@gmail.com </a></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="contact-info">
                    <div class="info-content media-body">
                      <p class="text"><a href=""><i class="fas fa-globe"></i>
                          www.Shopping.com </a></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="contact-info">
                    <div class="info-content media-body">
                      <p class="text"><i class="fas fa-map-marker-alt"></i>
                        123 stree now york city, united states of america 750 </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row justify-content-center">
          <div class="lo-lg-12">
            <div class="copyright">
              <div class="copyright-text text-center">
                <p class="text">Copyright &#169; 2020 <a href="">ShoppingFan</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


    <!-- ---- jquery Js ---- -->
    <script src="../../js/jquery-1.12.4.min.js"></script>
    <!-- -------- venobox js ------ -->
    <script type="text/javascript" src="../../js/venobox.min.js"></script>
    <!-- ---------- wow js ---------- -->
    <script src="../../js/wow.min.js"></script>
    <!-- ---------- tiny slider js --------- -->
    <script src="../../js/tiny-slider.js"></script>
    <!-- ---------- scrollit js ---------- -->
    <script src="../../js/scrollIt.min.js"></script>
    <!-- -------- font awsome js --------- -->
    <script src="../../js/all.js"></script>
    <!-- ---- Bootstrap Js ---- -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- ---- main js --- -->
    <script src="../../js/main.js"></script>