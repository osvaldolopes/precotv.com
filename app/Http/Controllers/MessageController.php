<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Illuminate\Http\Request;

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

    public function executarpython()
    {
        $process = new Process([
            '/var/www/html/uptabela.com/venv/bin/python',
            '/var/www/html/uptabela.com/main.py'
        ]);
        $process->run();

        if (!$process->isSuccessful()) {
            return "Erro: " . $process->getErrorOutput();
        }
        return "Resultado: " . $process->getOutput();
    }
}
