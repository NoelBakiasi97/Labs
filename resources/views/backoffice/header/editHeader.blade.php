@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit Header</h1>
            </div>
            <div class="card-body">
            <form action="{{route('updateHeader',$header->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="logo" class="col-md-4 col-form-label  text-md-right">{{ __('Logo') }}</label>
                    <div class="col-md-6">
                        <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                        @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                </div> 
                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label  text-md-right">{{ __('Text') }}</label>
                    <div class="col-md-6">
                        <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text',$header->text) }}">
                        @error('text')
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