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
            $table->string('name');
            $table->string('slug');
            $table->string('sku');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('price');
            $table->unsignedInteger('qty');
            $table->longText('short_description');
            $table->longText('long_description');
            $table->string('image');
            $table->json('gallery_image');
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
