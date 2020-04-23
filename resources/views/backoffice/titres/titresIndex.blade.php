@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Titles</h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Clients</th>
                        <th class="text-center" scope="col">Services</th>
                        <th class="text-center" scope="col">Team</th>
                        <th class="text-center" scope="col">Stand out</th>
                        <th class="text-center" scope="col">Contact</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            @foreach ($titres as $item)
                                <td class="text-center">{{$item->titreClients}}</td>
                                <td class="text-center">{{$item->titreServices}}</td>
                                <td class="text-center">{{$item->titreTeam}}</td>
                                <td class="text-center">{{$item->titreStandout}}</td>
                                <td class="text-center">{{$item->titreContact}}</td>
                                <td class="text-center">  
                                    {{-- @can('edititem',$item ,App\item::class) --}}
                                        <a class="btn btn-warning" href="{{route('editTitres',$item->id)}}">Edit</a>   
                                    {{-- @endcan --}}
                                </td>
                            @endforeach
                        </tr>
                    
                </tbody>
            </table>
        </div>

@stop
