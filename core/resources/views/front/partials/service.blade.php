        <!-- === Services Section === -->
        <section id="service" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $sectiontitle->service_title }}</h2>
                    <p> {{ $sectiontitle->service_subtitle }}</p>
                </div>

                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <div class="icon">
                                   <a href="{{ route('front.servicedetails',$service->slug) }}"><img src="{{ asset('assets/front/img/'.$service->image) }}" width="60px" alt=""></a>
                                </div>
                                <h4><a href="{{ route('front.servicedetails',$service->slug) }}">{{ $service->name }}</a></h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- End Services Section -->
