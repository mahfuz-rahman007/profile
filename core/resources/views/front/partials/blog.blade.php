    <!-- ==Portfolio Section ======= -->
    <section id="blog" class="blogs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $sectiontitle->blog_title }}</h2>
                <p> {{ $sectiontitle->blog_subtitle }}</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-box ">
                            <div class="blog-images">
                                <img src="{{asset('assets/front/img/'.$blog->main_image) }}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-details">
                                <ul class="post-meta-one ">
                                    <li>
                                        <p><i class="fa fa-user"></i> {{__('By')}}
                                            <span class="username">{{__('Admin')}}</span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="fa fa-clock-o"></i> {{ date('d M,Y' , strtotime($blog->created_at)) }}
                                        </p>
                                    </li>
                                </ul>
                                <h3>
                                    <a class="blog-title " href="{{ route('front.blogdetails',$blog->slug) }}">
                                        {{ strlen($blog->title) > 40 ? substr($blog->title,0,40).'...' : $blog->title }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-lg-12 text-center">
                <a href="{{ route('front.blogs') }}" class="btn-button"><span>View All</span> </a>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
