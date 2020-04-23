@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Testimonials</h1>
                <a class="btn btn-primary my-3" href="{{route('addTestimonial')}}">Add</a>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Testimonial</th>
                        <th class="text-center" scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Function</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $item)
                        <tr>
                            <td class="w-50">{{$item->testimonial}}</td>
                            <td><img src="{{asset('storage/'.$item->img)}}" alt=""></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->function}}</td>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('editTestimonial',$item->id)}}">Edit</a>   
                                {{-- @endcan --}}
                                {{-- @can('deleteitem',$item ,App\item::class) --}}
                                    <a class="btn btn-danger" href="{{route('deleteTestimonial',$item->id)}} mt-1">Delete</a>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop
