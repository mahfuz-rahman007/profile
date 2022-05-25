        <!-- === About Section === -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $sectiontitle->about_title }}</h2>
                    <p> {{ $sectiontitle->about_subtitle }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/front/img/'.$about->avatar) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>{{ $about->position_type }}</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Name:</strong> {{ $about->name }}
                                    </li>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> {{ $about->phone }}</li>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Residence:</strong> {{ $about->residence }}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> {{ $about->age }}</li>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong>
                                        {{ $about->mail }}</li>
                                    <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> {{ $about->freelance }}</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            {{ $about->about_text }}
                        </p>

                        <a href="#contact" class="btn-button">Contact Me</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->
