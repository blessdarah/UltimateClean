<x-guest-layout>
    <x-pages.page-header title="Blog detail" currentPage="Blog" />

    <div class="blog-area pt-120 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <article class="postbox postbox-2 singel-post format-image">
                        <div class="postbox_text pt-50">
                            <div class="post-cat mb-20">
                                <span>{{ $post->category->name }}</span>
                            </div>
                            <h3 class="blog-title">{{ $post->title }}</h3>
                            <div class="post-meta mt-20 mb-20">
                                <span><i class="far fa-eye"></i> 232 Views </span>
                                <span><a href="#0"><i class="far fa-comments"></i> 23 Comments</a></span>
                                <span><a href="#0"><i class="far fa-calendar-alt"></i>
                                        {{ $post->created_at->format('dd M, Y') }}</a></span>
                            </div>
                            <div class="post-text mb-20">{!! $post->detail !!}</div>
                            <div class="row mt-40">
                                <div class="col-xl-8 col-lg-8 col-md-8">
                                    <div class="blog-post-tag">
                                        <span>Releted Tags</span>
                                        @foreach ($post->tags as $tag)
                                            <a href="#0">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="blog-share-icon text-left text-md-right">
                                        <span>Share: </span>
                                        {!! Share::page(url()->full(), null, ['title' => $post->title])->facebook()->twitter()->linkedin()->whatsapp() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="navigation-border pt-50 mt-50"></div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="bakix-navigation b-next-post text-left mb-30">
                                        <span><a href="#0">Prev Post</a></span>
                                        <h4><a href="#0">Tips on Minimalist</a></h4>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 my-auto">
                                    <div class="bakix-filter text-left text-md-center mb-30">
                                        <a href="#0"><img src="assets/images/icons/filter.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="bakix-navigation b-next-post text-left text-md-right mb-30">
                                        <span><a href="#0">Next Post</a></span>
                                        <h4><a href="#0">Tips on Minimalist</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-none-30">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="navigation-border pt-50 mt-50"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2 class="releted-post-heading">Releted Post</h2>
                                    </div>
                                </div>
                                <div class="row releted-post">
                                    <div class="col-xl-6">
                                        <article class="postbox post format-image mt-30">
                                            <div class="postbox-thumb">
                                                <a href="#0">
                                                    <img src="assets/images/news/releted-post-thumb-1.jpg"
                                                        alt="blog image">
                                                </a>
                                            </div>
                                            <div class="postbox-text">
                                                <div class="post-meta mb-10">
                                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March
                                                        2020</a>
                                                </div>
                                                <h4 class="blog-title">
                                                    <a href="#0">A series of iOS 7 inspire
                                                        vector icons.</a>
                                                </h4>
                                                <div class="post-text">
                                                    <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed
                                                    </p>
                                                </div>
                                        </article>
                                    </div>
                                    <div class="col-xl-6">
                                        <article class="postbox post format-image mt-30">
                                            <div class="postbox-thumb">
                                                <a href="#0">
                                                    <img src="assets/images/news/releted-post-thumb-2.jpg"
                                                        alt="blog image">

                                                </a>

                                            </div>

                                            <div class="postbox-text">

                                                <div class="post-meta mb-10">

                                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March
                                                        2020</a>

                                                </div>

                                                <h4 class="blog-title">

                                                    <a href="#0">A series of iOS 7 inspire

                                                        vector icons.</a>

                                                </h4>

                                                <div class="post-text">

                                                    <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed
                                                        doing.</p>

                                                </div>

                                            </div>

                                        </article>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="author mt-50 mb-40">

                            <div class="author-img">

                                <img src="assets/images/news/news-author-1.jpg" alt="">

                            </div>

                            <div class="author-text">

                                <span>Written by</span>

                                <h3>Rosalina D. William</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna

                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation is enougn for today.</p>

                            </div>

                        </div>

                        <div class="post-comments">

                            <div class="blog-coment-title mb-35">

                                <h2>03 Comments</h2>

                            </div>

                            <div class="latest-comments">

                                <ul>

                                    <li>

                                        <div class="comments-box">

                                            <div class="comments-avatar">

                                                <img src="assets/images/news/news-comment-a-1.png" alt="">

                                            </div>

                                            <div class="comments-text">

                                                <div class="avatar-name">

                                                    <h5>Karon Balina</h5>

                                                    <span>19th May 2018</span>

                                                    <a class="reply" href="#0"><i
                                                            class="fal fa-reply"></i>Reply</a>

                                                </div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod

                                                    tempor incididunt

                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud

                                                    exercitation

                                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="children">

                                        <div class="comments-box">

                                            <div class="comments-avatar">

                                                <img src="assets/images/news/news-comment-a-2.png" alt="">

                                            </div>

                                            <div class="comments-text">

                                                <div class="avatar-name">

                                                    <h5>Julias Roy</h5>

                                                    <span>19th May 2018</span>

                                                    <a class="reply" href="#0"><i
                                                            class="fal fa-reply"></i>Reply</a>

                                                </div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod

                                                    tempor incididunt

                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud

                                                    exercitation

                                                    ullamco laboris nisi ut aliquip.</p>

                                            </div>

                                        </div>

                                    </li>

                                    <li>

                                        <div class="comments-box">

                                            <div class="comments-avatar">

                                                <img src="assets/images/news/news-comment-a-3.png" alt="">

                                            </div>

                                            <div class="comments-text">

                                                <div class="avatar-name">

                                                    <h5>Arista Williamson</h5>

                                                    <span>19th May 2018</span>

                                                    <a class="reply" href="#0"><i
                                                            class="fal fa-reply"></i>Reply</a>

                                                </div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod

                                                    tempor incididunt

                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                    nostrud

                                                    exercitation

                                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                            </div>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="post-comments-form">

                            <div class="post-comments-title">

                                <h2>Post Comments</h2>

                            </div>

                            <form id="contacts-form" class="conatct-post-form" action="#">

                                <div class="row">

                                    <div class="col-xl-12">

                                        <div class="contact-icon contacts-message">

                                            <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments...."></textarea>

                                        </div>

                                    </div>

                                    <div class="col-xl-12">

                                        <div class="contact-icon contacts-name">

                                            <input type="text" placeholder="Your Name.... ">

                                        </div>

                                    </div>

                                    <div class="col-xl-12">

                                        <div class="contact-icon contacts-email">

                                            <input type="email" placeholder="Your Email....">

                                        </div>

                                    </div>

                                    <div class="col-xl-12">

                                        <div class="contact-icon contacts-website">

                                            <input type="text" placeholder="Your Website....">

                                        </div>

                                    </div>

                                    <div class="col-xl-12">

                                        <button class="site-btn boxed yellow" type="submit"><i
                                                class="fal fa-comments"></i> Post comment</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </article>

                </div>

                <div class="col-xl-4 col-lg-12">
                    <div class="sidebar-wrap">
                        <div class="widget mb-40">
                            <div class="widget-title-box mb-35">
                                <h3 class="widget-title">Search Objects</h3>
                            </div>
                            <form class="sidebar-search-form">

                                <input type="text" placeholder="Search your keyword...">

                                <button type="submit"><i class="fas fa-search"></i></button>

                            </form>

                        </div>

                        <div class="widget mb-40">
                            <div class="widget-title-box mb-35">
                                <h3 class="widget-title">Categories</h3>
                            </div>
                            <ul class="cat">
                                <li>
                                    <a href="#0">Business <span>26</span></a>
                                </li>

                                <li>

                                    <a href="#0">Consultant <span>30</span></a>

                                </li>

                                <li>

                                    <a href="#0">Creative <span>71</span></a>

                                </li>

                                <li>

                                    <a href="#0">UI/UX <span>56</span></a>

                                </li>

                                <li>

                                    <a href="#0">Technology <span>60</span></a>

                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
