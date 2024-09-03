<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_sku');
            $table->string('product_name');
            $table->text('product_short_description');
            $table->text('product_full_description');
            $table->string('product_category');
            $table->string('product_tags');
            $table->string('product_attributes');
            $table->decimal('product_price', 8, 2);
            $table->decimal('product_promo_price', 8, 2);
            $table->integer('product_stock');
            $table->integer('product_brand');
            $table->decimal('product_weight', 5, 2);
            $table->decimal('product_height', 5, 2);
            $table->decimal('product_width', 5, 2);
            $table->decimal('product_length', 5, 2);
            $table->string('product_status');
            $table->boolean('product_featured')->default(false);
            $table->boolean('product_has_variation')->default(false);
            $table->string('product_image_src');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
