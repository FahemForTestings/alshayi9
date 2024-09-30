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
                    <th>الطلبية</th>
                    <th>المنتج</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                    <th>السعر الكلي</th>
                    <th>الاسم الكامل</th>
                    <th>رقم الهاتف 1</th>
                    <th>رقم الهاتف 2</th>
                    <th>الولاية</th>
                    <th>البلدية</th>
                    <th>العنوان الكامل</th>
                    <th>ملاحظة الزبون</th>
                    <th>تاريخ الطلبية</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $key => $customer)
                    @php
                        $productReelId = $customer->product_id - 1;
                        $selectedProduct = $products[$productReelId];
                        $title = $selectedProduct->product_name;
                    @endphp
                    <tr>
                        <td class="table-dark">{{ $key + 1 }}</td>
                        <td title="{{$title}}"><img src="{{ asset('storage/' . $selectedProduct->product_image_src) }}"></td>
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
