<section class="breadcrumb-area pt-140 pb-140 bg_img" data-overlay="5"
    data-background="{{ asset('assets/images/bg/breadcrumb-bg.jpg') }}"
    style="background-image: url(&quot;assets/images/bg/breadcrumb-bg.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-text">
                    <h1 class="breadcrumb-title">{{ $currentPage }}</h1>
                    <p>{{ $title ?? 'Welcome to our company' }}</p>
                </div>
            </div>

            <div class="col-lg-6 my-auto">
                <div class="breadcrumb-nav">
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>|</li>
                        <li>{{ $currentPage }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
