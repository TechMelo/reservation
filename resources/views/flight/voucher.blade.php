<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voucher</title>
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
    <!-- ==================End Css Link===================== -->




    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="rt-preloder">
    <div class="preloder-box">
        <img src="{{URL::asset('images/all-img/preloder.svg')}}" alt="preloder image" draggable="false">
    </div><!-- /.preloder-box -->
</div><!-- /.rt-preloder -->
<div class="container">
<div class="section-title-spacer"></div><!-- /.rt-section-title-spacer -->
<div class="flt-dtls-box rt-mb-30">
    <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
        <div class="left">
            <span>Hong Kong</span> <span><img src="{{URL::asset('images/all-img/shp-ln-1.png')}}" alt="line image" draggable="false"></span> <span>Singapore</span>
            <p>Nov 12, 2018 | 1 adult</p>
        </div><!-- /.left -->
        <div class="right">
            <a href="#" class="rt-btn rt-gradient3 rt-Bshadow-3  pill text-uppercase rt-sm2">Update</a>
        </div><!-- /.right -->
    </div><!-- /.upper-top-content -->
    <div class="flight-list-box">
        <div
            class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
            <div class="flight-logo">
                <img src="{{URL::asset('images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
            </div><!-- /.flight-logo -->
            <div class="pricing">
                <h5>Scoot</h5>
                <p>TR978 | Airbus A320-212</p>
            </div><!-- /.pricing -->
            <div class="flight-time d-flex justify-content-between align-items-center">
                <div class="left">
                    <span class="d-block">10:55</span>
                    <span class="d-block">HKG T2</span>
                </div><!-- /.left -->
                <div class="middle">
                    <img src="{{URL::asset('images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                </div><!-- /.middle -->
                <div class="right">
                    <span class="d-block">15.00</span>
                    <span class="d-block">SIN T2</span>
                </div><!-- /.rght -->
            </div><!-- /.flight-time -->
            <div class="flight-detils">
                <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>

            </div><!-- /.flight-detils -->
            <div class="trip">
                <span class="d-blok">$610</span>
                <span class="d-block">Roundtrip</span>
            </div><!-- /.trip -->
            <div class="book-now">
                <a href="#" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
            </div><!-- /.book-now -->

        </div><!-- /.top-content -->
        <div class="row ml-1">
                <span class="d-block ml-1"><a href="#collapseExample00" class="flt-d-clic" data-toggle="collapse" role="button"
                                              aria-expanded="false" aria-controls="collapseExample">Flight details <i
                            class="icofont-simple-down"></i></a></span>
            <span class="d-block ml-4"><a href="#collapseExample01" class="flt-d-clic" data-toggle="collapse" role="button"
                                          aria-expanded="false" aria-controls="collapseExample">Bagage <i
                        class="icofont-simple-down"></i></a></span>
            <span class="d-block ml-4"><a href="#collapseExample02" class="flt-d-clic" data-toggle="collapse" role="button"
                                          aria-expanded="false" aria-controls="collapseExample">Fare rules<i
                        class="icofont-simple-down"></i></a></span>
        </div>
        <div class="collapse bottom-content" id="collapseExample">
            <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
            <ul class="flight-timeline">

                <li>
                    <span>Nov 12 10:55</span>

                </li>
                <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                <li>
                    <span>Nov 12 15:00</span>

                </li>
                <li><span>SIN - Singapore Changi Airport T2</span></li>
            </ul>
        </div><!-- /.bottom content -->
        <div class="collapse bottom-content" id="collapseExample00">
            <h5>Flight Details</h5>
            <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
            <ul class="flight-timeline">

                <li>
                    <span>Nov 12 10:55</span>

                </li>
                <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                <li>
                    <span>Nov 12 15:00</span>

                </li>
                <li><span>SIN - Singapore Changi Airport T2</span></li>
            </ul>
        </div><!-- /.bottom content -->
        <div class="collapse bottom-content" id="collapseExample01">
            <h5>Bagage</h5>
            <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
            <ul class="flight-timeline">

                <li>
                    <span>Nov 12 10:55</span>

                </li>
                <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                <li>
                    <span>Nov 12 15:00</span>

                </li>
                <li><span>SIN - Singapore Changi Airport T2</span></li>
            </ul>
        </div><!-- /.bottom content -->
        <div class="collapse bottom-content" id="collapseExample02">
            <h5>Fare Rules</h5>
            <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
            <ul class="flight-timeline">

                <li>
                    <span>Nov 12 10:55</span>

                </li>
                <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                <li>
                    <span>Nov 12 15:00</span>

                </li>
                <li><span>SIN - Singapore Changi Airport T2</span></li>
            </ul>
        </div>
    </div><!-- /.flight-list-box -->
</div><!-- /.flt-dtls-box -->
    <div class="flight-list-box rt-mb-30 pt-30">
        <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4>
        <h6 class="text-333 rt-medium  rt-semiblod rt-mb-10">Passenger 1: Adult ticket</h6>
            <div class="row text-333  ">
                <div class="col-md-6 rt-mb-20 ">
                    <p class="f-size-15">First,last name: <span class="text-uppercase pl-3">MR. AHMED Salman</span></p>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 rt-mb-20 ">
                    <p class="f-size-15">Passport Number: <span class="text-uppercase pl-3">  A0134567</span></p>
                </div><!-- /.col-md-6 -->

            </div><!-- /.row -->
        <hr>
        <h6 class="text-333 rt-medium  rt-semiblod rt-mb-10">Passenger 1: Adult ticket</h6>
        <div class="row text-333 rt-mb-10 ">
            <div class="col-md-6 rt-mb-30 ">
                <p class="f-size-15">First,last name: <span class="text-uppercase pl-3"> MR. AHMED Salman</span></p>
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 rt-mb-30 ">
                <p class="f-size-15">Passport Number: <span class="text-uppercase pl-3">A0134567</span></p>
            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->
    </div><!-- /.flight-list-box -->
    <div class="flight-list-box rt-mb-30 pt-30">
        <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Prices</h4>
            <div class="row text-333 mb-0">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4 rt-mb-1 ">
                            <p class="f-size-15"><strong>Adult:</strong> <span class="text-uppercase pl-3">$2000</span></p>
                        </div><!-- /.col-md-3-->
                        <div class="col-md-4 rt-mb-1 ">
                            <p class="f-size-15"><strong>Fare:</strong><span class="text-uppercase pl-3">$170</span></p>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-4 rt-mb-1 ">
                            <p class="f-size-15"><strong>Tax and Fees:</strong><span class="text-uppercase pl-3">$20</span></p>
                        </div><!-- /.col-md-3-->
                    </div>
                    <div class="row">
                        <div class="col-md-4 rt-mb-1 ">
                            <p class="f-size-15"><strong>Adult:</strong> <span class="text-uppercase pl-3">$2000</span></p>
                        </div><!-- /.col-md-3-->
                        <div class="col-md-4 rt-mb-1 ">
                            <p class="f-size-15"><strong>Fare:</strong><span class="text-uppercase pl-3">$170</span></p>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-4 rt-mb-1 ">
                            <p class="f-size-15"><strong>Tax and Fees:</strong><span class="text-uppercase pl-3">$20</span></p>
                        </div><!-- /.col-md-3-->
                    </div>
                </div>
                <div class="col-md-3 border border-primary" >
                    <div class="row rt-mb-1">
                        <div class="col-md-12 rt-mb-1 ">
                            <p class="f-size-15"><strong>Total:</strong><span class="text-uppercase pl-3">$170</span></p>
                        </div><!-- /.col-md-3 -->
                    </div>
                    <div class="row rt-mb-1">
                        <div class="col-md-12 rt-mb-1">
                            <p class="f-size-15"><strong>Total:</strong><span class="text-uppercase pl-3">$170</span></p>
                        </div><!-- /.col-md-3 -->
                    </div>
                    <hr>
                    <div class="row rt-mb-1">
                        <div class="col-md-12 rt-mb-1">
                            <p class="f-size-15"><strong>SubTotal:</strong><span class="text-uppercase pl-3">$170</span></p>
                        </div><!-- /.col-md-3 -->
                    </div>
                </div>


            </div><!-- /.row -->

    </div><!-- /.flight-list-box -->
    <div class="flight-list-box rt-mb-30 pt-30">
        <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Payment</h4>
        <h6 class="text-333 rt-medium  rt-semiblod rt-mb-10">Choose your pament method</h6>
        <div class="row text-333 mb-3">
            <div class="col-md-2 col-sm-6"><img height="100px" src="{{URL::asset('images/payment/1.jpg')}}" alt=""></div>
            <div class="col-md-2 col-sm-6"><img height="100px" src="{{URL::asset('images/payment/2.jpg')}}" alt=""></div>
            <div class="col-md-2 col-sm-6"><img height="100px" src="{{URL::asset('images/payment/3.jpg')}}" alt=""></div>
            <div class="col-md-2 col-sm-6"><img height="100px"  src="{{URL::asset('images/payment/4.jpg')}}" alt=""></div>
            <div class="col-md-2 col-sm-6"><img height="100px" src="{{URL::asset('images/payment/5.jpg')}}" alt=""></div>
            <div class="col-md-2 col-sm-6"><img height="100px" src="{{URL::asset('images/payment/6.jpg')}}" alt=""></div>

        </div><!-- /.row -->
        <div class="row text-333 ">
            <div class="col-md-2"><img height="100px"  src="{{URL::asset('images/payment/7.jpg')}}" alt=""></div>
            <div class="col-md-2"><img height="100px" src="{{URL::asset('images/payment/8.jpg')}}" alt=""></div>
            <div class="col-md-2"><img height="100px" src="{{URL::asset('images/payment/9.jpg')}}" alt=""></div>
        </div><!-- /.row -->


        </div><!-- /.row -->
    </div><!-- /.flight-list-box -->
</div>


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
</body>
</html>
