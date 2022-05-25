@extends('admin.layout')

@section('content')
    {{-- profile Header --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <h1 class="m-0 text-dark">{{ __('Home Version') }}</h1>
            </div>
            <div class="col-md-6">
              <div class="breadcrumb float-sm-right">
                  <div class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}"> <i class="fas fa-home"></i>{{ __('Home') }}</a> </div>
                  <div class="breadcrumb-item">{{ __('Home Version') }}</div>
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
                      <div class="card-title">{{ __('Activate Home Version') }}</div>
                  </div>

                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                {{-- Static --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/admin/img/static.jpg') }}" alt="" style="width: 100%">
                                            <h4 class="text-center mt-3 mb-0">{{ __("Static Version") }}</h4>
                                        </div>
                                        <div class="card-footer text-center">
                                            @if ($setting->home_version == 'static')
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                {{ __('Active') }}
                                              </button>
                                            @else
                                              <form action="{{ route('admin.update_homeversion') }}" class="deleteform d-inline-block" method="POST">
                                                  @csrf
                                                  <input type="hidden" name="home_version" value="static">
                                                  <button type="submit" class="btn btn-info btn-sm">
                                                      <span class="btn-label">
                                                          <i class="fas fa-arrow-alt-circle-down"></i>
                                                      </span>
                                                      {{ __('Activate') }}
                                                  </button>
                                              </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Slider --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/admin/img/slider.jpg') }}" alt="" style="width: 100%">
                                            <h4 class="text-center mt-3 mb-0">{{ __("Slider Version") }}</h4>
                                        </div>
                                        <div class="card-footer text-center">
                                            @if ($setting->home_version == 'slider')
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                {{ __('Active') }}
                                              </button>
                                            @else
                                              <form action="{{ route('admin.update_homeversion') }}" class="deleteform d-inline-block" method="POST">
                                                  @csrf
                                                  <input type="hidden" name="home_version" value="slider">
                                                  <button type="submit" class="btn btn-info btn-sm">
                                                      <span class="btn-label">
                                                          <i class="fas fa-arrow-alt-circle-down"></i>
                                                      </span>
                                                      {{ __('Activate') }}
                                                  </button>
                                              </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Video --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/admin/img/video.jpg') }}" alt="" style="width: 100%">
                                            <h4 class="text-center mt-3 mb-0">{{ __("Video Version") }}</h4>
                                        </div>
                                        <div class="card-footer text-center">
                                            @if ($setting->home_version == 'video')
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                {{ __('Active') }}
                                              </button>
                                            @else
                                              <form action="{{ route('admin.update_homeversion') }}" class="deleteform d-inline-block" method="POST">
                                                  @csrf
                                                  <input type="hidden" name="home_version" value="video">
                                                  <button type="submit" class="btn btn-info btn-sm">
                                                      <span class="btn-label">
                                                          <i class="fas fa-arrow-alt-circle-down"></i>
                                                      </span>
                                                      {{ __('Activate') }}
                                                  </button>
                                              </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Water  --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/admin/img/water.jpg') }}" alt="" style="width: 100%">
                                            <h4 class="text-center mt-3 mb-0">{{ __("Water Version") }}</h4>
                                        </div>
                                        <div class="card-footer text-center">
                                            @if ($setting->home_version == 'water')
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                {{ __('Active') }}
                                              </button>
                                            @else
                                              <form action="{{ route('admin.update_homeversion') }}" class="deleteform d-inline-block" method="POST">
                                                  @csrf
                                                  <input type="hidden" name="home_version" value="water">
                                                  <button type="submit" class="btn btn-info btn-sm">
                                                      <span class="btn-label">
                                                          <i class="fas fa-arrow-alt-circle-down"></i>
                                                      </span>
                                                      {{ __('Activate') }}
                                                  </button>
                                              </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Parallax --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/admin/img/static.jpg') }}" alt="" style="width: 100%">
                                            <h4 class="text-center mt-3 mb-0">{{ __("Parallax Version") }}</h4>
                                        </div>
                                        <div class="card-footer text-center">
                                            @if ($setting->home_version == 'parallax')
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                {{ __('Active') }}
                                              </button>
                                            @else
                                              <form action="{{ route('admin.update_homeversion') }}" class="deleteform d-inline-block" method="POST">
                                                  @csrf
                                                  <input type="hidden" name="home_version" value="parallax">
                                                  <button type="submit" class="btn btn-info btn-sm">
                                                      <span class="btn-label">
                                                          <i class="fas fa-arrow-alt-circle-down"></i>
                                                      </span>
                                                      {{ __('Activate') }}
                                                  </button>
                                              </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- Particles --}}
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/admin/img/partical.jpg') }}" alt="" style="width: 100%">
                                            <h4 class="text-center mt-3 mb-0">{{ __("Particles Version") }}</h4>
                                        </div>
                                        <div class="card-footer text-center">
                                            @if ($setting->home_version == 'particles')
                                              <button type="submit" class="btn btn-primary btn-sm">
                                                {{ __('Active') }}
                                              </button>
                                            @else
                                              <form action="{{ route('admin.update_homeversion') }}" class="deleteform d-inline-block" method="POST">
                                                  @csrf
                                                  <input type="hidden" name="home_version" value="particles">
                                                  <button type="submit" class="btn btn-info btn-sm">
                                                      <span class="btn-label">
                                                          <i class="fas fa-arrow-alt-circle-down"></i>
                                                      </span>
                                                      {{ __('Activate') }}
                                                  </button>
                                              </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
