<x-guest-layout>
    <x-pages.page-header currentPage="Our services" />
    <div class="service-box-area service-box-area-2 pt-120 pb-120">
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
</x-guest-layout>
