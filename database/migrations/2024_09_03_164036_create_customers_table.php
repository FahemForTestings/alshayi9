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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('customer_fullname')->nullable();
            $table->integer('customer_phone_one')->nullable();
            $table->integer('customer_phone_two')->nullable();
            $table->string('customer_state')->nullable();
            $table->string('customer_town')->nullable();
            $table->string('customer_address')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('quantity')->default(1);
            $table->decimal('price', 8, 2)->default(0);
            $table->string('customer_note')->nullable();
            $table->boolean('bought')->default(FALSE);
            $table->string('order_status')->nullable();
            
            //Stalking infos
            $table->string('gender')->nullable();
            $table->string('visit_source')->nullable();
            $table->string('source_link')->nullable();
            $table->string('profile')->nullable();
            
            $table->timestamps();
            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
