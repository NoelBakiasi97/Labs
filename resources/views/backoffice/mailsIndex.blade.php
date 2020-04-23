@extends('adminlte::page')
@section('title', 'AdminLTE')


@section('content')
        <div class="mb-5 container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Emails</h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
                    <tr>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Subject</th>
                        <th class="text-center" scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($form as $item)
                        <tr>
                            <td class="text-center">{{$item->name}}</td>
                            <td class="text-center">{{$item->email}}</td>
                            <td class="text-center">{{$item->subject}}</td>
                            <td class="text-center">{{$item->mssg}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@stop
