{{-- profile Header --}}
@extends('admin.layout')

@section('content')
<div class="content-header">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-6">
             <h1 class="m-0 text-dark">{{ __('Basic Information') }}</h1>
           </div>
           <div class="col-md-6">
             <div class="breadcrumb float-sm-right">
                 <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                 <div class="breadcrumb-item">{{ __('Basic Information') }}</div>
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
                     <div class="card-title">{{ __('Update Basic Information') }}</div>
                 </div>

                 <div class="card-body">
                     <form class="form-horizontal" action="{{ route('admin.updateScripts') }}" method="post" enctype="multipart/form-data">
                         @csrf

                         <div class="form-group row">
                           <label for="" class="col-sm-2 control-label">{{ __('Tawk.to Status') }} <span class="text-danger">*</span> </label>
                           <div class="col-sm-10">
                               <input type="checkbox" name="is_tawkto" {{ $setting->is_tawkto == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                               @if($errors->has('is_tawkto'))
                                 <p class="text-danger">{{ $errors->first('is_tawkto') }}</p>
                               @endif
                           </div>
                         </div>

                         <div class="form-group row">
                           <label for="" class="col-sm-2 control-label">{{ __('Tawk.to Site ID') }} <span class="text-danger">*</span> </label>
                           <div class="col-sm-10">
                               <input type="text" name="tawk_to_api_key" class="form-control" value="{{ $setting->tawk_to_api_key }}" placeholder="{{ __('Tawk.to API Key') }}">
                               @if($errors->has('tawk_to_api_key'))
                                  <p class="text-danger">{{ $errors->first('tawk_to_api_key') }}</p>
                               @endif
                           </div>
                         </div>


                          <div class="form-group row mt-5">
                            <label for="" class="col-sm-2 control-label">{{ __('Disqus Status') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="is_disqus" {{ $setting->is_disqus == '1' ? 'checked' : '' }}  data-size="large" data-bootstrap-switch data-on-color="success" data-off-color="danger" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Deactive">
                                @if($errors->has('is_disqus'))
                                  <p class="text-danger">{{ $errors->first('is_disqus') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Disqus Shortname') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <input type="text" name="disqus_username" class="form-control" value="{{ $setting->disqus_username }}" placeholder="{{ __('Disqus Shortname') }}">
                                @if($errors->has('disqus_username'))
                                   <p class="text-danger">{{ $errors->first('disqus_username') }}</p>
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
