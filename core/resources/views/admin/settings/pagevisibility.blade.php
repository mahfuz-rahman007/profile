@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Page Visibility') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Page Visibility') }}</div>
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
            <form class="form-horizontal" action="{{ route('admin.updatePagevisibility') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    {{-- Update Page & Section Visibility --}}
                    <div class="col-md-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="card-title">{{ __('Update Page & Section Visibility') }}</div>
                            </div>

                            <div class="card-body">

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Home Section') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="ishome" {{ $setting->ishome == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('ishome'))
                                          <p class="text-danger">{{ $errors->first('ishome') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('About Section') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="isabout" {{ $setting->isabout == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('isabout'))
                                          <p class="text-danger">{{ $errors->first('isabout') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('FunFact Section') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="isfunfacts" {{ $setting->isfunfacts == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('isfunfacts'))
                                          <p class="text-danger">{{ $errors->first('isfunfacts') }}</p>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Service Section & Page') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="isservice" {{ $setting->isservice == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('isservice'))
                                          <p class="text-danger">{{ $errors->first('isservice') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Resume Section') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="isresume" {{ $setting->isresume == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('isresume'))
                                          <p class="text-danger">{{ $errors->first('isresume') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Testimonial Section') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="istestimonial" {{ $setting->istestimonial == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('istestimonial'))
                                          <p class="text-danger">{{ $errors->first('istestimonial') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Portfolio Section & Page') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="isportfolio" {{ $setting->isportfolio == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('isportfolio'))
                                          <p class="text-danger">{{ $errors->first('isportfolio') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Pricing Plan Section*') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="ispricingplan" {{ $setting->ispricingplan == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('ispricingplan'))
                                          <p class="text-danger">{{ $errors->first('ispricingplan') }}</p>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Contact Page') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="iscontact" {{ $setting->iscontact == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('iscontact'))
                                          <p class="text-danger">{{ $errors->first('iscontact') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Clients Section') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="isclient" {{ $setting->isclient == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('isclient'))
                                          <p class="text-danger">{{ $errors->first('isclient') }}</p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                          </div>
                    </div>
                    {{-- Update Element Visibilit--}}
                    <div class="col-md-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="card-title">{{ __('Update Element Visibilit') }}</div>
                            </div>

                            <div class="card-body">


                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Resume Download Button') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="is_resume_download" {{ $setting->is_resume_download == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('is_resume_download'))
                                          <p class="text-danger">{{ $errors->first('is_resume_download') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="" class="col-sm-5 control-label">{{ __('Home Social links') }} <span class="text-danger">*</span> </label>
                                    <div class="col-sm-7">
                                        <input type="checkbox" name="is_home_social" {{ $setting->is_home_social == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                        @if($errors->has('is_home_social'))
                                          <p class="text-danger">{{ $errors->first('is_home_social') }}</p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                          </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row mt-4">
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Update">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
</div>

@endsection
