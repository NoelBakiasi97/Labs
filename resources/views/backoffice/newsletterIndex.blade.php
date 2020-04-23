@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Newsletter</h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsletter as $item)
                        <tr>
                            <td class="text-center">{{$item->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop
