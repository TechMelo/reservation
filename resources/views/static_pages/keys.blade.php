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
                <div class="col-lg-12 ">
                    <div class="rt-section-title-wrapper text-center mx-auto mb-5">
                        <h5 class="rt-section-title">
                            Keys
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->
                    <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            All in One
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->
                    <p><strong>ste  has integrated different suppliers on the market of all kinds of travel services:</strong></p>
                    <ul class="bullets">
                        <li>Flight: Multi GDS
                            1100+ airlines (regular, LLCs, charters)</li>
                        <li> Hotel: 300 000 cities worldwide; Channel Manager; Hotel Mapping</li>
                        <li>Car Rental</li>
                        <li>Transfer: Any transfers from group to individual, from A2B transfers, GTA and Hotelbeds</li>
                        <li>Train</li>
                        <li> Packages:  Flight+Hotel / Flight+Hotel+Car / Flight+Car / Hotel+Car</li>
                        <li>Charter flight></li>
                        <li> Hotel management</li>
                        <li>Insurance</li>
                    </ul>


                    <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            Best prices and the richest travel inventory
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->

                    <p> We guarantee the best prices on the travel services! Our suppliers across the world compete with each other to give you the best deals! We are constantly searching for any possibility to improve even more our fares via:</p>
                    <ul class="bullets">
                        <li>Access to multiple GDS to have maximum number of destinations and airlines</li>
                        <li>Access to worldwide low-cost carriers</li>
                        <li>Access to worldwide global fares from 105 different countries</li>
                        <li>Access to worldwide special fares from different consolidators</li>
                        <li>Access to more than 35 hotel suppliers to compare all the best prices at once</li>
                    </ul>

                    <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            Flight content
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->

                <p>We are very proud to highlight our Flight content. We are the first company that managed to develop the access to global fares and to issue automatically the bookings no matter what country it is coming from. Therefore, we have the most competitive flight fares on the market offered by 105 different countries. </p>
                     <ul class="bullets">
                         <li>Multi GDS</li>
                         <li>105+ BSPs</li>
                         <li> 900+ regular airlines</li>
                         <li>200+ low cost carriers</li>
                         <li>Charters</li>
                         <li>10+ direct contracts with airlines</li>
                         <li>25+ NDC</li>
                         <li>20+ Consolidators</li>
                    </ul>
                    <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            Increase of profit
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->

                    <p> <strong>We guarantee that our online booking engine will increase your profit and will serve on the long run basis. Why are we sure? Here are some of the reasons:
                        </strong> <br>
                    <ul class="bullets">
                        <li>* The best rates on the market that lets you put higher markup than with any other provider on the market
                        </li>
                        <li>Advanced conditions for the mark up setting to ensure the sales of the bookings without constant human input</li>
                    <li>Constant integration of new suppliers & better deals while you receive all of them automatically and free of charge</li>
                        <li>All kind of analytical tools in your Back Office to monitor the success of your business</li>
                        <li>Personal Key Account Manager who makes analysis and provides proper suggestions to improve your performance</li>
                    </ul>
                    <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            Our solutions fit everyone
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->
<p>Our travel technology solutions are suitable for all companies of the travel industry: TMC, tour operators, large and small travel agencies, online travel agencies, or business travel companies. We can meet any business requirements. All parties of the tourism industry are welcome to take advantage of STE solutions. </p>
                   <p><strong>Get free access to the online booking engine to make bookings - Free B2B registrati</strong></p>
                    <ul class="bullets">
                        <li>Use our website to make bookings</li>
                        <li> Upload logo and contact data for your vouchers and invoices</li>
                        <li>Create your customer database</li>
                        <li>Set up mark up in your Back Office</li>
                        <li>Operate independently with your currency settings and payment gateways</li>
                        <li>Control your business via financial report and business analytics.</li>
                    </ul>
                    <p><strong>ecome online travel agency within 1 week only using our technology under your brand</strong></p>
                     <ul class="bullets">
                         <li>iFrame</li>
                         <li>B2C Portal</li>
                         <li>White Label B2B & B2C</li>
                         <li>SETS - STES Enterprise Travel Solution</li>
                    </ul>
                   <p><strong>Take our technology under your brand and add your own suppliers</strong></p>
                   <ul class="bullets">
                       <li> ITP - Independent Travel Platform</li>
                   </ul>
                    <p><strong>Expand the inventory of your booking engine through our XML API</strong></p>
                  <ul class="bullets">
                      <li>Flight</li>
                      <li> Hotel</li>
                      <li> Cruise</li>
                      <li> Car Rental</li>
                      <li> Transfer </li>
                      <li> Train</li></ul>
                    <p><strong>Be the leader on your market by representing STE</strong></p>
                 <ul class="bullets">
                     <li> GSA - General Sales Agent</li>
                 </ul>
                    <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            Ready business in ONE week
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->
<p>Building an online booking engine takes a lot of time and financial resources. Instead of spending months and hundreds thousands DOLLARS , you can take ready online booking engine that has proved its quality and reliability among 3,000+ companies and 10,000+ users and customize it to your brand under your domain so that within one week you have stable online travel business.</p>
                    <p><strong>Within any of our travel technology solution you receive in ONE week:</strong></p>
                    <ul class="bullets">
                        <li> Website with the design of your choice</li>
                        <li>Online booking engine with 100% automatic issue of all tickets</li>
                        <li> B2B or/and B2C platforms in one</li>
                        <li> 250+ global suppliers of flights, hotels, cruises, packages, car rental services, transfers, train tickets etc.</li>
                        <li> NET rates from all suppliers</li>
                        <li>Multifunctional Back Office</li>
                        <li> 24/7 support for bookings via live chat</li>
                        <li> Professional training of the system and sales training</li>
                        <li>Personal Key account Manager</li>    </ul>
                    <p><strong>Using STE technology requires:</strong></p>
                    <ul class="bullets">
                        <li> NO large investments</li>
                        <li>NO IATA accreditation</li>
                        <li> NO GDS knowledge</li>
                        <li> NO contracts with each supplier separately</li>
                        <li>  NO deposits on each supplier's account</li>
                        <li>NO XML API integrations</li>
                    </ul>

                          <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            NO special training
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->
                    <p><strong>Automatic update</strong></p>
                     <ul class="bullets">
                        <li>Constant and automatic upgrades of the platform</li>
                    </ul>
                   <p>New suppliers, better deals with existing suppliers, new functions of the Back Office, more filters for search, improvements of the design - all of these is a constant part of our business. We never stay still and we improve our online booking engine and the entire platform based on our own experience and the recommendations of our partners. All of them receive our upgrades automatically and free of charge. We believe that as we improve, all our partners shall improve with us.</p>

                    <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            24/7 Support
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->
                    <p><strong>Key Account Manager </strong></p>
                    <p>Each of our partners has personal Key Account Manager who is ready to help with any questions that relate to the platform, Back Office, sales and analysis, and technical requests. </p>
                <p><strong>24/7 Live Chat</strong></p>
                <p>There is a Booking List in the Back Office which displays the list of all the bookings done on your platform with all necessary specifications: date/time/type/owner/buyer group/price/profit/status/pay mode and etc. If you have any questions or requests towards the booking that you are not able to solve yourself, you just click on 'live chat' and write a quick message. Our team will immediately understand what booking you refer to and will provide you the solution straight away.</p>
                <div class="rt-section-title-wrapper">
                        <h5 class="rt-section-title-s">
                            100% automatic
                        </h5><!-- /.rt-section-title -->
                    </div><!-- /.rt-section-title-wrapper- -->
                    <p><strong>Online business is rapidly growing, and it is important to provide not only cheap rates but automatic processes to not waste clients' time. Therefore our booking engine is 100% automatic:</strong></p>
                   <ul class="bullets">
                       <li> Entire booking process</li>
                       <li>Issue of tickets</li>
                       <li> Dispatch of vouchers</li>
                       <li> Voiding</li>
                       <li>Cancellation</li>
                       <li>Filling out the invoices</li>
                       <li>Issue of invoices</li>
                   </ul>

                      </div>   <!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


    {{--<section class="about-area2">--}}
    {{--    <div class="rt-design-elmnts  rtbgprefix-contain">--}}
    {{--    </div><!-- /.rt-design-elmnts -->--}}
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-lg-10 mx-auto text-center">--}}
    {{--                <div class="rt-section-title-wrapper">--}}
    {{--                    <h2 class="rt-section-title">--}}
    {{--                        <span>Our Exclusive Offers</span>--}}
    {{--                        Our Features--}}
    {{--                    </h2><!-- /.rt-section-title -->--}}
    {{--                    <p>--}}
    {{--                        STE  is B2B company. However, our Online Booking Engine is used for all customer channels: B2B, B2C, B2B2B, B2B2C etc. We are eager to deliver the high-quality solutions within the shortest period of time. The variety of services and products we have allows us to serve all parties of the travel industry. Our Back Office is been developing based on our own experience, numerous surveys and questionnaires of players in the travel industry, and wishes of our partners. We would like to highlight some of the features that are available within the Back Office:--}}
    {{--<div class="f-pre">--}}
    {{--Time zone <br>--}}
    {{-- Different accesses to the members of your team Automatically generated invoices for all the bookings <br>--}}
    {{-- Control over the voucher design Disabled destinations for search or payment <br>--}}
    {{-- Control over the information on the invoice Newsletters directly from the platform <br>--}}
    {{-- Control over terms and conditions<br>--}}
    {{-- Multi languages<br>--}}
    {{-- Unlimited number of currencies<br>--}}
    {{-- Automatic issue of the tickets<br>--}}
    {{-- Manual, automatic or automatic + margin currency rate<br>--}}
    {{-- Money flow documentation<br>--}}
    {{-- Division of your clients into different groups<br>--}}
    {{-- Control over the website design<br>--}}
    {{-- Different terms to each group<br>--}}
    {{-- Unlimited number of B2B agencies<br>--}}
    {{-- Password-protected accesses for your agencies<br>--}}
    {{-- Unlimited number of B2C<br>--}}
    {{-- Integrated CRM<br>--}}
    {{-- Control over terms and conditions for different clients<br>--}}
    {{-- Monitor over the operations of your clients<br>--}}
    {{-- Control over the website content<br>--}}
    {{-- Integrated SEO of the entire platform<br>--}}
    {{-- Access to create automatic messages/emails to your clients<br>--}}
    {{-- Bonuses for the successful bookings<br> <br>--}}
    {{--                    </div>--}}
    {{--                    STE is known for the number of suppliers that is already integrated in the booking engine. We will keep surprising our partners with the best rates because integrations never stop. Moreover, our partners do not need to contact, contract, and set up deposits or credit lines with any of the suppliers as this is entirely managed by us. Therefore, our partners can relax and focus on the sales of bookings. Our Key Account Managers support them and make an analysis of their performance to give proper recommendations as to how they can make more bookings.--}}
    {{--                    </p>--}}
    {{--                </div><!-- /.rt-section-title-wrapper- -->--}}
    {{--                <div class="section-title-spacer"></div><!-- /.section-title-spacer -->--}}
    {{--                <a href="#" class="rt-btn rt-primary rt-rounded">Get Matched to Travel Specialists</a>--}}
    {{--            </div><!-- /.col-lg-9 -->--}}
    {{--        </div><!-- /.row -->--}}
    {{--    </div><!-- /.container -->--}}
    {{--</section>--}}
@endsection
