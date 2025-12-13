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
        Schema::create('departaments', function (Blueprint $table) {
            $table->bigIncrements('departament_id'); // chave primária auto incremento
            $table->string('dep_description', 120);
            $table->string('img_url')->nullable();
            $table->string('dep_texto', 255)->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departaments');
    }
};
