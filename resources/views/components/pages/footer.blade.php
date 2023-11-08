    <footer class="site-footer bg-4 site-footer-2 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="title">Our Services</h4>
                        @if (isset($services))
                            <ul>
                                @foreach ($services as $service)
                                    <li><a href="{{ route('pages.services.show', $service->slug) }}"><i
                                                class="fal fa-angle-right "></i> {{ $service->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    {{-- empty column --}}
                </div>

                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="footer-widget footer-contact-widget">
                        <h4 class="title">Contact Us</h4>
                        <div class="footer-contact-info">
                            <div class="content">
                                <p>{{ setting('contact.address') }}</p>
                            </div>

                            <div class="box">

                                <h2>
                                    <span>Get Free Estimate</span>
                                    {{ setting('contact.phone') }}
                                </h2>

                                <span class="icon"><i class="fal fa-phone"></i></span>

                            </div>

                        </div>

                        <div class="footer-social-info">

                            <div class="content">

                                <a href="mailto:{{ setting('contact.email') }}"><span>E:</span>
                                    <span>{{ setting('contact.email') }}</span></a>
                            </div>

                            <div class="social-links">
                                <a href="{{ setting('social.facebook') }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ setting('social.twitter') }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ setting('social.instagram') }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright mt-100 pt-30 pb-30 text-center">
                        <p>Copyright By {{ '@' . config('app.name') }} - {{ now()->format('Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
