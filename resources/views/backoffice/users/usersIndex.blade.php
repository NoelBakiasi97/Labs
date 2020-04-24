@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Users </h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col" class="text-center w-25">Image</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                {{$user->role->role}}
                            </td>
                            <td class="text-center"><img class="w-25" src="{{'storage/'.$user->img}}" alt=""></td>
                            <td class="text-center">  
                                {{-- @can('editUser',$user ,App\user::class) --}}
                                    <a class="btn btn-warning" href="{{route('editUsers',$user->id)}}">Edit</a>   
                                {{-- @endcan --}}
                                {{-- @can('deleteUser',$user ,App\user::class) --}}
                                    <a class="btn btn-danger" href="{{route('deleteUsers',$user->id)}}">Delete</a>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop