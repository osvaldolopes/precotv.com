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
            $table->id(); // chave primária auto incremento
            $table->bigInteger('prod_cod');
            $table->string('prod_description', 100);
            $table->decimal('prod_price', 10, 2)->default(0.00);
            $table->decimal('prod_promo', 10, 2)->nullable()->default(0.00);
            $table->string('prod_checked', 8)->nullable();

            // relacionamento
            $table->unsignedBigInteger('departament_id');
            $table->foreign('departament_id')
                ->references('departament_id')
                ->on('departaments')
                ->onDelete('cascade'); // se o departamento for excluído, exclui os produtos

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
