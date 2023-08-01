@extends('layouts.website.base')
@section('pageTitle', "CONTACT US")
@section('content')
    <!-- ========== Header Normal========== -->
    <header id="dsn_header" class="dsn-header-animation header-normal v-dark-head">
        <div class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"></div>

        <div class="entry-header p-relative over-hidden">
            <div id="hero_content"
                 class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section ">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">

                            <div id="hero_title" class="mt-20">
                                <h1 class="title text-upper">
                                    Look around you<br> everything is changing.
                                </h1>
                            </div>
                            <p class="mt-20 max-w570">
                                What if the time has come for you to change? Starting a collaboration is easy! Order a
                                free consultation or call back. We are always in touch and happy to cooperate with you
                            </p>
                            <div class="dsn-def-btn dsn-hover-icon dsn-icon-heading-color mt-20 d-flex">
                                <a class="dsn-btn dsn-border border-color-default  background-section effect-ajax has-icon-left"
                                   href="work-card-1.html" data-dsn-text="OUR PORTFOLIO">
                                    <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                                    </span>
                                    <span class="title-btn p-relative  z-index-1 ">See More Works</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
           data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
            <div class="text">SCROLL</div>
        </a>
    </header>
    <!-- ========== End Header Normal ========== -->
    <div id="page_wrapper" class="wrapper">
        <!-- ========== Contact  ========== -->
        <div class="p-relative contact-form over-hidden section-padding">
            <div class="dsn-mask p-absolute w-70 left-0 top-0 h-100 background-section"></div>
            <div class="p-relative container d-grid grid-1-half" data-dsn-gap="30px 60px">
                <div class="box-form">
                    <h2 class="title-h2 ">
                        IF YOU HAVE QUESTIONS PLEASE <br>CONTACT US
                    </h2>
                    <p class="mt-10">Fill fields and find approximate your repair</p>
                    <div class="dsn-form mt-20 form-box d-flex flex-column">
                        <form action="{{route('front.contact_us')}}" method="post">
                            @csrf
                            @method("POST")
                            <div class="messages"></div>
                            <div class="input__wrap controls">
                                <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_first_name" type="text" name="first_name"
                                                   placeholder="First Name"
                                                   required="required"
                                                   data-error="first name is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_last_name" type="text" name="last_name"
                                                   placeholder="Last Name"
                                                   required="required" data-error="last name is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_phone" type="text" name="phone" placeholder="Telephone"
                                                   required="required"
                                                   data-error="name is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <input id="form_email" type="email" name="email"
                                                   placeholder="Type your Email Address"
                                                   required="required" data-error="Valid email is required."/>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group dsn-up">
                                    <div class="entry-box">
                                    <textarea id="form_message" class="form-control" name="message" rows="7"
                                              placeholder="Tell us about you and the world" required="required"
                                              data-error="Please,leave us a message."></textarea>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="d-flex dsn-up">
                                    <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                         data-dsn="parallax">
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-info p-30 background-theme ">
                    <div class="icon-left dsn-icon-heading-color d-flex align-items-center h-100">
                        <div class="d-grid dsn-service icon-left align-items-center">
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  sm-title-block ">Head Office:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p>
                                                UAE Address: Blue Bay Tower, Business Bay, Dubai, United Arab Emirates.
                                            </p><br>
                                            <p>
                                                Africa Address: St. Andrews Office Park, Meadowbrook Lane, Epsom Downs,
                                                Sandton, Johannesburg, South Africa.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i></div>
                                    <div class="service-content p-relative"><h4 class="service_title  sm-title-block ">
                                            Phones:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <a href="tel:+9710585628810">
                                                <p>(+971) 058 562 8810</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                                    <div class="service-content p-relative"><h4 class="service_title  sm-title-block ">
                                            Write Us:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <a href="mailto:info@pvsme.com">
                                                <p>info@pvsme.com</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Contact  ========== -->
        <div class="content dsn-container d-flex align-items-center">
            <div class="background-main box-padding">
                <h3 class="title-h2 body-font text-upper">
                    Opening <b>Times</b>
                </h3>
                <ul class="d-grid grid-sm-1 mt-30 dsn-list">
                    <li class="list-item grid-item d-flex align-items-center">
                        <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                        <p class="dsn-heading-title"><b>Monday</b>    9:00am - 7:00pm</p>
                    </li>
                    <li class="list-item grid-item d-flex align-items-center">
                        <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                        <p class="dsn-heading-title"><b>Tuesday</b> 9:00am - 7:00pm</p>
                    </li>
                    <li class="list-item grid-item d-flex align-items-center">
                        <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                        <p class="dsn-heading-title  "><b>Wednesday</b> 9:00am - 7:00pm</p>
                    </li>
                    <li class="list-item grid-item d-flex align-items-center">
                        <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                        <p class="dsn-heading-title  "><b>Thursday</b> 9:00am - 7:00pm</p>
                    </li>
                    <li class="list-item grid-item d-flex align-items-center">
                        <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                        <p class="dsn-heading-title  "><b>Friday</b> 9:00am - 7:00pm</p>
                    </li>
                    <li class="list-item grid-item d-flex align-items-center">
                        <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                        <p class="dsn-heading-title  "><b>Saturday</b> APPOINTMENT ONLY</p>
                    </li>
                    <li class="list-item grid-item d-flex align-items-center">
                        <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                        <p class="dsn-heading-title  "><b>Sunday</b> APPOINTMENT ONLY</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Map  ========== -->
        <div class="map-custom hv-80" data-dsn-lat="25.187634" data-dsn-len="55.270555" data-dsn-zoom="14"></div>
        <!-- ========== End Map  ========== -->

        <!-- ========== Footer ========== -->

    </div>
@endsection
