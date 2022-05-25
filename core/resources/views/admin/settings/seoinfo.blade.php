@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Admin Profile') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Admin Profile') }}</div>
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
                      <div class="card-title">{{ __('Update Admin Information') }}</div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updateSeoinfo') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Meta Keyword') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_keywords" class="form-control" data-role="tagsinput" value="{{ $setting->meta_keywords }}" placeholder="{{ __('Meta Keywords') }}">
                                @if($errors->has('meta_keywords'))
                                 <p class="text-danger">{{ $error->has('meta_keywords') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Meta Description') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea name="meta_description" rows="4" class="form-control" placeholder="{{ __('Meta Description') }}">{{ $setting->meta_description }}</textarea>
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
