@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Add categorie</h1>
            </div>
            <div class="card-body">
            <form action="{{route('saveCategorie')}}" method="post">
                @csrf  
                <div class="form-group row">
                    <label for="categorie" class="col-md-4 col-form-label  text-md-right">{{ __('Categorie') }}</label>
                    <div class="col-md-6">
                        <input id="categorie" type="text" class="form-control @error('categorie') is-invalid @enderror" name="categorie">
                        @error('categorie')
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
