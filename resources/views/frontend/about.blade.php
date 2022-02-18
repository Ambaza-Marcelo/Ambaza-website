<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A propos de nous</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="png" href="cliparts/ambaza.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
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
    <!--
    <div id="preloader-active">
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
    <!-- Preloader Start -->
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
                                <h2>A propos de moi</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">A propos de moi</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- About Me Start -->
        <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-me-img mb-30">
                            <img src="{{asset('storage/abouts')}}/{{$abouts->image}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-me-caption">
                            <h2>{{$abouts->title}}</h2> 
                            <p class="pb-30">J’ai souvent consulté des cours sur OpenClassrooms.
                            Je n’ai pas utilisé tous les cours. Ceux-ci ne sont pas obligatoires pour valider la formation, c’est une des spécificités d’OpenClassrooms.
                            Je pense que cela dépend des étudiants : certains adorent et veulent tous les faire, d’autres veulent aller plutôt droit au but (je suis de ceux-là).
                            C’est l’avantage des formations OpenClassrooms : elles ne nous forcent en rien. Si un cours ne nous intéresse pas on peut l’ignorer ou en suivre un autre. 
                            </p>
                            <h5>{{$abouts->description}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Me End -->
        <!-- About Area start -->
        <section class="about-area section-paddingt30">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>Les solutions IT</h3>
                            <p class="pera1">Je suis un jeune de services en génie logicielle, dans le domaine des Technologies d'information et de la communication (TIC) et des systèmes d'information.
                            je vous accompagne et conseille sur toutes les phases de vos projets de transformation digitale.

                            je prends soin de vous écouter et d’identifier, avec vous, vos besoins pour vous proposer la solution qui répond le mieux à votre projet. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>Discussion.</h3>
                            <p>Discutez avec moi</p>
                           <div class="send-cv">
                                <a href="tel:+257 71164310">+257 71164310</a>
                                <i class="ti-arrow-right"></i>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Want To Work Start -->
        <section class="wantToWork-area w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>N'hésitez pas à me contacter.</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="tel:71164310" class="btn btn-black f-right">Contact</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To Work End -->
        <!-- client-comments -->
        <div class="client-comments section-paddingt30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>Quelques commentaires positifs qui nous encouragent</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest-blog-area start -->
            <div class="latest-blog-area">
                <div class="container">
                    <div class="custom-row">
                        <div class="blog-active">
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                        <div class="person-img">
                                            <img src="{{asset('images/clipart2.png')}}" alt="">
                                        </div>
                                        <div class="comment-person">
                                            <h2>Nimushimirimana Huzaifa</h2>   
                                            <span>Dévéloppeur full stack</span>
                                        </div>
                                    </div>
                                        <p>Un bon programmeur que j'adore ambaza marcellin qui a l'esprit de l’innovation, la créativité, l’originalité et sérieux.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{asset('images/clipart2.png')}}" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Ndayiragije Thierry</h2>   
                                                <span>Dévéloppeur Frontend</span>
                                            </div>
                                    </div>
                                        <p>Ce jeune est un vrai programmeur,on a travaillé ensemble dans la société net-telecom,il était courageux et il avait une expertise en Laravel.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{asset('images/clipart2.png')}}" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Ndikumagenge Blaise</h2>   
                                                <span>Dévéloppeur Backend</span>
                                            </div>
                                    </div>
                                        <p>j'ai connu ce jeune dévéloppeur en 2019 lors de la presentation du logiciel de la gestion academique sur notre université du Lac Tanganyika.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{asset('images/clipart2.png')}}" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Mwinyi Séraphin</h2>   
                                                <span>Dévéloppeur Backend</span>
                                            </div>
                                    </div>
                                        <p>un jeune motivé,courageux et qui voudrait toujours connaitre les nouvelles technologies surtout dans le domaine de génie logiciel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- End latest-blog-area -->
        </div>
        <div class="brand-area pb-bottom">
            <div class="container">
                <div class="brand-active brand-border pt-50 pb-40">
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/laravel.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/java-coffee.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/bootstrap.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/c-sharp.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/c-plus-plus.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/python.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/mysql.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/android-studio.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/css3.png')}}" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('cliparts/php-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
        <!-- Contact Info Start -->
        <section class="contact-info-area w-padding2" data-background="assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-7">
                      <div class="contact-caption mb-50">
                            <h3>Si pas maintenant quand? Travaillons ensemble !</h3>
                            <p>travaillons ensemble afin d'en faire plus sur la technologie et de développer notre beau pays.
                            mon objectif est d’aider plus d'un million de sociétés au Burundi à trouver un systeme de gestion.</p>
                            
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <form action="{{route('site.contact_us_form')}}" class="contact-wrapper" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Votre nom">
                            <input type="email" name="email" placeholder="Adresse e-mail">
                            <textarea name="message" id="message" placeholder="Votre message"></textarea>
                            <button class="submit-btn2" type="submit">Envoyer un message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info End -->

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
    <!-- Scroll Up -->
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