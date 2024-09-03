<?php
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

Route::get('/', function () {
    $products = Product::all();
    return view('home', compact('products'));
});

Route::view('/products/create', 'products.create');


Route::post('/products', function() {
    Product::create([
        'product_sku' => request('product_sku'),
        'product_name' => request('product_name'),
        'product_short_description' => request('product_short_description'),
        'product_full_description' => request('product_full_description'),
        'product_category_id' => request('product_category_id'),
        'product_tags' => request('product_tags'),
        'product_attributes' => request('product_attributes'),
        'product_price' => request('product_price'),
        'product_promo_price' => request('product_promo_price'),
        'product_stock' => request('product_stock'),
        'product_brand' => request('product_brand'),
        'product_weight' => request('product_weight'),
        'product_height' => request('product_height'),
        'product_width' => request('product_width'),
        'product_length' => request('product_length'),
        'product_status' => request('product_status'),
        'product_featured' => request('product_featured'),
        'product_has_variation' => request('product_has_variation'),
        'product_image_src' => request('product_image_src')
    ]);

    return back();
});
