@extends('layout')
@section('title', 'thankyou')
@section('head')
    <style>
        #order_image img {width: 60px;}
        #img {width: 300px}
    </style>
@endsection

@section('content')

    <div class="container text-center my-5">
        <img src="{{ asset('storage/images/thankyou/thankyou.webp') }}" alt="..."><br>
        <br>
        <hr><br>
        <h3>We have recieved your order <span class="text-success">successfully!</span></h3>
    </div>

    <div class="container m-auto">
        <div class="row">
            <div class="col">
                <table class="table my-5">
                    <thead class="table-dark">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $reelId = $customer->product_id - 1;
                            $selectedProduct = $products[$reelId];
                            $final_price = $customer->price * $customer->quantity; ?>
                        <tr>
                            <td>{{ $selectedProduct->product_name }}</td>
                            
                            <td>{{ $customer->price }}</td>
                            <td>{{ $customer->quantity }}</td>
                            <td>{{ $final_price }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table my-5">
                    <thead class="table-success">
                        <tr>
                            <th>Full Name</th>
                            <th>Phone 1</th>
                            <th>Phone 2</th>
                            <th>Wilaya</th>
                            <th>Commune</th>
                            <th>Full Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $customer->customer_fullname }}</td>
                            <td>{{ $customer->customer_phone_one }}</td>
                            <td>{{ $customer->customer_phone_two }}</td>
                            <td>{{ $customer->customer_state }}</td>
                            <td>{{ $customer->customer_town }}</td>
                            <td>{{ $customer->customer_address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <img id="img" src="{{ asset('storage/' . $selectedProduct->product_image_src) }}">
            </div>
        </div>
    </div>


@endsection
