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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('pick_up_address');
            $table->string('drop_of_address');
            $table->string('weight_pcs');
            $table->string('unit');
            $table->string('bookingId')->unique();
            $table->text('product_description');
            $table->unsignedBigInteger('status')->default(1)->comment('1 => pending, 2 => warehouse, 3 => shipping, 4 => customs, 5 => BD warehouse, 6 => Delivered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
