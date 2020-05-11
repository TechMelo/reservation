@extends('layouts.index')
@section('content')
    <div class="rt-breadcump rt-breadcump3  rt-breadcump-height3">
        <div class="rt-page-bg rtbgprefix-cover f36" >
        </div><!-- /.rt-page-bg -->
        <div class="container">
            <div class="row rt-breadcump-height3">
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
    <link rel="stylesheet" href="{{URL::asset('visa/css/style.css')}}">
    <style>

    </style>
        <div class="f-container pt-2">
            <form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                <h3>Country Choose</h3>
                <fieldset>
                <div class="row">
               <div class="col-md-3 flags ">
                  <a href="#t1" data-toggle="tab" class="t-link active">
                    <div class="col-md-12 p-4 mb-3 text-white rt-btn   rt-gradient  btn-flag btn-flag-active">
                   <img width="80px" src="{{URL::asset('visa/images/dubai.jpg')}}" alt=""><span class="cname float-right mt-3 mr-3"><h6>Dubai</h6></span>
                    </div>
                  </a>
                   <a href="#t2" data-toggle="tab" class="t-link">
                       <div class="col-md-12 p-4 mb-3 text-white rt-btn   rt-gradient  btn-flag">
                           <img width="80px" src="{{URL::asset('visa/images/iran.png')}}" alt=""><span class="cname float-right mt-3 mr-3"><h6>Iran</h6></span>
                       </div>
                   </a>
                   <a href="#t3" data-toggle="tab" class="t-link">
                       <div class="col-md-12 p-4 mb-3 text-white rt-btn   rt-gradient  btn-flag">
                           <img width="80px" src="{{URL::asset('visa/images/jorden.png')}}" alt=""><span class=" cname float-right mt-3 mr-3"><h6>Jorden</h6></span>
                       </div>
                   </a>

               </div>
                <div class="col-md-8 ">
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="t1">
                    <div class="col-md-12 bg-white p-3 mt-4 visa-radio-bg ">
                        <input class="visa-radio" type="radio" name="packege"><span class="visa-radio-text">Apply for Tourism - Duration: 30 Day(s) - Price: 0.00</span>
                    </div>
                    <div class="col-md-12 bg-white  p-3 mt-4 visa-radio-bg">
                        <input class="visa-radio" type="radio" name="packege"><span class="visa-radio-text">Apply for FreeVisa - Duration: 30 Day(s) - Price: 0.00</span>
                    </div>
                    <div class="col-md-12 bg-white  p-3 mt-4 visa-radio-bg">
                        <div class="row">
                            <div class="col-12">
                                <span><strong>Terms and Conditions</strong></span>
                            </div>
                            <div class="col-12">
                                <span><strong>1.</strong> Please do Check the EXPIRY date for entery and exit, if the period of stay exceeds the limit, a fine of USD 2500 will be imposed on the issuing company. <br>

                               <strong>2.</strong> In case the traveler is above 65 years old, thay must have a companion with them (Son or Doughter). <br>

                                <strong>3</strong> The visa will be valid till 58 days from issue date. <br></span>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade " id="t2">
                    <div class="col-md-12 bg-white p-3 mt-4 visa-radio-bg ">
                        <input class="visa-radio" type="radio" name="packege"><span class="visa-radio-text">Apply for test visa - Duration: 30 Day(s) - Price: 0.00</span>
                    </div>
                    <div class="col-md-12 bg-white  p-3 mt-4 visa-radio-bg">
                        <input class="visa-radio" type="radio" name="packege"><span class="visa-radio-text">Apply for visa now - Duration: 30 Day(s) - Price: 0.00</span>
                    </div>
                    <div class="col-md-12 bg-white  p-3 mt-4 visa-radio-bg">
                        <div class="row">
                            <div class="col-12">
                                <span><strong>Terms and Conditions</strong></span>
                            </div>
                            <div class="col-12">
                                <span><strong>1.</strong> Please do Check the EXPIRY date for entery and exit, if the period of stay exceeds the limit, a fine of USD 2500 will be imposed on the issuing company. <br>

                               <strong>2.</strong> In case the traveler is above 65 years old, thay must have a companion with them (Son or Doughter). <br>

                                <strong>3</strong> The visa will be valid till 58 days from issue date. <br></span>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade " id="t3">
                    <div class="col-md-12 bg-white p-3 mt-4 visa-radio-bg ">
                        <input class="visa-radio" type="radio" name="packege"><span class="visa-radio-text">Apply for Flydubai - Duration: 30 Day(s) - Price: 0.00</span>
                    </div>
                    <div class="col-md-12 bg-white  p-3 mt-4 visa-radio-bg">
                        <input class="visa-radio" type="radio" name="packege"><span class="visa-radio-text">Apply for Flydubai - Duration: 30 Day(s) - Price: 0.00</span>
                    </div>
                    <div class="col-md-12 bg-white  p-3 mt-4 visa-radio-bg">
                        <div class="row">
                            <div class="col-12">
                                <span><strong>Terms and Conditions</strong></span>
                            </div>
                            <div class="col-12">
                                <span><strong>1.</strong> Please do Check the EXPIRY date for entery and exit, if the period of stay exceeds the limit, a fine of USD 2500 will be imposed on the issuing company. <br>

                               <strong>2.</strong> In case the traveler is above 65 years old, thay must have a companion with them (Son or Doughter). <br>

                                <strong>3</strong> The visa will be valid till 58 days from issue date. <br></span>
                            </div>
                        </div>
                    </div>
                    </div>
                 </div>

                   <input type="checkbox" class="visa-checkbox mt-5"> <span class="visa-checkbox-text">I need family visa</span>
               {{--     increment button--}}
<div class="row "><span class="p-span">Number of Passengers</span>
                         <div class="input-group">

                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                          <span class="text-white "><h2 class="sym">-</h2></span>
                                        </button>
                                    </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn quantity-right-plus">
                                        <button type="button" class=" btn btn-success btn-number" data-type="plus" data-field="">
                                            <span class="text-white"><h2 class="sym sym-p">+</h2></span>
                                        </button>
                                    </span>
                    </div>
</div>
                </div>
                    </div>
                </fieldset>
                <h3>
                    FillUp Form
                </h3>
                <fieldset>
                    <div class="row">
                        <span class="ml-3 color-red">All * fields are compulsory</span>
                    </div>
                    <div class="form-row">


                        <div class="form-group">
                            <label for="first_name">First Name <span class="color-red">*</span></label>
                            <input type="text" name="first_name" id="v_fname" />
                        </div>
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" name="middle_name" id="v_mname" />
                        </div>
                        <div class="form-group">
                            <label for="v_lname">Last Name <span class="color-red">*</span></label>
                            <input type="text" name="last_name" id="v_lname" />
                        </div>
                        <div class="form-group">
                            <label for="v_dob">Date of Birth <span class="color-red">*</span></label>
                            <input  type="date" name="date_of_birth" id="v_dob" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="v_passport_no">Passport No <span class="color-red">*</span></label>
                            <input required type="text" name="v_passport_no" id="v_passport_no" />
                        </div>
                        <div class="form-group">
                            <label for="v_issue_date">Issue Date <span class="color-red">*</span></label>
                            <input  type="date" name="v_issue_date" id="v_issue_date" />
                        </div>
                        <div class="form-group">
                            <label for="v_expiry_date">Expiry Date <span class="color-red">*</span></label>
                            <input  type="date" name="v_expiry_date" id="v_expiry_date" />
                        </div>
                        <div class="form-group">
                            <label for="v_email">Email <span class="color-red">*</span></label>
                            <input  type="email" name="v_email" id="v_email" />
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="v_phone_no">Phone Number <span class="color-red">*</span></label>
                            <input type="text" name="v_phone_no" id="v_phone_no" />
                        </div>
                        <div class="form-group">
                            <label for="v_first_page_passport">First page of passport <span class="color-red">*</span></label>
                            <input type="file" name="v_first_page_passport" id="v_first_page_passport" onchange="readURL(this);" />
                        </div>
                        <div class="form-group">
                            <label for="v_l_exit_stamp">Last Exit stamp page</label>
                            <div class="help-tip">
                                <p>If you had last visit of this country please upload document.</p>
                            </div>
                            <input type="file" name="v_l_exit_stamp" id="v_l_exit_stamp" onchange="readURL4(this);"/>
                        </div>
                        <div class="form-group">
                            <label for="v_l_entry_stamp">Last entry stamp page </label>
                            <div class="help-tip">
                                <p>If you had last visit of this country please upload document.</p>
                            </div>
                            <input type="file" name="v_l_entry_stamp" id="v_l_entry_stamp" onchange="readURL3(this);"/>
                        </div>
                    </div>
                  <div class="form-row">
                      <div class="form-group">
                          <label for="v_personal_pic">Personal Picture <span class="color-red">*</span></label>
                          <input type="file" name="v_personal_pic" id="v_personal_pic" onchange="readURL2(this);"/>

                      </div>
                        <div class="term mt-5">
                              <input required type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                              <label for="agree-term" class="label-agree-term"><span><span></span></span>I have read and agree with the terms and conditions.
                                  <a href="#">terms and conditions</a></label>

                        </div>
                  </div>

                </fieldset>

                <h3>
                    Information Confirmation
                </h3>
                <fieldset>
<div class="row my-5">
    <div class="col-md-4"><span><strong>First Name: </strong></span><span class="v_fname_check"></span></div>
    <div class="col-md-4"><span><strong>Middle Name: </strong></span><span class="v_mname_check"></span></div>
    <div class="col-md-4"><span><strong>Last Name: </strong></span><span class="v_lname_check"></span></div>

</div>
 <div class="row my-5">
     <div class="col-md-4"><span><strong>Date Of Birth: </strong></span><span class="v_dob_check"></span></div>
    <div class="col-md-4"><span><strong>Passport Number: </strong></span><span class="v_passport_no_check"></span></div>
    <div class="col-md-4"><span><strong>Issue Date: </strong></span><span class="v_issue_date_check"></span></div>

</div>
  <div class="row my-5" >
      <div class="col-md-4"><span><strong>Expiry Date: </strong></span><span class="v_expiry_date_check"></span></div>
      <div class="col-md-4"><span><strong>Email: </strong></span><span class="v_email_check"></span></div>
      <div class="col-md-4"><span><strong>Phone Number: </strong></span><span class="v_phone_no_check"></span></div>
  </div>
  <div class="row my-5 ">

      <div class="col-sm-12 col-md-6 col-lg-3 my-sm-4"><div class="row"><span><strong>Passport first page: </strong></span></div><div class="row"><img class="v_first_page_passport_check" src="" alt=""></div></div>
      <div class="col-sm-12 col-md-6 col-lg-3 my-sm-4"><div class="row"><span><strong>Personal Picture: </strong></span></div><div class="row"><img class="v_personal_pic_check" src="" alt=""></div></div>
      <div class="col-sm-12 col-md-6 col-lg-3  my-sm-4"><div class="row"><span><strong>Last Entry stamp: </strong></span></div><div class="row"><img class="v_l_entry_stamp_check" src="" alt=""></div></div>
      <div class="col-sm-12 col-md-6 col-lg-3 my-sm-4 "><div class="row"><span><strong>Last Exit stamp: </strong></span></div><div class="row"><img class="v_l_exit_stamp_check" src="" alt=""></div></div>

  </div>

                </fieldset>


            </form>
        </div>

@endsection
