@extends('layout')
@section('title', 'Alshayi9 Store')
@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/'.$product->product_image_src) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->product_short_description }}</p>
                            <p class="card-text"><strong>السعر:</strong> {{ $product->product_price }} دج</p>
                            <p class="card-text"><strong>الفئة:</strong> {{ $product->product_category_id }}</p>
                            <a href="/products/{{$product->id}}" class="btn btn-primary">اعرض المنتج</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
