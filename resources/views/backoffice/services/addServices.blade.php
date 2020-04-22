@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Add services</h1>
            </div>
            <div class="card-body">
            <form action="{{route('saveServices')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="icone" class="col-md-4 col-form-label  text-md-right">{{ __('Icone') }}</label>
                    <div class="col-md-6 row no-gutters">
                        @foreach ($icone as $item)
                            <div class="form-check col-2">
                                <input value="{{$item['class']}}" class="form-check-input ml-4" type="radio" name="icone">
                                <label class="form-check-label mb-3"><i class="{{$item['class']}}"></i></label>
                            </div>
                        @endforeach
                        @error('icone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                </div>   
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label  text-md-right">{{ __('Title') }}</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div> 
                </div>  
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label  text-md-right">{{ __('Description') }}</label>
                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control" name="description">
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
            </div>
        </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection