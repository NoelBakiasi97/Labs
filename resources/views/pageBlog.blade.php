@extends('layouts.master')

@section('content')
    @include('components.header') {{-- same --}}
    @include('partials.pageHeader')
    @include('partials.blog.page')
    @include('partials.newsletter') {{-- same --}}
    @include('components.footer') {{-- same --}}
@endsection

