@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Clients') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Clients') }}</div>
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
                      <div class="card-title">{{ __('Add New Clients') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.client') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updateClient',$client->id) }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                            <label for="image" class="col-sm-2 control-label">{{ __('Image') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <img src="{{ asset('assets/front/img/'.$client->image) }}" alt="" class=" mb-3 show-img img-demo">
                                <div class="custom-file">
                                    <label for="image" class="custom-file-label">{{ __('Choose Image') }}</label>
                                    <input type="file" name="image" id="image" class="custom-file-input up-img">

                                    <p class="help-block text-info">{{ __('Upload 150X40 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}</p>
                                    @if($errors->has('image'))
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="url" class="col-sm-2 control-label">{{ __('Url') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="url" id="url" class="form-control" value="{{ $client->url }}" placeholder="{{ __('Client Url') }}">
                                @if($errors->has('url'))
                                <p class="text-danger">{{ $errors->first('url') }}</p>
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
