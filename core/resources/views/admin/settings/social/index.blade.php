@extends('admin.layout')
@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Social Links') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Social Links') }}</div>
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
                      <div class="card-title">{{ __('Add Social Links') }}</div>
                  </div>

                  <div class="card-body">
                      <form id="slink" class="form-horizontal" action="{{ route('admin.storeSlinks') }}" method="post"  onsubmit="store(event)">
                          @csrf
                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Social Icon') }} <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <button class="btn btn-secondary biconpicker" data-iconset="fontawesome5" data-icon="fab fa-facebook-f" role="iconpicker"></button>
                                <input type="hidden" name="icon" id="inputIcon">
                                @if($errors->has('icon'))
                                  <p class="text-danger">{{ $errors->first('icon') }}</p>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="" class="col-sm-2 control-label">{{ __('Social Url') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url" id="" placeholder="{{ __('Social URL') }}">
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

        <div class="row">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Social Links List') }}</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="idtable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Icon</th>
                                    <th>URL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($socials as $id=>$social)
                                <tr>
                                    <td>{{ ++$id }}</td>
                                    <td>{{ $social->icon }}</td>
                                    <td>{{ $social->url }}</td>
                                    <td>
                                        <a href="{{ route('admin.editSlinks', $social->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i>Edit</a>
                                        <form id="deleteform" class="deleteform d-inline-block" action="{{ route('admin.deleteSlinks', $social->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm deletebtn"
                                                id="delete">
                                                <i class="fas fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
