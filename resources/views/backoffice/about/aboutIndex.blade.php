@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">About</h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th scope="col">Title</th>
                        <th class="text-center" scope="col">Para1</th>
                        <th class="text-center" scope="col">Para2</th>
                        <th scope="col">Button state</th>
                        <th class="text-center" scope="col">Image</th>
                        <th class="text-center" scope="col">Url</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $item)
                        <tr>
                            <th scope="row">{{$item->title}}</th>
                            <td>{{$item->para1}}</td>
                            <td>{{$item->para2}}</td>
                            <td class="text-center">{{$item->btn}}</td>
                            <td><img class="w-100" src="{{asset('storage/'.$item->img)}}" alt=""></td>
                            <td>{{$item->url}}</td>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('editAbout',$item->id)}}">Edit</a>   
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop
