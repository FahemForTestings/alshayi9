<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    protected $fillable = [
        'product_sku',
        'product_name',
        'product_short_description',
        'product_full_description',
        'product_category',
        'product_tags',
        'product_attributes',
        'product_price',
        'product_promo_price',
        'product_stock',
        'product_brand',
        'product_weight',
        'product_height',
        'product_width',
        'product_length',
        'product_status',
        'product_featured',
        'product_has_variation',
        'product_image_src'
    ];
}
