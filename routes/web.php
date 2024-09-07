<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

Route::get('/', [ProductsController::class, 'index']);

Route::get('/products/create', [ProductsController::class, 'create']);

Route::post('/products', [ProductsController::class, 'store']);

Route::get('/products/{id}', [ProductsController::class, 'show']);

Route::post('/thankyou', [CustomersController::class, 'store']);

Route::get('/orders', [CustomersController::class, 'index']);

Route::get('/thankyou/{customer}', [CustomersController::class, 'show'])->name('customers.show');