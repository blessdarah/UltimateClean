<x-guest-layout>
    <x-pages.page-header currentPage="service detail" />
    <section class="faq-area pt-120 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="service-details-wrap">
                        <div class="service-details-thumb">
                            <img src="assets/images/service/service-details-1.jpg" alt="">
                        </div>
                        <h3 class="blog-title">{{ $service->name }}</h3>
                        <div class="service-content-inner mt-40">
                            {!! $service->description !!}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">

                    <div class="sidebar-wrap">
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-35">
                                <h3 class="widget-title">Categories</h3>
                            </div>
                            <ul class="cat">
                                <li>
                                    <a href="{{ route('pages.services') }}">All categories</a>
                                </li>
                                @foreach ($categories as $category)
                                    @if ($category->posts->count() > 0)
                                        <li>
                                            <a href="{{ route('pages.services', ['category' => $category->name]) }}">{{ $category->name }}
                                                <span>{{ $category->posts->count() }}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="ad-widget">
                        <img src="assets/images/others/sidebar-service-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
