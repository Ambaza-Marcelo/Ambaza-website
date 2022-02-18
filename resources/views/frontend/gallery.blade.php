
<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ambaza</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="png" href="cliparts/ambaza.png">

 <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Preloader Start -->
    <!--<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
-->
    <header>
        <!-- Header Start -->
        <div class="header-area">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="{{ url('/')}}"><img src="{{asset('images/ambaza.png')}}" alt=""><span>Ambaza Marcellin</span></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">
                                                <li><a href="{{ url('/')}}">Accueil</a></li>
                                                <li><a href="{{url('about-us')}}">A propos de nous</a></li>
                                                <li><a href="{{url('services')}}">Services</a></li>
                                                <li><a href="#">Actualités</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{url('blog')}}">Blog</a></li>
                                                        <li><a href="{{url('elements')}}">Ambaza</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{url('contact-us')}}">Contact</a></li>
                                                <li><a href="{{ route('login') }}">Se connecter</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
  <main>

    <!-- Hero Start -->
    <div class="slider-area ">
      <div class="slider-height2 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap">
                <h2>Ambaza</h2>
                <nav aria-label="breadcrumb ">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                  <li class="breadcrumb-item"><a href="#">Ambaza</a></li> 
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
   
    <div class="whole-wrap">
        <div class="section-top-border">
          <h3 class="mb-30">Citation</h3>
          <div class="row">
            <div class="col-lg-12">
              <blockquote class="generic-blockquote">
                La compagnie de ma famille suffit amplement à mon bonheur et la modestie chaleureuse des petits logis en bois me convient d'avantage que la prétention des palais. Laisser couler les jours me semble être une occupation idéale, parce qu'essentielle.
              </blockquote>
            </div>
          </div>
        </div>
        <div class="section-top-border">
          <h3>Images</h3>
          <div class="row gallery-item">
            @foreach($pictures as $picture)
            <div class="col-md-4">
              <a href="{{asset('storage/gallery/'.$picture->meta_value)}}" class="img-pop-up">
                <div class="single-gallery-image" style="background: url({{asset('storage/gallery/'.$picture->meta_value)}});"></div>
              </a>
            </div>
            @endforeach
          </div>
          <br>
          {{$pictures->links()}}
        </div>
    </div>
    <!-- End Align Area -->
  </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                   <div class="row justify-content-center">
                       <div class="col-lg-6">
                            <div class="footer-top-cap text-center">
                                <a href="{{ url('/')}}"><img src="" alt="">Ambaza Marcellin</a>
                                <span><a href="#">Informaticien</a></span>
                                <p>Rohero,Boulevard de l'uprona</p>
                                <p>Bujumbura,Burundi</p>
                            </div>
                       </div>
                   </div>
               </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Ambaza &copy;<script>document.write(new Date().getFullYear());</script> Tous le droits sont réservés | <i class="fa fa-heart" aria-hidden="true"></i> par <a href="" target="_blank">Marcellin</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a>Suivez-nous sur</a>
                                <a href="https://twitter.com/Marcellin_dev"><i class="fab fa-twitter" title="Twitter"></i></a>
                                <a href="https://www.facebook.com/ambazamarcelo/"><i class="fab fa-facebook-f" title="Facebook"></i></a>
                                <a href="https://www.instagram.com/invites/contact/?i=1ebsx2q0kvxux&utm_content=5os9yu6"><i class="fab fa-instagram" title="Instagram"></i></a>
                                <a href="https://github.com/Ambaza-Marcelo"><i class="fab fa-github" title="Github"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <div id="back-top" >
        <a title="Aller au dessus" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

<!-- JS here -->
  
    <!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
      <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    
    <!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
    <!-- Jquery Plugins, main Jquery -->  
        <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>