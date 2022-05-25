@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Skill Categories') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Skill Categories') }}</div>
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
                      <div class="card-title">{{ __('Add New Skill Category') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.scategory') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.storeScategory') }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="name" class="col-sm-2 control-label">{{ __('Name') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Enter Skill Name') }}">
                                @if($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="skill_type" class="col-sm-2 control-label">{{ __('View Type') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">

                                <select name="skill_type" id="skill_type" class="form-control">
                                    <option value="" selected disabled >{{ __('Select a Type') }}</option>
                                    <option value="line">{{ __('Line Progress') }}</option>
                                    <option value="circle">{{ __('Circle Progress') }}</option>
                                </select>

                                @if($errors->has('skill_type'))
                                <p class="text-danger">{{ $errors->first('skill_type') }}</p>
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
