<x-guest-layout>
    @include('layouts/partials/header')
    <section class="about-area about-area-2 about-area-3 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-right-box">
                        <h2>
                            <span>Get Free Estimate</span>
                            {{ setting('contact.phone') }}
                        </h2>
                        <span class="icon"><i class="fal fa-phone"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-left-side about-left-side-2 about-left-side-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-5">
                                        <div class="about-thumb-big" data-tilt="" data-tilt-perspective="3000"
                                            style="will-change: transform;">
                                            <img src="{{ asset('assets/images/about/about-3-thumb-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5">

                                        <div class="about-thumb-big mt-50">

                                            <img data-tilt="" data-tilt-perspective="3000"
                                                src="assets/images/about/about-3-thumb-2.jpg" alt=""
                                                style="will-change: transform; transform: perspective(3000px) rotateX(0deg) rotateY(0deg);">

                                            <div class="about-thumb-box">

                                                <h2 class="title"><span class="odometer odometer-auto-theme"
                                                        data-count="25">
                                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                                    class="odometer-digit-spacer">8</span><span
                                                                    class="odometer-digit-inner"><span
                                                                        class="odometer-ribbon"><span
                                                                            class="odometer-ribbon-inner"><span
                                                                                class="odometer-value">2</span></span></span></span></span><span
                                                                class="odometer-digit"><span
                                                                    class="odometer-digit-spacer">8</span><span
                                                                    class="odometer-digit-inner"><span
                                                                        class="odometer-ribbon"><span
                                                                            class="odometer-ribbon-inner"><span
                                                                                class="odometer-value">5</span></span></span></span></span>
                                                        </div>
                                                    </span><span class="plus">+</span>
                                                    <span class="year">Yr Experience</span>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="about-right-side about-right-side-2 about-right-side-3">
                                <div class="section-heading section-heading-3 mb-35">
                                    <h5 class="sub-title mb-22">About us</h5>
                                    <h2 class="section-title">Get Every Answers
                                        From Here</h2>
                                    <div class="section-content">
                                        <p>Local operations team on-call 24 hours a day, available to
                                            work at a moment’s notice.</p>
                                    </div>
                                </div>

                                <div class="about-right-content">
                                    <p>We provide janitorial and specialized cleaning services for all types and sizes
                                        of complexes – from small
                                        to large
                                        offices and commercial centers to industrial, warehouse, and retail locations.
                                        Our client base is
                                        comprised of both
                                        privately-owned companies and public organizations.</p>
                                    <a href="{{ route('pages.about') }}" class="site-btn boxed yellow mt-35">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- partners --}}
    <div class="sponser-area pb-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="brand-carousel owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1200px, 0px, 0px); transition: all 0s ease 0s; width: 3600px;">
                                @foreach ($partners as $partner)
                                    <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                        <div class="singel-brand-item">
                                            <img src="{{ asset('/storage/' . $partner->logo) }}"
                                                alt="{{ $partner->name . 'logo' }}">
                                            <p>{{ $partner->name }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev">prev</div>
                                <div class="owl-next">next</div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- services --}}
        <div class="service-box-area service-box-area-2 pt-120 pb-120">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section-heading section-heading-2 mb-70">
                        <h5 class="sub-title mb-22">Our services</h5>
                        <h2 class="section-title">Whate we offer</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-none-30 justify-content-center">
                    @foreach ($services as $service)
                        <div class="col-xl-4 col-lg-6 col-md-10 mt-30">
                            <div class="single-service-box">
                                <div class="service-thumb">
                                    <img src="storage/{{ $service->image }}" alt="">
                                </div>
                                <div class="service-content">
                                    {{-- <span class="service-price">$500 - $1200</span> --}}
                                    <h3 class="service-title"><a
                                            href="{{ route('pages.services.show', $service->slug) }}">{{ $service->name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- end services --}}

        {{-- features --}}
        <section class="feature-area bg-2 pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 text-center">
                        <div class="section-heading section-heading-2 mb-70">
                            <h5 class="sub-title mb-22">Features</h5>
                            <h2 class="section-title">Core Features</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt-none-30 text-center">
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                        <div class="singel-feature-box">
                            <div class="feature-icon mb-35">
                                <img src="assets/images/icons/feature-1-icon-1.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h3 class="feture-title mb-5">Quick Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt.</p>

                                <a href="service.html" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i>
                                    Read
                                    More</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">

                        <div class="singel-feature-box">

                            <div class="feature-icon mb-35">

                                <img src="assets/images/icons/feature-1-icon-2.png" alt="">

                            </div>

                            <div class="feature-content">

                                <h3 class="feture-title mb-5">24/7 Online Support</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt.</p>

                                <a href="service.html" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i>
                                    Read
                                    More</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">

                        <div class="singel-feature-box">

                            <div class="feature-icon mb-35">

                                <img src="assets/images/icons/feature-1-icon-3.png" alt="">

                            </div>

                            <div class="feature-content">

                                <h3 class="feture-title mb-5">Clean &amp; Wash</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt.</p>

                                <a href="service.html" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i>
                                    Read
                                    More</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">

                        <div class="singel-feature-box">

                            <div class="feature-icon mb-35">

                                <img src="assets/images/icons/feature-1-icon-4.png" alt="">

                            </div>

                            <div class="feature-content">

                                <h3 class="feture-title mb-5">Small To Big Wash</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt.</p>

                                <a href="service.html" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i>
                                    Read
                                    More</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- How it works --}}
        <section class="process-area process-area-2 process-area-3 bg-3 pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 text-center">
                        <div class="section-heading section-heading-2 white mb-70">
                            <h5 class="sub-title mb-22">Process</h5>
                            <h2 class="section-title">How It Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-none-80 mmt-none-30">
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-80 mmt-30 col-md-6 text-center">
                        <div class="single-process-box single-process-box-2 single-process-box-3 active">
                            <span class="count-big">01</span>
                            <a href="#0" class="inline-btn">Get In Touch <i class="fal fa-arrow-right"></i></a>
                            <div class="process-box-content mt-30">
                                <p>We provide janitorial and specialized cleaning services for all types and sizes of
                            </div>
                            <div class="process-box-icon">

                                <img src="assets/images/icons/hiw-icon-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-80 mmt-30 text-center">
                        <div class="single-process-box single-process-box-2 single-process-box-3 yellow mt-50 mmt-0">
                            <span class="count-big">02</span>
                            <a href="#0" class="inline-btn">Contact Now <i class="fal fa-arrow-right"></i></a>
                            <div class="process-box-content mt-30">
                                <h2 class="process-box-title">Choose Category</h2>
                                <p>We provide janitorial and specialized cleaning services for all types and sizes of
                                    complexes.</p>
                            </div>
                            <div class="process-box-icon">
                                <img src="assets/images/icons/hiw-icon-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-80 mmt-30 text-center">
                        <div class="single-process-box single-process-box-2 single-process-box-3 blue mt-50 mmt-0">
                            <span class="count-big">03</span>
                            <a href="#0" class="inline-btn">Get Support <i class="fal fa-arrow-right"></i></a>
                            <div class="process-box-content mt-30">
                                <h2 class="process-box-title">Get Clean Property</h2>
                                <p>We provide janitorial and specialized cleaning services for all types and
                                    sizes of complexes.</p>
                            </div>
                            <div class="process-box-icon">
                                <img src="assets/images/icons/hiw-icon-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Blog section --}}
        <section class="news-area pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 text-center">
                        <div class="section-heading section-heading-2 mb-70">
                            <h5 class="sub-title mb-22">Blog</h5>
                            <h2 class="section-title">News Feeds</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-none-30">
                    @foreach ($posts as $post)
                        <div class="col-xl-4 col-lg-6">
                            <article class="postbox post format-image mt-30">
                                <div class="postbox-thumb">
                                    <a href="{{ route('pages.blog.show', $post->slug) }}">
                                        <img src="{{ asset($post->image) }}" alt="blog image">
                                    </a>
                                </div>
                                <div class="postbox-text">
                                    <div class="post-meta mb-10">
                                        <a href="#0"><i class="fal fa-user"></i> By Admin </a>
                                        <a href="#0"><i class="fal fa-calendar-alt"></i>
                                            {{ $post->created_at->format('d M, Y') }}</a>
                                    </div>
                                    <h4 class="blog-title">
                                        <a href="{{ route('pages.blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h4>
                                    <div class="post-text">
                                        <p>{{ $post->summary }}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <div class="container mt-50 mb-50">
            <div class="accordion faqs" id="accordionFaq">
                @foreach ($faqs as $faq)
                    <div class="card">
                        <div class="card-header" id="heading1">
                            <h5 class="mb-0 subtitle">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                    aria-controls="collapse1">
                                    {{ $faq->question }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{ $faq->id }}" class="collapse" aria-labelledby="heading1"
                            data-parent="#accordionFaq">
                            <div class="card-body">
                                <div class="content">
                                    <p>{{ $faq->response }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</x-guest-layout>
