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
                    <th>Order</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Full Name</th>
                    <th>Phone 1</th>
                    <th>Phone 2</th>
                    <th>Wilaya</th>
                    <th>Commune</th>
                    <th>Full Address</th>
                    <th>Customer Note</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $key => $customer)
                    @php
                        $productReelId = $customer->product_id - 1;
                        $selectedProduct = $products[$productReelId];
                    @endphp
                    <tr>
                        <td class="table-dark">{{ $key + 1 }}</td>
                        <td><img src="{{ asset('storage/' . $selectedProduct->product_image_src) }}"></td>
                        <td>{{ $customer->price }}</td>
                        <td>{{ $customer->quantity }}</td>
                        <td>{{ $customer->price * $customer->quantity }}</td>
                        <td>{{ $customer->customer_fullname }}</td>
                        <td>0{{ $customer->customer_phone_one }}</td>
                        <td>0{{ $customer->customer_phone_two }}</td>
                        <td>{{ $customer->customer_state }}</td>
                        <td>{{ $customer->customer_town }}</td>
                        <td>{{ $customer->customer_address }}</td>
                        <td>
                            <?php
                                if ($customer->customer_note) {
                                    echo substr($customer->customer_note, 0, 25) . '..';
                                } else {
                                    echo "لا توجد ملاحضات";
                                }

                            ?>
                        </td>
                        <td>{{ Carbon\Carbon::parse($customer->created_at)->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
