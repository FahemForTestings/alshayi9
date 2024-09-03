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
        Schema::table('products', function (Blueprint $table) {
            $table->string('product_sku')->nullable()->change();
            $table->string('product_name')->nullable()->change();
            $table->text('product_short_description')->nullable()->change();
            $table->text('product_full_description')->nullable()->change();
            $table->string('product_category')->nullable()->change();
            $table->string('product_tags')->nullable()->change();
            $table->string('product_attributes')->nullable()->change();
            $table->integer('product_price')->nullable()->change();
            $table->integer('product_promo_price')->nullable()->change();
            $table->integer('product_stock')->nullable()->change();
            $table->string('product_brand')->nullable()->change();
            $table->integer('product_weight')->nullable()->change();
            $table->integer('product_height')->nullable()->change();
            $table->integer('product_width')->nullable()->change();
            $table->integer('product_length')->nullable()->change();
            $table->string('product_status')->nullable()->change();
            $table->boolean('product_featured')->default(false)->nullable()->change();
            $table->boolean('product_has_variation')->default(false)->nullable()->change();
            $table->string('product_image_src')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
