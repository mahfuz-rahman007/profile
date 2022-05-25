@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Portfolios') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Portfolios') }}</div>
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
                      <div class="card-title">{{ __('Update Portfolio') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.portfolio') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updatePortfolio',$portfolio->id) }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="featured_image" class="col-sm-2 control-label">{{ __('Slider Image') }} <span class="text-danger">*</span>  </label>

                            <div class="col-sm-10">
                                <div class="row mb-4">
                                        <div class="slider">
                                            @foreach ($portfolioImages as $portfolioImage)
                                                <div class="col-sm-3">
                                                    <div class="img">
                                                        <img src="{{ asset('assets/front/img/'.$portfolioImage->image) }}" alt="" class="img-fluid">
                                                        <div class="overlay">
                                                            <a href="{{ route('admin.deletePortfolioImage',$portfolioImage->id) }}">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                          @endforeach
                                        </div>
                                </div>

                                <div class="custom-file h80 drop-img">
                                    <label for="image" class="custom-file-label h80"><h5 class="text-center">{{ __("Drop or select nultiple image at a time") }}</h5></label>
                                    <input type="file" name="image[]" id="image" multiple class="custom-file-input h80">

                                    @if($errors->has('image'))
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                    @endif
                                    <p class="help-block text-info">
                                        {{ __('Upload 710X370 (Pixel) size image for best quality. Only jpg,jpeg and png image is allowed') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="featured_image" class="col-sm-2 control-label">{{ __('Featured Image') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <img src="{{ asset('assets/front/img/'.$portfolio->featured_image) }}" alt="" class="mw-400 mb-3 show-img img-demo">
                                <div class="custom-file">
                                    <label for="featured_image" class="custom-file-label">{{ __('Choose New Image') }}</label>
                                    <input type="file" name="featured_image" id="featured_image" class="custom-file-input up-img">

                                    <p class="help-block text-info">{{ __('Upload 65X65 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}</p>
                                    @if($errors->has('featured_image'))
                                    <p class="text-danger">{{ $errors->first('featured_image') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="title" class="col-sm-2 control-label">{{ __('Title') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <input type="text" name="title" id="title" value="{{ $portfolio->title }}" class="form-control" placeholder="{{ __('Portfolio Title') }}">

                                @if($errors->has('title'))
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="client_name" class="col-sm-2 control-label">{{ __('Client Name') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <input type="text" name="client_name" id="client_name" value="{{ $portfolio->client_name }}" class="form-control" placeholder="{{ __('Client Name') }}">

                                @if($errors->has('client_name'))
                                <p class="text-danger">{{ $errors->first('client_name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="service_id" class="col-sm-2 control-label">{{ __('Category') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <select name="service_id" id="service_id" class="form-control">
                                    @foreach ($services as $service)
                                    <option value="{{ $service->id }}" {{ $portfolio->service_id == $service->id ? 'selected':'' }}>{{ $service->name }}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('service_id'))
                                <p class="text-danger">{{ $errors->first('service_id') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="start_date" class="col-sm-2 control-label">{{ __('Start Date') }} <span class="text-danger">*</span> </label>
                            <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div>
                                    <input type="text" name="start_date" id="start_date" class="form-control" value="{{ $portfolio->start_date }}" placeholder="{{ __('From Year') }}">
                                    @if($errors->has('start_date'))
                                    <p class="text-danger">{{ $errors->first('start_date') }}</p>
                                    @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="submission_date" class="col-sm-2 control-label">{{ __('Submission Date') }} <span class="text-danger">*</span> </label>
                            <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div>
                                    <input type="text" name="submission_date" id="submission_date" class="form-control"value="{{ $portfolio->submission_date }}"  placeholder="{{ __('Submission Date') }}">
                                    @if($errors->has('submission_date'))
                                    <p class="text-danger">{{ $errors->first('submission_date') }}</p>
                                    @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="content" class="col-sm-2 control-label">{{ __('Content') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <textarea name="content"  class="form-control summernote" rows="4" >{{ $portfolio->content }}</textarea>

                                 @if($errors->has('content'))
                                  <p class="text-danger">{{ $errors->first('content') }}</p>
                                 @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="status" class="col-sm-2 control-label">{{ __('Publication Status') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{ $portfolio->status == '1' ? 'selected':'' }}>{{ __("Completed") }}</option>
                                    <option value="0" {{ $portfolio->status == '0' ? 'selected':'' }}>{{ __('In Progress') }}</option>
                                </select>

                                @if($errors->has('status'))
                                <p class="text-danger">{{ $errors->first('status') }}</p>
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
