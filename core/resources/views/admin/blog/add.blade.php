@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Blogs') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Blogs') }}</div>
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
                      <div class="card-title">{{ __('Add New Blog') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.blog') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.storeBlog') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="main_image" class="col-sm-2 control-label">{{ __('Image') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <img src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" class="mw-400 mb-3 show-img img-demo">
                                <div class="custom-file">
                                    <label for="main_image" class="custom-file-label">{{ __('Choose New Image') }}</label>
                                    <input type="file" name="main_image" id="main_image" class="custom-file-input up-img">

                                    <p class="help-block text-info">{{ __('Upload 730X445 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}</p>
                                    @if($errors->has('main_image'))
                                    <p class="text-danger">{{ $errors->first('main_image') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="title" class="col-sm-2 control-label">{{ __('Title') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <input type="text" name="title" id="title" class="form-control" placeholder="{{ __('Blog Title') }}">

                                @if($errors->has('title'))
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="bcategory_id" class="col-sm-2 control-label">{{ __('Category') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <select name="bcategory_id" id="bcategory_id" class="form-control">
                                    @foreach ($bcategories as $bcategory)
                                    <option value="{{ $bcategory->id }}">{{ $bcategory->name }}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('bcategory_id'))
                                <p class="text-danger">{{ $errors->first('bcategory_id') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="content" class="col-sm-2 control-label">{{ __('Content') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <textarea name="content"  class="form-control summernote" rows="5" ></textarea>

                                 @if($errors->has('content'))
                                  <p class="text-danger">{{ $errors->first('content') }}</p>
                                 @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="share_code" class="col-sm-2 control-label">{{ __('Share Code') }} <span class="text-danger">*</span> <br> <small>(CodePen embed link)</small> </label>

                            <div class="col-sm-10">
                                <textarea name="share_code"  class="form-control summernote" rows="3" placeholder="{{ __('Enter Your Embade Code') }}" ></textarea>

                                 @if($errors->has('share_code'))
                                  <p class="text-danger">{{ $errors->first('share_code') }}</p>
                                 @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="meta_keywords" class="col-sm-2 control-label">{{ __('Meta Keywords') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <input type="text" name="meta_keywords" data-role="tagsinput" id="meta_keywords" class="form-control" placeholder="{{ __('Meta Keywords') }}">

                                @if($errors->has('meta_keywords'))
                                <p class="text-danger">{{ $errors->first('meta_keywords') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="meta_description" class="col-sm-2 control-label">{{ __('Meta Description') }} <span class="text-danger">*</span> </label>

                            <div class="col-sm-10">
                                <textarea name="meta_description"  class="form-control summernote" rows="3"  placeholder="{{ __('Meta Description') }}"></textarea>

                                 @if($errors->has('meta_description'))
                                  <p class="text-danger">{{ $errors->first('meta_description') }}</p>
                                 @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="status" class="col-sm-2 control-label">{{ __('Publication Status') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <select name="status" id="status" class="form-control">
                                    <option value="" selected disabled>{{ __('Select Publication Status') }}</option>
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
