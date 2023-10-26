<x-guest-layout>
    <x-pages.page-header currentPage="Contact" />
    <section class="feature-area feature-area-2 pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section-heading section-heading-2 mb-70">
                        <h5 class="sub-title mb-22">Be in touch</h5>
                        <h2 class="section-title">Find multiple ways to contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30 text-center">
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Email Address</h3>
                            <p>
                                <a href="mailto:info@utlimateclean.cm">info@ultimateclean.cm</a> <br>
                                <a href="mailto:support@ultimateclean.cm">support@ultimateclean.com</a> <br>
                            </p>
                            {{-- <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Mail Us</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Phone Number</h3>
                            <p>
                                <a href="tel:+8767654654656">+876 7654 654 65 6</a> <br>
                                <a href="tel:+87987676546564">+87(987) 676 546 56 4</a> <br>
                                {{-- <a href="tel:+87676565458">+876 765 654 58</a> --}}
                            </p>
                            {{-- <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Make Call</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Office Address</h3>
                            <p>
                                Hourse:16/A, Romada pubg house <br>
                                city tower, New York <br>
                                United States
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                    <div class="singel-feature-box singel-feature-box-2">
                        <div class="feature-icon mb-35">
                            <img src="assets/images/icons/contact-info-4.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h3 class="feture-title mb-20">Social Connect</h3>
                            <p>
                                <a href="www.facebook.com/example.html">www.facebook.com/example</a> <br>
                                <a href="www.twitter.com/example.html">www.twitter.com/example</a> <br>
                                <a href="www.behance.com/example.html">www.behance.com/example</a>
                            </p>
                            <a href="#0" class="inline-btn mt-10"><i class="fal fa-arrow-right"></i> Get
                                Connect</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- contact form --}}
    <section class="cta-area pt-45">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta-wrapper">
                        <div class="cta-thumb">
                            <img src="assets/images/shapes/cta-man-thumb.png" alt="">
                        </div>
                        <form class="row" method="POST" action="{{ route('pages.contact') }}">
                            <div class="col-xl-5 offset-xl-6 offset-lg-6 col-lg-5">
                                <div class="section-heading section-heading-2 mb-50">
                                    <h5 class="sub-title mb-22">Be in touch</h5>
                                    <h2 class="section-title">Send us a message and we'll be in touch</h2>
                                </div>
                                <div class="cta-form mt-none-10">
                                    <div class="form-group mt-10">
                                        <label for="name"><i class="fal fa-user"></i></label>
                                        <input type="text" id="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group mt-10">
                                        <label for="email"><i class="fal fa-envelope"></i></label>
                                        <input type="email" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group mt-10">
                                        <label for="subject"><i class="fal fa-info"></i></label>
                                        <input type="text" id="subject" placeholder="Subject" />
                                    </div>
                                    <div class="form-group mt-10">
                                        <label for="message"><i class="fal fa-pencil"></i></label>
                                        <textarea id="message" name="message" placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="form-group mt-10">
                                        <button type="submit" class="site-btn boxed">Submit Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
