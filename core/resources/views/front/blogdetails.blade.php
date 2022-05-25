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
                    {{$sectiontitle->blog_title}}
                    </h2>
                    <ul class="links">
                        <li>
                            <a href="{{ route('front.index') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                             {{ __('Blogs') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Bread Crumb Area End -->

@endsection
@section('content')


    <section class="content blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/front/img/'.$blog->main_image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body">
                            <h3><strong>{{ $blog->title }}</strong></h3>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span>{{__('By')}} {{__('Admin')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-calendar"></i>
                                    <span>
                                            {{date('F d, Y', strtotime($blog->created_at))}}
                                    </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mt-5">
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-5">
                        <div class="search-form ">
                            <form action="#">
                                <form action="{{route('front.blogs', ['category' => request()->input('category'), 'month' => request()->input('month'), 'year' => request()->input('year')])}}" method="GET">
                                    <div class="searchbar">
                                        <input name="category" type="hidden" value="{{request()->input('category')}}">
                                        <input name="term" type="text" placeholder="{{ __('Search Blogs') }}" value="{{request()->input('term')}}">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                    <div class="card py-3 mb-5">
                        <div class="card-body">
                            <h5 class="service-category">{{ __('Categories') }}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="{{ route('front.blogs') }}"
                                    class="@if(empty(request()->input('category'))) active @endif"><i class="fas fa-angle-double-right"></i> All</a>
                                </li>
                                @foreach ($bcategories as $bcategory)
                                    <li class="list-group-item">
                                        <a href="{{ route('front.blogs', ['term'=>request()->input('term'), 'category'=>$bcategory->id]) }}"
                                        class=" @if(request()->input('category') == $bcategory->id) active @endif"><i class="fas fa-angle-double-right"></i> {{ $bcategory->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="card py-3">
                        <div class="card-body">
                            <h5 class="service-category">{{ __('Categories') }}</h5>
                            <ul class="post-list">
                                @foreach ($latestblogs as $latestblog)
                                    <li>
                                        <div class="post">
                                            <div class="post-img">
                                                <img src="{{asset('assets/front/img/'.$latestblog->main_image)}}" alt="">
                                            </div>
                                            <div class="post-details">
                                                <a href="{{route('front.blogdetails', $latestblog->slug)}}">
                                                    <h4 class="post-title">
                                                            {{strlen($latestblog->title) > 40 ? substr($latestblog->title, 0, 40) . '...' : $latestblog->title}}
                                                    </h4>
                                                </a>
                                                <p class="date">
                                                        {{date ( 'd M, Y', strtotime($latestblog->created_at) )}}
                                                </p>
                                            </div>
                                        </div>
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
