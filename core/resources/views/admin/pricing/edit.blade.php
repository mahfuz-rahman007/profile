@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Pricing Plans') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Pricing Plans') }}</div>
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
                      <div class="card-title">{{ __('Update Pricing Plan') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.pricing') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i>{{ __('Back') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body">
                      <form class="form-horizontal" action="{{ route('admin.updatePricing',$pricing->id) }}" method="post" enctype="multipart/form-data">
                          @csrf

                          <div class="form-group row">
                            <label for="currency" class="col-sm-2 control-label">{{ __('Currency') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="currency" id="currency" class="form-control" value="{{ $pricing->currency }}" placeholder="{{ __('Enter Currency') }}">
                                @if($errors->has('currency'))
                                <p class="text-danger">{{ $errors->first('currency') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="price" class="col-sm-2 control-label">{{ __('Price') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="number" name="price" id="price" class="form-control" value="{{ $pricing->price }}" placeholder="{{ __('Enter Price') }}">
                                @if($errors->has('price'))
                                <p class="text-danger">{{ $errors->first('price') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="plan_name" class="col-sm-2 control-label">{{ __('Plan Name') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="plan_name" id="plan_name" class="form-control" value="{{ $pricing->plan_name }}" placeholder="{{ __('Plan Name') }}">
                                @if($errors->has('plan_name'))
                                <p class="text-danger">{{ $errors->first('plan_name') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="content" class="col-sm-2 control-label">{{ __('Plan Description') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <textarea name="content" id="content" rows="5" class="form-control summernote" placeholder="{{ __('Plan Description') }}">{{ $pricing->content }}</textarea>

                                @if($errors->has('content'))
                                <p class="text-danger">{{ $errors->first('content') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="status" class="col-sm-2 control-label">{{ __('Status') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">

                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{ $pricing->status == '1' ? 'selected':'' }}>{{ __('Publish') }}</option>
                                    <option value="0" {{ $pricing->status == '0' ? 'selected':'' }}>{{ __('Unpublish') }}</option>
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
