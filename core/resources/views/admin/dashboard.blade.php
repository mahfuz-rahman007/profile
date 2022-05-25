 @extends('admin.layout')

 @section('content')
 <div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ _("Welcome ") }}{{ $adminProfile->first_name }}  {{ $adminProfile->last_name }}!</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                    <div class="info-box-content">
                        <div class="info-box-text">{{ __('Services') }}</div>
                        <h4 class="info-box-number font-weight-normal">{{ $services->count() }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
               <div class="info-box bg-success">
                   <span class="info-box-icon"><i class="far fa-file-alt"></i></span>
                   <div class="info-box-content">
                       <div class="info-box-text">{{ __('Projects') }}</div>
                       <h4 class="info-box-number font-weight-normal">{{ $portfolios->count() }}</h4>
                   </div>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 col-12">
               <div class="info-box bg-warning">
                   <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                   <div class="info-box-content">
                       <div class="info-box-text">{{ __('Clients') }}</div>
                       <h4 class="info-box-number font-weight-normal">{{ $clients->count() }}</h4>
                   </div>
               </div>
           </div>
           <div class="col-md-3 col-sm-6 col-12">
               <div class="info-box bg-danger">
                   <span class="info-box-icon"><i class="fas fa-comments"></i></span>
                   <div class="info-box-content">
                       <div class="info-box-text">{{ __('Blogs') }}</div>
                       <h4 class="info-box-number font-weight-normal">{{ $blogs->count() }}</h4>
                   </div>
               </div>
           </div>

        </div>
        <div class="row">
            @foreach ($funfacts as $funfact)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon p-2">
                        <img src="{{ asset('assets/front/img/'.$funfact->icon) }}" alt="" class="w-60">
                    </span>
                    <div class="info-box-content align-self-center pl-3">
                       <span class="info-box-number">
                           <h5 class="mb-0 pb-0"><strong>{{ $funfact->value }} +</strong></h5>
                       </span>
                       <span class="info-box-text">{{ $funfact->name }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

                   <!-- Main row -->
      <div class="row">
        <section class="col-lg-5">
          <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  {{ __('About Me') }}
                </h3>
                <div class="card-tools">
                    <a href="{{ route('admin.about') }}" class="btn btn-tool btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
                <!-- /.card-tools -->
              </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/front/img/'.$about->avatar) }}" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center"><b>{{ $about->name }}</b></h3>

              <p class="text-muted text-center">{{ $about->position_type }}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>{{ __('Age :') }}</b> <a class="float-right">{{ $about->age }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ __('Residence :') }}</b> <a class="float-right">{{ $about->residence }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ __('E-mail :') }}</b> <a class="float-right">{{ $about->mail }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ __('Phone :') }}</b> <a class="float-right">{{ $about->phone }}</a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
        </section>
        <section class="col-lg-7">
          <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title">
               {{ __('Latest Services') }}
              </h3>
              <div class="card-tools">
                  <a href="{{ route('admin.service') }}" class="btn btn-tool btn-sm">
                      <i class="fas fa-edit"></i>
                  </a>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Description') }}</th>
                            </tr>
                    </thead>
                    <tbody>
                    @foreach ($services as $id=>$service)
                    <tr>
                        <td>{{ ++$id }}</td>
                        <td>
                            <img class="w-50" src="{{ asset('assets/front/img/'.$service->image) }}" alt="">
                        </td>
                        <td>{{ $service->name }}</td>
                        <td width="45%">{{ $service->description}}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
        </section>
      </div>
    </div>
</div>
 @endsection
