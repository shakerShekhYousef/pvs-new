<!-- ========== Menu ========== -->
<header
    id="site_menu_header"
    class="site-header dsn-container d-none dsn-hamburger"
>
    <div class="main-logo">
        <a
            href="{{route('front.home')}}"
            data-dsn-text="PVS"
            class="custom-logo-link main-brand effect-ajax"
            rel="home"
            aria-current="page"
        >
            <img
                src="{{asset('assets/front/img/logo.svg')}}"
                class="custom-logo logo-light"
                alt="PVS-logo"
            />
            <img
                src="{{asset('assets/front/img/logo.svg')}}"
                class="custom-logo logo-dark"
                alt="PVS-logo"
            />
        </a>
    </div>
    <nav class="main-navigation">
        <div class="menu-cover-title header-container dsn-container">
            MENU
        </div>
        <ul id="dsn-primary-list" class="primary-nav h2">
            <li class="nav-item has-sub-menu">
                <a title="Home" href="{{route('front.home')}}">
                    <span class="overflow">Home</span>
                </a>
            </li>
            <li class="nav-item has-sub-menu">
                <a title="Home" href="{{route('front.contact')}}">
                    <span class="overflow">Contact Us</span>
                </a>
            </li>
        </ul>
        <div
            class="container-content d-flex flex-column justify-content-center section-margin"
        >
            <div class="nav__info">
                <div class="nav-content">
                    <h5 class="sm-title-block mb-10">ADDRESS</h5>
                    <b>UAE Address:</b> Blue Bay Tower, Business Bay, Dubai, United Arab Emirates.<br><br>
                    <b>Africa Address:</b> St. Andrews Office Park, Meadowbrook Lane, Epsom Downs, <br>
                    Sandton, Johannesburg, South Africa.
                </div>
                <div class="nav-content mt-30">
                    <h5 class="sm-title-block mb-10">Contact</h5>
                    <p class="links over-hidden mb-1">
                        <a
                            class="link-hover d-block"
                            href="tel:+9710585628810"
                            data-hover-text="(+971) 058 562 8810"
                        >Dubai: (+971) 058 562 8810 </a>
                        <a
                            class="link-hover"
                            href="tel:+27638402330"
                            data-hover-text="(+27) 638 402 330"
                        >Johannesburg: (+27) 638 402 330</a>
                    </p>
                    <p class="links over-hidden">
                        <a
                            class="link-hover"
                            href="mailto:info@pvsme.com"
                            data-hover-text="info@pvsme.com"
                        >info@pvsme.com</a>
                    </p>
                </div>
            </div>
            <div class="nav-social nav-content mt-30">
                <div class="nav-social-inner p-relative">
                    <h5 class="sm-title-block mb-10">Follow us</h5>
                    <ul style="--dsn-li-name: dsn6">
                        <li style="--dsn-li-index: 0">
                            <a
                                href="http://www.facebook.com/pvs.hub"
                                target="_blank"
                                rel="nofollow noopener noreferrer"
                            >Facebook.</a>
                        </li>
                        <li style="--dsn-li-index: 1">
                            <a
                                href="https://www.instagram.com/pvs.hub/"
                                target="_blank"
                                rel="nofollow noopener noreferrer"
                            >Instagram.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="navbar_toggle" class="navbar-toggle">
        <div class="toggle-icon">
            <div class="toggle-line"></div>
            <div class="toggle-line"></div>
            <div class="toggle-line"></div>
        </div>
        <div class="toggle-text">
            <div class="text-menu">Menu</div>
            <div class="text-open">Open</div>
            <div class="text-close">Close</div>
        </div>
    </div>
    <div class="bg-load background-main"></div>

    <svg
        width="100%"
        height="100%"
        viewBox="0 0 100 100"
        preserveAspectRatio="none"
        class="bg-load dsn-svg-transition"
    >
        <path
            vector-effect="non-scaling-stroke"
            d="M 0 100 V 100 Q 50 100 100 100 V 100 z"
        />
    </svg>
</header>
<!-- ========== End Menu ========== -->
