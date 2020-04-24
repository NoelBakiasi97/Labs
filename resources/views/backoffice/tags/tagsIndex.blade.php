@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 bg-primary rounded">Tags</h1>
                <a class="text-center btn btn-primary mb-3" href="{{route('addTag')}}">Add</a>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Tag</th>
                        <th class="text-center" scope="col">Articles</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $item)
                        <tr>
                            <td class="text-center">{{$item->tag}}</td>
                            <td class="text-center"><ul>@foreach ($item->articles as $article)
                                <li style="list-style:none;">{{$article->title}}</li>
                            @endforeach</ul></td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="{{route('editTag',$item->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('deleteTag',$item->id)}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop
