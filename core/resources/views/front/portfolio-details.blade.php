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
                        {{$sectiontitle->portfolio_title}}
                    </h2>

                    <ul class="links">
                        <li>
                            <a href="{{ route('front.index') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            {{ __('Portfolios') }}
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
                        @if ($portfolio->portfolioimages->count() > 0)
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    @foreach ($portfolio->portfolioimages as $slider)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/front/img/'.$slider->image) }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        @else
                            <img src="{{ asset('assets/front/img/'.$portfolio->featured_image) }}" alt="">
                        @endif
                    </div>
                    <div class="card-body">
                        <h3><strong>{{ $portfolio->title }}</strong></h3>

                        <div class="mt-5">
                            {!! $portfolio->content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card py-3">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                 <h6><strong>Service :</strong>  {{ $portfolio->service->name }}</h6>
                            </li>

                            <li class="list-group-item">
                                 <h6> <strong>Client Name :</strong>  {{ $portfolio->client_name }} </h6>
                            </li>

                            <li class="list-group-item">
                                 <h6> <strong>Start Date :</strong>  {{ date('jS M,Y', strtotime($portfolio->start_date)) }}</h6>
                            </li>

                            <li class="list-group-item">
                                 <h6> <strong>End Date :</strong> {{ date('jS M,Y', strtotime($portfolio->submission_date)) }}</h6>
                            </li>

                            <li class="list-group-item">
                                 <h6> <strong>Status :</strong> <span>{{ $portfolio->status == 1 ? 'Completed':'In Progress' }}</span> </h6>
                             </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
