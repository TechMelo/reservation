@extends('layouts.index')
@section('content')

    <div id="rt-breadcump3" class="rt-breadcump   rt-breadcump-height3">
        <div class="rt-page-bg rtbgprefix-cover f36" >
        </div><!-- /.rt-page-bg -->
        <div class="container">
            <div class="row ">
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
                <div class="col-lg-7">
                    <div class="rt-duel-slider-main rt-mb-30">
                        <div class="single-main rtbgprefix-cover f4"
                             >
                            <div class="inner-badge badge-bg-1 f-size-14 rt-strong">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                        <div class="single-main rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-2.jpg)">
                            <div class="inner-badge badge-bg-1 f-size-14 rt-strong">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                        <div class="single-main rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-3.jpg)">
                            <div class="inner-badge badge-bg-1 f-size-14 rt-strong">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                        <div class="single-main rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-4.jpg)">
                            <div class="inner-badge badge-bg-1 f-size-14 rt-strong">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                        <div class="single-main rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-5.jpg)">
                            <div class="inner-badge badge-bg-1 f-size-14 rt-strong">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                        <div class="single-main rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-6.jpg)">
                            <div class="inner-badge badge-bg-1 f-size-14 rt-strong">
                                Last booked 12 mins ago
                            </div><!-- /.inner-badge -->
                        </div><!-- /.single-main -->
                    </div><!-- /.rt-duel-slider-main -->
                    <div class="rt-duel-slider-thumb">
                        <div class="single--thumb rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/trip-bg-1.jpg)"></div>
                        <!-- /.single-thumb -->
                        <div class="single--thumb rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-2.jpg)"></div>
                        <!-- /.single-thumb -->
                        <div class="single--thumb rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-3.jpg)"></div>
                        <!-- /.single-thumb -->
                        <div class="single--thumb rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-4.jpg)"></div>
                        <!-- /.single-thumb -->
                        <div class="single--thumb rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-5.jpg)"></div>
                        <!-- /.single-thumb -->
                        <div class="single--thumb rtbgprefix-cover"
                             style="background-image: url(assets/images/all-img/hotel-slider-6.jpg)"></div>
                        <!-- /.single-thumb -->
                    </div><!-- /.rt-duel-slider-thumb -->
                </div><!-- /.col-lg-7 -->
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <div class="hotel-inner-content">
                        <h5 class="f-size-18 rt-medium">12 Day Beijing to Shanghai Discovery</h5>
                        <p class="f-size-13"><span class="text-555">Culture and lifestyle - Calligraphy Class at Pagoda - Leisure walking</span> <span
                                class="pl-2 text-777">| Near the subway</span></p>
                        <p class="rt-mt-15 rt-mb-20">
                            <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                            <span class="primary-color rt-mr-10">Excellent</span>
                            <span class="f-size-12 text-878">( 86 Reviews )</span>
                        </p>
                        <p class="f-size-14 text-333">"It is a good hotel with nice service, everything is so convenient. will choose it again next time i go there. "</p>
                        <p class="primary-color">
                            Unique about this tour:
                        </p>

                        <ul class="rt-list rt-mb-30 ">
                            <li class="text-333 title-font d-block f-size-13">
                                <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                Walking along the Banyan Lake and Cedar Lake in Guilin
                            </li>
                            <li class="text-333 title-font d-block f-size-13">
                                <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                Boat cruise on the picturesque Li River down to Yangshuo
                            </li>
                            <li class="text-333 title-font d-block f-size-13">
                                <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                Cycling around the countryside and attend a cooking class
                                in Yangshuo
                            </li>
                            <li class="text-333 title-font d-block f-size-13">
                                <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                Great Wall of Mutianyu, the Great Wall with much less tourists
                            </li>
                            <li class="text-333 title-font d-block f-size-13">
                                <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                Cruise and landscapes of Li River in Guilin
                            </li>
                            <li class="text-333 title-font d-block f-size-13">
                                <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                Covers all the major sites in Beijing and Xi'an, in just 6 days
                            </li>
                        </ul>

                        <div class="rt-divider style-one rt-mb-30"></div><!-- /.rt-divider -->
                        <div class="d-flex flex-md-row flex-column justify-content-md-between">
                            <div>
                                <span class="d-block f-size-12 text-878">From USD</span>
                                <span class="d-block f-size-24 primary-color rt-strong">$364</span>
                            </div>
                            <div>
                                <a href="#" class="rt-btn rt-gradient rt-sm2 text-uppercase pill">Book</a>
                            </div>
                            <div>
                                <a href="#" class="rt-btn rt-gradient3 rt-sm2 text-uppercase pill">Update</a>
                            </div>
                        </div><!-- /.d-flex -->
                        <div class="rt-divider style-one rt-mt-30"></div><!-- /.rt-divider -->
                        <div class="rt-mt-25">
                            <ul class="rt-social normal-style-one ">
                                <li><span class="f-size-14"><strong>Share Link:</strong></span></li>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                            </ul>
                        </div><!-- /. social -->
                    </div><!-- /.hotel-text -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12 rt-mt-58">
                    <div class="hotel-tabs">
                        <div class="flight-list-box rt-mb-40">
                            <ul class="nav rt-tab-nav-1 pill  pl-md-4 pr-md-4" id="myTab-2"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="rt-itm_1-tab" data-toggle="tab" href="#rt-itm_1" role="tab"
                                       aria-controls="rt-itm_1" aria-selected="false">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="rt-itm_2-tab" data-toggle="tab" href="#rt-itm_2"
                                       role="tab" aria-controls="rt-itm_2" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="rt-itm_3-tab" data-toggle="tab" href="#rt-itm_3" role="tab"
                                       aria-controls="rt-itm_3" aria-selected="false">Trip to customize</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="rt-itm_5-tab" data-toggle="tab" href="#rt-itm_5" role="tab"
                                       aria-controls="rt-itm_5" aria-selected="false">Policies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="rt-itm_6-tab" data-toggle="tab" href="#rt-itm_6" role="tab"
                                       aria-controls="rt-itm_6" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div><!-- /.hotle-del-box -->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade " id="rt-itm_2" role="tabpanel"
                                 aria-labelledby="rt-itm_2-tab">
                                <div class="flight-list-box rt-mb-30">
                                    <div class="inner-content rt-pl-15">
                                        <h4
                                            class="badge-hilighit color--1 f-size-14 text-white text-font text-uppercase rt-mb-30 rt-mt-15 rt-strong">
                                            HIGHLIGHTS</h4>
                                        <p>Start at magical Gulin where boats travel through the many lakes here via connected rivers. On Shanhu Lake’s shore, twin
                                            pagodas, the Sun and Moon, light up the sky at night. Move on to ancient Xi'an. A visit to Xi'an is a journey into
                                            China's long history. Xi'an served as the capital for 12 dynasties over 1,000 years. The world-famous Terracotta Army is
                                            located in Xi'an as well as many other historical sites you can visit.</p>
                                        <p>

                                            Whether you are looking for ancient history, urban wonders, picturesque landscapes, or cultural experiences, this trip
                                            will satisfy you. More and more world travelers are turning toward China. In this trip, you will visit the major cities
                                            and their highlights.

                                        </p>
                                        <p>

                                            Finish up with Beijing. The Chinese capital is well-known for its mixture of ancient culture and urban growth. The most
                                            famous attractions in Beijing include the Great Wall of China and the Forbidden City.</p>
                                    </div><!-- /.inner-content -->
                                </div><!-- /.flight-list-box -->
                            </div>
                            <div class="tab-pane fade show active" id="rt-itm_1" role="tabpanel" aria-labelledby="rt-itm_1-tab">
                                <div class="flight-list-box rt-mb-30">
                                    <h4 class="f-siz-18 rt-pt-10 rt-semiblod text-uppercase rt-mb-15">WHAT’S INCLUDED</h4>
                                    <h5 class="f-size-16 rt-mt-10"><span class="rt-mr-6 primary-color f-size-25"><i class="icofont-bed"></i></span>ACCOMMODATION</h5>
                                    <p class="text-333 f-size-14 rt-pl-25">
                                        Guesthouse/Hostel (6 nights), Hotel (3 nights), Overnight Hard Sleeper Train (2 nights)
                                    </p>
                                    <h5 class="f-size-16 rt-mt-10"><span class="rt-mr-6 primary-color f-size-25"><i class="icofont-oil-truck"></i></span>TRANSPORT</h5>
                                    <p class="text-333 f-size-14 rt-pl-25">
                                        Guesthouse/Hostel (6 nights), Hotel (3 nights), Overnight Hard Sleeper Train (2 nights)
                                    </p>
                                    <h5 class="f-size-16 rt-mt-10"><span class="rt-mr-6 primary-color f-size-25"><i class="icofont-check-circled"></i></span>INCLUDED ACTIVITIES</h5>
                                    <ul class="rt-list rt-pl-25">
                                        <li class="text-333 title-font d-block f-size-14">
                                            <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                            Beijing - Great Wall trekking
                                        </li>
                                        <li class="text-333 title-font d-block f-size-14">
                                            <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                            Xi'an - Muslim Quarter walking tour
                                        </li>
                                        <li class="text-333 title-font d-block f-size-14">
                                            <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                            Xi'an - Terracotta Warriors
                                        </li>
                                        <li class="text-333 title-font d-block f-size-14">
                                            <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                            Shanghai - Walking tour
                                        </li>
                                        <li class="text-333 title-font d-block f-size-13">
                                            <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                            Huangshan - National Park Trek
                                        </li>
                                        <li class="text-333 title-font d-block f-size-13">
                                            <span class="primary-color rt-mr-5"><i class="icofont-check"></i></span>
                                            Hongcun - Guided Village Tour
                                        </li>
                                    </ul>
                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box rt-mb-30">
                                    <h4 class="f-siz-18 rt-pt-10 rt-semiblod text-uppercase rt-mb-15">WHAT’S INCLUDED</h4>
                                    <h5 class="f-size-16 rt-mt-10"><span class="rt-mr-6 primary-color f-size-25"><i class="icofont-airplane-alt"></i></span>International Flights</h5>
                                    <p class="text-333 f-size-14 rt-pl-25">
                                        Any international flights to Beijing and from Shanghai are not included in this price. We always recommend that you
                                        arrive 1 day prior to your tour starting date.
                                    </p>
                                    <h5 class="f-size-16 rt-mt-10"><span class="rt-mr-6 primary-color f-size-25"><i class="icofont-trash"></i></span>Travel Insurance</h5>
                                    <p class="text-333 f-size-14 rt-pl-25">
                                        Travel insurance is not included in this North China Getaway tour. Travel insurance is mandatory to buy. We recommend
                                        purchasing it from World Nomads.
                                    </p>

                                </div><!-- /.flight-list-box -->
                            </div>
                            <div class="tab-pane fade" id="rt-itm_3" role="tabpanel" aria-labelledby="rt-itm_3-tab">


                                <ul class="trip-timeline rt-list">
                                    <li class="time-line-item flight-list-box rt-mb-22">
                                        <div class="timeline-counter">
                                            <div class="inner-item">
                                                <span class="d-block f-size-18 text-white">Day</span>
                                                <span class="d-block f-size-28 text-white rt-strong">01</span>
                                            </div><!-- /.inner-item -->
                                        </div><!-- /.timeline-counter -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="f-size-18 rt-semiblod rt-mb-25"> <span class="f-size-14 d-block rt-mb-5">Guilin</span>
                                                    Welcome To China!
                                                </h4>
                                            </div><!-- /.col-12 -->
                                            <div class="col-md-4">
                                                <img src="{{URL::asset('images/all-img/ex-1.jpg')}}" alt="trip image" draggable="false">
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-8 mt-5 mt-md-0">
                                                <p class="f-size-16 rt-strong">
                                                    Welcome to Guilin! Upon your arrival in Guilin, the most scenic city in China, your personal guide will meet you and
                                                    escort you to your hotel.
                                                </p>
                                                <p class="f-size-14">
                                                    The rest of the day is yours to relax and spend as you want. You can choose to step out into this dynamic city for a
                                                    little adventure of your own.Transfer to your hotel, where you can rest, or explore your surroundings at your leisure.
                                                    Your private tour through China's cultural highlights begins tomorrow!
                                                </p>
                                                <ul class="rt-list">
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="{{URL::asset('images/all-img/ex-1.png')}}" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="{{URL::asset('images/all-img/ex-2.png')}}" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mt-10">
                                                        <img src="{{URL::asset('images/all-img/ex-3.png')}}" alt="image" draggable="false">
                                                    </li>
                                                </ul>
                                            </div><!-- /.col-md-8 -->
                                        </div><!-- /.row -->
                                    </li>
                                    <li class="time-line-item flight-list-box rt-mb-22">
                                        <div class="timeline-counter">
                                            <div class="inner-item">
                                                <span class="d-block f-size-18 text-white">Day</span>
                                                <span class="d-block f-size-28 text-white rt-strong">02</span>
                                            </div><!-- /.inner-item -->
                                        </div><!-- /.timeline-counter -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="f-size-18 rt-semiblod rt-mb-25"> <span class="f-size-14 d-block rt-mb-5">Guilin</span>
                                                    Visit Tiananmen Square, the Spiritual Heart of China
                                                </h4>
                                            </div><!-- /.col-12 -->
                                            <div class="col-md-4">
                                                <img src="assets/images/all-img/ex-2.jpg" alt="trip image" draggable="false">
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-8 mt-5 mt-md-0">
                                                <p class="f-size-16 rt-strong">
                                                    Welcome to Guilin! Upon your arrival in Guilin, the most scenic city in China, your personal guide will meet you and
                                                    escort you to your hotel.
                                                </p>
                                                <p class="f-size-14">
                                                    The rest of the day is yours to relax and spend as you want. You can choose to step out into this dynamic city for a
                                                    little adventure of your own.Transfer to your hotel, where you can rest, or explore your surroundings at your leisure.
                                                    Your private tour through China's cultural highlights begins tomorrow!
                                                </p>
                                                <ul class="rt-list">
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-1.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-2.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mt-10">
                                                        <img src="assets/images/all-img/ex-3.png" alt="image" draggable="false">
                                                    </li>
                                                </ul>
                                            </div><!-- /.col-md-8 -->
                                        </div><!-- /.row -->
                                    </li>
                                    <li class="time-line-item flight-list-box rt-mb-22">
                                        <div class="timeline-counter">
                                            <div class="inner-item">
                                                <span class="d-block f-size-18 text-white">Day</span>
                                                <span class="d-block f-size-28 text-white rt-strong">03</span>
                                            </div><!-- /.inner-item -->
                                        </div><!-- /.timeline-counter -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="f-size-18 rt-semiblod rt-mb-25"> <span class="f-size-14 d-block rt-mb-5">Guilin</span>
                                                    Beijing History and a Trip to The Great Wall
                                                </h4>
                                            </div><!-- /.col-12 -->
                                            <div class="col-md-4">
                                                <img src="assets/images/all-img/ex-3.jpg" alt="trip image" draggable="false">
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-8 mt-5 mt-md-0">
                                                <p class="f-size-16 rt-strong">
                                                    Welcome to Guilin! Upon your arrival in Guilin, the most scenic city in China, your personal guide will meet you and
                                                    escort you to your hotel.
                                                </p>
                                                <p class="f-size-14">
                                                    The rest of the day is yours to relax and spend as you want. You can choose to step out into this dynamic city for a
                                                    little adventure of your own.Transfer to your hotel, where you can rest, or explore your surroundings at your leisure.
                                                    Your private tour through China's cultural highlights begins tomorrow!
                                                </p>
                                                <ul class="rt-list">
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-1.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-2.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mt-10">
                                                        <img src="assets/images/all-img/ex-3.png" alt="image" draggable="false">
                                                    </li>
                                                </ul>
                                            </div><!-- /.col-md-8 -->
                                        </div><!-- /.row -->
                                    </li>
                                    <li class="time-line-item flight-list-box rt-mb-22">
                                        <div class="timeline-counter">
                                            <div class="inner-item">
                                                <span class="d-block f-size-18 text-white">Day</span>
                                                <span class="d-block f-size-28 text-white rt-strong">04</span>
                                            </div><!-- /.inner-item -->
                                        </div><!-- /.timeline-counter -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="f-size-18 rt-semiblod rt-mb-25"> <span class="f-size-14 d-block rt-mb-5">Guilin</span>
                                                    Religion and Cuisine in Xi'an
                                                </h4>
                                            </div><!-- /.col-12 -->
                                            <div class="col-md-4">
                                                <img src="assets/images/all-img/ex-4.jpg" alt="trip image" draggable="false">
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-8 mt-5 mt-md-0">
                                                <p class="f-size-16 rt-strong">
                                                    Welcome to Guilin! Upon your arrival in Guilin, the most scenic city in China, your personal guide will meet you and
                                                    escort you to your hotel.
                                                </p>
                                                <p class="f-size-14">
                                                    The rest of the day is yours to relax and spend as you want. You can choose to step out into this dynamic city for a
                                                    little adventure of your own.Transfer to your hotel, where you can rest, or explore your surroundings at your leisure.
                                                    Your private tour through China's cultural highlights begins tomorrow!
                                                </p>
                                                <ul class="rt-list">
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-1.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-2.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mt-10">
                                                        <img src="assets/images/all-img/ex-3.png" alt="image" draggable="false">
                                                    </li>
                                                </ul>
                                            </div><!-- /.col-md-8 -->
                                        </div><!-- /.row -->
                                    </li>
                                    <li class="time-line-item flight-list-box rt-mb-22">
                                        <div class="timeline-counter">
                                            <div class="inner-item">
                                                <span class="d-block f-size-18 text-white">Day</span>
                                                <span class="d-block f-size-28 text-white rt-strong">05</span>
                                            </div><!-- /.inner-item -->
                                        </div><!-- /.timeline-counter -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="f-size-18 rt-semiblod rt-mb-25"> <span class="f-size-14 d-block rt-mb-5">Guilin</span>
                                                    Amongst the Terracotta Warriors
                                                </h4>
                                            </div><!-- /.col-12 -->
                                            <div class="col-md-4">
                                                <img src="assets/images/all-img/ex-5.jpg" alt="trip image" draggable="false">
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-8 mt-5 mt-md-0">
                                                <p class="f-size-16 rt-strong">
                                                    Welcome to Guilin! Upon your arrival in Guilin, the most scenic city in China, your personal guide will meet you and
                                                    escort you to your hotel.
                                                </p>
                                                <p class="f-size-14">
                                                    The rest of the day is yours to relax and spend as you want. You can choose to step out into this dynamic city for a
                                                    little adventure of your own.Transfer to your hotel, where you can rest, or explore your surroundings at your leisure.
                                                    Your private tour through China's cultural highlights begins tomorrow!
                                                </p>
                                                <ul class="rt-list">
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-1.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-2.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mt-10">
                                                        <img src="assets/images/all-img/ex-3.png" alt="image" draggable="false">
                                                    </li>
                                                </ul>
                                            </div><!-- /.col-md-8 -->
                                        </div><!-- /.row -->
                                    </li>
                                    <li class="time-line-item flight-list-box rt-mb-22">
                                        <div class="timeline-counter">
                                            <div class="inner-item">
                                                <span class="d-block f-size-18 text-white">Day</span>
                                                <span class="d-block f-size-28 text-white rt-strong">06</span>
                                            </div><!-- /.inner-item -->
                                        </div><!-- /.timeline-counter -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="f-size-18 rt-semiblod rt-mb-25"> <span class="f-size-14 d-block rt-mb-5">Guilin</span>
                                                    Amongst the Terracotta Warriors
                                                </h4>
                                            </div><!-- /.col-12 -->
                                            <div class="col-md-4">
                                                <img src="assets/images/all-img/ex-6.jpg" alt="trip image" draggable="false">
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-8 mt-5 mt-md-0">
                                                <p class="f-size-16 rt-strong">
                                                    Welcome to Guilin! Upon your arrival in Guilin, the most scenic city in China, your personal guide will meet you and
                                                    escort you to your hotel.
                                                </p>
                                                <p class="f-size-14">
                                                    The rest of the day is yours to relax and spend as you want. You can choose to step out into this dynamic city for a
                                                    little adventure of your own.Transfer to your hotel, where you can rest, or explore your surroundings at your leisure.
                                                    Your private tour through China's cultural highlights begins tomorrow!
                                                </p>
                                                <ul class="rt-list">
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-1.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mr-10 rt-mt-10">
                                                        <img src="assets/images/all-img/ex-2.png" alt="image" draggable="false">
                                                    </li>
                                                    <li class="rt-hw-60 primary-color rt-dorder-off rt-circle text-center d-inline-block rt-mt-10">
                                                        <img src="assets/images/all-img/ex-3.png" alt="image" draggable="false">
                                                    </li>
                                                </ul>
                                            </div><!-- /.col-md-8 -->
                                        </div><!-- /.row -->
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="#" class="rt-btn rt-gradient pill rt-sm2 text-uppercase rt-mt-10 rt-Bshadow-2">Customize this trip</a>
                                </div><!-- /.text-center -->


                            </div>

                            <div class="tab-pane fade" id="rt-itm_5" role="tabpanel" aria-labelledby="rt-itm_5-tab">
                                <div class="flight-list-box rt-mb-30">
                                    <div class="inner-content rt-pt-10 rt-pl-15">
                                        <h4 class="f-size-18 rt-semiblod rt-mb-35 ">Hotel Policies</h4>
                                    </div><!-- /.inner-content -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{URL::asset('images/all-img/hottel-cion-16.png')}}" class="rt-pr-23"
                                             alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Check-in & Check-out</h5>
                                            <p class="f-size-13 text-333">
                                            <span class="rt-mr-40"><i
                                                    class="icofont-check-circled primary-color rt-pr-4"></i> Check-in
                                                from 14:00 </span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i>
                                                Check-out before 12:00</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{URL::asset('images/all-img/hottel-cion-17.png')}}" class="rt-pr-23"
                                             alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Children and Extra Beds</h5>
                                            <p class="f-size-13 text-333">

                                                Guests aged under 18 must be accompanied by a parent or legal guardian.
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{URL::asset('images/all-img/hottel-cion-15.png')}}" class="rt-pr-23"
                                             alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Dining</h5>
                                            <p class="f-size-13 text-333">
                                                Buffet breakfast HK$130 ( Approximately $17 )
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{URL::asset('images/all-img/hottel-cion-14.png')}}" class="rt-pr-23"
                                             alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod rt-mb-10">Paying at the Hotel</h5>
                                            <div class="rt-footer-social">
                                                <ul>
                                                    <li><a href="#"><img src="{{URL::asset('images/brands/card-1.png')}}"
                                                                         alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{URL::asset('images/brands/card-2.png')}}"
                                                                         alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{URL::asset('images/brands/card-3.png')}}"
                                                                         alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{URL::asset('images/brands/card-4.png')}}"
                                                                         alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{URL::asset('images/brands/card-5.png')}}"
                                                                         alt="cardimage" draggable="false"></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.service-amitence-box -->

                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box">
                                    <h3 class="f-size-18 rt-semiblod rt-mt-15 rt-mb-30">Cancellation</h3>
                                    <h3 class="f-size-14 text-uppercase rt-mt-15 rt-mb-30">CANCELLATIONS AND REFUNDS</h3>

                                    <h4 class="f-size-14 rt-medium rt-mb-10">Our Fault</h4>

                                    <p class="f-size-14">
                                        We work very hard to ensure that all tours run as scheduled and enjoy a 99% success
                                        rate. When a tour cancels, and it is
                                        the fault of The Shoreditch Pub Crawl or one of the freelance guides we work with,
                                        we will refund your prebought ticket
                                        as well as offer up to 100% of the value of the original ticket price as credit
                                        towards the purchase of another tour as
                                        compensation. This credit cannot be used in any other way and will not be cashable.
                                    </p>
                                    <br>
                                    <h4 class="f-size-14 rt-medium rt-mb-10">Your Request</h4>

                                    <p class="f-size-14">
                                        Should you not be able to attend your tour and need to cancel a tour booking letting
                                        us know at least 24 hours before
                                        your tour, we will cancel your ticket and credit you 50% of the purchase price
                                        towards the purchase of an additional
                                        future tour. We have a no refund policy, unless we are at fault for the cancelation
                                        of your tour.
                                    </p>
                                    <br>
                                    <h4 class="f-size-14 rt-medium rt-mb-10">Acts of God</h4>
                                    <p class="f-size-14">
                                        We may not be held responsible should we be unable to offer a tour due to Acts of
                                        God, (tsunamis, earthquakes, volcanic
                                        dust clouds, extreme
                                        weather, etc.).
                                    </p>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="rt-itm_6" role="tabpanel" aria-labelledby="rt-itm_6-tab">
                                <div class="flight-list-box rt-mb-30 row">
                                    <div class="col-12">
                                        <h4 class="f-seize-18 rt-semiblod rt-mb-30">Reviews <span class="f-size-14">(86 verified reviews)</span>
                                        </h4>
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <div class="review-box rt-pt-36 rt-pb-30 rt-pr-30 rt-pl-30 rt-dborder-primary text-center rounded">
                                                    <h4 class="f-size-24 primary-color">Excellent</h4>
                                                    <h5 class="f-size-60 primary-color"><span class="rt-strong">4.3</span><span
                                                            class="f-size-14 text-878 rt-">/5</span></h5>
                                                    <h6 class="f-size-18"><span class="primary-color">Emigrar</span> Verified Reviews</h6>
                                                </div><!-- /.review-box -->
                                            </div><!-- /.col-md-4 -->
                                            <div class="col-md-7 offset-md-1">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-progress rt-mb-30">
                                                            <div class="progress-title f-size-18 heading-color-1"><span
                                                                    class="float-right">4.4</span><span>Location</span></div>
                                                            <div class="progress" data-percent="80%">
                                                                <span class="progress-bar bg-gr-1"></span>
                                                            </div>
                                                        </div><!-- /.single-progress -->
                                                        <div class="single-progress rt-mb-30">
                                                            <div class="progress-title f-size-18 heading-color-1"><span
                                                                    class="float-right">4.4</span><span>Service</span></div>
                                                            <div class="progress" data-percent="80%">
                                                                <span class="progress-bar bg-gr-1"></span>
                                                            </div>
                                                        </div><!-- /.single-progress -->
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-6">
                                                        <div class="single-progress rt-mb-30">
                                                            <div class="progress-title f-size-18 heading-color-1"><span
                                                                    class="float-right">4.5</span><span>Cleanliness</span></div>
                                                            <div class="progress" data-percent="80%">
                                                                <span class="progress-bar bg-gr-1"></span>
                                                            </div>
                                                        </div><!-- /.single-progress -->
                                                        <div class="single-progress rt-mb-30">
                                                            <div class="progress-title f-size-18 heading-color-1"><span
                                                                    class="float-right">4.5</span><span>Facilities</span></div>
                                                            <div class="progress" data-percent="80%">
                                                                <span class="progress-bar bg-gr-1"></span>
                                                            </div>
                                                        </div><!-- /.single-progress -->
                                                    </div><!-- /.col-md-6 -->
                                                </div><!-- /.row -->

                                            </div><!-- /.col-md-4 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.col-12 -->
                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box single-commnets row rt-mb-30">
                                    <div
                                        class="col-lg-3 col-md-4  rt-dashed-primary rt-pt-30 rt-pl-30 rt-pb-30 rt-pr-30 rt-dborder-primary rounded">
                                        <div class="cmnt-thumb rt-hw-60 rt-border-primary rounded-circle rtbgprefix-cover rt-mb-20"
                                             style="background-image: url(assets/images/all-img/cmnt-2.jpg)">
                                        </div><!-- /.cmnt-thumb -->
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-ui-calendar rt-mr-5"></i></span>Stayed in
                                        Nov 2018</span>
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-edit rt-mr-5"></i></span>Stayed in Nov
                                        2018</span>
                                    </div><!-- /.left-coulmn -->
                                    <div class="col-lg-9 col-md-8 pl-md-5">
                                        <h4 class="f-size-17 rt-strong">Simon Lopez <span class="rt-pl-15 f-size-14"> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i></span></h4>
                                        <span class="f-size-13 text-878 d-block rt-mb-15">November 20, 2018 at 8:31 pm</span>
                                        <p class="f-size-14 text-333">
                                            I am very please with Garden View Hong Kong Hotel! I will certainly return. I got a wonderful from the
                                            15 floor to the
                                            Botanical Garden a great Supermarket in the corner, about 2 minutes walking, and a bus stop to downtown
                                            within few
                                            meters. It is close to downtown and great price!
                                        </p>

                                        <a href="#" class="replay-cmnt text-uppercase rt-strong">Reply <i class="icofont-reply-all"></i> </a>
                                    </div><!-- /.right-column -->
                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box single-commnets row rt-mb-30">
                                    <div
                                        class="col-lg-3 col-md-4  rt-dashed-primary rt-pt-30 rt-pl-30 rt-pb-30 rt-pr-30 rt-dborder-primary rounded">
                                        <div class="cmnt-thumb rt-hw-60 rt-border-primary rounded-circle rtbgprefix-cover rt-mb-20"
                                             style="background-image: url(assets/images/all-img/cmnt-3.jpg)">
                                        </div><!-- /.cmnt-thumb -->
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-ui-calendar rt-mr-5"></i></span>Stayed in
                                        Nov 2018</span>
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-edit rt-mr-5"></i></span>Stayed in Nov
                                        2018</span>
                                    </div><!-- /.left-coulmn -->
                                    <div class="col-md-8 col-lg-9 pl-md-5">
                                        <h4 class="f-size-17 rt-strong">Gary Dunn <span class="rt-pl-15 f-size-14"> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i></span></h4>
                                        <span class="f-size-13 text-878 d-block rt-mb-15">November 20, 2018 at 8:31 pm</span>
                                        <p class="f-size-14 text-333">
                                            I am very please with Garden View Hong Kong Hotel! I will certainly return. I got a wonderful from the
                                            15 floor to the
                                            Botanical Garden a great Supermarket in the corner, about 2 minutes walking, and a bus stop to downtown
                                            within few
                                            meters. It is close to downtown and great price!
                                        </p>

                                        <a href="#" class="replay-cmnt text-uppercase rt-strong">Reply <i class="icofont-reply-all"></i> </a>
                                    </div><!-- /.right-column -->
                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box single-commnets row rt-mb-30">
                                    <div
                                        class="col-lg-3 col-md-4  rt-dashed-primary rt-pt-30 rt-pl-30 rt-pb-30 rt-pr-30 rt-dborder-primary rounded">
                                        <div class="cmnt-thumb rt-hw-60 rt-border-primary rounded-circle rtbgprefix-cover rt-mb-20"
                                             style="background-image: url(assets/images/all-img/cmnt-4.jpg)">
                                        </div><!-- /.cmnt-thumb -->
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-ui-calendar rt-mr-5"></i></span>Stayed in
                                        Nov 2018</span>
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-edit rt-mr-5"></i></span>Stayed in Nov
                                        2018</span>
                                    </div><!-- /.left-coulmn -->
                                    <div class="col-md-8 col-lg-9 pl-md-5">
                                        <h4 class="f-size-17 rt-strong">Mark Ques <span class="rt-pl-15 f-size-14"> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i></span></h4>
                                        <span class="f-size-13 text-878 d-block rt-mb-15">November 20, 2018 at 8:31 pm</span>
                                        <p class="f-size-14 text-333">
                                            I am very please with Garden View Hong Kong Hotel! I will certainly return. I got a wonderful from the
                                            15 floor to the
                                            Botanical Garden a great Supermarket in the corner, about 2 minutes walking, and a bus stop to downtown
                                            within few
                                            meters. It is close to downtown and great price!
                                        </p>

                                        <a href="#" class="replay-cmnt text-uppercase rt-strong">Reply <i class="icofont-reply-all"></i> </a>
                                    </div><!-- /.right-column -->
                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box single-commnets row rt-mb-30">
                                    <div
                                        class="col-lg-3 col-md-4  rt-dashed-primary rt-pt-30 rt-pl-30 rt-pb-30 rt-pr-30 rt-dborder-primary rounded">
                                        <div class="cmnt-thumb rt-hw-60 rt-border-primary rounded-circle rtbgprefix-cover rt-mb-20"
                                             style="background-image: url(assets/images/all-img/cmnt-5.jpg)">
                                        </div><!-- /.cmnt-thumb -->
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-ui-calendar rt-mr-5"></i></span>Stayed in
                                        Nov 2018</span>
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-edit rt-mr-5"></i></span>Stayed in Nov
                                        2018</span>
                                    </div><!-- /.left-coulmn -->
                                    <div class="col-md-8 col-lg-9 pl-md-5">
                                        <h4 class="f-size-17 rt-strong">Mans Livly <span class="rt-pl-15 f-size-14"> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i></span></h4>
                                        <span class="f-size-13 text-878 d-block rt-mb-15">November 20, 2018 at 8:31 pm</span>
                                        <p class="f-size-14 text-333">
                                            I am very please with Garden View Hong Kong Hotel! I will certainly return. I got a wonderful from the
                                            15 floor to the
                                            Botanical Garden a great Supermarket in the corner, about 2 minutes walking, and a bus stop to downtown
                                            within few
                                            meters. It is close to downtown and great price!
                                        </p>

                                        <a href="#" class="replay-cmnt text-uppercase rt-strong">Reply <i class="icofont-reply-all"></i> </a>
                                    </div><!-- /.right-column -->
                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box single-commnets row rt-mb-30">
                                    <div
                                        class="col-lg-3 col-md-4  rt-dashed-primary rt-pt-30 rt-pl-30 rt-pb-30 rt-pr-30 rt-dborder-primary rounded">
                                        <div class="cmnt-thumb rt-hw-60 rt-border-primary rounded-circle rtbgprefix-cover rt-mb-20"
                                             style="background-image: url(assets/images/all-img/cmnt-2.jpg)">
                                        </div><!-- /.cmnt-thumb -->
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-ui-calendar rt-mr-5"></i></span>Stayed in
                                        Nov 2018</span>
                                        <span class="d-block f-size-13 text-878"> <span><i class="icofont-edit rt-mr-5"></i></span>Stayed in Nov
                                        2018</span>
                                    </div><!-- /.left-coulmn -->
                                    <div class="col-md-8 pl-md-5">
                                        <h4 class="f-size-17 rt-strong">Sirlon Mika <span class="rt-pl-15 f-size-14"> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i><i class="icofont-star review"></i> <i
                                                    class="icofont-star review"></i></span></h4>
                                        <span class="f-size-13 text-878 d-block rt-mb-15">November 20, 2018 at 8:31 pm</span>
                                        <p class="f-size-14 text-333">
                                            I am very please with Garden View Hong Kong Hotel! I will certainly return. I got a wonderful from the
                                            15 floor to the
                                            Botanical Garden a great Supermarket in the corner, about 2 minutes walking, and a bus stop to downtown
                                            within few
                                            meters. It is close to downtown and great price!
                                        </p>

                                        <a href="#" class="replay-cmnt text-uppercase rt-strong">Reply <i class="icofont-reply-all"></i> </a>
                                    </div><!-- /.right-column -->
                                </div><!-- /.flight-list-box -->
                            </div>
                        </div>

                    </div><!-- /.hotel-tabs -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->


        </div><!-- /.container -->
    </section>
@endsection


<!-- ==================Start Js Link===================== -->









