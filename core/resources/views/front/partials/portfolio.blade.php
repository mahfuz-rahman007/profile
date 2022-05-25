        <!-- ==Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $sectiontitle->portfolio_title }}</h2>
                    <p> {{ $sectiontitle->portfolio_subtitle }}</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('assets/front/img/'.$portfolio->featured_image) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ strlen($portfolio->title) > 35 ? substr($portfolio->title, 0, 35).'...' :  $portfolio->title}}</h4>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('assets/front/img/'.$portfolio->featured_image) }}"
                                            class="portfolio-lightbox" title="Portfolio Image"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('front.portfoliodetails',$portfolio->slug) }}"
                                            title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-12 text-center">
                    <a href="{{ route('front.portfolios') }}" class="btn-button"><span>View All</span> </a>
                </div>


            </div>
        </section>
        <!-- End Portfolio Section -->
