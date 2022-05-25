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
                      <div class="card-title">{{ __('Educations List') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.addEducation') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>{{ __('Add') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body table-responsive">
                    <table id="idtable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Institute') }}</th>
                                <th>{{ __('Field') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Duration') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($educations as $id=>$education)
                            <tr>
                                <td>{{ ++$id }}</td>
                                <td>{{ $education->institution }}</td>
                                <td width="10%">{{ $education->field }}</td>
                                <td>{{ $education->description }}</td>
                                <td width="14%">{{ $education->from_date }} - {{ empty($education->date_to) ? "Present": $education->date_to }}</td>
                                <td width="18%">
                                    <a href="{{ route('admin.editEducation',$education->id) }}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i>{{ __('Edit') }} </a>
                                    <form id="deleteform" class="deleteform d-inline-block" action="{{ route('admin.deleteEducation', $education->id) }}"
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
