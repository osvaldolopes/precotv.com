<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use App\Models\Mercador_view;

class HomeController extends Controller
{
    public function home($dp_id)
    {
        if (!request()->has('page')) {
            return redirect()->route('home', ['page' => 1]);
        }

        // Busca todos os departamentos
        $configdeptos = Departament::all();

        // Busca o departamento atual
        $departament = Departament::findOrFail($dp_id);

        // Usa o valor da coluna per_page (ou o nome que você definiu) para paginação
        $mercador_views = Mercador_view::where('departament_id', $dp_id)
            ->simplePaginate($departament->paginate);

        return view('home', [
            'dp_id' => $dp_id,
            'configdeptos' => $configdeptos
        ], compact('mercador_views'));
    }
}
