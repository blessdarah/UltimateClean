<x-guest-layout>
    <x-pages.page-header title="Read remarkable content" currentPage="Blog" />

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

            {{-- <div class="mt-30"> --}}
            {{--     {{ $posts->links() }} --}}
            {{-- </div> --}}
        </div>
    </section>

</x-guest-layout>
