<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
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

        <!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Blog Ambaza</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach($posts as $post)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{asset('storage/posts/'.$post->image)}}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</h3>
                                        <p>{{ \Carbon\Carbon::parse($post->created_at)->format('M') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2>{{$post->title}}</h2>
                                    </a>
                                    <p>{{$post->description}}.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Ambaza, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 05 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        {{ $posts->links()}}
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search '
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Search'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                                </form>
                            </aside>

                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Some Persons who encourages me</h3>
                                @foreach($encourages as $encourage)
                                <div class="media post_item">
                                    <img src="{{asset('storage/encourages/'.$encourage->image)}}" width="100" height="100" alt="encourage">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>{{$encourage->description}}</h3>
                                        </a>
                                        <p>{{ \Carbon\Carbon::parse($encourage->created_at)->format('M d,Y') }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </aside>

                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                @foreach($posts as $post)
                                <div class="media post_item">
                                    <img src="{{asset('storage/posts/'.$post->image)}}" width="100" height="50" alt="post">
                                    <div class="media-body">
                                        <a href="#">
                                            <h3>{{$post->description}}</h3>
                                        </a>
                                        <p>{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y') }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">I do some Projects Like</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">Hotel Management System</a>
                                    </li>
                                    <li>
                                        <a href="#">Banking Management System</a>
                                    </li>
                                    <li>
                                        <a href="#">School Management System</a>
                                    </li>
                                    <li>
                                        <a href="#">Pharmacy Management System</a>
                                    </li>
                                    <li>
                                        <a href="#">Restaurant Management System</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">I use These Technologies</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">Htm/css/bootsrap/tailwind</a>
                                    </li>
                                    <li>
                                        <a href="#">JavaScript/Jquery/Jquery UI/Vue Js</a>
                                    </li>
                                    <li>
                                        <a href="#">Php/Laravel</a>
                                    </li>
                                    <li>
                                        <a href="#">Java</a>
                                    </li>
                                    <li>
                                        <a href="#">C#</a>
                                    </li>
                                    <li>
                                        <a href="#">C++</a>
                                    </li>
                                    <li>
                                        <a href="#">Python</a>
                                    </li>
                                    <li>
                                        <a href="#">Dart/Flutter</a>
                                    </li>
                                    <li>
                                        <a href="#">Ionic/Cordova</a>
                                    </li>
                                    <li>
                                        <a href="#">Sql</a>
                                    </li>
                                    <li>
                                        <a href="#">C</a>
                                    </li>
                                    <li>
                                        <a href="#">Mysql/SqlLite/PostgreSql</a>
                                    </li>
                                    <li>
                                        <a href="#">Xml/Yaml</a>
                                    </li>
                                    <li>
                                        <a href="#">Vs code/sublime Text/PyCharm/Code block</a>
                                    </li>
                                    <li>
                                        <a href="#">Wampserver/EasyPhp/Laragon/Homestead/Xamp</a>
                                    </li>
                                    <li>
                                        <a href="#">Android Studio/Netbean/Eclipse</a>
                                    </li>
                                    <li>
                                        <a href="#">Hostinger/PlanetHoster</a>
                                    </li>
                                    <li>
                                        <a href="#">UML</a>
                                    </li>
                                    <li>
                                        <a href="#">Github/Git</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">News</h3>
                                @foreach($news as $new)
                                <div class="media post_item">
                                    <img src="{{asset('storage/news/'.$new->image)}}" width="100" height="50" alt="new">
                                    <div class="media-body">
                                        <a href="blog_details.html">
                                            <h3>{{$new->description}}</h3>
                                        </a>
                                        <p>{{ \Carbon\Carbon::parse($new->created_at)->format('M d,Y') }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </aside>


                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>

                                <form action="{{URL::route('site.subscribe')}}" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

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
                                <a href="#"><i class="fas fa-globe"></i></a>
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
		
		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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