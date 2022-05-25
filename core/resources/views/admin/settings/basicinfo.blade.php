{{-- profile Header --}}
 @extends('admin.layout')

 @section('content')
 <div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Basic Information') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Basic Information') }}</div>
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
                      <div class="card-title">{{ __('Update Basic Information') }}</div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.update_basicinfo') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="base_color" class="col-sm-2 control-label">{{ __('Theme Color') }}</label>
                            <div class="col-sm-10">
                                <div class="input-group my-colorpicker2">
                                    <input type="text" class="form-control" value="{{ $setting->base_color }}"  placeholder="#000000" name="base_color">
                                    <div class="input-group-append">
                                      <span class="input-group-text"><i class="fas fa-square"></i></span>
                                    </div>
                                  </div>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Site Title') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="website_title" class="form-control" value="{{ $setting->website_title }}" placeholder="{{ __('Site Title') }}">
                                @if($errors->has('website_title'))
                                   <p class="text-danger">{{ $errors->first('website_title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Contact Email (For Admin)') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="contact_mail" class="form-control" value="{{ $setting->contact_mail }}" placeholder="{{ __('Enter Contact Mail') }}">
                                @if($errors->has('contact_mail'))
                                   <p class="text-danger">{{ $errors->first('contact_mail') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="fav_icon" class="col-sm-2 control-label">{{ __('Favicon') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/front/img/'.$setting->fav_icon) }}" alt="" class="mb-3 img-demo show-img">
                                <div class="custom-file">
                                    <label for="fav_icon" class="custom-file-label">{{ __('Choose New Image') }}</label>
                                    <input type="file" name="fav_icon" id="fav_icon" class="custom-file-input up-img">
                                </div>
                                <p class="help-block text-info">{{ __('Upload 40X40 (Pixel) size image for best quality. Only jpg,jpeg and png image is allowed') }}</p>
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Breadcrumb Image') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <img src=" {{ asset('assets/front/img/breadcrumb_image.jpg') }}" alt="" class="mw-400 mb-3 img-demo show-img">
                                <div class="custom-file">
                                    <label for="breadcrumb_image" class="custom-file-label">{{ __('Choose New Image') }}</label>
                                    <input type="file" name="breadcrumb_image" id="breadcrumb_image" class="custom-file-input up-img">
                                </div>
                                <p class="help-block text-info">{{ __('Upload 1900X390 (Pixel) size image for best quality. Only jpg,jpeg and png image is allowed') }}</p>
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
