@extends('layouts.website.base')
@section('pageTitle', "SHOWROOM")
@section('content')
    <header id="dsn_header" class="dsn-header-animation header-normal">
        <div
            class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"
        ></div>

        <div class="entry-header p-relative over-hidden">
            <div
                id="hero_content"
                class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section"
            >
                <div class="content p-relative">
                    <div class="intro-project w-100">
                        <div class="intro-title">
                            <div id="hero_title" class="mt-20">
                                <h1 class="title text-upper">Online Showroom</h1>
                            </div>
                            <div
                                class="dsn-def-btn dsn-hover-icon dsn-icon-heading-color mt-20 d-flex"
                            >
                                <a
                                    class="dsn-btn dsn-border border-color-default background-section effect-ajax has-icon-left"
                                    href="contact.html"
                                    data-dsn-text="Contact Us"
                                >
                      <span
                          class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"
                      >
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                      </span>
                                    <span class="title-btn p-relative z-index-1"
                                    >Get Started Now</span
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
    <!-- ========== End Header Normal ========== -->

    <div id="page_wrapper" class="wrapper">
        <!-- ========== Portfolio ========== -->
        <div class="p-relative section-margin container">
            <div class="p-relative box-image-parallax dsn-style-cards">
                <div class="root-posts has-filter">
                    <div class="dsn-filtering z-index-1 p-relative w-100 mb-50">
                        <div class="filtering-t">
                            <div class="filtering-wrap">
                                <h5 class="filter-title">AWESOME CARS</h5>
                                <div class="filtering">
                                    <button class="active" data-filter="*" type="button">
                                        All
                                    </button>
                                    @foreach($makers as $maker)
                                        <button
                                            type="button"
                                            class="dsn-filter-category-lamborghini"
                                            data-filter=".{{$maker->maker}} , .category-{{$maker->maker}}"
                                        >
                                            {{$maker->maker}}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="dsn-posts dsn-post-type-cards box-image-normal d-grid grid-md-2 dsn-isotope use-filter v-dark-head"
                        data-dsn-gap="60px"
                    >
                        @foreach($cars as $car)
                            <article
                                class="dsn-item-post grid-item over-hidden p-relative box-hover-image {{$car->maker}}"
                            >
                                <div class="box-content d-flex">
                                    <a
                                        class="effect-ajax box-image-link bg-shadow"
                                        href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"
                                        data-dsn-ajax="work"
                                        title="{{$car->slug}}"
                                    >
                                        <div
                                            class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                            data-overlay="4"
                                        >

                                            <img
                                                src="{{asset('storage/'.$car->main_image)}}" alt="{{$car->slug}}"/>
                                        </div>
                                    </a>
                                    <div
                                        class="post-content dsn-bg p-relative z-index-1 d-flex flex-column"
                                    >
                                        <div class="post-title-info">
                                            <div class="post-meta max-w750">
                                                <div
                                                    class="p-relative d-inline-block dsn-category dsn-bg metas mb-10 entry-meta"
                                                >
                                                    <span data-separator="&">{{$car->maker}}</span>
                                                </div>
                                            </div>
                                            <h2 class="post-title title-block pb-20">
                                                <a
                                                    href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"
                                                    class="effect-ajax"
                                                    data-dsn-ajax="work"
                                                >
                                                    {{$car->model}}
                                                </a>
                                            </h2>
                                            <div class="d-flex align-items-center mb-3 row-desc">
                                                <h6 class="text-capitalize mb-0 fw-bold pe-1">year:</h6>
                                                <p class="mb-0">{{$car->year}}</p>
                                            </div>
                                            <div class="d-flex align-items-center mb-3 row-desc">
                                                <h6 class="text-capitalize mb-0 fw-bold pe-1">Kilometers:</h6>
                                                <p class="mb-0">{{number_format((double)$car->km)}} Km</p>
                                            </div>
                                            <a
                                                href="{{route('front.details',[$car->maker,$car->model,$car->year,$car->slug])}}"
                                                class="effect-ajax dsn-post-link move-circle border-color-heading"
                                                data-dsn="parallax"
                                                data-dsn-ajax="work"
                                            >
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        class="arrow-after"
                                                        d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"
                                                    />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Portfolio ========== -->
    </div>
@endsection
