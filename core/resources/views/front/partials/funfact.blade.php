        <!-- === Facts Section === -->
        <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $sectiontitle->funfact_title }}</h2>
                    <p>{{ $sectiontitle->funfact_subtitle }}</p>
                </div>

                <div class="row counters">

                    @foreach ($funfacts as $funfact)
                        <div class="col-lg-3 col-6 text-center" >
                            <img src="{{ asset('assets/front/img/'.$funfact->icon) }}" alt="" class="img-fluid mx-auto" width="70px">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $funfact->value }}" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>{{ $funfact->name }}</p>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- End Facts Section -->
