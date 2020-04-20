@extends('layouts.master')

@section('content')
    @include('components.header')
    @include('partials.pageHeader')
    @include('partials.blog.page')
    @include('partials.newsletter')
    @include('components.footer')
@endsection