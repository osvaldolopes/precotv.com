<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Illuminate\Http\RedirectResponse;


class MessageController extends Controller
{
    public function message()
    {
        return view('admin.message');
    }

    public function log()
    {
        // Caminho absoluto do arquivo
        $filePath = public_path('log.txt');

        // Verifica se o arquivo existe
        if (file_exists($filePath)) {
            // Lê o conteúdo do arquivo em array de linhas
            $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            // Ordena em ordem decrescente
            rsort($lines);

            // Junta novamente em uma string
            $content = implode("\n", $lines);

            // Exibe o conteúdo como texto simples
            return response($content, 200)
                ->header('Content-Type', 'text/plain');
        } else {
            return response("Arquivo não encontrado.", 404);
        }
    }

    public function executarpython(): RedirectResponse
    {
        $process = new Process([
            //'/mnt/e1daaebf-f475-4d80-a50d-28f7478d3641/PROJETOS/uptabela.com/venv/bin/python',
            //'/mnt/e1daaebf-f475-4d80-a50d-28f7478d3641/PROJETOS/uptabela.com/main.py'

            '/var/www/html/uptabela.com/venv/bin/python',
            '/var/www/html/uptabela.com/main.py'
        ]);
        $process->run();

        if (!$process->isSuccessful()) {
            $mensagem = "Erro: " . $process->getErrorOutput();
            $tipo = "danger"; // vermelho
        } else {
            $mensagem = "Resultado: " . $process->getOutput();
            $tipo = "success"; // verde
        }

        // Redireciona para o dashboard com flash message
        return redirect('/dashboard')
            ->with('mensagem', $mensagem)
            ->with('tipo', $tipo);
    }
}
