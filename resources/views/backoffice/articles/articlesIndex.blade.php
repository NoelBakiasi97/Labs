@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Articles</h1>
                {{-- can --}}
                <a class="btn btn-primary my-3" href="{{route('welcome')}}">Add</a>
                {{-- endcan --}}

            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Image</th>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Text</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $item)
                        <tr>
                            <td><img src="{{asset('storage/'.$item->img)}}" alt=""></td>
                            <td>{{$item->title}}</td>
                            <td class="w-25">{{$item->text}}</td>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('welcome')}}">Edit</a>   
                                {{-- @endcan --}}
                                {{-- @can('deleteitem',$item ,App\item::class) --}}
                                    <a class="btn btn-danger" href="{{route('welcome')}} mt-1">Delete</a>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop
