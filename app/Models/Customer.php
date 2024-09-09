<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'customer_fullname',
        'customer_phone_one',
        'customer_phone_two',
        'customer_state',
        'customer_town',
        'customer_address',
        'product_id',
        'quantity',
        'price',
        'customer_note',
        'bought',
        'order_status',
        'gender',
        'visit_source',
        'source_link',
        'profile',
    ];
}
