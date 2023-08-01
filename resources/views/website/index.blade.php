@extends('layouts.website.base')
@section('pageTitle', 'HOME')
@section('content')
    <div id="dsn-scrollbar">
        <!-- ========== Header ========== -->
        <header
            id="dsn_header"
            class="dsn-header-animation dsn-full-header v-dark-head"
        >
            <div class="entry-header p-relative over-hidden">
                <div
                    id="hero_image"
                    class="p-absolute dsn-hero-parallax-img over-hidden"
                    data-dsn-ajax="img"
                    data-overlay="6"
                >
                    <div
                        class="video-container"
                        style="
                  height: 100%;
                  width: 100%;
                  position: fixed;
                  overflow: hidden;
                  z-index: 0;
                "
                    >
                        <iframe
                            src="https://player.vimeo.com/video/757878243?muted=1&amp;autoplay=1&amp;loop=1&amp;transparent=0&amp;background=1&amp;app_id=122963"
                            frameborder="0"
                            allow="autoplay; fullscreen; picture-in-picture"
                            title="Web_Header_2022_v3.mp4"
                            data-ready="true"
                            style="width: 1350px; height: 760px"
                        ></iframe>
                    </div>
                    <script src="https://player.vimeo.com/api/player.js"></script>
                </div>

                <div
                    id="hero_content"
                    class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center"
                >
                    <div class="content p-relative">
                        <div class="intro-project w-100">
                            <div class="intro-title">
                                <h5 class="title-block body-font text-upper">
                                    Welcome TO PRESTIGE VEHICLE SOURCING
                                </h5>
                                <div id="hero_title" class="mt-20">
                                    <h1 class="ah-headline title clip is-full-width">
                        <span class="ah-words-wrapper">
                          <b class="is-visible">Premium</b>
                          <b> Vehicle</b>
                          <b>Marketing</b>
                        </span>
                                    </h1>
                                </div>
                                <div
                                    class="dsn-def-btn dsn-icon-heading-color mt-20 d-flex"
                                >
                                    <a
                                        class="dsn-btn dsn-border border-color-default background-section vid has-icon-left"
                                        href="https://vimeo.com/835381395"
                                        target="_blank"
                                        rel="nofollow"
                                        data-dsn="parallax"
                                    >
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a
                href="#page_wrapper"
                rel="nofollow"
                class="dsn-scroll-bottom"
                data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'
            >
                <div class="text">SCROLL</div>
            </a>
        </header>
        <!-- ========== End Header ========== -->
        <!-- ========== Portfolio ========== -->
        <div class="section-margin">
            <div class="container section-title mb-70 d-flex">
                <div class="sub-section-title">
                    <p
                        class="description d-inline-block p-relative square-before mb-10"
                    >
                        OUR BRANDS
                    </p>
                    <h2
                        class="title-h2 body-font title-block-lg d-block heading-color"
                    >
                        Book your Car Now With <br/><b>PVS</b>
                    </h2>
                </div>
            </div>
            <div class="p-relative dsn-style-cards">
                <div class="root-posts">
                    <div
                        class="dsn-posts dsn-post-type-cards box-image-normal box-image-hover"
                    >
                        <div
                            class="has-parallax-image dsn-swiper p-relative"
                            data-dsn-option='{"slidesPerView":5,"spaceBetween":60}'
                        >
                            <div class="swiper-container">
                                <div class="swiper-wrapper v-dark-head">
                                    @foreach($logos as $logo)
                                        <div
                                            class="dsn-item-post grid-item over-hidden p-relative box-hover-image swiper-slide"
                                        >
                                            <a href="{{route('front.logo_search',$logo->maker)}}"><img
                                                    src="{{asset($logo->url)}}"></a>
                                        </div>
                                    @endforeach
                                </div>
                                <div
                                    class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-50 align-items-center dsn-container justify-content-between"
                                >
                                    <div class="swiper-prev">
                                        <div class="prev-container">
                                            <div class="container-inner">
                                                <div class="triangle"></div>
                                                <svg
                                                    class="circle"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <g
                                                        class="circle-wrap"
                                                        fill="none"
                                                        stroke-width="1"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10"
                                                    >
                                                        <circle cx="12" cy="12" r="10.5"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-pagination mr-30 ml-30 heading-color"
                                        data-dsn-type="progressbar"
                                    ></div>
                                    <div class="swiper-next">
                                        <div class="next-container">
                                            <div class="container-inner">
                                                <div class="triangle"></div>
                                                <svg
                                                    class="circle"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <g
                                                        class="circle-wrap"
                                                        fill="none"
                                                        stroke-width="1"
                                                        stroke-linejoin="round"
                                                        stroke-miterlimit="10"
                                                    >
                                                        <circle cx="12" cy="12" r="10.5"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Portfolio ========== -->
        <div id="page_wrapper" class="wrapper">
            <!-- ========== About Section One ========== -->
            <section
                class="about-section about-one p-relative section-padding background-section"
            >
                <div class="p-relative container">
                    <div class="bg-mask background-main w-70 h-55 v-middle"></div>
                    <div class="d-grid grid-md-2">
                        <div class="box-info">
                            <h2 class="title">
                    <span
                        class="letter-stroke d-block"
                        data-dsn-animation='{"from":{"paddingLeft":"10%"},"to":{"paddingLeft":"20%"},"responsive":["tablet","desktop"]}'
                    >
                      WE ARE
                    </span>
                                <span class="text-right w-100">Prestige</span>
                                <span class="text-left w-100">Vehicle</span>
                                <span class="text-right w-100">Sourcing</span>
                            </h2>
                            <div class="d-grid grid-half-1 align-items-center mt-10">
                                <div class="dsn-def-btn dsn-hover-icon">
                                    <a
                                        class="dsn-btn background-main effect-ajax has-icon-left"
                                        href="https://dsngrid.com/blackdsn/about-us/"
                                        data-dsn-text="About Us"
                                        data-dsn="parallax"
                                    >
                        <span
                            class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"
                        >
                          <i class="fas fa-angle-right"></i>
                        </span>
                                        <span
                                            class="title-btn p-relative z-index-1 heading-color"
                                        >ABOUT US</span
                                        >
                                    </a>
                                </div>
                                <div class="p-large text-right">
                                    <p class="max-w350">
                                        A Luxury & Premium Vehicle Sourcing Service Provider
                                        across United Arab Emirates and Africa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box-img">
                            <img
                                decoding="async"
                                class="cover-bg-img"
                                src="{{asset('assets/front/img/about-section.jpg')}}"
                                title="about-section"
                                alt="about-section"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End About Section One ========== -->

            <!-- ========== Service ========== -->
            <div class="container section-margin">
                <div class="section-title mb-70 d-grid grid-md-2">
                    <div class="d-flex">
                        <div class="sub-section-title">
                            <p
                                class="description d-inline-block p-relative circle-before mb-10"
                            >
                                <span>advantages</span>
                            </p>
                            <span class="title-h2 title-block-lg d-block heading-color">
                    <span>Let’s Check <b>Our Services</b></span>
                  </span>
                        </div>
                    </div>
                    <div
                        class="dsn-def-btn dsn-icon-heading-color align-self-end justify-self-end"
                    >
                        <a
                            class="dsn-btn dsn-border border-color-default background-section effect-ajax effect-ajax move-circle has-icon-left"
                            href="https://dsngrid.com/blackdsn/service/"
                            data-dsn-text="Service"
                            data-dsn="parallax"
                        >
                  <span
                      class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"
                  ><i class="fas fa-angle-right"></i
                      ></span>
                            <span class="title-btn p-relative z-index-1 heading-color"
                            >VIEW ALL SERVICES</span
                            >
                        </a>
                    </div>
                </div>
                <div class="list-with-number icon-top dsn-icon-theme-color">
                    <div
                        class="dsn-service d-grid grid-lg-3 grid-sm-2 dsn-masonry-grid dsn-masonry-grid-2 dsn-isotope"
                        data-dsn-iconsize="80px"
                    >
                        <div class="dsn-up service-item p-relative grid-item style-box">
                            <div
                                class="service-item-inner border-style number-item h-100"
                            >
                                <div class="dsn-icon">
                                    <img
                                        width="70px"
                                        src="{{asset('assets/front/img/north-america.png')}}"
                                        style="filter: invert(1)"
                                    />
                                </div>
                                <div class="service-content p-relative">
                                    <h4
                                        class="service_title title-block border-bottom pb-20 mb-20"
                                    >
                                        VEHICLE SOURCING
                                    </h4>
                                    <div class="service_description mt-20 max-w570 dsn-auto">
                                        <p>We supply, export, and deliver worldwide.</p>
                                    </div>
                                    <div class="d-flex mt-20 dsn-def-btn dsn-hover-icon">
                                        <a
                                            href="#"
                                            class="effect-ajax dsn-btn dsn-border border-color-default background-section has-icon-right"
                                        >
                          <span
                              class="title-btn p-relative z-index-1 heading-color"
                          >LEARN MORE</span
                          >
                                            <span
                                                class="dsn-icon dsn-bg-before btn-icon-right heading-color z-index-1"
                                            >
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dsn-up service-item p-relative grid-item style-box">
                            <div
                                class="service-item-inner border-style number-item h-100"
                            >
                                <div class="dsn-icon">
                                    <img
                                        width="70px"
                                        src="{{asset('assets/front/img/wrench.png')}}"
                                        style="filter: invert(1)"
                                    />
                                </div>
                                <div class="service-content p-relative">
                                    <h4
                                        class="service_title title-block border-bottom pb-20 mb-20"
                                    >
                                        VEHICLE MODIFICATION & CUSTOMIZATION
                                    </h4>
                                    <div class="service_description mt-20 max-w570 dsn-auto">
                                        <p>
                                            Giving vehicles luxurious cabins with unparalleled
                                            comfort.
                                        </p>
                                    </div>
                                    <div class="d-flex mt-20 dsn-def-btn dsn-hover-icon">
                                        <a
                                            href="#"
                                            class="effect-ajax dsn-btn dsn-border border-color-default background-section has-icon-right"
                                        >
                          <span
                              class="title-btn p-relative z-index-1 heading-color"
                          >LEARN MORE</span
                          >
                                            <span
                                                class="dsn-icon dsn-bg-before btn-icon-right heading-color z-index-1"
                                            >
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dsn-up service-item p-relative grid-item style-box">
                            <div
                                class="service-item-inner border-style number-item h-100"
                            >
                                <div class="dsn-icon">
                                    <img
                                        width="90px"
                                        src="{{asset('assets/front/img/car.png')}}"
                                        style="filter: invert(1)"
                                    />
                                </div>
                                <div class="service-content p-relative">
                                    <h4
                                        class="service_title title-block border-bottom pb-20 mb-20"
                                    >
                                        SPECIAL PROJECTS
                                    </h4>
                                    <div class="service_description mt-20 max-w570 dsn-auto">
                                        <p>
                                            From offroad vehicles to vehicle adaptation and
                                            armouring, we got you covered.
                                        </p>
                                    </div>
                                    <div class="d-flex mt-20 dsn-def-btn dsn-hover-icon">
                                        <a
                                            href="#"
                                            class="effect-ajax dsn-btn dsn-border border-color-default background-section has-icon-right"
                                        >
                          <span
                              class="title-btn p-relative z-index-1 heading-color"
                          >LEARN MORE</span
                          >
                                            <span
                                                class="dsn-icon dsn-bg-before btn-icon-right heading-color z-index-1"
                                            >
                            <i class="fas fa-angle-right"></i>
                          </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Urban Section ========== -->
            <div
                class="about-section about-arc background-section pt-40 pb-section"
            >
                <div class="container d-grid grid-md-2">
                    <div class="box-left">
                        <div class="dsn-bg-mask w-100 h-50 bottom-0 z-index-1"></div>
                        <div class="img-first h-100">
                            <img
                                class="cover-bg-img"
                                src="{{asset('assets/front/img/urban.jpg')}}"
                                alt=""
                            />
                        </div>
                    </div>

                    <div class="box-right box-img">
                        <h2
                            class="title-h2 p-relative body-font heading-color text-upper"
                        >
                            URBAN AUTOMOTIVE
                        </h2>
                        <p class="dsn-heading-title d-inline-block p-relative mt-30">
                            Partnering with the world’s leading luxury vehicle
                            modification specialist.
                            <span class="mt-40 d-block">
                    Urban Automotive UAE understands that every customer is
                    different, therefore we feel it is essential to give
                    customers the opportunity to purchase a car or make
                    modifications to their existing vehicle with enough
                    flexibility to gain the result of individuality.
                  </span>
                            <span class="mt-40 d-block">
                    Whether it’d be custom wheels, carbon fibre trim, luxurious
                    leather to suit your taste or a crazy exterior colour
                    change. Urban Automotive UAE has it covered.
                  </span>
                        </p>

                        <div class="dsn-def-btn dsn-icon-heading-color mt-30 d-flex">
                            <a
                                class="dsn-btn dsn-border border-color-default background-main effect-ajax effect-ajax move-circle has-icon-left"
                                href="#"
                                data-dsn-text="Contact Us"
                                data-dsn="parallax"
                            >
                    <span
                        class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"
                    >
                      <i class="fas fa-angle-right"></i>
                    </span>
                                <span class="title-btn p-relative z-index-1 heading-color"
                                >Go To Urban</span
                                >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== End Urban Section ========== -->
            <!-- ========== End Service ========== -->

            <!-- ========== Latest Cars ========== -->
            <div class="p-relative section-margin">
                <div class="container section-title mb-70 d-grid grid-md-2">
                    <div class="d-flex">
                        <div class="sub-section-title">
                            <p
                                class="description d-inline-block p-relative circle-before mb-10"
                            >
                                <span>Latest Cars </span>
                            </p>
                            <span class="title-h2 title-block-lg d-block heading-color">
                    <span
                    >Latest and <b><br/>greatest cars</b></span
                    >
                  </span>
                        </div>
                    </div>
                    <div
                        class="dsn-def-btn dsn-icon-heading-color align-self-end justify-self-end"
                        style="z-index: 10"
                    >
                        <a
                            class="dsn-btn dsn-border border-color-default background-section effect-ajax effect-ajax move-circle has-icon-left"
                            href="{{route('front.show_room')}}"
                            data-dsn-text="ONLINE SHOWROOM"
                            data-dsn="parallax"
                        >
                  <span
                      class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"
                  ><i class="fas fa-angle-right"></i
                      ></span>
                            <span class="title-btn p-relative z-index-1 heading-color">VIEW ALL CARS</span>
                        </a>
                    </div>
                </div>
                <div
                    class="p-relative dsn-style-classic dsn-under-img dsn-container dsn-right-container"
                >
                    <div class="root-posts">
                        <div class="dsn-posts dsn-post-type-classic h-350">
                            <div
                                class="has-parallax-image dsn-swiper p-relative"
                                data-dsn-option='{"slidesPerView":2.5,"spaceBetween":30,"centeredSlides":false}'
                            >
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($cars as $car)
                                            <article
                                                class="dsn-item-post grid-item over-hidden p-relative box-hover-image v-dark-head background-section swiper-slide"
                                            >
                                                <div class="box-content d-flex">
                                                    <a
                                                        class="effect-ajax box-image-link bg-shadow"
                                                        href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"
                                                        data-dsn-text="{{$car->maker}} {{$car->model}}"
                                                    >
                                                        <div
                                                            class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                                            data-overlay="4"
                                                        >
                                                            <img
                                                                src="{{asset('storage/'.$car->main_image)}}"
                                                                class="cover-bg-img"
                                                                alt="{{$car->slug}}"
                                                            />
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="post-content dsn-bg p-relative z-index-1 d-flex flex-column"
                                                    >
                                                        <div class="post-title-info">
                                                            <div class="post-meta max-w750">
                                                                <div
                                                                    class="entry-date d-inline-block entry-meta mb-10"
                                                                >
                                                                    <b>{{set_price($car)}}</b>
                                                                </div>
                                                                <span class="mr-5 ml-5 separator-between">
                                    ..</span
                                                                >
                                                                <div
                                                                    class="p-relative d-inline-block dsn-category dsn-bg metas mb-10 entry-meta"
                                                                >
                                                                    <span data-separator=" & ">{{$car->maker}} </span>
                                                                </div>
                                                            </div>
                                                            <h2 class="post-title dsn-bg title-block">
                                                                <a
                                                                    class="effect-ajax pb-10"
                                                                    href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"
                                                                    data-dsn-text="{{$car->slug}}"
                                                                >
                                                                    {{$car->model}}
                                                                </a>
                                                            </h2>
                                                        </div>

                                                        <div class="post-description-info">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center"
                                                            >
                                                                <div class="list">
                                                                    <h6 class="text-capitalize">year</h6>
                                                                    <p>{{$car->year}}</p>
                                                                </div>
                                                                <div class="list">
                                                                    <h6 class="text-capitalize">Kilometers</h6>
                                                                    <p>{{number_format((double)$car->km)}} Km</p>
                                                                </div>
                                                                <div class="list">
                                                                    <h6 class="text-capitalize">model</h6>
                                                                    <p>{{$car->model}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                    <div
                                        class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-50 align-items-center dsn-container justify-content-between"
                                    >
                                        <div class="swiper-prev">
                                            <div class="prev-container">
                                                <div class="container-inner">
                                                    <div class="triangle"></div>
                                                    <svg
                                                        class="circle"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24"
                                                    >
                                                        <g
                                                            class="circle-wrap"
                                                            fill="none"
                                                            stroke-width="1"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                        >
                                                            <circle cx="12" cy="12" r="10.5"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="swiper-pagination mr-30 ml-30 heading-color"
                                            data-dsn-type="progressbar"
                                        ></div>
                                        <div class="swiper-next">
                                            <div class="next-container">
                                                <div class="container-inner">
                                                    <div class="triangle"></div>
                                                    <svg
                                                        class="circle"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                    >
                                                        <g
                                                            class="circle-wrap"
                                                            fill="none"
                                                            stroke-width="1"
                                                            stroke-linejoin="round"
                                                            stroke-miterlimit="10"
                                                        >
                                                            <circle cx="12" cy="12" r="10.5"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Latest Cars ========== -->
        </div>
    </div>
@endsection
