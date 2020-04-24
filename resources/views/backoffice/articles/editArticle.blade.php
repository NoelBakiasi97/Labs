@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit Article</h1>
    </div>
    <div class="card-body">
        <form action="{{route('updateArticle', $articles->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="img" class="col-md-4 col-form-label  text-md-right">{{ __('Image') }}</label>
                <div class="col-md-6">
                    <input id="img" type="file" class="form-control" name="img">
                    @error('img')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label  text-md-right">{{ __('Title') }}</label>
                <div class="col-md-6">
                    <input value="{{ old('title',$articles->title) }}" id="title" type="text" class="form-control" name="title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-md-4 col-form-label  text-md-right">{{ __('Text') }}</label>
                <div class="col-md-6">
                    <input value="{{ old('title',$articles->text) }}" id="text" type="text" class="form-control" name="text">
                    @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="function" class="col-md-4 col-form-label  text-md-right">{{ __('Categorie') }}</label>
                <div class="col-md-6">
                    <select name="categorie_id" id="categorie_id">
                        @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->categorie}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tag" class="col-md-4 col-form-label  text-md-right">{{ __('Tag') }}</label>
                <div class="col-md-6">
                    @foreach ($tags as $item) 
                        <div class="form-check">
                            <input name='tag[]' value='{{$item->id}}' class="form-check-input" type="checkbox" @if($articles->tags->contains($item->id)) checked @endif>
                            <label class="form-check-label">{{$item->tag}}</label>
                        </div>
                    @endforeach
                    @error('tag')
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
