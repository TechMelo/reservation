@extends('layouts.index')
@section('top-m')
    <ul class="text-center text-md-left top-message">
        <li> <i class="icofont-headphone-alt"></i>Support</li>
        <li><a href="mailto:info@emigrar.com "><i class="icofont-email"></i>info@emigrar.com</a></li>
    </ul>
@endsection
@section('content')
<!--
    !============= Banner Area Start ===========!
 -->


<section class="rt-banner-area">
    <div class="single-rt-banner rt-banner-height bt-bg">
        <div class="container">
            <div class="row  rt-banner-height align-items-center">
                <div class="col-lg-9">
                    <div class="rt-banner-content">
                        <button class="btn-tog2  btn-tog-back " ><i class="fas fa-angle-double-up"></i></button>
                        <button class=" btn-tog2 btn-tog-down" ><i class="fas fa-angle-double-down"></i></button>

                        <div id="bottom-bar2" class="bottom-bar b-bar ">
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
                                    <a class="  nav-link" id="four-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_four"
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
                                    <a class="nav-link " id="seventh-tab" data-target="#rt-item_b_seventh" data-secondary="#rt-item_a_seventh"
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
                        <div class="explore">
                        <h1 class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                            Your dream <br> is real
                        </h1>
                        <p class="wow fade-in-top">
                            You can create a Custom Trip.Search Our Lowest Fares to <br>
                            Your Favorite Destinations.Find a better way to travel
                        </p>
                        </div>
        <div id="index_search" class="rt-banner-searchbox  standard-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                    <form action="#">
                        <div class="rt-radio-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="trip-type" class="custom-control-input trip-type-radio one-way-radio">
                                <label class="custom-control-label" for="customRadioInline1">One-way</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="trip-type" class="custom-control-input trip-type-radio">
                                <label class="custom-control-label" for="customRadioInline2">Round-trip</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline3" name="trip-type" class="custom-control-input trip-type-radio">
                                <label class="custom-control-label" for="customRadioInline3">Multi-city</label>
                            </div>
                            <div class=" form-check-inline rt-searchlink mr-md-5">
                                <select class="select">
                                    <option value="mr" selected="">1 Adult</option>
                                    <option value="mrs">2</option>
                                    <option value="mrs">3</option>

                                </select>


                            </div><!-- ./dropdown -->
                            <div class=" form-check-inline rt-searchlink">

                                <select class="select">
                                    <option value="mr" selected disabled>Economy</option>
                                    <option value="mr">Room one</option>
                                    <option value="mrs">Room two</option>
                                    <option value="mrs">Room three</option>

                                </select>

                            </div><!-- ./dropdown -->
                        </div><!-- /.radio-group -->
                        <div class="rt-input-group">
                            <div class="single-input  col-rt-in-3">
                                <input list="dlist" type="text " class="banner-select form-control has-icon" placeholder="from" name="from" style="width: 100%">
                                <datalist id="dlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                <span class="input-iconbadge"><img src="{{URL::asset('images/icons-image/s_icon_1.png')}}" alt="" draggable="false"></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3 trip-to">
                                <input type="text" list="tlist" placeholder="To" class=" banner-select form-control has-icon" name="to" style="width: 100%">
                                <datalist id="tlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">--}}
                                {{--                                    <option value="1">To</option>--}}
                                {{--                                    <option value="2">Alaska</option>--}}
                                {{--                                    <option value="3">Bahamas</option>--}}
                                {{--                                    <option value="4">Bermuda</option>--}}
                                {{--                                    <option value="5">Canada</option>--}}
                                {{--                                    <option value="6">Caribbean</option>--}}
                                {{--                                    <option value="7">Europe</option>--}}
                                {{--                                    <option value="8">Hawaii</option>--}}
                                {{--                                </select>--}}
                                <span class="input-iconbadge"><img src="{{URL::asset('images/icons-image/s_icon_2.png')}}" alt="" draggable="false"></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3 return-field">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_second" role="tabpanel" aria-labelledby="rt-item_a_second">
                    <form action="#">
                        <div class="rt-radio-group">
                            <div class="dropdown form-check-inline rt-searchlink">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink24" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Guestes per room
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink24">
                                    <a class="dropdown-item" href="#">Room one</a>
                                    <a class="dropdown-item" href="#">Room two</a>
                                    <a class="dropdown-item" href="#">Room three</a>
                                </div>
                            </div><!-- ./dropdown -->
                        </div><!-- /.radio-group -->
                        <div class="rt-input-group">
                            <div class="single-input  col-rt-in-3">
                                <input list="dlist" type="text " class="banner-select form-control " placeholder="destination" name="destination" style="width: 100%">
                                <datalist id="dlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <span class="input-iconbadge"><img src="{{URL::asset('images/icons-image/s_icon_1.png')}}" alt="" draggable="false"></span>--}}
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="keywords(optional)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_third" role="tabpanel" aria-labelledby="rt-item_a_third">
                    <form action="#">

                        <div class="rt-input-group">
                            <div class="single-input  col-rt-in-3">
                                <input list="dlist" type="text " class="banner-select form-control " placeholder="destination" name="destination" style="width: 100%">
                                <datalist id="dlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                            <span class="input-iconbadge"><img src="{{URL::asset('images/icons-image/s_icon_1.png')}}" alt="" draggable="false"></span>--}}
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="keywords(optional)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_four" role="tabpanel" aria-labelledby="rt-item_a_four">
                    <form action="#">
                        <div class="rt-input-group">

                            <div class="single-input  col-rt-in-3">
                                <input type="text" list="tlist" placeholder="To" class=" banner-select form-control " name="to" style="width: 100%">
                                <datalist id="tlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">--}}
                                {{--                                    <option value="1">To</option>--}}
                                {{--                                    <option value="2">Alaska</option>--}}
                                {{--                                    <option value="3">Bahamas</option>--}}
                                {{--                                    <option value="4">Bermuda</option>--}}
                                {{--                                    <option value="5">Canada</option>--}}
                                {{--                                    <option value="6">Caribbean</option>--}}
                                {{--                                    <option value="7">Europe</option>--}}
                                {{--                                    <option value="8">Hawaii</option>--}}
                                {{--                                </select>--}}

                            </div>
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="train no( opt)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>


                <div class="tab-pane  rtIncative" id="rt-item_a_fifth" role="tabpanel" aria-labelledby="rt-item_a_fifth">
                    <form action="#">
                        <div class="rt-input-group">

                            <div class="single-input  col-rt-in-3">
                                <input type="text" list="tlist" placeholder="To" class=" banner-select form-control " name="to" style="width: 100%">
                                <datalist id="tlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">--}}
                                {{--                                    <option value="1">To</option>--}}
                                {{--                                    <option value="2">Alaska</option>--}}
                                {{--                                    <option value="3">Bahamas</option>--}}
                                {{--                                    <option value="4">Bermuda</option>--}}
                                {{--                                    <option value="5">Canada</option>--}}
                                {{--                                    <option value="6">Caribbean</option>--}}
                                {{--                                    <option value="7">Europe</option>--}}
                                {{--                                    <option value="8">Hawaii</option>--}}
                                {{--                                </select>--}}

                            </div>
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="train no( opt)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_sixth" role="tabpanel" aria-labelledby="rt-item_a_sixth">
                    <form action="#">
                        <div class="rt-input-group">

                            <div class="single-input  col-rt-in-3">
                                <input type="text" list="tlist" placeholder="To" class=" banner-select form-control " name="to" style="width: 100%">
                                <datalist id="tlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">--}}
                                {{--                                    <option value="1">To</option>--}}
                                {{--                                    <option value="2">Alaska</option>--}}
                                {{--                                    <option value="3">Bahamas</option>--}}
                                {{--                                    <option value="4">Bermuda</option>--}}
                                {{--                                    <option value="5">Canada</option>--}}
                                {{--                                    <option value="6">Caribbean</option>--}}
                                {{--                                    <option value="7">Europe</option>--}}
                                {{--                                    <option value="8">Hawaii</option>--}}
                                {{--                                </select>--}}

                            </div>
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="train no( opt)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_seventh" role="tabpanel" aria-labelledby="rt-item_a_seventh">
                    <form action="#">
                        <div class="rt-input-group">

                            <div class="single-input  col-rt-in-3">
                                <input type="text" list="tlist" placeholder="To" class=" banner-select form-control " name="to" style="width: 100%">
                                <datalist id="tlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">--}}
                                {{--                                    <option value="1">To</option>--}}
                                {{--                                    <option value="2">Alaska</option>--}}
                                {{--                                    <option value="3">Bahamas</option>--}}
                                {{--                                    <option value="4">Bermuda</option>--}}
                                {{--                                    <option value="5">Canada</option>--}}
                                {{--                                    <option value="6">Caribbean</option>--}}
                                {{--                                    <option value="7">Europe</option>--}}
                                {{--                                    <option value="8">Hawaii</option>--}}
                                {{--                                </select>--}}

                            </div>
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="train no( opt)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_eigth" role="tabpanel" aria-labelledby="rt-item_a_eigth">
                    <form action="#">
                        <div class="rt-input-group">

                            <div class="single-input  col-rt-in-3">
                                <input type="text" list="tlist" placeholder="To" class=" banner-select form-control " name="to" style="width: 100%">
                                <datalist id="tlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">--}}
                                {{--                                    <option value="1">To</option>--}}
                                {{--                                    <option value="2">Alaska</option>--}}
                                {{--                                    <option value="3">Bahamas</option>--}}
                                {{--                                    <option value="4">Bermuda</option>--}}
                                {{--                                    <option value="5">Canada</option>--}}
                                {{--                                    <option value="6">Caribbean</option>--}}
                                {{--                                    <option value="7">Europe</option>--}}
                                {{--                                    <option value="8">Hawaii</option>--}}
                                {{--                                </select>--}}

                            </div>
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="train no( opt)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
                <div class="tab-pane  rtIncative" id="rt-item_a_ninth" role="tabpanel" aria-labelledby="rt-item_a_ninth">
                    <form action="#">
                        <div class="rt-input-group">

                            <div class="single-input  col-rt-in-3">
                                <input type="text" list="tlist" placeholder="To" class=" banner-select form-control " name="to" style="width: 100%">
                                <datalist id="tlist">
                                    <option value="Alaska"></option>
                                    <option value="Bahamas"></option>
                                    <option value="Bermuda"></option>
                                    <option value="Canada"></option>
                                </datalist>
                                {{--                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">--}}
                                {{--                                    <option value="1">To</option>--}}
                                {{--                                    <option value="2">Alaska</option>--}}
                                {{--                                    <option value="3">Bahamas</option>--}}
                                {{--                                    <option value="4">Bermuda</option>--}}
                                {{--                                    <option value="5">Canada</option>--}}
                                {{--                                    <option value="6">Caribbean</option>--}}
                                {{--                                    <option value="7">Europe</option>--}}
                                {{--                                    <option value="8">Hawaii</option>--}}
                                {{--                                </select>--}}

                            </div>
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="train no( opt)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
            </div>
        </div><!-- /.rt-banner-searchbox -->



<div class="bottom-bar-l">
        <ul class="nav serachnavs wow fade-in-bottom" id="rtMultiTab" role="tablist" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <li class="nav-item">
                <a class="nav-link active" id="first-tab" data-target="#rt-item_b_first" data-secondary="#rt-item_a_first"
                    data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="false">
                    <i class="icofont-airplane"></i>
                    <span>Flights</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="second-tab" data-target="#rt-item_b_second" data-secondary="#rt-item_a_second"
                    data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true">

                    <i class="icofont-hotel"></i>
                    <span>Hotels</span>
                </a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link inactive" id="third-tab" data-target="#rt-item_b_thrid" data-secondary="#rt-item_a_third"
                    data-toggle="tab" href="#third" role="tab" aria-controls="third-tab" aria-selected="false">
                    <i class="icofont-car-alt-4 btn-top-margin-fix"></i>
                    <span>Cars</span>
                    <span class="minus-top-margin">Rental</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="four-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_four"
                    data-toggle="tab" href="#four" role="tab" aria-controls="four-tab" aria-selected="false">
                    <i class="icofont-train-line"></i>
                    <span>Transfer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="four-tab" data-target="#rt-item_b_fifth" data-secondary="#rt-item_a_fifth"
                    data-toggle="tab" href="#fifth" role="tab" aria-controls="fifth-tab" aria-selected="false">
                    <i class="icofont-train-line"></i>
                    <span>Bus</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="sixth-tab" data-target="#rt-item_b_sixth" data-secondary="#rt-item_a_sixth"
                    data-toggle="tab" href="#sixth" role="tab" aria-controls="four-tab" aria-selected="false">
                    <i class="icofont-train-line"></i>
                    <span>Group</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link inactive" id="seventh-tab" data-target="#rt-item_b_seventh" data-secondary="#rt-item_a_seventh"
                    data-toggle="tab" href="#seventh" role="tab" aria-controls="seventh-tab" aria-selected="false">
                    <i class="icofont-train-line"></i>
                    <span>tours</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="eigth-tab" data-target="#rt-item_b_eigth" data-secondary="#rt-item_a_eigth"
                    data-toggle="tab" href="#eigth" role="tab" aria-controls="eigth-tab" aria-selected="false">
                    <i class="icofont-train-line"></i>
                    <span>Insurance</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive" id="ninth-tab" data-target="#rt-item_b_four" data-secondary="#rt-item_a_ninth"
                    data-toggle="tab" href="#ninth" role="tab" aria-controls="ninth-tab" aria-selected="false">
                    <i class="icofont-train-line btn-top-margin-fix"></i>
                    <span>Special</span>
                    <span class="minus-top-margin">Ticket</span>
                </a>
            </li>
        </ul>
</div>

                    </div><!-- end banner content -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single rt banner -->
</section>


<!--
    ========= Counter Start ========================
 -->
<div class="counter-area">
    <div class="container">
        <div class="row">



            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp">
                    <img src="{{URL::asset('images/counter-icons/counter_iocn_1.png')}}" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>trusted clients</h5>
                        <h6><span class="counter">90,000</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12" >
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="1.5s">
                    <img src="{{URL::asset('images/counter-icons/counter_iocn_2.png')}}" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>trusted agents</h5>
                        <h6><span class="counter">3700</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="2s">
                <img src="{{URL::asset('images/counter-icons/counter_iocn_3.png')}}" alt="counter_iocn" draggable="false">
                    <div class="media-body">
                        <h5>trusted technology costumer</h5>
                        <h6><span class="counter">1030</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.counter -->

<!--
    ===========Services Area start==========
 -->
<section class="emigr-services-area rtbgprefix-contain serv-bg">
    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>WHY Choose Our Travel Agency?</span>
                        Our Core Values
                    </h2><!-- /.rt-section-title -->
                    <p>Our thoughtful team of knowledgeable experts are here to take care of every need,
                        from the second you contact us to when you return</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom">
                    <div class="services-thumb">
                        <img src="{{URL::asset('images/service-icons/s_icon_1.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Accommodation</h4>
                    <p>No matter where you are travelling, Emigrar is here to help you get the best deals in Hotels around the world.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="{{URL::asset('images/service-icons/s_icon_2.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Transportation</h4>
                    <p>Whether you are travelling through Air, Sea or Land, Emigrar can arrange transportation according to.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="{{URL::asset('images/service-icons/s_icon_3.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Expert Trip Planning</h4>
                    <p>Our Talented and Expert Trip Planning Team can make itinerary that suits our clients the best. We will make your travel</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="{{URL::asset('images/service-icons/s_icon_3.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>car rental</h4>
                    <p>No matter where you are travelling, STE is here to help you get the best deals in CARS around the world.
                        and also you can define your car availbailty and connect them to the other </p>   </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="{{URL::asset('images/service-icons/s_icon_3.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>transfer</h4>
                   <p>getting vehicle from a point to take you is the esesit way from STE

                       share your power with transfer of STE and share your schedule</p>  </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="{{URL::asset('images/service-icons/s_icon_3.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Bus</h4>
                   <p>share and get  bus deals  with  STE and share your schedule
                   </p>  </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="{{URL::asset('images/service-icons/s_icon_3.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>insurance </h4>
                    <p>
                        Travel insurance could cover medical expenses, trip cancellation or delays, lost or stolen baggage and personal liability while you’re travelling.


                    </p>   </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="spacer-bottom"></div><!-- /.spacer-bottm -->
</section>


<!--
    ============Deal Area Start===============
 -->


 <section class="deal-area bg-shape1   rtbgprefix-full bg-hide-md" >
    <div class="container-fluid p-0">
       <div class="deal-carosel-active owl-carousel">
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg p-bg" >
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
                        </h2><!-- /.rt-section-title -->
                        <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>Thailand Tours and Holidays 2018/2019</h4>
                            <p>
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg f1">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
                        </h2><!-- /.rt-section-title -->
                        <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>Thailand Tours and Holidays 2018/2019</h4>
                            <p>
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg f2" >
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
                        </h2><!-- /.rt-section-title -->
                        <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>Thailand Tours and Holidays 2018/2019</h4>
                            <p>
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
       </div><!-- /.deal-carosel-active -->
    </div><!-- /.container -->
 </section>
<!--
    ========works start==========
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
 <section class="works-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Here's How It Works</span>
                        Getting Started? It’s Simple
                    </h2><!-- /.rt-section-title -->
                    <p>Prepare For Your Trip.Find out all you need to know before you go.Traveling is as unique as you are. And there is no one
                    package that fits all. That's why we offer customized travel packages.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom">
                    <div class="services-thumb">
                        <img src="{{URL::asset('images/service-icons/s_icon_4.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Search</h4>
                    <p>Over 1,200,000 Hotels, Apartments
                        and Hostels</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1s">
                    <div class="services-thumb">
                        <img src="{{URL::asset('images/service-icons/s_icon_5.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Compare & Book</h4>
                    <p>By price, location, rating
                        and more.</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="{{URL::asset('images/service-icons/s_icon_6.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Get travel insurance</h4>
                    <p>Buy comprehensive cover for
                        your next trips</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                        <img src="{{URL::asset('images/service-icons/s_icon_7.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Book a room</h4>
                    <p>By finding the best price for
                        your ideal hotel.</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-2">Tour the world</a><!-- /.rt-btn -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
 </section>
<!--
    ============ Portfolio Start===============
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="f3 portfolio-area rt-section-padding rtbgprefix-full bg-hide-md gradinet-bg-md">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper text-white">
                    <h2 class="rt-section-title">
                        <span>Take a Look at Our</span>
                        Recommended Hotels
                    </h2><!-- /.rt-section-title -->
                    <p>We've made a list of suggested activities based on your interests.Browse through our most popular
                    Hotels!Our Featured Tours can help you find the trip that's perfect for you!.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-12">
                <ul class="filter-list">
                    <li data-filter="*" class="active ">New York</li>
                    <li data-filter=".cat-1">London</li>
                    <li data-filter=".cat-2">Paris</li>
                    <li data-filter=".cat-3">Hong Kong</li>
                    <li data-filter=".cat-4">Bangkok</li>
                    <li data-filter=".cat-5">Singapore</li>
                    <li data-filter=".cat-5">Tokyo</li>
                </ul>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row grid">
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5 cat-4">
                <div class="portfolio-box-1 wow fade-in-bottom f4" >
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-2 cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom f5" data-wow-duration="1s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-4">
                <div class="portfolio-box-1 wow fade-in-bottom f6" data-wow-duration="1.3s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-4 cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom f7"  data-wow-duration="1.6s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom f8" data-wow-duration="1.9s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
            <div class="col-lg-4 col-md-6 grid-item cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom f9"  data-wow-duration="2.2s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-1">browse more</a><!-- /.rt-btn -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--
    ======== Flight deals start======
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->

<section class="flight-dela-area" data-scrollax-parent="true">
    <div class="rt-shape-emenetns-1 f10"
        data-scrollax="properties: { translateY: '340px' }"></div><!-- /.rt-shape-emenetns-1 -->
    <div class="rt-shape-emenetns-2 f11"
        data-scrollax="properties: { translateX: '-140px' }"></div><!-- /.rt-shape-elemenets2 -->
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Explore Top Destinations</span>
                        Top Round-trip Flight Deals
                    </h2><!-- /.rt-section-title -->
                    <p>
                        Get inspired, find the best deals and start an unforgettable journeya.Looking for the best
                        flight deals
                        for your next
                        trip? Find the top Emigrar deals that are updated daily to book the cheapest
                        flight up to 55% off the average price.
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                <div class="row">
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom f12" data-wow-duration="1s" data-wow-delay=".02s" href="#" >
                            <div class="rt-inner-overlay color_1"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class=" col-md-6">
                        <a class="flight-box wow fade-in-bottom f13" href="#" data-wow-duration="1.3s" data-wow-delay=".04s" >
                            <div class="rt-inner-overlay color_2"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom f14" data-wow-duration="1.6s" data-wow-delay=".06s" href="#">
                            <div class="rt-inner-overlay color_3"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom f15" data-wow-duration="1.9s" data-wow-delay=".08s" href="#" >
                            <div class="rt-inner-overlay color_4"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom f16" data-wow-duration="2.2s" data-wow-delay=".010s" href="#">
                            <div class="rt-inner-overlay color_5"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom f17" data-wow-duration="2.6s" data-wow-delay=".12s" href="#" >
                            <div class="rt-inner-overlay color_6"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-12 text-center mt-4">
                        <a href="#" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2">browse more</a>
                        <!-- /.rt-btn -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--
    ====== call to action======
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="rt-cta-area">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-box-1 d-flex flex-lg-row flex-column align-items-center text-center text-lg-left justify-content-lg-between rtbgprefix-cover text-white justify-content-center f18" >
                    <div class="left-column">
                        <h4 class="wow fade-in-top" data-wow-duration="1s" data-wow-delay="0.2s">
                            Not sure where to go next? <span>We're here to inspire you</span>
                        </h4>
                        <p class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.2s">
                            Send us an email and someone on our team will be in touch with you!
                        </p>
                    </div><!-- /.left-column -->
                    <div class="right-column">
                        <a href="#" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2 wow fade-in-left" data-wow-duration="1s" data-wow-delay="0.6s">Plan Your Next Trip</a><!-- /.rt-btn -->
                    </div><!-- /.right-column -->
                </div><!-- /.inner-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section>

<!--
    =======app area strat=========
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->


<section class="app-area rtbgprefix-cover f19"
    data-scrollax-parent="true">
    <div class="rt-shape-elements-1 rtbgprefix-contain f20"
        data-scrollax="properties: { translateY: '50px' }"></div><!-- /.rt-shape-elements-1 -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center text-lg-left">
                <img src="{{URL::asset('images/all-img/app-mbl.png')}}" alt="mockup image" draggable="false" class="wow fade-in-left" data-wow-duration="1s" data-wow-delay="0.2s">
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <div class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.6s">
                        <h2 class="rt-section-title">
                            <span>Itineraries that impress.</span>
                            Download App
                        </h2><!-- /.rt-section-title -->
                        <p>
                            All your travel plans, in one place.You handle the booking.Access reservations, maps, and
                            more on your favorite device!View trending destinations. Discover popular trips. Listen to
                            your heart. Experience the world.Find or create your perfect trip. Meet fellow travellers.
                            Experience different cultures. Create unforgettable memories.Keep up-to-date with
                            active trips, view your favourites, visit previous adventures. Managing a trip has never
                            been easier.

                        </p>
                        <br>
                        <p>
                            Download the Emigrar app and join our ever-growing community of passionate
                            travellers. Find lasting friendships, discover new adventures and create unforgettable
                            memories.
                        </p>
                    </div><!-- /.wow -->
                    <div class="rt-button-group mt-5 wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.9s">
                        <a href="#" class="rt-btn rt-app-parimary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-google-play"></i>
                            </div><!-- /.app-thumb -->
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Appstore</span>
                            </div><!-- /.app-text -->
                        </a>
                        <a href="#" class="rt-btn rt-app-secondary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-apple"></i>
                            </div><!-- /.app-thumb -->
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Appstore</span>
                            </div><!-- /.app-text -->
                        </a>
                    </div><!-- /.rt-button-group -->
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--
    ============= video area start==========
 -->

 <div class="play-video rtbgprefix-full bg-hide-md f21">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="play-video-box rtbgprefix-cover f35" >
    <a href="https://vimeo.com/310740632" class="rt-btn rt-video-light playVideo"></a>
</div><!-- /.play-video-box -->
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>





<!--
    ============= Brands area start==========
 -->


<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="brands-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Take a Look at Our</span>
                        Trusted Partners
                    </h2><!-- /.rt-section-title -->
                    <p>
                        We are committed to being the best partner.Emigrar believes in being your trusted partner and
                        earning that trust through
                        confidence and performance in service and support.
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row ">
            <div class="col-lg-9 mx-auto">
                <ul class="rt-border-brands">
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block">
            <img src="{{URL::asset('images/partners/trus1.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="1s">
            <img src="{{URL::asset('images/partners/trus2.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="1.5s">
            <img src="{{URL::asset('images/partners/trus3.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="2s">
            <img src="{{URL::asset('images/partners/trus4.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="2.5s">
            <img src="{{URL::asset('images/partners/trus5.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="3s">
            <img src="{{URL::asset('images/partners/trus6.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="3.5s">
            <img src="{{URL::asset('images/partners/trus7.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="4s">
            <img src="{{URL::asset('images/partners/trus8.jpg')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="4s">
            <img src="{{URL::asset('images/partners/trus9.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->

</ul><!-- /.rt-border-brands -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.containe -->
</section>
@endsection









