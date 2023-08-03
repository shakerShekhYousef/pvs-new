@extends('layouts.website.base')
@section('pageTitle', "OUR TEAM")
@section('content')
<!-- ========== Header Normal========== -->
<header id="dsn_header" class="dsn-header-animation header-normal">
    <div class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"></div>
    <div class="entry-header p-relative over-hidden">
        <div id="hero_content"
             class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section ">
            <div class="content p-relative ">
                <div class="intro-project w-100">
                    <div class="intro-title ">
                        <p class="dsn-heading-title d-inline-block circle-before">OUR TEAM </p>
                        <div id="hero_title" class="mt-10">
                            <h1 class="title text-upper">Meet Our Team
                            </h1>
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

    <!-- ========== About Section ========== -->
    <div class="box-under-img ">
        <div class="img-box-parallax before-z-index dsn-animate dsn-effect-down "
             data-dsn-triggerhook="bottom" data-dsn-grid="move-up" data-overlay="0">
            <img class="has-bigger-scale cover-bg-img has-direction" src='{{asset('assets/front/img/hero-team.jpg')}}'
                 alt=''/>
        </div>
    </div>
    <!-- ========== End About Section ========== -->

    <!-- ========== Team ========== -->
    <div class="dsn-container over-hidden background-section section-padding ">
        <div class="section-title container d-flex  mb-70">
            <div class="sub-section-title">
                <p class="description d-inline-block  circle-before mb-10">Our Team </p>
                <h2 class="title-h2 dsn-heading-title p-relative title-block-lg d-block    heading-color">
                    The best team ever!
                </h2>
            </div>
        </div>
        <div class="d-grid grid-lg-4 grid-sm-2 dsn-team v-dark-head">
            <div class="team-item p-relative grid-item box-hover-image">
                <div class="team-item-inner  background-main">
                    <div class="avatar box-img" data-overlay="4">
                        <img class="cover-bg-img" src='{{asset('assets/front/img/user.jpg')}}' alt=''/>
                    </div>
                    <div class="team-content border-before text-center">
                        <h4 class="text-name sm-title-block">Tom Wood</h4>
                        <span class="text-position">Director & Founder</span>
                        <ul class="team-socials dsn-socials box-social">
                            <li>
                                <a href="tel:00971585628810" target="_blank" rel="nofollow">
                                    <i class="fa fa-phone"></i>
                                    <span>Phone</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:tom@pvsme.com" target="_blank" rel="nofollow">
                                    <i class="fa fa-envelope"></i>
                                    <span>Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/009710585628810" target="_blank" rel="nofollow">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Whatsapp</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item p-relative grid-item box-hover-image">
                <div class="team-item-inner  background-main">
                    <div class="avatar box-img" data-overlay="4">
                        <img class="cover-bg-img" src='{{asset('assets/front/img/user.jpg')}}' alt=''/>
                    </div>
                    <div class="team-content border-before text-center">
                        <h4 class="text-name sm-title-block">Angelu Domingo</h4>
                        <span class="text-position">Sales & Marketing Administrator</span>
                        <ul class="team-socials dsn-socials box-social">
                            <li>
                                <a href="tel:00971585518810" target="_blank" rel="nofollow">
                                    <i class="fa fa-phone"></i>
                                    <span>Phone</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:admin@pvsme.com" target="_blank" rel="nofollow">
                                    <i class="fa fa-envelope"></i>
                                    <span>Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/00971585518810" target="_blank" rel="nofollow">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Whatsapp</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item p-relative grid-item box-hover-image">
                <div class="team-item-inner  background-main">
                    <div class="avatar box-img" data-overlay="4">
                        <img class="cover-bg-img" src='{{asset('assets/front/img/user.jpg')}}' alt=''/>
                    </div>
                    <div class="team-content border-before text-center">
                        <h4 class="text-name sm-title-block">Darren Maskell</h4>
                        <span class="text-position">Operations Director - Urban Automotive</span>
                        <ul class="team-socials dsn-socials box-social">
                            <li>
                                <a href="tel:00971527905112" target="_blank" rel="nofollow">
                                    <i class="fa fa-phone"></i>
                                    <span>Phone</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:darren@urban-automotive.ae" target="_blank" rel="nofollow">
                                    <i class="fa fa-envelope"></i>
                                    <span>Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/00971585922866" target="_blank" rel="nofollow">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Whatsapp</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="team-item p-relative grid-item box-hover-image">
                <div class="team-item-inner  background-main">
                    <div class="avatar box-img" data-overlay="4">
                        <img class="cover-bg-img" src='{{asset('assets/front/img/user.jpg')}}' alt=''/>
                    </div>
                    <div class="team-content border-before text-center">
                        <h4 class="text-name sm-title-block">Trevor Mumba</h4>
                        <span class="text-position">Sales Director – Africa</span>
                        <ul class="team-socials dsn-socials box-social">
                            <li>
                                <a href="tel:0027638402330" target="_blank" rel="nofollow">
                                    <i class="fa fa-phone"></i>
                                    <span>Phone</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:trevor@pvsme.com" target="_blank" rel="nofollow">
                                    <i class="fa fa-envelope"></i>
                                    <span>Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/0027638402330" target="_blank" rel="nofollow">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Whatsapp</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ========== End Team ========== -->
</div>
@endsection
