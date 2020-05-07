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
            <div class="col-lg-12  ">
                <div class="rt-section-title-wrapper text-center mx-auto mb-5">
                    <h5 class="rt-section-title">
                        Our Product
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->
                <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        B2C portal / OTA
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->
                <ul class="bullets">
                    <li>Allow your customers to book online on your website!</li>
                    <li>Website design of YOUR choice</li>
                    <li>100% online and automatic</li>
                </ul>
                <p>B2C portal/ IBE (Internet Booking Engine) is a perfect solution to allow your clients to make the complete the entire booking process on all kinds of travel services on YOUR website. The platform is customized to your brand. Issue of tickets is 100 % automatic so that your clients do not wait! All your vouchers and invoices have your brand name. With our B2C platform, your agency will stand out online due to our competitive prices, individual approach to each partner and the design of your choice!
                </p>
                <div class="col-lg-6  font-weight-bold my-5">
                    <p>Ready business in ONE week
                        100% Online Booking Engine
                        Website design of YOUR choice
                        Automatic issue of tickets
                        Automatic voiding and cancellation
                        NET rates on all 450+ global suppliers
                        Newsletters directly form the platform
                        User-friendly Back Office
                        24/7 support for the bookings via live chat
                    </p>
                </div>

                <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        Receive immediate access to the global suppliers!
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->

               <p> <strong>Provide various travel services to your unlimited B2C and corporate clients.
                   Set up the mark-up in your Back Office.</strong> <br>
                   Travel companies can use STE  Internet Booking Engine as ‘B2B’. It means that by registering on STE  website you get a chance to sell Flights/Hotels/Cruises/Dynamic Packages/Car Rental/Transfer/Trains and other travel services at very competitive prices to your customers. Registration and the usage of the platform are free of charge. Sounds good, does not it? Read below about the process, benefits working with STE engine and make B2B registration today!
               </p>
                <ul class="bullets">
                    <li>Free registration</li>
                    <li>Free usage of the account</li>
                    <li>Immediate access to 450+ global suppliers</li>
                    <li>Automatic issue of tickets</li>
                    <li> Automatic voiding</li>
                    <li>Automatic cancellation</li>
                    <li>Back Office to set up mark-up and more</li>
                    <li>Vouchers and invoices with YOUR logo</li>
                    <li>24/7 support for the bookings via live chat</li>
                </ul>
                <p>You will have a Back Office at your disposal in order to control all your bookings and business settings. There you can add your mark-up, define the currency you would like to work with as well as preferable payment gateways and more. Make sure that you fill in all the information, as it opens you more opportunities to optimize your business. For example, if you upload your logo, it displays automatically on the vouchers and invoices. The same goes to the default email and name, and bank details. This allows you to keep your clients! Ticketing and voiding are automatic on our platform</p>

                <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        GSA
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->

                <p> <strong>Enter the market with the strong brand!
                        Sell technology solutions and travel services under STE  brand.
                        Benefit from superior marketing campaign and Google SEO.
                    </strong> <br>
                    A General Sales Agent (GSA) is a sales representative for all STE  products and services on the specific country or region. It receives the entire booking engine, including accounting, enquiries and contract features. GSA profits by selling different travel services as well as STE technology solutions like SETS, White Label, B2B and B2C. GSA receives full support in marketing campaigns and Google Search Engine to ensure the visibility and presence of the brand.  </p>
                <ul class="bullets">
                    <li>100% Online Booking Engine</li>
                    <li>Work under reliable brand name</li>
                    <li>Superior advertising & marketing</li>
                    <li>Profit from selling travel services & technology</li>
                    <li>Automatic issue of tickets</li>
                    <li> Automatic voiding and cancellation</li>
                    <li>NET rates on all 450+ global suppliers</li>
                    <li>User-friendly Back Office</li>
                    <li>24/7 support for the bookings via live chat</li>
                    <li> Effective training of the platform and sales</li>

                </ul>
                <p>GSA is the major platform that includes all the features of STE Booking Engine. Therefore, there are certain requirements to become our GSA: IATA Membership, Experience with travel companies on the market, Sales business plan for our technology solutions, Sales Business Plan for our travel services, Sales Team / Names / Experience, Current volume of sales, Turnover statement, Financial report for the last 2 years.</p>

                <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        iFrame
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->

                <p> <strong>Use our iFrame on your website!
                    </strong> <br>
                    <ul class="bullets">
                    <li>The entire booking process is on your website
                    </li>
                    <li>Vouchers and Invoices are under you brand</li>
                </ul>
                  <p>Does your website have a visually friendly search box that allows your clients to make a booking straight away? If not, our iFrame is a suitable solution for you. It allows your clients to start their search on your website straight away, stay there during the entire booking process, receive the ticket with your logo and contact data instantly. Our iFrame offers your clients rich variety of travel services and helps to encourage them to make further bookings from your website!</p>
                    <ul class="bullets">
                        <li>Free registration</li>
                        <li>Free usage of the account</li>
                        <li>Immediate access to 450+ global suppliers</li>
                        <li>Automatic issue of tickets</li>
                        <li>Automatic voiding</li>
                        <li>Automatic cancellation</li>
                        <li>Vouchers and invoices with YOUR logo</li>
                        <li>Back Office to set up mark-up and more</li>
                        <li>24/7 support for the bookings via live chat</li>
                </ul>
                <p>You will have a Back Office at your disposal in order to control all your bookings and business settings. There you can add your mark-up, define the currency you would like to work with as well as preferable payment gateways and more. Make sure that you fill in all the information, as it opens you more opportunities to optimize your business. For example, if you upload your logo, it displays automatically on the vouchers and invoices. The same goes to the default email and name, and bank details. This allows you to keep your clients! Ticketing and voiding are automatic on our platform</p>


                       <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        ITP / Independent Platform
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->

                    <ul class="bullets">
                    <li>
                        Use your own suppliers in the reliable booking engine!
                    </li>
                    <li> Improve your business by using strong booking engine</li>
                    <li>  Choose the suppliers yourself</li>
                </ul>
            <p>ITP, Independent Travel Platform, solution has all the functionality as SETS platform. You utilize our reliable internet-booking engine with the multifunctional Back Office and independently select your suppliers to have them integrated into your system. Among the suppliers that you have by default are German BSP for flight and STE as a hotel supplier. This solution is perfectly suitable for the companies that want to have a strong platform but choose the suppliers to add themselves.</p>
                       <ul class="bullets">
                           <li>100% Online Booking Engine</li>
                           <li>Ability to sell B2B, B2C and White Labels</li>
                           <li>Customization to YOUR choice</li>
                           <li>Integration of suppliers of YOUR choice</li>
                           <li>Automatic issue of tickets</li>
                           <li>Automatic voiding</li>
                           <li>Automatic cancellation</li>
                           <li>User-friendly Back Office</li>
                           <li> 24/7 support for the bookings via live chat</li>
                       </ul>
            <p>
                In your Back Office you can create web pages for your website, set up your mark-up in the pricing settings, add more than one currency, determine different payment methods, divide your buyers into different groups and define different terms and conditions for each of them, create the design for your voucher, give all members of your team an access to the system and determine different user access level for each of them, monitor SEO, analyze the entire business per day, week, month, and year, give bonuses for the successful bookings, track all your finance and even more.
            </p>
                <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        SETS
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->

                    <ul class="bullets">
                    <li>
                        Become the strongest consolidator in your country!
                    </li>
                    <li> Let your brand name stand out by selling MRD technology solutions:</li>
                    <li> White Label, B2B or B2C platforms, Affiliate program, XML API etc.</li>
                </ul>
                <p>SETS solution has all the functionality and infrastructure as STE. It saves several years of developing the online booking engine. Do not waste your time and money - just take what already been done! This solution is perfectly suitable for the companies that want to achieve leading positions in their markets. By selling the STE products on your behalf, you can easily return your investments.</p>
                    <ul class="bullets">
                        <li> 100% Online Booking Engine</li>
                        <li>Ability to sell B2B, B2C and White Labels</li>
                        <li>Customization to YOUR choice</li>
                        <li> Automatic issue of tickets</li>
                        <li>Automatic voiding and cancellation</li>
                        <li> NET rates on all 450+ global suppliers</li>
                        <li> User-friendly Back Office</li>
                        <li>24/7 support for the bookings via live chat</li>
                       </ul>
            <p>In your Back Office you can create web pages for your website, set up your mark-up in the pricing settings, add more than one currency, determine different payment methods, divide your buyers into different groups and define different terms and conditions for each of them, create the design for your voucher, give all members of your team an access to the system and determine different user access level for each of them, monitor SEO, analyze the entire business per day, week, month, and year, give bonuses for the successful bookings, track all your finance and even more.</p>
           <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        White Label B2B & B2C
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->
<p><strong>Start your online travel business within 1 week!</strong></p>
                    <ul class="bullets">
                        <li>
                          Receive internet booking engine with NET rates on all travel services
                        </li>
                        <li>along with the B2B & B2C platforms</li>
                  </ul>
               <p>This product is the best way to be a full online travel agency for B2B, B2C and corporate clients. We customize your travel website to meet every customer’s unique needs. All suppliers are already integrated, so you do not need to contact each one of them separately to solve your issues and hold deposits on dozens of accounts. There is no need to risk your time and money for the development, integration and support. The world’s biggest suppliers complete to give you the best offer.
               </p>
                   <ul class="bullets">
                       <li>Ready business in ONE week</li>
                       <li>100% Online Booking Engine</li>
                       <li>Customization to YOUR choice</li>
                       <li>Automatic issue of tickets</li>
                       <li>Automatic voiding and cancellation</li>
                       <li> NET rates on all 450+ global suppliers</li>
                       <li> User-friendly Back Office</li>
                       <li> B2B and B2C settings</li>
                       <li>24/7 support for the bookings via live chat</li>
                       </ul>
           <p>In your Back Office you can create web pages for your website, set up your mark-up in the pricing settings, add more than one currency, determine different payment methods, divide your buyers into different groups and define different terms and conditions for each of them, create the design for your voucher, give all members of your team an access to the system and determine different user access level for each of them, monitor SEO, analyze the entire business per day, week, month, and year, give bonuses for the successful bookings, track all your finance and even more.</p>
             <div class="rt-section-title-wrapper">
                    <h5 class="rt-section-title-s">
                        XML API
                    </h5><!-- /.rt-section-title -->
                </div><!-- /.rt-section-title-wrapper- -->
<p><strong>Eliminate your competitors with the richest travel content!
        Receive the best rates and easily make integration via exclusive XML API tester tool:
    </strong></p>
<p>Flight XML API, Hotel XML API, Cruise XML API, Car Rental XML API, Transfer XML API <br>
    Do you have your own booking engine and want to extend your travel inventory? Our XML API is the right solution for you. It is a direct and easy access to all our suppliers. We offer Flight API / Hotel API / Cruises API / Car Rental API / Transfer API. Experience an easy and fast integration of our API with unique XML API tester tool.

</p>
                   <ul class="bullets">
                       <li>90% better rates than any others</li>
                       <li> Access to all suppliers at once</li>
                       <li>NET rates from all suppliers</li>
                       <li> Automatic issue of tickets</li>
                       <li> Automatic voiding and cancellation</li>
                       <li> User-friendly Back Office to set up mark-up</li>
                       <li>24/7 support for the bookings via live chat</li>
                       <li>Easy integration with XML API tester</li>
                       </ul>
           <p>In your Back Office you can create web pages for your website, set up your mark-up in the pricing settings, add more than one currency, determine different payment methods, divide your buyers into different groups and define different terms and conditions for each of them, create the design for your voucher, give all members of your team an access to the system and determine different user access level for each of them, monitor SEO, analyze the entire business per day, week, month, and year, give bonuses for the successful bookings, track all your finance and even more.</p>

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
