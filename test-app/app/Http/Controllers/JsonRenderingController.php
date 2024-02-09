<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;

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

            // Renderizar la tercera vista y devolverla
            $View3 = View::make('page-2', compact('data'))->render();

            // Puedes renderizar más vistas según tus necesidades

            // Devolver las vistas renderizadas
            return $View1 . $View2 . $View3;
        } else {
            // Enviar un mensaje de error si el archivo no existe
            return "El archivo JSON no existe.";
        }
    }

    public function pdf()
    {
        // Ruta del archivo JSON
        $path = public_path('resultados.json');

        // Verificar si el archivo existe
        if (file_exists($path)) {
            // Leer el contenido del archivo JSON
            $contentJSON = file_get_contents($path);

            // Decodificar el contenido JSON a un array asociativo
            $data = json_decode($contentJSON, true);

            // Renderizar la primera vista
            $View1 = View::make('front-page')->render();

            // Renderizar la segunda vista
            $View2 = View::make('page-1', compact('data'))->render();

            // Renderizar la tercera vista
            $View3 = View::make('page-2', compact('data'))->render();

            // Puedes renderizar más vistas según tus necesidades

            // Combinar las vistas renderizadas
            $combinedViews = $View1 . $View2 . $View3;

            // Generar PDF
            $pdf = new Dompdf();
            $pdf->loadHtml($combinedViews);

            // Establecer las opciones de estilo del PDF
            $pdf->setPaper('A4', 'portrait');
            $pdf->set_option('isPhpEnabled', true); // Habilitar el soporte PHP
            $pdf->set_option('isHtml5ParserEnabled', true); // Habilitar el analizador HTML5
            $pdf->set_option('isFontSubsettingEnabled', true); // Habilitar la subconjunción de fuentes

            // Renderizar el PDF
            $pdf->render();

            // Devolver el PDF
            return $pdf->stream('PylonData_Test.pdf');
        } else {
            // Enviar un mensaje de error si el archivo no existe
            return "El archivo JSON no existe.";
        }
    }
}
