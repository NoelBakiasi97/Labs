@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Services</h1>
                <a class="btn btn-primary my-3" href="{{route('addServices')}}">Add</a>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Icone</th>
                        <th scope="col">Title</th>
                        <th class="text-center" scope="col">Description</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td><i class="{{$item->icone}} fa-2x"></i></td>
                            <td>{{$item->title}}</td>
                            <td class="w-50">{{$item->description}}</td>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('editServices',$item->id)}}">Edit</a>   
                                {{-- @endcan --}}
                                {{-- @can('deleteitem',$item ,App\item::class) --}}
                                    <a class="btn btn-danger" href="{{route('deleteServices',$item->id)}}">Delete</a>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection