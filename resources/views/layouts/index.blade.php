<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Emigrar </title>
    <link rel="icon" type="image/png" href="{{URL::asset('images/favicon.png')}}">
    <!-- ==================Start Css Link===================== -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href={{URL::asset('css/animate.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/datepicker.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/OverlayScrollbars.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/fontawesome.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/icofont.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/magnific-popup.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/owl.theme.default.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/slick.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/slick-theme.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/slider-range.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/select2.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/tippy.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/app.css')}}>

    <link rel="stylesheet" href="{{URL::asset('visa/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- ==================End Css Link===================== -->




    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>


<!--
      ================== Header Area Start===================
   -->

<div class="rt-preloder">
    <div class="preloder-box">
        <img src="{{URL::asset('images/all-img/preloader.gif')}}" alt="preloder image" draggable="false">
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->

<header class="rt-site-header  rt-fixed-top white-menu">
    <div class="top-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                   @yield('top-m')
                </div><!-- end top header single -->
                <div class="col-md-6">
                    <ul class="text-center text-md-right top-social">
                        <li><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i>Englishs</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">English</a>
                                <a class="dropdown-item" href="#">French</a>
                                <a class="dropdown-item" href="#">Trukis</a>
                            </div>
                        </li>
                        <li><a href="#"><i class="fas fa-briefcase"></i>My Trips</a></li>
                        <li><a href="#" data-target="#rtmodal-1" data-toggle="modal"><i class="far fa-user-circle"></i>Sign in | Join</a></li>
                    </ul>
                </div><!-- end top header single -->
            </div>
        </div>
    </div> <!-- end top header -->



    <nav class="navbar ">
        <div class="container navbar-bg">
            <div class="mobile-menu2">
                <div class="menu-click">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <a href="index.html" class="brand-logo"><img src="{{URL::asset('images/logo/Logo-icon.png')}}" alt=""></a>
            <a href="index.html" class="sticky-logo"><img src="{{URL::asset('images/logo/logo.png')}}" alt=""></a>
            <div class="ml-auto d-flex align-items-center">


                <div class="main-menu ">
                    <ul class="show-mobile">
                        <li class="menu-logo d-none">
                            <div class="row">
                                <div class="col-8"><a href="index.html" class=""><img src="{{URL::asset('images/logo/logo-white.png')}}" alt=""></a></div>
                                <div class="col-4 my-auto"><a class="mb-3 menu-click menu-click-cross mr-3"
                                                              href=""><i class="fas fa-times text-white"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="current-menu-item"><a href="#home">Home</a></li>
                        <li><a href="{{route('flights')}}">Flight</a></li>
                        <li><a href="{{route('hotels')}}">Hotels</a></li>
                        <li><a href="service-1.html">Group</a></li>
                        <li><a href="{{route('tours')}}">Tours</a></li>
                        <li><a href="service-1.html">Transfer</a></li>
                        <li><a href="service-1.html">Car Rental</a></li>
                        <li><a href="service-1.html">Insurrance</a></li>
                        <li><a href="service-1.html">Bus</a></li>
                        <li><a href="service-1.html">Special Ticket</a></li>
                        <li class="d-lg-none"><a href="{{route("support")}}">Contact Us</a></li>
{{--                        <li class="menu-item-has-children"><a href="#">Pages</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li class="menu-item-has-children"><a href="#">Home Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="index.html">Home One</a></li>--}}
{{--                                        <li><a href="index-02.html">Home Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">Hotel Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="hotel-1.html">Hotel One</a></li>--}}
{{--                                        <li><a href="hotel-2.html">Hotel Two</a></li>--}}
{{--                                        <li><a href="hotel-3.html">Hotel Three</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">Flight Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="{{route('flight1')}}">Flight One</a></li>--}}
{{--                                        <li><a href="{{route('flight2')}}">Flight Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">train Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="train-1.html">train One</a></li>--}}
{{--                                        <li><a href="train-2.html">train Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">trip Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="trip-1.html">trip One</a></li>--}}
{{--                                        <li><a href="trip-2.html">trip Two</a></li>--}}
{{--                                        <li><a href="trip-3.html">trip Three</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">car Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="car-1.html">car One</a></li>--}}
{{--                                        <li><a href="car-2.html">car Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">blog Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="blog.html">blog</a></li>--}}
{{--                                        <li><a href="blog-grid.html">blog-grid</a></li>--}}
{{--                                        <li><a href="single-blog.html">blog-single 1</a></li>--}}
{{--                                        <li><a href="singleblog-lsidebar.html">blog-single 2</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">Others Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="about.html">About</a></li>--}}
{{--                                        <li><a href="service-1.html">service</a></li>--}}
{{--                                        <li><a href="afflite.html">afflite</a></li>--}}
{{--                                        <li><a href="help.html">help</a></li>--}}
{{--                                        <li><a href="how-work.html">how-work</a></li>--}}
{{--                                        <li><a href="contact.html">contact</a></li>--}}
{{--                                        <li><a href="404.html">404</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li> <a href="blog.html">Blog</a></li>--}}

                    </ul>
                    <ul class="show-desktop">
                        <li class="menu-logo d-none">
                            <div class="row">
                                <div class="col-8"><a href="index.html" class=""><img src="{{URL::asset('images/logo/logo-white.png')}}" alt=""></a></div>
                                <div class="col-4 my-auto"><a class="mb-3 menu-click menu-click-cross mr-3"
                                                              href=""><i class="fas fa-times text-white"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="current-menu-item"><a href="{{route('index')}}">HOME</a></li>
                        <li ><a href="{{route('our_products')}}">OUR PRODUCT</a></li>
                        <li ><a href="{{route('our_services')}}">OUR SERVICE</a></li>
                        <li ><a href="{{route('keys')}}">KEYS</a></li>
                        <li class="d-lg-none"><a href="{{route("support")}}">CONTACT US</a></li>
{{--                        <li class="menu-item-has-children"><a href="#">Pages</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li class="menu-item-has-children"><a href="#">Home Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="index.html">Home One</a></li>--}}
{{--                                        <li><a href="index-02.html">Home Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">Hotel Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="hotel-1.html">Hotel One</a></li>--}}
{{--                                        <li><a href="hotel-2.html">Hotel Two</a></li>--}}
{{--                                        <li><a href="hotel-3.html">Hotel Three</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">Flight Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="{{route('flight1')}}">Flight One</a></li>--}}
{{--                                        <li><a href="{{route('flight2')}}">Flight Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">train Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="train-1.html">train One</a></li>--}}
{{--                                        <li><a href="train-2.html">train Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">trip Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="trip-1.html">trip One</a></li>--}}
{{--                                        <li><a href="trip-2.html">trip Two</a></li>--}}
{{--                                        <li><a href="trip-3.html">trip Three</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">car Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="car-1.html">car One</a></li>--}}
{{--                                        <li><a href="car-2.html">car Two</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">blog Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="blog.html">blog</a></li>--}}
{{--                                        <li><a href="blog-grid.html">blog-grid</a></li>--}}
{{--                                        <li><a href="single-blog.html">blog-single 1</a></li>--}}
{{--                                        <li><a href="singleblog-lsidebar.html">blog-single 2</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="menu-item-has-children"><a href="#">Others Pages</a>--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="about.html">About</a></li>--}}
{{--                                        <li><a href="service-1.html">service</a></li>--}}
{{--                                        <li><a href="afflite.html">afflite</a></li>--}}
{{--                                        <li><a href="help.html">help</a></li>--}}
{{--                                        <li><a href="how-work.html">how-work</a></li>--}}
{{--                                        <li><a href="contact.html">contact</a></li>--}}
{{--                                        <li><a href="404.html">404</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li> <a href="blog.html">Blog</a></li>--}}

                    </ul>
                    <div class="mobile-menu">
                        <div class="menu-click">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div><!-- end main menu -->
            <div  class="rt-nav-tolls d-flex align-items-center">
                <div class="mobile-right-menu mb-2">
           <span class="d-none d-sm-inline right-nav ">
              <a href="#" class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas mr-2"></i>Eng</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">French</a>
                            <a class="dropdown-item" href="#">Trukis</a>
                        </div>
          </span>
                    <span class="d-none d-sm-inline right-nav">
                    <a href="#" class="text-white"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                  </span>
                    <span class="d-none d-sm-inline right-nav">
                    <a href="#" class="text-white"><i class="fas fa-user-plus mr-2"></i>Register</a>
                  </span>
                </div>
                <span id="cbtn"  class=""><a  href="contact.html" class="rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1">Contact
            Us</a>
         </span>

            </div>


        </div>
    </nav>
    </div><!-- /.bootom-header -->

</header>


<!-- Modal -->
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="{{URL::asset('images/logo/Logo-icon.png')}}" alt="modal logo" draggable="false">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="{{URL::asset('images/logo/Logo-icon.png')}}" alt="modal logo" draggable="false">
                    <h4>Create your Account</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-input one">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheckss">
                                <label class="form-check-label" for="gridCheckss">
                                    Remember Password
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Don’t have an account? <a href="#" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-input two">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Enter your mail address">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck333">
                                <label class="form-check-label" for="gridCheck333">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                            </div><!-- ./orm-group -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck222">
                                <label class="form-check-label" for="gridCheck222">
                                    By clicking "Sign up" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                        <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Already have an account?<a href="#">LOGIN <i class="icofont-double-right"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-footer">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class="rt-social rt-circle-style2">

                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div><!-- /.rt-modal-footer -->
            </div>
        </div>
    </div>
</div>
<ul class="nav navbar-m">
    <li class="nav-item nav-col align-items-center d-flex mt-2">
                <span class="navbar-m-icon">
                <i class="fas fa-home "></i>
                    </span>
        <span class="navbar-m-text">
                <a href="#" class="nav-link nm-l">Home</a>
                </span>

    </li>
    <li class="nav-item nav-col align-items-center d-flex mt-2">
                <span class="navbar-m-icon">
                <i class="fas fa-user-circle"></i>
                    </span>
        <span class="navbar-m-text">
                <a href="#" class="nav-link nm-l">Account</a>
                </span>

    </li>
    <li class="nav-item nav-col align-items-center d-flex mt-2">
                <span class="navbar-m-icon">
                <i class="fas fa-book"></i>
                    </span>
        <span class="navbar-m-text">
                <a href="#" class="nav-link nm-l">Booking</a>
                </span>

    </li>
    <li class="nav-item nav-col align-items-center d-flex mt-2">
                <span class="navbar-m-icon">
               <i class="far fa-credit-card"></i>
                    </span>
        <span class="navbar-m-text">
                <a href="#" class="nav-link nm-l">E-cash</a>
                </span>

    </li>
    <li class="nav-item nav-col align-items-center d-flex mt-2">
                <span class="navbar-m-icon">
              <i class="fas fa-phone-square"></i>
                    </span>
        <span class="">
                <a href="#" class="nav-link nm-l">Support</a>
                </span>

    </li>

</ul>
@yield('content')
<!--

    !============= Footer Area Start ===========!
 -->
<section class="rt-site-footer" data-scrollax-parent="true">
    <div class="rt-shape-emenetns-1 f33" data-scrollax="properties: { translateY: '340px' }"></div><!-- /.rt-shape-emenetns-1 -->
    <div class="footer-top rtbgprefix-cover f34">
        <div class="footer-subscripbe-box wow fade-in-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 mx-auto text-center">
                        <div class="rt-section-title-wrapper text-white">
                            <h2 class="rt-section-title">
                                <span>Newsletter</span>

                                Get The Latest news
                            </h2><!-- /.rt-section-title -->
                            <p>
                                Get the latest travel inspirations and deals from Emigrar semimonthly with your email. You can
                                unsubscribe at any time. Your privacy & personal information will be treated.
                            </p>
                        </div><!-- /.rt-section-title-wrapper -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" placeholder="Enter your email address" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="button-addon2">Subcribe Now</button>
                            </div>
                        </div><!-- end input gorup -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class="rt-dot-divider"></div><!-- /.rt-dot-divider -->
            </div><!-- /.container -->
        </div><!-- /.footer-subscripbe-box -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="1s">
                        <h3 class="rt-footer-title">Company Info</h3><!-- /.rt-footer-title -->
                        <ul class="rt-usefulllinks">
                            <li>
                                <a href="{{route("about_us")}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route("support")}}">Support</a>
                            </li>
                            <li>
                                <a href="#">Authenticity Guarantee</a>
                            </li>
                            <li>
                                <a href="#">Customer Reviews</a>
                            </li>
                            <li>
                                <a href="{{route("privacy_policy")}}">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Business License</a>
                            </li>

                        </ul>

                    </div><!-- /.rt-single-widge -->
                </div><!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="1.5s">
                        <h3 class="rt-footer-title">Work With Us</h3>
                        <ul class="rt-usefulllinks">
                            <li><a href="#">Become Partner</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Become Affiliate</a></li>
                            <li><a href="#">Associations</a></li>
                            <li><a href="#">Advertise with us</a></li>
                            <li><a href="#">Retirement Plan</a></li>
                            <li><a href="#">Travel APIs</a></li>
                        </ul>
                    </div><!-- /.rt-single-widget -->
                </div><!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="2s">
                        <h3 class="rt-footer-title">
                            My Account
                        </h3>
                        <ul class="rt-usefulllinks">

                            <li><a href="#">Manage Your Account</a></li>
                            <li><a href="#">Build your own trip</a></li>
                            <li><a href="#">Order Sttatus</a></li>
                            <li><a href="#">Booking Guide</a></li>
                            <li><a href="#">Travel Insurance & Safety Guide</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
                <div class="col-lg-3 col-md-6">
                    <div class="rt-single-widget wow fade-in-bottom" data-wow-duration="2.5s">
                        <h3 class="rt-footer-title">
                            Plan Your Trip
                        </h3>
                        <ul class="rt-usefulllinks">
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Flights</a></li>
                            <li><a href="#">Tour Packages</a></li>
                            <li><a href="#">Accommodations</a></li>
                            <li><a href="#">Transportation</a></li>
                        </ul><!-- /.rt-usefulllinks -->
                    </div><!-- end single widget -->
                </div><!-- /.col-lg-3-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <div class="copy-text wow fade-in-bottom" data-wow-duration="1s">
                        Copyright © 2018.All Rights Reserved By <a href="#">Emigrar</a>
                    </div><!-- /.copy-text -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="rt-footer-social wow fade-in-bottom" data-wow-duration="1.5s">
                        <ul>
                            <li><a href="#"><img src="{{URL::asset('images/brands/card-1.png')}}" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="{{URL::asset('images/brands/card-2.png')}}" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="{{URL::asset('images/brands/card-3.png')}}" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="{{URL::asset('images/brands/card-4.png')}}" alt="cardimage" draggable="false"></a></li>
                            <li><a href="#"><img src="{{URL::asset('images/brands/card-5.png')}}" alt="cardimage" draggable="false"></a></li>

                        </ul>
                    </div><!-- /.rt-footer-social -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</section>



<!-- ==================Start Js Link===================== -->
<script src="{{URL::asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::asset('js/popper.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/moment.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{URL::asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('js/instafeed.min.js')}}"></script>
<script src="{{URL::asset('js/waypoints.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('js/TweenMax.min.js')}}"></script>
<script src="{{URL::asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="{{URL::asset('js/wow.js')}}"></script>
<script src="{{URL::asset('js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{URL::asset('js/jquery-ui.js')}}"></script>
<script src="{{URL::asset('js/jquery.appear.js')}}"></script>
<script src="{{URL::asset('js/select2.min.js')}}"></script>
<script src="{{URL::asset('js/slick.min.js')}}"></script>
<script src="{{URL::asset('js/slider-range.js')}}"></script>
<script src="{{URL::asset('js/vivus.min.js')}}"></script>
<script src="{{URL::asset('js/tippy.all.min.js')}}"></script>
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('visa/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('visa/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
<script src="{{URL::asset('visa/vendor/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{URL::asset('visa/js/main.js')}}"></script>



<!-- ==================End Js Link===================== -->

</body>

</html>
