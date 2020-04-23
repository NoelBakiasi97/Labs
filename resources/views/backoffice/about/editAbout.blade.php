@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit about</h1>
    </div>
    <div class="card-body">
        <form action="{{route('updateAbout',$about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label  text-md-right">{{ __('Title') }}</label>
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title',$about->title) }}">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="para1" class="col-md-4 col-form-label  text-md-right">{{ __('Para1') }}</label>
                <div class="col-md-6">
                    <input id="para1" type="text" class="form-control @error('para1') is-invalid @enderror" name="para1"
                        value="{{ old('para1',$about->para1) }}">
                    @error('para1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="para2" class="col-md-4 col-form-label  text-md-right">{{ __('Para2') }}</label>
                <div class="col-md-6">
                    <input id="para2" type="text" class="form-control @error('para2') is-invalid @enderror" name="para2"
                        value="{{ old('para2',$about->para2) }}">
                    @error('para2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="btn" class="col-md-4 col-form-label  text-md-right">{{ __('Button') }}</label>
                <div class="col-md-6 row no-gutters">
                    <div class="form-check col-2">
                        <input class="form-check-input mt-3 ml-3" type="checkbox" name="btn" @if($about->btn) checked @endif>
                        <label class="form-check-label"></label>
                    </div>
                    @error('btn')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                    <label for="img" class="col-md-4 col-form-label  text-md-right">{{ __('Image') }}</label>
                    <div class="col-md-6">
                        <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                        @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label  text-md-right">{{ __('URL') }}</label>
                    <div class="col-md-6">
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                            value="{{ old('url',$about->url) }}">
                        @error('url')
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
