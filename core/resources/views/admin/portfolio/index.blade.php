@extends('admin.layout')

@section('content')
{{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Portfolios') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Portfolios') }}</div>
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
                      <div class="card-title">{{ __('Portfolios List') }}</div>
                        <div class="card-tools">
                            <a href="{{ route('admin.addPortfolio') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i>{{ __('Add') }}
                            </a>
                        </div>
                  </div>

                  <div class="card-body table-responsive">
                    <table id="idtable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Image') }}</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Client') }}</th>
                                <th>{{ __('Duration') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $id=>$portfolio)
                            <tr>
                                <td>{{ ++$id }}</td>
                                <td>
                                    <img src="{{ asset('assets/front/img/'.$portfolio->featured_image) }}" alt="" class="w-100">
                                </td>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $portfolio->client_name }}</td>
                                <td>{{ date('jS M, Y',strtotime($portfolio->start_date)) }} - {{ date('jS M, Y',strtotime($portfolio->submission_date)) }}</td>
                                <td>
                                    @if($portfolio->status == '1')
                                        <span class="badge badge-pill badge-success">{{ __('Completed') }}</span>
                                    @else
                                        <span class="badge badge-pill badge-warning">{{ __('In progress') }}</span>
                                    @endif
                                </td>
                                <td width="18%">
                                    <a href="{{ route('admin.editPortfolio',$portfolio->id) }}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i>{{ __('Edit') }} </a>
                                    <form id="deleteform" class="deleteform d-inline-block" action="{{ route('admin.deletePortfolio', $portfolio->id) }}"
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
