@extends('layouts.website.base')
@section('pageTitle', 'URBAN')
@section('content')
    <!-- ========== Header ========== -->
    <header class="p-relative pt-header">
        <div class="hero-content text-center">
            <img src="{{asset('assets/front/img/URBAN.png')}}">

        </div>
    </header>
    <!-- ========== End Header ========== -->
    <div id="page_wrapper" class="wrapper">
        <!-- ========== Right Box With Image  ========== -->
        <div class="right-box-image dsn-container dsn-left-container over-hidden" style=" margin-top: 4pc;">
            <div class="box-img">
                <div class="img-box-parallax h-v-80 w-100 before-z-index dsn-animate dsn-effect-left"
                     data-dsn-triggerhook="bottom"
                     data-dsn-grid="move-up" data-overlay="1">
                    <img src='{{asset('assets/front/img/banner-urban.jpg')}}' class="cover-bg-img has-direction"
                         data-dsn-position="50% 0%" alt=''/>
                </div>
            </div>
            <div class="box-info background-section box-padding section-margin" data-dsn-gap="30px 30px">
                <h2 class="title-h1">ABOUT URBAN AUTOMOTIVE</h2>
                <p class="mt-20 pt-20 border-top">
                    Urban Automotive UAE understand that every customer is different, therefore we feel it is essential
                    to give customers the opportunity to purchase a car or make modifications to their existing vehicle
                    with enough flexibility to gain the result of individuality.


                    Whether it be custom wheels, carbon fibre trim, luxurious leather to suit your taste or a crazy
                    exterior colour change. Urban Automotive UAE has it covered.
                </p>
            </div>

        </div>
        <!-- ========== End Right Box With Image  ========== -->
        <div class=" text-center urban-first-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="text-align: center">
                        <marquee width="100%" direction="right" height="100px">
                            ROAD PRESENCE REDEFINED
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End About Section Tow ========== -->
        <!-- ========== Portfolio ========== -->
        <div class="background-section section-padding">
            <div class="p-relative dsn-style-list dsn-image-odd box-image-parallax ">
                <div class="root-posts">
                    <div class="dsn-posts dsn-post-type-list">
                        <article
                            class="dsn-item-post grid-item over-hidden p-relative box-hover-image">
                            <div class="box-content d-flex ">
                                <div class="post-content dsn-bg p-relative z-index-1 d-flex flex-column">
                                    <div class="post-title-info urban-second-section">
                                        <img src="{{asset('assets/front/img/urban-logo.svg')}}">
                                    </div>
                                    <div class="post-description-info ">
                                        <div class="d-flex mt-20 dsn-def-btn dsn-hover-icon" style="text-align: center">
                                            <a href="https://urban-automotive.ae/"
                                               class="effect-ajax dsn-btn dsn-border border-color-default background-section has-icon-left"
                                               data-dsn-ajax="work">
                                                            <span
                                                                class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                                                <i class="fas fa-angle-right"></i>
                                                            </span>
                                                <span class="title-btn p-relative  z-index-1 heading-color">
                                                                VISIT URBAN AUTOMOTIVE UAE WEBSITE
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                     data-overlay="4">
                                    <img class="cover-bg-img" src="{{asset('assets/front/img/wagon.jpg')}}"
                                         alt=""/>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Portfolio ========== -->
        <!-- Urban second title -->
        <div class="urban-second-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="text-align: center">
                        <p>CREATORS OF THE WORLD'S MOST DISTINCTIVE MODIFIED VEHICLES</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Urban contact section -->
        <!-- ========== Right Box With Image  ========== -->
        <div class="right-box-image dsn-container dsn-left-container over-hidden">
            <div class="box-img">
                <div class="img-box-parallax h-v-80 w-100 before-z-index dsn-animate dsn-effect-left"
                     data-dsn-triggerhook="bottom"
                     data-dsn-grid="move-up" data-overlay="1">
                    <img src='{{asset('assets/front/img/Rolls-royce (1).jpg')}}' class="cover-bg-img has-direction"
                         data-dsn-position="50% 0%" alt=''/>
                </div>
            </div>
            <div class="box-info background-section box-padding section-margin" data-dsn-gap="30px 30px">
                <h2 class="title-h1 urban-contact-title">CONTACT US</h2>
                <div class="urban-contact-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 p-0 co-bg"></div>
                            <div class="col-md-6 co-content">
                                <div class="contact-info">
                                    <ul class="urban-contact-info">
                                        <li>
                                            <i class='bx bxs-time-five'></i>
                                            <a href="tel:00971585848810">Tel: +971 58 584 8810</a>
                                        </li>
                                        <li>
                                            <i class='bx bxs-location-plus'></i>
                                            <a href="mailto:sales@urban-automotive.ae">Email:
                                                sales@urban-automotive.ae</a>

                                        </li>
                                        <li>
                                            <i class='bx bxs-phone'></i>
                                            <a href="https://urban-automotive.ae/">www.urban-automotive.ae</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-info">
                                    <ul class="urban-social-media">
                                        <li>
                                            <a href="https://www.facebook.com/urbanautomotive.uae" target="_blank"><i
                                                    style="font-size: 15px;right: 10px;position: relative;padding: 4px 7px 4px 6px;border: solid 1px;border-radius: 13px;"
                                                    class="fab fa-facebook-f"></i>@urbanautomotive.uae</a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/urbanautomotive.ae/" target="_blank"><i
                                                    style="font-size: 14px;right: 15px;position: relative;padding: 6px 6px 6px 6px;border: solid 1px;border-radius: 13px;"
                                                    class="fab fa-instagram"></i>@urbanautomotive.ae</a>

                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@UrbanAutomotive" target="_blank"><i
                                                    style="font-size: 14px;right: 25px;position: relative;padding: 6px 6px 6px 6px;border: solid 1px;border-radius: 13px;"
                                                    class="fab fa-youtube"></i>@urbanautomotive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ========== End Right Box With Image  ========== -->
    </div>
    <!-- ========== End Portfolio ========== -->

@endsection
