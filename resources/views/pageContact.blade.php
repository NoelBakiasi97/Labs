@extends('layouts.master')

@section('content')
    @include('components.header')  {{-- same --}}
    @include('partials.pageHeader')
    @include('partials.contact.map')
    @include('partials.contact') {{-- same --}} 
    @include('components.footer') {{-- same --}}
@endsection
