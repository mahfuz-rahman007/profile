@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('About') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('About') }}</div>
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
                      <div class="card-title">{{ __('Update About Information') }}</div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updateAbout') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __("Profile Image") }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/front/img/'.$about->avatar) }}" alt="" class="mw-400 mb-3 show-img img-demo">
                                <div class="custom-file">
                                    <label for="avatar" class="custom-file-label">{{ __('Choose New Image') }}</label>
                                    <input type="file" name="avatar" id="avatar" class="custom-file-input up-img">
                                    <p class="help-block text-info">{{ __("Upload 180X180 (Pixel) size image for best quality. Only jpg,jpeg and png image is allowed") }}</p>
                                </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Name') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="" value="{{ $about->name }}" class="form-control">
                                @if($errors->has('name'))
                                 <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Age') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" name="age" id="" value="{{ $about->age }}" class="form-control">
                                @if($errors->has('age'))
                                 <p class="text-danger">{{ $errors->first('age') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Residence') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="residence" id="" value="{{ $about->residence }}" class="form-control">
                                @if($errors->has('residence'))
                                 <p class="text-danger">{{ $errors->first('residence') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Position Type') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="position_type" id="" value="{{ $about->position_type }}" class="form-control">
                                @if($errors->has('position_type'))
                                 <p class="text-danger">{{ $errors->first('position_type') }}</p>
                                @endif
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('About Text') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea name="about_text" class="form-control summernote">{{ $about->about_text }} </textarea>
                                @if($errors->has('about_text'))
                                 <p class="text-danger">{{ $errors->first('about_text') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Resume') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <label for="resume" class="custom-file-label">{{ __('Choose a pdf file...') }}</label>
                                    <input type="file" name="resume"  class="custom-file-input">
                                    <p class="help-block text-info">{{ __("Pdf file required") }} <span class="text-info">*</span> </p>
                                    @if($errors->has('resume'))
                                    <p class="text-danger">{{ $errors->first('resume') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Freelance') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="icheck-success d-inline mr-2">
                                    <input type="radio" name="freelance" id="available" {{ $about->freelance == 'Available' ? 'checked':''}} value="Available" >
                                    <label for="available">{{ __('Available') }}</label>
                                </div>

                                <div class="icheck-success d-inline">
                                    <input type="radio" name="freelance" id="unavailable" {{ $about->freelance == 'Unavailable' ? 'checked':''}} value="Unavailable" >
                                    <label for="unavailable">{{ __('Unavailable') }}</label>
                                </div>
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
