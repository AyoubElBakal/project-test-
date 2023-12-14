@extends('layouts.app')

@section('title', 'Liste des Produits')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Name : {{ $product->name }}</h5>
                                    <p class="card-text">Stock: {{ $product->stock }}</p>
                                    <p class="card-text">Category: {{ $product->category->name }}</p>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Ajoutez la pagination ici -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
