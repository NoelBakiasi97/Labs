@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-primary rounded">Edit testimonial</h1>
            </div>
            <div class="card-body">
            <form action="{{route('updateTestimonial', $testimonials->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group row">
                    <label for="testimonial" class="col-md-4 col-form-label  text-md-right">{{ __('Testimonial') }}</label>
                    <div class="col-md-6">
                        <input value="{{ old('testimonial',$testimonials->testimonial)}}" id="testimonial" type="text" class="form-control @error('testimonial') is-invalid @enderror"  name="testimonial">
                        @error('testimonial')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div> 
                </div>  
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
                        <label for="name" class="col-md-4 col-form-label  text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input value="{{ old('name',$testimonials->name)}}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> 
                            @enderror
                        </div> 
                    </div>
                <div class="form-group row">
                        <label for="function" class="col-md-4 col-form-label  text-md-right">{{ __('Function') }}</label>
                        <div class="col-md-6">
                            <input value="{{ old('function',$testimonials->function)}}" id="function" type="text" class="form-control @error('function') is-invalid @enderror" name="function">
                            @error('function')
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
