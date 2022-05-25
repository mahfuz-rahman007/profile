        <!-- === Resume Section === -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $sectiontitle->resume_title }}</h2>
                    <p> {{ $sectiontitle->resume_subtitle }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Education</h3>
                        @foreach ($educations as $education)
                            <div class="resume-item">
                                <h4>{{ $education->institution }}</h4>
                                <h5>{{ $education->from_date }} -
                                    {{ empty($education->date_to) ? 'Present' : $education->date_to }}</h5>
                                <p><em>{{ $education->field }}</em></p>
                                <p>{{ $education->description }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach ($experiences as $experience)
                            <div class="resume-item">
                                <h4>{{ $experience->field }}</h4>
                                <h5>{{ $experience->from_date }} -
                                    {{ empty($experience->date_to) ? 'Present' : $experience->date_to }}</h5>
                                <p><em>{{ $experience->company }}</em></p>
                                <p>
                                    {{ $experience->description }}
                                </p>
                            </div>
                        @endforeach


                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="{{ asset('assets/front/file/' . $about->resume) }}" class="btn-button"
                        download=""><span>Download Resume</span> </a>
                </div>

            </div>
        </section>
        <!-- End Resume Section -->
