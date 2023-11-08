<section class="homepage-slide homepage-slide-3 owl-carousel">
    @foreach ($banners as $banner)
        <div class="single-slide-item single-slide-item-3 bg_img" data-overlay="6"
            data-background="{{ asset('/storage/' . $banner->image) }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-slide-content single-slide-content-3">
                            <div class="slide-text" data-animation="fadeInUp" data-delay=".3s">
                                <p>{{ $banner->subTitle }}</p>
                            </div>

                            <h1 class="slide-title" data-animation="fadeInUp" data-delay=".5s">{{ $banner->title }}</h1>
                            <div class="slide-btns mt-30">
                                <a href="{{ route('pages.services') }}" data-animation="fadeInUp" data-delay=".7s"
                                    class="site-btn boxed yellow">Our Services</a>

                                <a href="{{ route('pages.about') }}" data-animation="fadeInUp" data-delay=".9s"
                                    class="site-btn boxed">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
