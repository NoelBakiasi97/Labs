@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Add Carousel</h1>
            </div>
            <div class="card-body">
            <form action="{{route('saveCarousel')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="imgCar" class="col-md-4 col-form-label  text-md-right">{{ __('Image') }}</label>
                    <div class="col-md-6">
                        <input id="imgCar" type="file" class="form-control @error('imgCar') is-invalid @enderror" name="imgCar">
                        @error('imgCar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                </div>   
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
        </div>
@endsection