@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Educations') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Educations') }}</div>
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
                      <div class="card-title">{{ __('Update Eduction') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.education') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updateEducation',$education->id) }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="institution" class="col-sm-2 control-label">{{ __('Institution Name') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="institution" id="institution" class="form-control" value="{{ $education->institution }}" placeholder="{{ __('Enter Institution Name') }}">
                                @if($errors->has('institution'))
                                <p class="text-danger">{{ $errors->first('institution') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="field" class="col-sm-2 control-label">{{ __('Field') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="field" id="field" class="form-control" value="{{ $education->field }}" placeholder="{{ __('Enter Field Name') }}">
                                @if($errors->has('field'))
                                <p class="text-danger">{{ $errors->first('field') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="description" class="col-sm-2 control-label">{{ __('Description') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <textarea type="text" name="description" id="description" placeholder="{{ __("Description") }}" rows="4" class="form-control summernote" >{{ $education->description }}</textarea>
                                @if($errors->has('description'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="from_date" class="col-sm-2 control-label">{{ __('From Year') }} <span class="text-danger">*</span> </label>
                            <div class="input-group col-sm-10">
                                <div class="if">
                                    <input type="text" name="from_date" id="from_date" value="{{ $education->from_date }}" class="form-control" placeholder="{{ __('From Year') }}">
                                    @if($errors->has('from_date'))
                                    <p class="text-danger">{{ $errors->first('from_date') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>

                          <div class="form-group row" id="date_to_grup">
                            <label for="date_to" class="col-sm-2 control-label">{{ __('Year To') }} <span class="text-danger">*</span> </label>
                            <div class="input-group col-sm-10">
                                <div class="if">
                                    <input type="text" name="date_to" id="date_to" class="form-control"value="{{ $education->date_to }}" placeholder="{{ __('Year To') }}">
                                    @if($errors->has('date_to'))
                                    <p class="text-danger">{{ $errors->first('date_to') }}</p>
                                    @endif
                                </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="icheck-success d-inline date_to_grup_target">
                                    <input type="checkbox" name="current" id="date_check" value="1" {{ $education->current == 1 ? 'checked':'' }}>
                                    <label for="date_check"> {{ __("I Currently Study") }}</label>
                                </div>
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
