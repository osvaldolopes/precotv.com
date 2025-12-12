<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Mercador_parcial;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        // Valida que pelo menos um produto foi selecionado
        $request->validate([
            'mercados' => 'required|array|min:1',
        ], [
            'mercados.required' => 'Selecione pelo menos um produto.',
            'mercados.min' => 'Selecione pelo menos um produto.',
        ]);

        $mercadosSelecionados = $request->input('mercados', []);

        foreach ($mercadosSelecionados as $idParcial) {
            $mercado = Mercador_parcial::find($idParcial);

            if ($mercado) {
                Product::create([
                    'prod_cod'         => $mercado->codigoint,
                    'prod_description' => $mercado->descricao_completa,
                    'valor'            => $mercado->valor,
                    'PrecoOferta'      => $mercado->PrecoOferta,
                    'prod_checked'     => "checked",
                    'departament_id'   => $mercado->depto,
                ]);
            }
        }

        return redirect()->route('dashboard')
            ->with('success', 'Produtos cadastrados com sucesso!');
    }

    public function deleteSelected(Request $request)
    {
        // Valida que pelo menos um item foi selecionado
        $request->validate([
            'ids' => 'required|array|min:1',
        ], [
            'ids.required' => 'Selecione pelo menos um produto para deletar.',
            'ids.min' => 'Selecione pelo menos um produto para deletar.',
        ]);

        $idsSelecionados = $request->input('ids', []);

        // Deleta todos os produtos selecionados
        Product::whereIn('id', $idsSelecionados)->delete();

        return back()->with('success', 'Produtos deletados com sucesso!');
    }
}
