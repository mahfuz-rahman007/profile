@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Section Title') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Section Title') }}</div>
              </div>
            </div>
        </div>
    </div>
</div>

{{-- profile information --}}
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <div class="card card-primary card-outline">

                  <div class="card-header">
                      <div class="card-title">{{ __('Update Section Title') }}</div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updateSectiontitle') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('About Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="about_title" class="form-control" value="{{ $sectiontitle->about_title }}" placeholder="{{ __('About Title') }}">
                                @if($errors->has('about_title'))
                                  <p class="text-danger">{{ $errors->first('about_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('About Subtitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="about_subtitle" class="form-control" value="{{ $sectiontitle->about_subtitle }}" placeholder="{{ __('About Subitle') }}">
                                @if($errors->has('about_subtitle'))
                                  <p class="text-danger">{{ $errors->first('about_subtitle') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Skill Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="skill_title" class="form-control" value="{{ $sectiontitle->skill_title }}" placeholder="{{ __('Skill Title') }}">
                                @if($errors->has('skill_title'))
                                  <p class="text-danger">{{ $errors->first('skill_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Skill Subtitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="skill_subtitle" class="form-control" value="{{ $sectiontitle->skill_subtitle }}" placeholder="{{ __('Skill Subtitle') }}">
                                @if($errors->has('skill_subtitle'))
                                  <p class="text-danger">{{ $errors->first('skill_subtitle') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Funfact title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="funfact_title" class="form-control" value="{{ $sectiontitle->funfact_title }}" placeholder="{{ __('Funfact title') }}">
                                @if($errors->has('funfact_title'))
                                  <p class="text-danger">{{ $errors->first('funfact_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Funfact Subtitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="funfact_subtitle" class="form-control" value="{{ $sectiontitle->funfact_subtitle }}" placeholder="{{ __('Funfact Subtitle') }}">
                                @if($errors->has('funfact_subtitle'))
                                  <p class="text-danger">{{ $errors->first('funfact_subtitle') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Resume Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="resume_title" class="form-control" value="{{ $sectiontitle->resume_title }}" placeholder="{{ __('Resume Title') }}">
                                @if($errors->has('resume_title'))
                                  <p class="text-danger">{{ $errors->first('resume_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Resume Subtitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="resume_subtitle" class="form-control" value="{{ $sectiontitle->resume_subtitle }}" placeholder="{{ __('Resume Subtitle') }}">
                                @if($errors->has('resume_subtitle'))
                                  <p class="text-danger">{{ $errors->first('resume_subtitle') }}</p>
                                @endif
                            </div>
                          </div>

                                                    <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Education Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="education_title" class="form-control" value="{{ $sectiontitle->education_title }}" placeholder="{{ __('Education Title') }}">
                                @if($errors->has('education_title'))
                                  <p class="text-danger">{{ $errors->first('education_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Experience Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="experience_title" class="form-control" value="{{ $sectiontitle->experience_title }}" placeholder="{{ __('Experience Title') }}">
                                @if($errors->has('experience_title'))
                                  <p class="text-danger">{{ $errors->first('experience_title') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Service Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="service_title" class="form-control" value="{{ $sectiontitle->service_title }}" placeholder="{{ __('Service Title') }}">
                                @if($errors->has('service_title'))
                                  <p class="text-danger">{{ $errors->first('service_title') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Service Subtitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="service_subtitle" class="form-control" value="{{ $sectiontitle->service_subtitle }}" placeholder="{{ __('Service Subtitle') }}">
                                @if($errors->has('service_subtitle'))
                                  <p class="text-danger">{{ $errors->first('service_subtitle') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Portfolio Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="portfolio_title" class="form-control" value="{{ $sectiontitle->portfolio_title }}" placeholder="{{ __('Portfolio Title') }}">
                                @if($errors->has('portfolio_title'))
                                  <p class="text-danger">{{ $errors->first('portfolio_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Portfolio Subitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="portfolio_subtitle" class="form-control" value="{{ $sectiontitle->portfolio_subtitle }}" placeholder="{{ __('Portfolio Subtitle') }}">
                                @if($errors->has('portfolio_subtitle'))
                                  <p class="text-danger">{{ $errors->first('portfolio_subtitle') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Client Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="client_title" class="form-control" value="{{ $sectiontitle->client_title }}" placeholder="{{ __('Client Title') }}">
                                @if($errors->has('client_title'))
                                  <p class="text-danger">{{ $errors->first('client_title') }}</p>
                                @endif
                            </div>
                          </div>



                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Pricing Plan Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="pricingplan_title" class="form-control" value="{{ $sectiontitle->pricingplan_title }}" placeholder="{{ __('Pricing Plan Title') }}">
                                @if($errors->has('pricingplan_title'))
                                  <p class="text-danger">{{ $errors->first('pricingplan_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Pricing Plan Subitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="pricingplan_subtitle" class="form-control" value="{{ $sectiontitle->pricingplan_subtitle }}" placeholder="{{ __('Pricing Plan Subtitle') }}">
                                @if($errors->has('pricingplan_subtitle'))
                                  <p class="text-danger">{{ $errors->first('pricingplan_subtitle') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Blog Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_title" class="form-control" value="{{ $sectiontitle->blog_title }}" placeholder="{{ __('Blog Title') }}">
                                @if($errors->has('blog_title'))
                                  <p class="text-danger">{{ $errors->first('blog_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Blog Subitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="blog_subtitle" class="form-control" value="{{ $sectiontitle->blog_subtitle }}" placeholder="{{ __('Blog Subtitle') }}">
                                @if($errors->has('blog_subtitle'))
                                  <p class="text-danger">{{ $errors->first('blog_subtitle') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Testimonial Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="testimonial_title" class="form-control" value="{{ $sectiontitle->testimonial_title }}" placeholder="{{ __('Testimonial Title') }}">
                                @if($errors->has('testimonial_title'))
                                  <p class="text-danger">{{ $errors->first('testimonial_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Testimonial Subtitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="testimonial_subtitle" class="form-control" value="{{ $sectiontitle->testimonial_subtitle }}" placeholder="{{ __('Testimonial Subtitle') }}">
                                @if($errors->has('testimonial_subtitle'))
                                  <p class="text-danger">{{ $errors->first('testimonial_subtitle') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Contact Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="contact_title" class="form-control" value="{{ $sectiontitle->contact_title }}" placeholder="{{ __('Contact Title') }}">
                                @if($errors->has('contact_title'))
                                  <p class="text-danger">{{ $errors->first('contact_title') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Contact Subtitle') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="contact_subtitle" class="form-control" value="{{ $sectiontitle->contact_subtitle }}" placeholder="{{ __('Contact Subtitle') }}">
                                @if($errors->has('contact_subtitle'))
                                  <p class="text-danger">{{ $errors->first('contact_subtitle') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                  <input type="submit" class="btn btn-primary" value="Update">
                              </div>
                          </div>

                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
