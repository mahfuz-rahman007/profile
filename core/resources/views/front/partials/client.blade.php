    <!-- === Services Section === -->
    <section id="client" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $sectiontitle->client_title }}</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="client-slider">
                        @foreach ($clients as $client)
                          <div class="item">
                            <a href="{{ $client->url }}" target="_blank" >
                              <img src="{{ asset('assets/front/img/'.$client->image) }}" alt="">
                            </a>
                          </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->
