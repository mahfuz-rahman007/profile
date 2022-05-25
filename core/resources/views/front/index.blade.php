@extends('front.layout')
@section('meta-keywords', "$setting->meta_keywords")
@section('meta-description', "$setting->meta_description")

@section('home')

   @includeif('front.partials.home')

@endsection

@section('content')

    @includeif('front.partials.about')

    @includeif('front.partials.skill')

    @includeif('front.partials.funfact')

    @includeif('front.partials.resume')

    @includeif('front.partials.service')

    @includeif('front.partials.portfolio')

    @includeif('front.partials.pricing-plane')

    @includeif('front.partials.blog')

    @includeif('front.partials.testimonial')

    @includeif('front.partials.contact')

    {{-- @includeif('front.partials.client') --}}


@endsection
