@extends('layouts.master')

@section('content')
    @include('components.header') {{-- same --}}
    @include('partials.pageHeader')
    @include('partials.services') {{-- same --}}
    @include('partials.services.features')
    @include('partials.services.card')
    @include('partials.newsletter')
    @include('partials.contact') {{-- same --}}
    @include('components.footer') {{-- same --}}
@endsection

