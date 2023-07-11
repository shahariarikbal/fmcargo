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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('reviewer_name_en');
            $table->string('reviewer_name_bn');
            $table->string('reviewer_designation_en');
            $table->string('reviewer_designation_bn');
            $table->string('reviewer_image');
            $table->text('short_comment_en');
            $table->text('short_comment_bn');
            $table->longText('long_comment_en');
            $table->longText('long_comment_bn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
