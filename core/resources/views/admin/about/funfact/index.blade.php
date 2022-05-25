@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Fun Facts') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Fun Facts') }}</div>
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
                      <div class="card-title">{{ __('Fun Facts List') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.addFunfact') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>{{ __('Add') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body table-responsive">
                    <table id="idtable" class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Icon') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Value') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($funfacts as $id=>$funfact)
                            <tr>
                                <td>{{ ++$id }}</td>
                                <td>
                                    <img src="{{ asset('assets/front/img/'.$funfact->icon) }}" alt="" class="w-60">
                                </td>
                                <td>{{ $funfact->name }}</td>
                                <td>{{ $funfact->value }}</td>
                                <td>
                                    <a href="{{ route('admin.editFunfact',$funfact->id) }}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i>{{ __('Edit') }} </a>
                                    <form id="deleteform" class="deleteform d-inline-block" action="{{ route('admin.deleteFunfact', $funfact->id) }}"
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
