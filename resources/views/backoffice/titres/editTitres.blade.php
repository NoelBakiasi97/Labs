@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit Titres</h1>
            </div>
            <div class="card-body">
            <form action="{{route('updateTitres', $titres->id)}}" method="post">
                @csrf
                <div class="form-group row">
                        <label for="titreClients" class="col-md-4 col-form-label  text-md-right">{{ __('Client') }}</label>
                        <div class="col-md-6">
                            <input value="{{ old('text',$titres->titreClients)}}" id="titreClients" type="text" class="form-control @error('titreClients') is-invalid @enderror" name="titreClients">
                            @error('titreClients')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div> 
                    </div>
                <div class="form-group row">
                        <label for="titreServices" class="col-md-4 col-form-label  text-md-right">{{ __('Services') }}</label>
                        <div class="col-md-6">
                            <input value="{{ old('titreServices',$titres->titreServices)}}" id="titreServices" type="text" class="form-control @error('titreServices') is-invalid @enderror" name="titreServices">
                            @error('titreServices')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div> 
                    </div>
                <div class="form-group row">
                        <label for="titreTeam" class="col-md-4 col-form-label  text-md-right">{{ __('Team') }}</label>
                        <div class="col-md-6">
                            <input value="{{ old('titreTeam',$titres->titreTeam)}}" id="titreTeam" type="text" class="form-control @error('titreTeam') is-invalid @enderror" name="titreTeam">
                            @error('titreTeam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div> 
                    </div>
                <div class="form-group row">
                        <label for="titreStandout" class="col-md-4 col-form-label  text-md-right">{{ __('Stand out') }}</label>
                        <div class="col-md-6">
                            <input value="{{ old('titreStandout',$titres->titreStandout)}}" id="titreStandout" type="text" class="form-control @error('titreStandout') is-invalid @enderror" name="titreStandout">
                            @error('titreStandout')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div> 
                    </div>
                <div class="form-group row">
                        <label for="titreContact" class="col-md-4 col-form-label  text-md-right">{{ __('Contact') }}</label>
                        <div class="col-md-6">
                            <input value="{{ old('titreContact',$titres->titreContact)}}" id="titreContact" type="text" class="form-control @error('titreContact') is-invalid @enderror" name="titreContact">
                            @error('titreContact')
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
 