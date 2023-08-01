@extends('layouts.website.base')
@section('pageTitle', $car->title)
@section('content')
    <!-- ========== Header  ========== -->
    <header
        id="dsn_header"
        class="dsn-header-animation dsn-full-header dsn-container section-padding v-dark-head"
    >
        <div class="entry-header p-relative over-hidden">
            <div
                id="hero_image"
                class="p-absolute dsn-hero-parallax-img over-hidden z-index-1 full-width"
                data-dsn-ajax="img"
                data-overlay="2"
            >
                <img
                    class="cover-bg-img transform-3d"
                    src="{{asset('storage/'.$car->main_image)}}"
                    alt=""
                />
            </div>

            <div
                id="hero_content"
                class="d-flex align-items-end p-relative h-100 dsn-hero-parallax-title container"
            >
                <div class="content p-relative">
                    <div class="intro-project w-100">
                        <div id="hero_title">
                            <h3 class="title" data-dsn-ajax="title" style="font-size: 39px;">
                                {{$car->title}} <br/>
                            </h3>
                        </div>
                        <p>Posted {{$car->created_at->diffForHumans()}}</p>
                        <p class="subtitle-meta metas p-relative mt-10 heading-color">
                            <b>PRICE : </b> {{set_price($car)}} <br/>
                            <b>TRIM : </b> {{$car->model}} <br/>
                            <b>YEAR : </b> {{$car->year}} <br/>
                            <b>KILOMETERS : </b> {{number_format((double)$car->km)}} <br/>
                            <b>REGIONAL SPECS : </b> {{$car->regional_specs}} <br/>
                            <b>WARRANTY : </b> {{$car->WARRANTY == 1 ? "YES" : "NO"}} <br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a
            class="background-main move-circle link-project p-absolute"
            data-dsn="parallax"
            href="{{'https://wa.me/'.set_contact($car)}}"
            target="_blank"
            rel="nofollow"
            style="font-size: 12px"
        >
            ENQUIRE NOW
            <svg
                viewBox="0 0 1024 1024"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M213.333333 750.506667L665.173333 298.666667H384V213.333333h426.666667v426.666667h-85.333334V358.826667L273.493333 810.666667 213.333333 750.506667z"
                />
            </svg>
        </a>
        <a
            href="#page_wrapper"
            rel="nofollow"
            class="dsn-scroll-bottom"
            data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'
        >
            <div class="text">SCROLL</div>
        </a>
    </header>
    <!-- ========== End Header  ========== -->
    <div id="page_wrapper" class="wrapper">
        <!-- ========== Info Project  ========== -->
        <div class="info-project container text-center section-margin">
            <ul class="intro-project-list mt-30 d-grid grid-md-3 text-sm-left">
                <li class="dsn-up grid-item number-item">
                    <h5 class="title-list-project sm-title-block">Exterior Color</h5>
                    <p class="description-list-project dsn-auto">{{$car->color}}</p>
                </li>
                <li class="dsn-up grid-item number-item">
                    <h5 class="title-list-project sm-title-block">Interior Color</h5>
                    <p class="description-list-project dsn-auto">{{$car->interior_color}}</p>
                </li>
                <li class="dsn-up grid-item number-item">
                    <h5 class="title-list-project sm-title-block">
                        No. of Cylinders
                    </h5>
                    <p class="description-list-project dsn-auto">{{$car->no_cylinders}}</p>
                </li>
                <li class="dsn-up grid-item number-item">
                    <h5 class="title-list-project sm-title-block">
                        Transmission Type
                    </h5>
                    <p class="description-list-project dsn-auto">
                        {{$car->transmission_type}} Transmission
                    </p>
                </li>
                <li class="dsn-up grid-item number-item">
                    <h5 class="title-list-project sm-title-block">Fuel Type</h5>
                    <p class="description-list-project dsn-auto">{{$car->fuel_type}}</p>
                </li>
                <li class="dsn-up grid-item number-item">
                    <h5 class="title-list-project sm-title-block">Extras</h5>
                    <p class="description-list-project dsn-auto">
                        {{$car->extras}}
                    </p>
                </li>
            </ul>
        </div>
        <div
            class="dsn-container dsn-right-container over-hidden background-section section-padding section-margin dsn-swiper"
            data-dsn-option='{"spaceBetween":30,"slidesPerView" :2.5 , "centeredSlides":false}'
        >
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($images  as $image)
                        <div class="swiper-slide over-hidden background-transparent">
                            <div class="item-img">
                                <div class="img-box-parallax before-z-index">
                                    <img
                                        src="{{asset('storage/'.$image->image_url)}}"
                                        class="cover-bg-img"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div
                class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-30 align-items-center dsn-container justify-content-between"
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
                    data-dsn-type="bullets"
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

        <!-- ========== End Swiper Image  ========== -->
        <!-- ========== Info Project  ========== -->
        <div class="info-project background-section pb-section pt-40">
            <div class="container text-left" id="readmore">
                <h2 class="title-h2 dsn-up">ABOUT THE CAR</h2><br>
                <div class="readmore__content">
                    <p>
                        {!! $car->description !!}
                    </p>
                </div>
                @if(strlen($car->description) > 300)
                    <button class="readmore__toggle" role="switch" aria-checked="true"
                            style="border: none;background: transparent;color: #3253a1;">
                        Show more
                    </button>
                @endif
            </div>
        </div>
        <!-- ========== End Info Project  ========== -->
    </div>
    @section('custom-script')
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script>
            class readMore {
                constructor() {
                    this.content = '.readmore__content';
                    this.buttonToggle = '.readmore__toggle';
                }

                bootstrap() {
                    this.setNodes();
                    this.init();
                    this.addEventListeners();
                }

                setNodes() {
                    this.nodes = {
                        contentToggle: document.querySelector(this.content)
                    };

                    this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
                }

                init() {
                    const {contentToggle} = this.nodes;

                    this.stateContent = contentToggle.innerHTML;
                    console.log(contentToggle.value);
                    if (this.stateContent.length > 300) {
                        contentToggle.innerHTML = `${this.stateContent.substring(0, 300)}...`;
                    }

                }

                addEventListeners() {
                    this.buttonToggle.addEventListener('click', this.onClick.bind(this))
                }

                onClick(event) {
                    const targetEvent = event.currentTarget;
                    const {contentToggle} = this.nodes

                    if (targetEvent.getAttribute('aria-checked') === 'true') {
                        targetEvent.setAttribute('aria-checked', 'false')
                        contentToggle.innerHTML = this.stateContent;
                        this.buttonToggle.innerHTML = 'Show less'

                    } else {
                        targetEvent.setAttribute('aria-checked', 'true')
                        contentToggle.innerHTML = `${this.stateContent.substring(0, 300)}...`
                        this.buttonToggle.innerHTML = 'Show more'
                    }
                }
            }


            const initReadMore = new readMore();
            initReadMore.bootstrap()
        </script>
    @endsection
@endsection
