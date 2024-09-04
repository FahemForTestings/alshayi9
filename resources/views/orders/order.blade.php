@extends('layout')
@section('title', 'Alshayi9 Store')

@section('head')
    <style>
        img {
            width: 50px;
        }
    </style>
@endsection
@section('content')

    <div class="container">
        <table class="table my-5">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Product Image</th>
                    <th>Price</th>
                    <th>Full Name</th>
                    <th>Phone 1</th>
                    <th>Phone 2</th>
                    <th>Wilaya</th>
                    <th>Commune</th>
                    <th>Full Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <?php 
                        $reelId = ($customer->product_id) - 1;
                        $selectedProduct = $products[$reelId]?>
                    <tr>
                        <td class="table-dark">{{ $customer->id }}</td>
                        <td>{{ $selectedProduct->product_name }}</td>
                        <td><img src="{{asset('storage/' . $selectedProduct->product_image_src)}}"></td>
                        <td>{{ $customer->price }}</td>
                        <td>{{ $customer->customer_fullname }}</td>
                        <td>{{ $customer->customer_phone_one }}</td>
                        <td>{{ $customer->customer_phone_two }}</td>
                        <td>{{ $customer->customer_state }}</td>
                        <td>{{ $customer->customer_town }}</td>
                        <td>{{ $customer->customer_address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
