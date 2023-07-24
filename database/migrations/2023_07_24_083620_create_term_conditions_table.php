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
        Schema::create('term_conditions', function (Blueprint $table) {
            $table->id();
            $table->text('title_en');
            $table->text('title_bn');
            $table->longText('description_en');
            $table->longText('description_bn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('term_conditions');
    }
};
