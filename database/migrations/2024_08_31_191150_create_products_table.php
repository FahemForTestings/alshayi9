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
            $table->string('product_sku')->nullable();
            $table->string('product_name')->nullable();
            $table->text('product_short_description')->nullable();
            $table->text('product_full_description')->nullable();
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->string('product_tags')->nullable();
            $table->string('product_attributes')->nullable();
            $table->decimal('product_price', 8, 2)->nullable();
            $table->decimal('product_promo_price', 8, 2)->nullable();
            $table->integer('product_stock')->nullable();
            $table->string('product_brand')->nullable();
            $table->decimal('product_weight', 5, 2)->nullable();
            $table->decimal('product_height', 5, 2)->nullable();
            $table->decimal('product_width', 5, 2)->nullable();
            $table->decimal('product_length', 5, 2)->nullable();
            $table->string('product_status')->nullable();
            $table->boolean('product_featured')->default(FALSE)->nullable();
            $table->boolean('product_has_variation')->default(FALSE)->nullable();
            $table->string('product_image_src')->nullable();


            $table->timestamps();

            $table->foreign('product_category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('set null');
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
