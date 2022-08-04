@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")

@section('home')

    @if ($setting->ishome)
     @includeif('front.partials.home')
    @endif

@endsection

@section('content')
    @if ($setting->isabout)
        @includeif('front.partials.about')
    @endif

    @if ($setting->isskill)
        @includeif('front.partials.skill')
    @endif

    @if ($setting->isfunfact)
        @includeif('front.partials.funfact')
    @endif

    @if ($setting->isresume)
        @includeif('front.partials.resume')
    @endif

    @if ($setting->isservice)
        @includeif('front.partials.service')
    @endif

    @if ($setting->isportfolio)
        @includeif('front.partials.portfolio')
    @endif

    @if ($setting->ispricingplan)
        @includeif('front.partials.pricing-plane')
    @endif

    @if ($setting->isblog)
        @includeif('front.partials.blog')
    @endif

    @if ($setting->istestimonial)
        @includeif('front.partials.testimonial')
    @endif

    @if ($setting->iscontact)
        @includeif('front.partials.contact')
    @endif


    {{-- @includeif('front.partials.client') --}}


@endsection
