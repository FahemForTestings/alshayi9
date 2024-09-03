@extends('layout')
@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->product_short_description }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $product->product_price }}</p>
                            <p class="card-text"><strong>Category:</strong> {{ $product->product_category }}</p>
                            <a href="#" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
