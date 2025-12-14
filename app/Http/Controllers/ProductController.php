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
            'mercados.min'      => 'Selecione pelo menos um produto.',
        ]);

        $mercadosSelecionados = $request->input('mercados', []);

        $duplicados = []; // ← aqui vamos guardar os itens já cadastrados

        foreach ($mercadosSelecionados as $idParcial) {

            $mercado = Mercador_parcial::find($idParcial);

            if ($mercado) {

                // Verifica duplicidade
                $existe = Product::where('prod_cod', $mercado->codigoint)->exists();

                if ($existe) {
                    // Guarda o nome do item duplicado
                    $duplicados[] = "{$mercado->descricao_completa} (cód. {$mercado->codigoint})";
                    continue; // pula para o próximo sem parar o processo
                }

                // Cria o produto
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

        // ✅ Se houver duplicados, mostra mensagem especial
        if (!empty($duplicados)) {

            $lista = implode('<br>', $duplicados);

            if (count($duplicados) === count($mercadosSelecionados)) {
                // Todos os itens eram duplicados
                return redirect()->route('dashboard')->with([
                    'warning' => "Todos os itens selecionados já estavam cadastrados:<br><strong>{$lista}</strong>",
                ]);
            }else {
                return redirect()->route('dashboard')->with([
                    'warning' => "Alguns itens já estavam cadastrados:<br><strong>{$lista}</strong>",
                    'success' => 'Os demais produtos foram cadastrados com sucesso!'
                ]);
            }


        }

        // ✅ Caso contrário, sucesso total
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
