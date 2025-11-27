<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE VIEW mercador_precos_view AS
        SELECT 
            p.id,
            p.prod_cod,
            p.prod_description,
            mp.valor,
            mp.PrecoOferta,
            p.prod_checked,
            p.departament_id,
            p.created_at,
            p.updated_at
        FROM products p
        JOIN mercador_parcials mp 
            ON p.prod_cod = mp.codigoint
    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS mercador_precos_view');
    }
};
