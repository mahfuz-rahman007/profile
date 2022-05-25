@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Skills') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Skills') }}</div>
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
                      <div class="card-title">{{ __('Add New Skill') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.skill') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updateSkill',$skill->id) }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="scategory_id" class="col-sm-2 control-label">{{ __('Skill Category') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">

                                <select name="scategory_id" id="scategory_id" class="form-control">
                                    <option value="" selected disabled >{{ __('Select a category') }}</option>
                                    @foreach ($scategories as $scategory)
                                     <option value="{{ $scategory->id }}" {{ $skill->scategory_id == $scategory->id ? 'selected':'' }}>{{ $scategory->name }}</option>
                                    @endforeach
                                </select>

                                @if($errors->has('scategory_id'))
                                <p class="text-danger">{{ $errors->first('scategory_id') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="name" class="col-sm-2 control-label">{{ __('Name') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" value="{{ $skill->name }}" placeholder="{{ __('Enter Skill Name') }}">
                                @if($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="level" class="col-sm-2 control-label">{{ __('Level') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="number" name="level" id="level" class="form-control" value="{{ $skill->level }}" placeholder="{{ __('Level') }}">
                                @if($errors->has('level'))
                                <p class="text-danger">{{ $errors->first('level') }}</p>
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
