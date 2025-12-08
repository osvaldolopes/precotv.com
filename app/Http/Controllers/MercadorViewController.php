<?php

namespace App\Http\Controllers;

use App\Models\Mercador_view;
use Illuminate\Http\Request;

class MercadorViewController extends Controller
{
    public function tables(Request $request)
    {
        // Captura o valor do select (GET ou POST)
        $departamentoId = $request->input('departamento');

        // Se o usuário escolheu um departamento, filtra
        $mercador_views = Mercador_view::when($departamentoId, function ($query) use ($departamentoId) {
            return $query->where('departament_id', $departamentoId);
        })->get();

        // Retorna para a view
        return view('admin.tables', [
            'mercador_views' => $mercador_views
        ]);
    }
}

