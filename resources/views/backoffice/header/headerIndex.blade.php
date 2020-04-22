@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
    <div class="row no-gutters">
        <div class="mb-5 container col-5">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Header</h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th scope="col">Logo</th>
                        <th scope="col">Text</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($header as $item)
                        <tr>
                            <th scope="row"><img class="w-25" src="{{'storage/'.$item->logo}}" alt=""></th>
                            <th>{{$item->text}}</th>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('editHeader',$item->id)}}">Edit</a>   
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mb-5 container col-6 offset-1">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Carousel <span><a class="text-center btn btn-light mb-1" href="{{route('addCarousel')}}">Add</a></span></h1>
                
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="w-50" scope="col">Image</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carousel as $item)
                        <tr>
                            <th scope="row"><img class="w-25" src="{{'storage/'.$item->imgCar}}" alt=""></th>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('editCarousel',$item->id)}}">Edit</a>   
                                {{-- @endcan --}}
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-danger" href="{{route('deleteCarousel',$item->id)}}">Delete</a>   
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop