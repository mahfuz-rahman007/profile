@extends('front/layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")

@section('home')
    <!-- Bread Crumb Area Start -->
    <section class="breadcrumb-area">
		<div class="overlay"></div>
		<div class="container my-auto">
			<div class="row">
                <div class="col-12">
                    <h2 class="title">
                        {{ $service->name }}
                    </h2>

                    <ul class="links">
                        <li>
                            <a href="{{ route('front.index') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            {{ $service->name }}
                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</section>
<!-- Bread Crumb Area End -->

@endsection

@section('content')


<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('assets/front/img/'.$service->featured_image) }}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3><strong>{{ $service->name }}</strong></h3>

                        <p>{{ $service->description }}</p>
                        <div class="content">
                            {{ $service->content }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card py-3">
                    <div class="card-body">
                        <h5 class="service-category">{{ __('My Services') }}</h5>
                        <ul class="list-group list-group-flush">
                            @foreach ($services as $service)
                                <li class="list-group-item">
                                    <a href="{{ route('front.servicedetails', $service->slug) }}" class=" @if(request()->path() == 'service-details/'.$service->slug)  active @endif"><i class="fas fa-angle-double-right"></i> {{ $service->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
