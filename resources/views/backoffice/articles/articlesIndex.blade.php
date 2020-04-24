@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Articles</h1>
                {{-- can --}}
                    <a class="btn btn-primary my-3" href="{{route('addArticle')}}">Add</a>
                {{-- endcan --}}
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Image</th>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Text</th>
                        <th class="text-center" scope="col">User</th>
                        <th class="text-center" scope="col">Categorie</th>
                        <th class="text-center" scope="col">Tag</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $item)
                        <tr>
                            <td><img class="w-75" src="{{asset('storage/'.$item->img)}}" alt=""></td>
                            <td>{{$item->title}}</td>
                            <td class="w-25 text-center">{{$item->text}}</td>
                            <td class="w-25 text-center">{{$item->user->name}}</td>
                            <td class="w-25 text-center">{{$item->categorie->categorie}}</td>
                            <td class="text-center"><ul>@foreach ($item->tags as $tag)
                                <li style="list-style:none;">{{$tag->tag}}</li>
                            @endforeach</ul></td>
                            <td class="text-center">  
                                {{-- @can('edititem',$item ,App\item::class) --}}
                                    <a class="btn btn-warning" href="{{route('editArticle', $item->id)}}">Edit</a>   
                                {{-- @endcan --}}
                                {{-- @can('deleteitem',$item ,App\item::class) --}}
                                    <a class="btn btn-danger mt-1" href="{{route('deleteArticle', $item->id)}}">Delete</a>    
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop
