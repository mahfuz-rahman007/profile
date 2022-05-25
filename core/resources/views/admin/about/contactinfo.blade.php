@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Contact Information') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Contact Information') }}</div>
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
                      <div class="card-title">{{ __('Update Contact Information') }}</div>

                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updateContactinfo') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">

                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Address') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="address" id="" value="{{ $about->address }}" class="form-control">
                                @if($errors->has('address'))
                                 <p class="text-danger">{{ $errors->first('address') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('E-mail') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="mail" id="" value="{{ $about->mail }}" class="form-control">
                                @if($errors->has('mail'))
                                 <p class="text-danger">{{ $errors->first('mail') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Phone') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" id="" value="{{ $about->phone }}" class="form-control">
                                @if($errors->has('phone'))
                                 <p class="text-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 control-label">{{ __('Map Embed Code') }}<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea type="text" name="map" id="" class="form-control">{{ $setting->map }}</textarea>
                                @if($errors->has('map'))
                                 <p class="text-danger">{{ $errors->first('map') }}</p>
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
