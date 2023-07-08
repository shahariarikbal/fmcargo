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
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('slug');
            $table->string('sku');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('price_en');
            $table->string('price_bn');
            $table->unsignedInteger('qty_en');
            $table->string('qty_bn');
            $table->longText('short_description_en');
            $table->longText('short_description_bn');
            $table->longText('long_description_en');
            $table->longText('long_description_bn');
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
