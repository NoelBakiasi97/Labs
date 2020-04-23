@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit stand out</h1>
            </div>
            <div class="card-body">
            <form action="{{route('updateFooter', $footer->id)}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label  text-md-right">{{ __('Text') }}</label>
                    <div class="col-md-6">
                        <input value="{{ old('text',$footer->text)}}" id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text">
                        @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div> 
                </div>
                <div class="form-group row">
                    <label for="position" class="col-md-4 col-form-label  text-md-right">{{ __('Position') }}</label>
                    <div class="col-md-6 row no-gutters">
                        <div class="form-check col-2">
                            <input class="form-check-input mt-3 ml-3" type="checkbox" name="position" @if($footer->position) checked @endif>
                            <label class="form-check-label"></label>
                        </div>
                        @error('position')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-md-4 col-form-label  text-md-right">{{ __('Link') }}</label>
                    <div class="col-md-6">
                        <input value="{{ old('link',$footer->link)}}" id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link">
                        @error('link')
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
 