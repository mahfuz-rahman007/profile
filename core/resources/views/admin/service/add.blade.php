@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Services') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Services') }}</div>
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
                      <div class="card-title">{{ __('Add New Services') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.service') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.storeService') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="image" class="col-sm-2 control-label">{{ __('Icon') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" class="w-100 mb-3 show-img img-demo">
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
                            <label for="featured_image" class="col-sm-2 control-label">{{ __('Featured Image') }} <span class="text-danger">*</span> <br> <small>(optional)</small> </label>
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" class="mw-400 mb-3 show-img img-demo">
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
                            <label for="name" class="col-sm-2 control-label">{{ __('Service Name') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Enter Name') }}">
                                @if($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="description" class="col-sm-2 control-label">{{ __('Short Description') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <textarea name="description"  class="form-control summernote" rows="3" placeholder="{{ __('Short Description') }}"></textarea>
                                @if($errors->has('description'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="content" class="col-sm-2 control-label">{{ __('Content') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <textarea name="content"  class="form-control summernote" rows="4" ></textarea>
                                 @if($errors->has('content'))
                                  <p class="text-danger">{{ $errors->first('content') }}</p>
                                 @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="status" class="col-sm-2 control-label">{{ __('Publication Status') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <select name="status" id="status" class="form-control">
                                    <option value="" selected disabled>{{ __('Select Status') }}</option>
                                    <option value="1">{{ __("Publish") }}</option>
                                    <option value="0">{{ __('Unpublish') }}</option>
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
