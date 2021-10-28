<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AMBAZA MARCELLIN</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
                                    <a href="{{ url('/')}}"><img src="" alt="">Ambaza Marcellin</a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav> 
                                            <ul id="navigation">
                                                <li><a href="{{ url('/')}}">Home</a></li>
                                                <li><a href="{{url('about-us')}}">About</a></li>
                                                <li><a href="{{url('services')}}">Services</a></li>
                                                <li><a href="#">Life style</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{url('blog')}}">Blog</a></li>
                                                        <li><a href="{{url('elements')}}">Ambaza</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{url('contact-us')}}">Contact</a></li>
                                                <li><a href="{{ route('login') }}">Sign in</a></li>
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

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
               
                <!-- Single Slider -->
                <div class="d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every IT Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">I’m Full stack developper Ambaza Marcellin</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s" >I do software engineering,i have experience in web development, mobile development,network and datacenter.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="{{url('contact-us')}}" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- About Area start -->
        <section class="about-area section-paddingt30">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>The World Technological.</h3>
                            <p class="pera1">Welcome in the world technological,where all sectors like agriculture,education,health,transport can be digitized.</p>
                            <p>Let's live in the world technological.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>you can discuss with me<br> & Discussion.</h3>
                            <p>talk with me.</p>
                           <div class="send-cv">
                                <a href="mailto:ambazamarcellin200@gmail.com">Ambaza Marcellin.</a>
                                <i class="ti-arrow-right"></i>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Categories Area Start -->
        <section class="categories-area section-padding3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>What Services you will Get from me!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="">{{ $service->title}}</a></h5>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 </div>
            </div>
        </section>
        <!-- Categories Area End -->
        <!-- Services Area Start -->
        <section class="services-area  services-padding">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle">
                                <h2>What Services you will Get from me!</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->                                            
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> All</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Web Development</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Mobile Developpment</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        @foreach($services as $service)
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{ asset('storage/services')}}/{{ $service->image }}" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/7000.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/1002.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/1004.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/1111.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/1110.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/8888.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/8888.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/2000.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/9999.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/3535.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="assets/img/4444.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!-- Want To Work Start -->
        <section class="wantToWork-area w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>contact me, i'm available</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="tel:71164310" class="btn btn-black f-right">Contact Me Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To Work End -->

        <!-- client-comments -->
        <section class="client-comments section-paddingt30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>Some Possitive Feedback  That Encourage Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-blog-area">
                <div class="container">
                    <div class="custom-row">
                        <div class="blog-active">
                            @foreach($encourages as $encourage)
                            <div class="col-xl-10">
                                <div class="blog-wrapper">
                                    <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{ asset('storage/encourages')}}/{{$encourage->image}}" alt="" width="200" height="250" style="border-radius: 50%;">
                                            </div>
                                    
                                    </div>
                                        <div class="comment-person">
                                            <h3>{{$encourage->name}}</h3>   
                                            <h4>{{$encourage->service->title}}</h4>
                                        </div>
                                        <p>{{$encourage->description}}</p>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>          
            <!-- End latest-blog-area -->
        </section>
        <!-- Brand Area Start -->
        <div class="brand-area pb-bottom">
            <div class="container">
                <div class="brand-active brand-border pt-50 pb-40">
                    <div class="single-brand">
                        <img src="{{ asset('images/1000.jpg')}}" width="100" height="50" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('images/2000.jpg')}}" width="100" height="50" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('images/3000.jpg')}}" width="100" height="50" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('images/4000.jpg')}}" width="100" height="50" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('images/5000.jpg')}}" width="100" height="50" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('images/7000.jpg')}}" width="100" height="50" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{ asset('images/6000.jpg')}}" width="100" height="50" alt="">
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
                            <h3>If Not Now, When? Let’s Work Together!</h3>
                            <p>let's work together in order to do more about technology and to develop our pretty country.
                            my vision is to see burundians youngs do more like software,robots,etc.</p>
                            
                      </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <form action="#" class="contact-wrapper">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="email" name="email" placeholder="Email Address">
                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
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
                                <span><a href="#">Developper</a></span>
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
  Ambaza &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Marcellin</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a>Stay Connected</a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
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
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
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