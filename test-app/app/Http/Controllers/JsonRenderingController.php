<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class JsonRenderingController extends Controller
{
    public function index()
    {
        // Ruta del archivo JSON
        $path = public_path('resultados.json');

        // Verificar si el archivo existe
        if (file_exists($path)) {
            // Leer el contenido del archivo JSON
            $contentJSON = file_get_contents($path);

            // Decodificar el contenido JSON a un array asociativo
            $data = json_decode($contentJSON, true);

            // Renderizar la primera vista y devolverla
            $View1 = View::make('front-page')->render();

            // Renderizar la segunda vista y devolverla
            $View2 = View::make('page-1', compact('data'))->render();

            // Puedes renderizar más vistas según tus necesidades

            // Devolver las vistas renderizadas
            return $View1 . $View2;
        } else {
            // Enviar un mensaje de error si el archivo no existe
            return "El archivo JSON no existe.";
        }
    }
}
