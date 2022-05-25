        <!-- === Testimonials Section === -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $sectiontitle->testimonial_title }}</h2>
                    <p> {{ $sectiontitle->testimonial_subtitle }}</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{ asset('assets/front/img/'.$testimonial->image) }}" class="testimonial-img" alt="">
                                    <h3>{{ $testimonial->name }}</h3>
                                    <h4> {{ $testimonial->position }}</h4>
                                    <div class="text-center text-warning">
                                        @for($id = 0 ; $id < $testimonial->rating; $id++)
                                         <i class="bx bxs-star"></i>
                                        @endfor
                                    </div>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $testimonial->message }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->
