    <!-- ==Portfolio Section ======= -->
    <section id="pricing" class="pricing-plan">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $sectiontitle->pricingplan_title }}</h2>
                <p> {{ $sectiontitle->pricingplan_subtitle }}</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                @foreach ($pricingplans as $pricingplan)
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-item">
                        <div class="pricing-deco">
                            <div class="pricing-price"><span class="pricing-currency">{{ $pricingplan->currency }}</span>{{ $pricingplan->price }}</div>
                            <h3 class="pricing-title">{{ $pricingplan->plan_name }}</h3>
                        </div>

                        <div class="list">
                            {!! $pricingplan->content !!}
                        </div>
                        @if ($setting->iscontact == 1)
                            <a href="#contact" class="btn-button">
                                <span>Get Started</span>
                            </a>
                        @endif

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
