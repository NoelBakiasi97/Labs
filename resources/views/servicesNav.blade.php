@extends('layouts.master')

@section('content')
    @include('components.header')
    @include('partials.pageHeader')
    @include('partials.services')
    @include('partials.services.features')
    @include('partials.services.card')
    @include('partials.newsletter')
    @include('partials.contact')
    @include('components.footer')
@endsection