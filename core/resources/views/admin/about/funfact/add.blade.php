@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Fun Facts') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Fun Facts') }}</div>
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
                      <div class="card-title">{{ __('Add New Fun Facts') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.funfact') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.storeFunfact') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                            <label for="icon" class="col-sm-2 control-label">{{ __('Icon') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="" class="mw-400 mb-3 show-img img-demo">
                                <div class="custom-file">
                                    <label for="icon" class="custom-file-label">{{ __('Choose New Image') }}</label>
                                    <input type="file" name="icon" id="main_image" class="custom-file-input up-img">
                                    <p class="help-block text-info">{{ __('Upload 65X65 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}</p>
                                    @if($errors->has('icon'))
                                    <p class="text-danger">{{ $errors->first('icon') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="name" class="col-sm-2 control-label">{{ __('Name') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Enter Fact Name') }}">
                                @if($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="value" class="col-sm-2 control-label">{{ __('Value') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="number" name="value" id="value" class="form-control" placeholder="{{ __('Enter Fact Value') }}">
                                @if($errors->has('value'))
                                <p class="text-danger">{{ $errors->first('value') }}</p>
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
