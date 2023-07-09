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
        Schema::create('clearing_forwardings', function (Blueprint $table) {
            $table->id();
            $table->longText('header_title_en');
            $table->longText('header_title_bn');
            $table->longText('header_desc_en');
            $table->longText('header_desc_bn');
            $table->longText('pro_sourcing_title_en');
            $table->longText('pro_sourcing_title_bn');
            $table->longText('pro_sourcing_desc_en');
            $table->longText('pro_sourcing_desc_bn');
            $table->string('pro_sourcing_img');
            $table->longText('free_warehousing_title_en');
            $table->longText('free_warehousing_title_bn');
            $table->longText('free_warehousing_desc_en');
            $table->longText('free_warehousing_desc_bn');
            $table->string('free_warehousing_img');
            $table->longText('inspection_title_en');
            $table->longText('inspection_title_bn');
            $table->longText('inspection_desc_en');
            $table->longText('inspection_desc_bn');
            $table->string('inspection_img');
            $table->longText('repacking_title_en');
            $table->longText('repacking_title_bn');
            $table->longText('repacking_desc_en');
            $table->longText('repacking_desc_bn');
            $table->string('repacking_img');
            $table->longText('custom_clr_title_en');
            $table->longText('custom_clr_title_bn');
            $table->longText('custom_clr_desc_en');
            $table->longText('custom_clr_desc_bn');
            $table->string('custom_clr_img');
            $table->longText('d_step_delivery_title_en');
            $table->longText('d_step_delivery_title_bn');
            $table->longText('d_step_delivery_desc_en');
            $table->longText('d_step_delivery_desc_bn');
            $table->string('d_step_delivery_img');
            $table->longText('footer_desc_en');
            $table->longText('footer_desc_bn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clearing_forwardings');
    }
};
