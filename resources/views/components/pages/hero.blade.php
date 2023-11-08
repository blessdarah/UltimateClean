    <header class="site-header site-header-3 transparent">
        {{-- hidden by default --}}
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-12 custom-width-note text-center">
                        <div class="header-top-note header-top-note-3">
                            <p><strong>Hire prefessionals:</strong> Are you a in need of good
                                <a href="{{ route('pages.contact') }}">Professional Cleaner?</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-area">
            <div class="container-fluid">
                <div class="row align-items-lg-center align-items-start">
                    <div class="col-xl-3 col-lg-2">
                        <div class="header-info-left-wrap">
                            <div class="header-info-left">
                                <a href="{{ route('welcome') }}" class="site-logo">
                                    <img style="max-width: 100%; height: 5rem;"
                                        src="{{ asset('assets/images/logo/logo.png') }}" alt="UltimateClean">
                                </a>
                                {{-- <a href="#0" class="site-btn">Appointment <span class="icon"><i --}}
                                {{--             class="fal fa-calendar-alt"></i></span></a> --}}
                            </div>

                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 d-none d-xl-block d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="{{ route('pages.about') }}">About</a></li>
                                    <li><a href="{{ route('pages.services') }}">Services</a></li>
                                    <li><a href="#0">News +</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('pages.blog') }}">Blog</a></li>
                                            <li><a href="{{ route('pages.events') }}">Events</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('pages.contact') }}">Contact us</a></li>
                                    @guest
                                        <li><a href="/admin">Login</a></li>
                                    @else
                                        <li><a href="/admin">Dashboard</a></li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-2 d-none d-xl-block d-lg-block">

                        <div class="header-info-right">
                            <div class="header-button-list">
                                <button class="btn search-trigger"><i class="fal fa-search"></i></button>
                                <button class="btn hamburger-menu-trigger"><i class="fal fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
