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
            width: 500px;
        }

        .sticky-card {
            position: -webkit-sticky;/* For Safari */
            position: sticky;
            top: 125px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <form action="/thankyou" method="post">
            @csrf
        <div class="row m-5">
            <div class="col-lg-7">
                <div class="mb-4">
                    <div class="card ms-5 px-3">
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
                    <div class="card ms-5 px-3">
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
                    <div class="card ms-5 px-3">
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

            
            <div class="col-lg-5 p-4 bg-success bg-opacity-10 rounded sticky-card h-100">
                <div class="form-group">
                    <label for="title">الاسم الكامل</label><br />
                    <input type="text" name="customer_fullname" id="customer_fullname" class="form-control">
                </div><br />
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="title">رقم الهاتف اﻷول</label><br />
                            <input type="text" name="customer_phone_one" id="customer_phone_one" class="form-control">
                        </div><br />
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="title">رقم الهاتف الثاني</label><br />
                            <input type="text" name="customer_phone_two" id="customer_phone_two" class="form-control">
                        </div><br />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="title">الولاية</label><br />
                            <input type="text" name="customer_state" id="customer_state" class="form-control">
                        </div><br />
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="title">البلدية</label><br />
                            <input type="text" name="customer_town" id="customer_town" class="form-control">
                        </div><br />
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">العنوان كاملا</label><br />
                    <input type="text" name="customer_address" id="customer_address" class="form-control">
                </div><br />

                <div class="form-group">
                    <p>التوصيل للمنزل ولا لمكتب شركة التوصيل؟</p>
                    <input role="button" id="doorstep" name="" type="radio">
                    <label id="doorstep-label" for="">لباب المنزل</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input role="button" id="office" name="" type="radio">
                    <label id="office-label" for="office">للمكتب</label>
                </div><br>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="title">الكمية</label><br />
                            <input type="number" name="quantity" id="quantity" value="1" class="form-control">
                        </div><br />
                    </div>
                    <div class="col-8 text-start">
                        <div class="form-group">
                            <label for="title">السعر الإجمالي: {{$product->product_price}} DZD</label><br />
                            <input type="number" name="price" id="price" value="{{$product->product_price}}" class="d-none form-control">
                        </div><br />
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" name="product_id" id="product_id" value="{{$product->id}}" class="d-none form-control">
                </div><br />
                <!--
                <div class="form-group">
                    <label for="body">لديك ملاحظة؟؟ أكتبها تحت</label><br />
                    <textarea type="text" name="customer_note" id="customer_note" class="form-control"
                        cols="30" rows="5"></textarea>
                </div><br />
                -->
                <div class="text-center bg-danger rounded">
                    <button type="submit" class="btn m-2 text-white fs-5 fw-bold">اشتر الآن!!</button>
                </div>

            </div>
        </div>
        </form>
    </div>
@endsection
