@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
    </div>

@endsection