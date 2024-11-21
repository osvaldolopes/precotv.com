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
        Schema::connection('mysql_oracle')->create('proreg_products', function (Blueprint $table) {
            $table->id();
            $table->integer('proreg_id')->default(0);
            $table->string('proreg_description', 100);
            $table-decimal('proreg_price')->default(0.00);
            $table-decimal('proreg_promo')->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proreg_products');
    }
};
