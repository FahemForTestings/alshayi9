<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all()->reverse();
        $products = Product::all();
        return view('orders.order', compact('customers', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = Customer::create([
            'customer_fullname' => request('customer_fullname'),
            'customer_phone_one' => request('customer_phone_one'),
            'customer_phone_two' => request('customer_phone_two'),
            'customer_state' => request('customer_state'),
            'customer_town' => request('customer_town'),
            'customer_address' => request('customer_address'),
            'product_id' => request('product_id'),
            'quantity' => request('quantity'),
            'price' => request('price'),
            'customer_note' => request('customer_note'),
            //'bought' => request('bought'),
            //'order_status' => request('order_status'),
            //'gender' => request(''),
            //'visit_source' => request(''),
            //'source_link' => request(''),
            //'profile' => request('')
        ]);
        $products = Product::all();
        return view('orders.thankyou', compact('customer', 'products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
