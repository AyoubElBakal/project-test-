@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">telephone</th>
                        <th scope="col">address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <th scope="row">{{ $client->id }}</th>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->telephone }}</td>
                                <td>{{ $client->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $clients->links() }}
                    </div>
                </div>
            </div>
    </div>

@endsection