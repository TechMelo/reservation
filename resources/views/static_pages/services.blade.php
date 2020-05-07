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
    </div> <!-- end top header -->

<!-- Modal -->
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="assets/images/logo/Logo-icon.png" alt="modal logo" draggable="false">
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
<section class="svcPage-area svc-fix">
    <div class="container">

        <div class="row">
            <div class="col-lg-10 text-center mx-auto">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Our Exclusive Offers</span>
                        Our Services
                    </h2><!-- /.rt-section-title -->
                    <p>STE is a travel technology provider that is the expert of both mentioned fields. Having professional team of developers inhouse and highly-motivated experts of travel industry, we managed to develop reliable Internet Booking Engine that ensures an online issue of all tickets.

                        By contracting global and local suppliers, negotiating the rates with each of them individually and making efficient integrations, we reached the biggest number of suppliers in one booking engine. Each supplier has its own contracts and partners, and each supplier is strong in its own region. Having them all in one booking engine guarantees the most competitive rates in any region.

                        Back office that has also been developed allows us and our partners monitor the entire business, manage all kind of business settings as well as control all the bookings. STE  never stands still. Every day we are integrating new suppliers, advancing Back Office and getting feedback from all parties of the travel industry to implement their ideas and maximum meet our partners’ wishes.
                    </p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="0.5s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-5.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5> Flights</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="1s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-6.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Hotel</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-7.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Holidays pakages</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="2s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-8.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Dynamic pakages</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="2.5s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-9.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Car rental</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="3s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-10.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Transfer</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="3s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-10.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Train</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="3s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-10.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Bus</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="3s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-10.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Activities</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="3s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-10.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5> Insurance</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="3s">
                    <div class="icon-thumb">
                        <img src="{{URL::asset('images/icons-image/box-icon-10.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5> Payment methods</h5>
                        <p>Our airport desk is conveniently located at the JKIA passenger terminal. We offer
                            personalized meet and greet services at the airport. This helps fast track clearance through
                            immigration and custom.</p>
                        <div class="read-morebtn">
                            <a href="#">Read more <i class="icofont-long-arrow-right"></i></a>
                        </div><!-- /.read-morebtn -->
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--
    ====== Works Start ==============
 -->
{{--<div class="spacer-bottom"></div><!-- /.spacer-bottom -->--}}
{{--<section class="works3-area">--}}
{{--    <div class="rt-inner-overlay"></div><!-- /.rt-overlay -->--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div class="rt-section-title-wrapper">--}}
{{--                    <h3>How we do it</h3>--}}
{{--                </div><!-- /.rt-section-title-wrapper -->--}}
{{--                <div class="rt-box-style-1">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom">--}}
{{--                                <div class="icon-thumb">--}}
{{--                                    <img src="assets/images/icons-image/box-icon-11.png" alt="box-icon" draggable="false">--}}
{{--                                </div><!-- /.icon-thumb -->--}}
{{--                                <div class="iconbox-content">--}}
{{--                                    <h5>Technology</h5>--}}
{{--                                    <p>In-house tools covering profile--}}
{{--                                        management, reporting and more</p>--}}
{{--                                </div><!-- /.iconbox-content -->--}}
{{--                            </div><!-- /.rt-single-icon-box -->--}}
{{--                        </div><!-- /.col-lg-4 -->--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="1s">--}}
{{--                                <div class="icon-thumb">--}}
{{--                                    <img src="assets/images/icons-image/box-icon-12.png" alt="box-icon" draggable="false">--}}
{{--                                </div><!-- /.icon-thumb -->--}}
{{--                                <div class="iconbox-content">--}}
{{--                                    <h5>Global Agency</h5>--}}
{{--                                    <p>100+ trusted, reputable local agencies--}}
{{--                                        in 72 markets on 6 continents</p>--}}
{{--                                </div><!-- /.iconbox-content -->--}}
{{--                            </div><!-- /.rt-single-icon-box -->--}}
{{--                        </div><!-- /.col-lg-4 -->--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <div class="rt-single-icon-box icon-center text-center justify-content-center wow fade-in-bottom" data-wow-duration="1.5s">--}}
{{--                                <div class="icon-thumb">--}}
{{--                                    <img src="assets/images/icons-image/box-icon-13.png" alt="box-icon" draggable="false">--}}
{{--                                </div><!-- /.icon-thumb -->--}}
{{--                                <div class="iconbox-content">--}}
{{--                                    <h5>Leadership Team</h5>--}}
{{--                                    <p>Passionate about business travel, with decades of multi-industry experience</p>--}}
{{--                                </div><!-- /.iconbox-content -->--}}
{{--                            </div><!-- /.rt-single-icon-box -->--}}
{{--                        </div><!-- /.col-lg-4 -->--}}
{{--                        <div class="col-12 text-center">--}}
{{--                            <a href="#" class="rt-btn rt-gradient rt-Bshadow-2 rt-rounded rt-sm text-uppercase">Find Out More</a>--}}
{{--                        </div><!-- /.col-12 -->--}}
{{--                    </div><!-- /.row -->--}}
{{--                </div><!-- /.rt-box-style-1 -->--}}
{{--            </div><!-- /.col-12 -->--}}
{{--        </div><!-- /.row -->--}}
{{--    </div><!-- /.container -->--}}
{{--</section>--}}

{{--<!----}}
{{--    ======About Area Start ==============--}}
{{-- -->--}}

<section class="about-area2">
    <div class="rt-design-elmnts  rtbgprefix-contain">
    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
{{--                        <span>Our Exclusive Offers</span>--}}
                        Our Features
                    </h2><!-- /.rt-section-title -->
                    <p>
                        STE  is B2B company. However, our Online Booking Engine is used for all customer channels: B2B, B2C, B2B2B, B2B2C etc. We are eager to deliver the high-quality solutions within the shortest period of time. The variety of services and products we have allows us to serve all parties of the travel industry. Our Back Office is been developing based on our own experience, numerous surveys and questionnaires of players in the travel industry, and wishes of our partners. We would like to highlight some of the features that are available within the Back Office:
<div class="f-pre">
Time zone <br>
 Different accesses to the members of your team Automatically generated invoices for all the bookings <br>
 Control over the voucher design Disabled destinations for search or payment <br>
 Control over the information on the invoice Newsletters directly from the platform <br>
 Control over terms and conditions<br>
 Multi languages<br>
 Unlimited number of currencies<br>
 Automatic issue of the tickets<br>
 Manual, automatic or automatic + margin currency rate<br>
 Money flow documentation<br>
 Division of your clients into different groups<br>
 Control over the website design<br>
 Different terms to each group<br>
 Unlimited number of B2B agencies<br>
 Password-protected accesses for your agencies<br>
 Unlimited number of B2C<br>
 Integrated CRM<br>
 Control over terms and conditions for different clients<br>
 Monitor over the operations of your clients<br>
 Control over the website content<br>
 Integrated SEO of the entire platform<br>
 Access to create automatic messages/emails to your clients<br>
 Bonuses for the successful bookings<br> <br>
                    </div>
                    STE is known for the number of suppliers that is already integrated in the booking engine. We will keep surprising our partners with the best rates because integrations never stop. Moreover, our partners do not need to contact, contract, and set up deposits or credit lines with any of the suppliers as this is entirely managed by us. Therefore, our partners can relax and focus on the sales of bookings. Our Key Account Managers support them and make an analysis of their performance to give proper recommendations as to how they can make more bookings.
                    </p>
                </div><!-- /.rt-section-title-wrapper- -->
{{--                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->--}}
{{--                <a href="#" class="rt-btn rt-primary rt-rounded">Get Matched to Travel Specialists</a>--}}
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection
