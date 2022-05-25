@extends('admin.layout')

@section('content')
    {{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Social Link') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Social Link') }}</div>
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
                      <div class="card-title mt-1">{{ __('Update Social Link') }}</div>
                      <div class="card-tools">
                          <a href="{{ route('admin.slinks') }}" class="btn btn-primary btn-sm">
                              <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                          </a>
                      </div>
                  </div>

                  <div class="card-body">
                    <form id="slink" class="form-horizontal" action="{{ route('admin.updateSlinks', $slink->id) }}" method="post"  onsubmit="store(event)">
                        @csrf
                        <div class="form-group row">
                          <label for="" class="col-sm-2 control-label">{{ __('Social Icon') }} <span class="text-danger">*</span> </label>
                          <div class="col-sm-10">
                              <button class="btn btn-secondary biconpicker" data-iconset="fontawesome5" data-icon="{{ $slink->icon }}" role="iconpicker"></button>
                              <input type="hidden" name="icon" id="inputIcon">
                              @if($errors->has('icon'))
                                <p class="text-danger">{{ $errors->first('icon') }}</p>
                              @endif
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="" class="col-sm-2 control-label">{{ __('Social Url') }} <span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="url" id="" value="{{ $slink->url }}" placeholder="{{ __('Social URL') }}">
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
