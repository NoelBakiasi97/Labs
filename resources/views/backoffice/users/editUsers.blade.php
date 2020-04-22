@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit user</h1>
            </div>
            <div class="card-body">
            <form action="{{route('updateUsers',$users->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label  text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$users->name) }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                </div>   
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label  text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$users->email) }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div> 
                </div>  
                <div class="form-group row">
                    <label for="role_id" class="col-md-4 col-form-label  text-md-right">{{ __('role') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="role_id" id="role_id">
                            @foreach ($roles as $role)
                                @if ($role->id!=1)
                                    @if ($role->id===$users->role_id)
                                        <option selected value="{{$role->id}}">{{$role->role}}</option>
                                    @else
                                        <option value="{{$role->id}}">{{$role->role}}</option>
                                    @endif
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="img" class="col-md-4 col-form-label  text-md-right">{{ __('img') }}</label>
                    <div class="col-md-6">
                        <input id="img" type="file" class="@error('img') is-invalid @enderror" name="img"  >
                        @error('img')
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