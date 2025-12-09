<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message()
    {
        return view('admin.message');
    }

    public function teste()
    {
        return view('admin.teste');
    }
    
    public function log()
    {
        // Caminho absoluto do arquivo
        $filePath = '/var/www/html/precotv.com/public/log.txt';

        // Verifica se o arquivo existe
        if (file_exists($filePath)) {
            // Lê o conteúdo do arquivo
            $content = file_get_contents($filePath);

            // Exibe o conteúdo como texto simples
            return response($content, 200)
                ->header('Content-Type', 'text/plain');
        } else {
            return response("Arquivo não encontrado.", 404);
        }
    }
}
