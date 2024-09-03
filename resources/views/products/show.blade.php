@extends('layout')
@section('title', $product->product_name)
@section('content')
    <div class="row">
        <div class="col-8">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $product->product_image_src) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->product_name }}</h5>
                                <p class="card-text">{{ $product->product_short_description }}</p>
                                <p class="card-text"><strong>Price:</strong> ${{ $product->product_price }}</p>
                                <p class="card-text"><strong>Category:</strong> {{ $product->product_category_id }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-4 container">
            <div class="form-group">
                <label for="title">Full Name</label><br />
                <input type="text" name="product_tags" id="product_tags" class="form-control">
            </div><br />
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="title">Phone Number 1</label><br />
                        <input type="text" name="product_tags" id="product_tags" class="form-control">
                    </div><br />
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="title">Phone Number 2</label><br />
                        <input type="text" name="product_tags" id="product_tags" class="form-control">
                    </div><br />
                </div>
            </div>
        </div>
    </div>

@endsection
