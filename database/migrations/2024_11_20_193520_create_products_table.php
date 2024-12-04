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
            $table->bigInteger('prod_id')->default(0);
            $table->foreignId('departament_id')->constrained()->onDelete('CASCADE')->onUpdate('CASCADE');            
            $table->string('prod_description', 100);
            $table->decimal('prod_price')->default(0.00);
            $table->decimal('prod_promo')->nullable()->default(0.00);  
            $table->char('prod_checked', 8)->nullable();
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
