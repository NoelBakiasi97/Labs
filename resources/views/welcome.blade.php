@extends('layouts.master')


@section('content')
    @include('components.header')
    @include('partials.intro')
    @include('partials.about')
    @include('partials.testimonials')
    @include('partials.services')
    @include('partials.team')
    @include('partials.promotion')
    @include('partials.contact')
    @include('components.footer')
@endsection