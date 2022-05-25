@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")

@section('home')
         <!-- Bread Crumb Area Start -->
    <header class="breadcrumb-area">
        <div class="overlay"></div>
        <div class="container">
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
    </header>
    <!-- Bread Crumb Area End -->

@endsection
@section('content')


        <div id="portfolio" class="content section-padding portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <ul class="portfolio-category">
                            <li class="@if(empty(request()->input('category'))) active @endif">
                                <a href="{{route('front.portfolios')}}">{{ __('All') }}</a>
                            </li>
                            @foreach ($services as $key=>$service)
                            <li class="@if(request()->input('category') == $service->id) active @endif">
                                <a href="{{route('front.portfolios', ['category'=>$service->id])}}">
                                    {{ $service->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    @if (count($portfolios) == 0)
                    <div class="col-lg-12 py-5 bg-light text-center mb-4">
                        <h3 class="mb-0">{{__('NO PORTFOLIO FOUND')}}</h3>
                    </div>
                    @else
                    @foreach ($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('assets/front/img/'.$portfolio->featured_image) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ strlen($portfolio->title) > 35 ? substr($portfolio->title, 0, 35).'...' :  $portfolio->title}}</h4>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('assets/front/img/'.$portfolio->featured_image) }}"
                                            class="portfolio-lightbox" title="Portfolio Image"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('front.portfoliodetails',$portfolio->slug) }}"
                                            title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
                @if ($portfolios->total() > 6)
                <div class="row">
                    <div class="col-md-12">
                        <nav class="pagination-nav {{$portfolios->total() > 6 ? 'mb-4' : ''}}">
                        {{ $portfolios->appends(['category' => request()->input('category')])->links() }}
                        </nav>
                    </div>
                </div>
                @endif
            </div>
        </div>
@endsection
