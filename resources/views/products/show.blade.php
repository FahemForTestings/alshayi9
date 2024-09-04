@extends('layout')
@section('title', $product->product_name)
@section('head')
    <style>
        .col-lg-8 {
            background-color: aqua;
        }

        .col-lg-4 {
            background-color: yellowgreen;
        }

        img {
            width: 500px !important;
        }

        .sticky-card {
            position: -webkit-sticky;/* For Safari */
            position: sticky;
            top: 125px;
        }
    </style>
@endsection

@section('content')
    {{--
    <div class="row">
        <div class="col-lg-8">
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
--}}
    <div class="container">
        <div class="row m-5">
            <div class="col-lg-7">
                <div class="mb-4">
                    <div class="card me-5 px-3">
                        <img src="{{ asset('storage/' . $product->product_image_src) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->product_short_description }}</p>
                            <p class="card-text"><strong>Price:</strong> {{ $product->product_price }} Da</p>
                            <p class="card-text"><strong>Category:</strong> {{ $product->product_category_id }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card me-5 px-3">
                        <img src="{{ asset('storage/' . $product->product_image_src) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->product_short_description }}</p>
                            <p class="card-text"><strong>Price:</strong> {{ $product->product_price }} Da</p>
                            <p class="card-text"><strong>Category:</strong> {{ $product->product_category_id }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card me-5 px-3">
                        <img src="{{ asset('storage/' . $product->product_image_src) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->product_short_description }}</p>
                            <p class="card-text"><strong>Price:</strong> {{ $product->product_price }} Da</p>
                            <p class="card-text"><strong>Category:</strong> {{ $product->product_category_id }}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-5 p-4 bg-warning bg-opacity-25 rounded sticky-card h-100">
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

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="title">Wilaya</label><br />
                            <input type="text" name="product_tags" id="product_tags" class="form-control">
                        </div><br />
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="title">Commune</label><br />
                            <input type="text" name="product_tags" id="product_tags" class="form-control">
                        </div><br />
                    </div>
                </div>


                <div class="form-group">
                    <p>Shipping home or stop desk?</p>
                    <input role="button" id="doorstep" name="adresse" type="radio">
                    <label id="doorstep-label" for="adresse">home</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input role="button" id="office" name="adresse" type="radio">
                    <label id="office-label" for="office">stop desk</label>
                </div><br>

                <div class="form-group">
                    <label for="title">Full Address</label><br />
                    <input type="text" name="product_tags" id="product_tags" class="form-control">
                </div><br />

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="title">Quantity</label><br />
                            <input type="number" name="product_tags" id="product_tags" class="form-control">
                        </div><br />
                    </div>
                    <div class="col-8 text-end">
                        <div class="form-group">
                            <label for="title">Total price: 7500 DZD</label><br />
                        </div><br />
                    </div>
                </div>

                <div class="form-group">
                    <label for="body">Customer Note</label><br />
                    <textarea type="text" name="product_short_description" id="product_short_description" class="form-control"
                        cols="30" rows="5"></textarea>
                </div><br />

                <div class="text-center bg-danger rounded">
                    <a href="#" class="btn m-2 text-white fs-5 fw-bold">Purchase Now!!</a>
                </div>

            </div>
        </div>
    </div>
@endsection
