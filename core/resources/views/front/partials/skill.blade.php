        <!-- === Skills Section === -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $sectiontitle->skill_title }}</h2>
                    <p>{{ $sectiontitle->skill_subtitle }}</p>
                </div>

                <div class="row skills-content" >

                    @foreach ($scategories as $scategory)
                    @if ($scategory->skill_type == 'line')
                        <div class="col-lg-6">
                            <h4>{{ $scategory->name }}</h4>
                            <hr>
                            @foreach ($scategory->skills as $key=>$skill)
                                <div class="progress">
                                    <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->level }}%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100" style="height: 15px;"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="col-lg-6" id="statisticsSection">
                            <h4>{{ $scategory->name }}</h4>
                            <hr>
                                <div class="skill-list">
                                    @foreach ($scategory->skills as $key=>$skill)
                                    <div class="single-skill">
                                            <div class="round"
                                            data-value="0.{{ $skill->level }}"
                                            data-number="{{ $skill->level }}"
                                            data-size="100"
                                            data-thickness="7"
                                            data-fill="{
                                            &quot;color&quot;: &quot;#{{ $setting->base_color }}&quot;
                                            }">
                                            <strong></strong>
                                            <h6 class="mt-1">{{ $skill->name }}</h6>
                                            </div>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    @endif

                   @endforeach

                </div>

            </div>
        </section>
        <!-- End Skills Section -->
