@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit Contact</h1>
            </div>
            <div class="card-body">
            <form action="{{route('updateContact', $contact->id)}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label  text-md-right">{{ __('Text') }}</label>
                    <div class="col-md-6">
                        <input value="{{ old('text',$contact->text)}}" id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text">
                        @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div> 
                </div>
                <div class="form-group row">
                    <label for="adress" class="col-md-4 col-form-label  text-md-right">{{ __('Adress') }}</label>
                    <div class="col-md-6">
                        <input value="{{ old('adress',$contact->adress)}}" id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress">
                        @error('adress')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div> 
                </div>
                <div class="form-group row">
                    <label for="number" class="col-md-4 col-form-label  text-md-right">{{ __('Number') }}</label>
                    <div class="col-md-6">
                        <input value="{{ old('number',$contact->number)}}" id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number">
                        @error('number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div> 
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label  text-md-right">{{ __('Email') }}</label>
                    <div class="col-md-6">
                        <input value="{{ old('email',$contact->email)}}" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
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
 