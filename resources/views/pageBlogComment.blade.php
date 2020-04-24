@extends('layouts.master')

@section('content')
    @include('components.header') {{-- same --}}
    @include('partials.pageHeader')
    @include('partials.blog.pageComment')
    @include('partials.newsletter') {{-- same --}}
    @include('components.footer') {{-- same --}}
@endsection