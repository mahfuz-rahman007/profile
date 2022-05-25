@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Testimonials') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Testimonials') }}</div>
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
                      <div class="card-title">{{ __('Add New Testimonial') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.testimonial') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.storeTestimonial') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="image" class="col-sm-2 control-label">{{ __('Image') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" class="mb-3 show-img img-demo">
                                <div class="custom-file">
                                    <label for="image" class="custom-file-label">{{ __('Choose New Image') }}</label>
                                    <input type="file" name="image" id="image" class="custom-file-input up-img">

                                    <p class="help-block text-info">{{ __('Upload 70X70 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}</p>
                                    @if($errors->has('image'))
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="name" class="col-sm-2 control-label">{{ __('Name') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Enter Name') }}">
                                @if($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="position" class="col-sm-2 control-label">{{ __('Position') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="position" id="position" class="form-control" placeholder="{{ __('Enter Position') }}">
                                @if($errors->has('position'))
                                <p class="text-danger">{{ $errors->first('position') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="rating" class="col-sm-2 control-label">{{ __('Rating') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">

                                <div class="icheck-success d-inline mr-2">
                                    <input type="radio" name="rating" id="rating1" value="1" >
                                    <label for="rating1">{{ __('1 Star') }}</label>
                                </div>

                                <div class="icheck-success d-inline mr-2">
                                    <input type="radio" name="rating" id="rating2" value="2" >
                                    <label for="rating2">{{ __('2 Star') }}</label>
                                </div>

                                <div class="icheck-success d-inline mr-2">
                                    <input type="radio" name="rating" id="rating3" value="3" >
                                    <label for="rating3">{{ __('3 Star') }}</label>
                                </div>

                                <div class="icheck-success d-inline mr-2">
                                    <input type="radio" name="rating" id="rating4" value="4" >
                                    <label for="rating4">{{ __('4 Star') }}</label>
                                </div>

                                <div class="icheck-success d-inline mr-2">
                                    <input type="radio" name="rating" id="rating5" value="5" >
                                    <label for="rating5">{{ __('5 Star') }}</label>
                                </div>

                                @if($errors->has('rating'))
                                <p class="text-danger">{{ $errors->first('rating') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="message" class="col-sm-2 control-label">{{ __('Message') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <textarea name="message"  class="form-control summernote" rows="3" placeholder="{{ __('Message') }}"></textarea>
                                @if($errors->has('message'))
                                <p class="text-danger">{{ $errors->first('message') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                  <input type="submit" class="btn btn-primary" value="Save">
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
