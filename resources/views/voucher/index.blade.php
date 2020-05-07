@extends('layouts.index')
@section('content')
    <div id="rt-breadcump3" class="rt-breadcump rt-breadcump-height3">
        <div class="rt-page-bg rtbgprefix-cover f36" >
        </div><!-- /.rt-page-bg -->

        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="breadcrumbs-content3">
                        </div><!-- /.breadcrumbs -->
                    <button class="btn-tog3  btn-tog-back " ><i class="fas fa-angle-double-up"></i></button>
                    <button class=" btn-tog3 btn-tog-down" ><i class="fas fa-angle-double-down"></i></button>
                    <div id="bottom-bar2" class="bottom-bar b-bar bar-fix">
                        <ul class="nav nav-scroll serachnavs scroll wow  justify-content-center mx-auto list-inline" id="rtMultiTab" role="tablist" data-wow-duration="0.5s" data-wow-delay="1.5s">
                            <li class="list-inline-item nav-item mx-5 my-3">
                                <a class="nav-link  px-3" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                                   data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                                    <i class="icofont-airplane"></i>
                                    <span>Flights</span>
                                </a>
                            </li>
                            <li class="list-inline-item nav-item mx-5 my-3">
                                <a class="nav-link  px-3" id="second-tab" data-target="#rt-item_b_second" data-secondary="#rt-item_a_second"
                                   data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true">

                                    <i class="icofont-hotel"></i>
                                    <span>Hotels</span>
                                </a>
                            </li>
                            <li class=" list-inline-item nav-item mx-5 my-3">
                                <a class="nav-link " id="third-tab" data-target="#rt-item_b_thrid" data-secondary="#rt-item_a_third"
                                   data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false">
                                    <i class="icofont-car-alt-4"></i>
                                    <span>Cars</span>
                                </a>
                            </li>
                            <li class="list-inline-item nav-item mx-5 my-3 ">
                                <a class="  nav-link " id="four-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_four"
                                   data-toggle="tab" href="#four" role="tab" aria-controls="four-tab" aria-selected="false">
                                    <i class="icofont-train-line"></i>
                                    <span>Transfer</span>
                                </a>
                            </li>
                            <li class="list-inline-item nav-item mx-5 my-3 btn-h btn-hide">
                                <a class="nav-link " id="fifth-tab" data-target="#rt-item_b_fifth" data-secondary="#rt-item_a_fifth"
                                   data-toggle="tab" href="#fifth" role="tab" aria-controls="fifth-tab" aria-selected="false">
                                    <i class="icofont-train-line"></i>
                                    <span>Bus</span>
                                </a>
                            </li>
                            <li class="list-inline-item nav-item mx-5 my-3 btn-h btn-hide">
                                <a class="nav-link " id="sixth-tab" data-target="#rt-item_b_sixth" data-secondary="#rt-item_a_sixth"
                                   data-toggle="tab" href="#sixth" role="tab" aria-controls="sixth-tab" aria-selected="false">
                                    <i class="icofont-train-line"></i>
                                    <span>Group</span>
                                </a>
                            </li>
                            <li class="list-inline-item nav-item mx-5 my-3 btn-h btn-hide">
                                <a class="nav-link" id="seventh-tab" data-target="#rt-item_b_seventh" data-secondary="#rt-item_a_seventh"
                                   data-toggle="tab" href="#seventh" role="tab" aria-controls="seventh-tab" aria-selected="false">
                                    <i class="icofont-train-line"></i>
                                    <span>tours</span>
                                </a>
                            </li>
                            <li class="list-inline-item nav-item mx-5 my-3 btn-h btn-hide">
                                <a class="nav-link " id="eigth-tab" data-target="#rt-item_b_eigth" data-secondary="#rt-item_a_eigth"
                                   data-toggle="tab" href="#eigth" role="tab" aria-controls="four-tab" aria-selected="false">
                                    <i class="icofont-train-line"></i>
                                    <span>Insurance</span>
                                </a>
                            </li>
                            <li class="list-inline-item nav-item mx-5 my-3 btn-h btn-hide">
                                <a class="nav-link " id="ninth-tab" data-target="#rt-item_b_ninth" data-secondary="#rt-item_a_ninth"
                                   data-toggle="tab" href="#ninth" role="tab" aria-controls="ninth-tab" aria-selected="false">
                                    <i class="icofont-train-line btn-top-margin-fix"></i>
                                    <span>Special</span>
                                    <span class="minus-top-margin">Ticket</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    </div><!-- /.breadcrumbs-content -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.rt-bredcump -->
    <div class="container voucher-cont">

        <div class="flt-dtls-box flt-fix rt-mb-30">
            <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                <div class="left">
                    <span>Hong Kong</span> <span><img src="{{URL::asset('images/all-img/shp-ln-1.png')}}" alt="line image" draggable="false"></span> <span>Singapore</span>
                    <p>Nov 12, 2018 | 1 adult</p>
                </div><!-- /.left -->
                <div class="right">
                    <a href="#" class="rt-btn rt-gradient3 rt-Bshadow-3  pill text-uppercase rt-sm2">Update</a>
                </div><!-- /.right -->
            </div><!-- /.upper-top-content -->
            <div class="flight-list-box desktop-v-details">
                <div
                    class="top-content d-flex flex-lg-row align-items-lg-center justify-content-left  justify-content-lg-between ">
                    <div class="flight-logo">
                        <img src="{{URL::asset('images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scootaaa</h5>
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
            <div class="flight-list-box tablet-v-details">
                <div
                    class="row">
                    <div class="col-2">
                        <div class="flight-logo">
                            <img src="{{URL::asset('images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                        </div><!-- /.flight-logo -->
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2 ">
                    <div class="pricing ">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    </div>
                    <div class="col-2 ">
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>

                    </div><!-- /.flight-detils -->
                    </div>
                    <div class="col-2">
                    <div class="trip ">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    </div>
                    <div class="col-2">
                    <div class="book-now ">
                        <a href="#" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                    </div>
                    <div class="col-1"></div>
                </div><!-- /.top-content -->
                <div class=" top-content ">
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
                    </div><!-- /.flight-time --></div>
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
            </div><!-- /.flight-list-box sm -->

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
                <div class="col-md-3" >
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
                            <p class="f-size-120"><strong>SubTotal:<span class="text-uppercase pl-3 purple-text">$170</span></p>
                        </div><!-- /.col-md-3 -->
                    </div>
                </div>


            </div><!-- /.row -->

        </div><!-- /.flight-list-box -->
        <div class="flight-list-box rt-mb-30 pt-30">
            <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Payment</h4>
            <h6 class="text-333 rt-medium  rt-semiblod rt-mb-10">Choose your pament method</h6>
            <div class="row text-333 mb-3 mx-auto">
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/pay at home.png')}}" alt="pay at home"></div>
                    <div class="row"><span class="mx-auto pay-label">Pay at Home</span></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/pay at point.png')}}" alt="pay at point"></div>
                    <div class="row"><span class="mx-auto pay-label">Pay at point</span></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/pay by credit.png')}}" alt="pay by credit"></div>
                    <div class="row"><span class="mx-auto pay-label">Pay by credit</span></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/pay later.png')}}" alt="pay later"></div>
                    <div class="row"><span class="mx-auto pay-label">pay later</span></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/fastpay.png')}}" alt="fastpay"></div>
                    <div class="row"></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/zaincash.png')}}" alt="zaincash"></div>
                    <div class="row"></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/asiahawala.png')}}" alt="asiahawala"></div>
                    <div class="row"></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/mastercard.png')}}" alt="mastercard"></div>
                    <div class="row"></div>
                </div>
                <div class="col-4 col-lg-3">
                    <div class="row"><img class="mx-auto" height="100px" src="{{URL::asset('images/payment/paypal.png')}}" alt="paypal"></div>
                    <div class="row pay-label"></div>
                </div>

            </div><!-- /.row -->
            <div class="row text-333 ">

            </div><!-- /.row -->
        </div><!-- /.row -->
    </div><!-- /.flight-list-box -->
@endsection
