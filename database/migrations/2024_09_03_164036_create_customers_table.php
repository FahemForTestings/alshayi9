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
            $table->string('customer_fullname');
            $table->integer('customer_phone_one');
            $table->integer('customer_phone_two')->nullable();
            $table->string('customer_state');
            $table->string('customer_town');
            $table->string('customer_address')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('quantity')->default(1);
            $table->decimal('price', 8, 2)->default(0);
            $table->boolean('bought')->default(FALSE);
            $table->string('order_status');
            
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
