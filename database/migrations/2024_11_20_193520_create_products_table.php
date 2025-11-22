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
            $table->integer('prod_cod');
            $table->foreignId('departament_id') // chave estrangeira
                ->constrained('departaments') // referencia a tabela departaments
                ->onDelete('cascade');        // se o departament for deletado, deleta os produtos
            $table->string('prod_description', 100);
            $table->decimal('prod_price', 10, 2)->default(0.00);
            $table->decimal('prod_promo', 10, 2)->nullable()->default(0.00);
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
