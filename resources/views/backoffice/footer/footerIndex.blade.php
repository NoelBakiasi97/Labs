@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Footer</h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Text</th>
                        <th class="text-center" scope="col">Position</th>
                        <th class="text-center" scope="col">Link</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td class="text-center">{{$footer->text}}</td>
                            <td class="text-center">{{$footer->position}}</td>
                            <td class="text-center">{{$footer->link}}</td>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('editFooter',$footer->id)}}">Edit</a>   
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    
                </tbody>
            </table>
        </div>

@stop
