@extends('layouts.index')
@section('content')

<div id="rt-breadcump3" class="rt-breadcump rt-breadcump3  rt-breadcump-height3">
    <div class="rt-page-bg rtbgprefix-cover f36" >
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div  class="row rt-breadcump-height3">
            <div class="col-12">
                <div class="breadcrumbs-content3">
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
{{--                    <h3>Flight</h3>--}}
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Flight

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto mx-lg-0">
                <h4 class="rt-strong text-uppercase rt-mb-20"> Review your trip </h4>
            </div><!-- /.col-12 -->
            <div class="col-xl-9 mx-auto col-lg-10">
                <div class="alert rt-alrt-1">
                    <div class="media">
                        <i class="icofont-check mr-2"></i>
                        <div class="media-body">
                            <h6 class="mt-0 rt-semiblod">Nice Job! You picked one of our best value flights.</h6>
                            Book now so you don't miss out on this price!
                        </div>
                    </div>
                </div><!-- /.alert -->
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
                    <div class="flight-list-box desktop-v-details">
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
                <div class="flight-list-box rt-mb-30 ask-for-login d-md-flex flex-md-row justify-content-md-between align-items-center pt-30">
                    <div class="left">
                        <h6 class="rt-strong">Already a Emigrar member?</h6>
                        <p>Sign in to earn points and make booking easier!</p>
                    </div><!-- /.left -->
                    <div class="right">
                        <a href="#" class="link-text rt-strong f-size-14" data-toggle="modal" data-target="#rtmodal-1"> <i class="fa fa-user icon-share icon-gradinet-1 rt-circle mr-2"></i><!-- /.fa -->  Sign in</a>
                    </div><!-- /.left -->
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4>
                    <h6 class="text-333 rt-medium">Passenger 1: Adult ticket</h6>
                    <br>
                    <br>
                    <form action="" class="rt-form rt-line-form flight-lable">
                        <div class="row">
                            <div class="col-md-2 rt-mb-30">
                                <label for="gender">Gender</label>
                                <select id="gender">
                                    <option value="mr" selected>Mr</option>
                                    <option value="mrs">Mrs</option>

                                </select>
                            </div>
                            <div class="col-md-4 rt-mb-30 ">
                                <label for="fst-name">First Name</label>
                                <input type="text" class="form-control" id="fst-name" placeholder="Enter Your First Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="lst-name">Last Name</label>
                                <input type="text" class="form-control" id="lst-name" placeholder="Enter Your Last Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <label for="select-1">Nationality</label>
                                <input type="text" class="form-control" id="nationality" placeholder="Enter Your Nationality ">

                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="bday ">Birthday</label>
                                        <input name="bday" type="text" class="form-control rt-date-picker" placeholder="date" id="ex-date">
                                        <br>
{{--                                        <div class="form-check form-check-inline">--}}
{{--                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2s" value="option2">--}}
{{--                                            <label class="form-check-label" for="inlineRadio2s">Female</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-check form-check-inline">--}}
{{--                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2ss" value="option2">--}}
{{--                                            <label class="form-check-label" for="inlineRadio2ss">Male</label>--}}
{{--                                        </div>--}}
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="exp_date">Expiry Date</label>
                                        <input name="exp_date" type="text" class="form-control rt-date-picker" placeholder="date" id="st-date">
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="select-2">ID</label>
                                <select id="select-2">
                                    <option value="1">Passport</option>
                                    <option value="2">NID</option>
                                    <option value="3">NTO</option>

                                </select>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="issue-country">Issue Country</label>
                                <input type="text" placeholder="enter country name" class="form-control">
                            </div><!-- /.col-md-6 -->
{{--                            <div class="col-md-6">--}}
{{--                                <p class="f-size-14">Please ensure the ID is valid for at least 6 months--}}
{{--                                after the date of departure.</p>--}}
{{--                            </div><!-- /.col-12 -->--}}
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h6 class="text-333 rt-semiblod">Contact Details</h6> <br>
                    <form action="" class="rt-form rt-line-form flight-lable">
                       <div class="row">
                            <div class="col-md-6 rt-mb-30">
                                <label for="contact-name">Contact name</label>
                                <input type="text" placeholder="Contact name" id="contact-name">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="mbl-name">Mobile phone</label>
                                <input type="tel" placeholder="Enter Your Number" id="mbl-name">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <label for="eml-name">Email</label>
                                <input type="tel" placeholder="Enter Your Email" id="eml-name">
                            </div><!-- /.col-md-6 -->
                       </div><!-- /.row -->
                    </form>
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box pt-30">
                    <h4 class="f-size-24 rt-strong rt-mb-20">Promo Code</h4>
                    <form action="" class="rt-form rt-line-form flight-lable">
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <label>Add promo code</label>
                                <input type="text" placeholder="Please enter promo code">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <a href="#" class="rt-btn rt-gradient3 pill text-uppercase ">Verify</a>
                            </div><!-- /.col-md- -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.flight-list-box -->
            </div><!-- /.col-lg-9 -->
            <div class="col-xl-3 mx-auto mt-5 mt-xl-0">
                <div class="rt-sidebar-group">
                    <div class="rt-widget final-booking">

                        <ul>
                            <li class="clearfix">

                                <span>Adult</span>
                                <span class="float-right">$203.94 x 1</span>
                            </li>
                            <li class="clearfix">

                                <span>Fare</span>
                                <span class="float-right">$170</span>
                            </li>
                            <li class="clearfix">

                                <span>taxex & Fees</span>
                                <span class="float-right">$33.34</span>
                            </li>
                            <li class="clearfix sub-total">

                                <span>Total</span>
                                <span class="float-right"><small>$</small>203.94</span>
                            </li>

                        </ul>
                        <div class="text-center rt-mb-30">
                            <a href="#" class="rt-btn rt-gradient pill rt-sm">Continue Booking</a>
                        </div><!-- /.text-center -->
                        <p class="f-size-12 line-height-12">By proceeding, I acknowledge that I
                            have read and agree to Emigrar
                            <a href="#">Terms of Use</a> and <a href="#">Privacy Statement.</a></p>
                    </div><!-- /.rt-widget -->

                    <div class="plain-box pl-md-3">
                        <p class="rt-strong">Payment Method</p>
                        <div class="rt-footer-social">
                            <ul>
                                <li><a href="#"><img src="{{URL::asset('images/brands/card-1.png')}}" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="{{URL::asset('images/brands/card-2.png')}}" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="{{URL::asset('images/brands/card-3.png')}}" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="{{URL::asset('images/brands/card-4.png')}}" alt="cardimage" draggable="false"></a></li>
                                <li><a href="#"><img src="{{URL::asset('images/brands/card-5.png')}}" alt="cardimage" draggable="false"></a></li>

                            </ul>
                        </div>
                    </div><!-- /.plain-box -->
                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection


<!-- ==================Start Js Link===================== -->









