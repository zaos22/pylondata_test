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

            // Extraer los datos de los periodos y consumos
            $periodos = [];
            $consumos = [];
            foreach ($data['periods'] as $key => $value) {
                $periodos[] = $key;
                $consumos[] = $value['cons'];
            }

            $chartData = [
                'type' => 'doughnut',
                'data' => [
                    'labels' => $periodos,
                    'datasets' => [
                        [
                            'label' => 'Consumo por Periodo',
                            'data' => $consumos,
                            'backgroundColor' => ['#2571ff', '#52ffba', '#df0eff'],
                            'borderColor' => ['#2571ff', '#52ffba', '#df0eff'],
                            'borderWidth' => 1
                        ]
                    ]
                ]
            ];
            $chart = urlencode(json_encode($chartData));

            // Renderizar la cuarta vista con la gráfica y devolverla
            $View4 = View::make('page-3', compact('data', 'chartData'))->render();

            // Renderizar la quinta vista con la gráfica y devolverla
            $View5 = View::make('page-4', compact('data', 'chartData'))->render();

            // Devolver las vistas renderizadas
            return $View1 . $View2 . $View3 . $View4 . $View5;
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

            // Renderizar la cuarta vista
            $View4 = View::make('page-3', compact('data'))->render();

            // Combinar las vistas renderizadas
            $combinedViews = $View1 . $View2 . $View3 . $View4;

            // Generar PDF
            $pdf = new Dompdf();
            $pdf->loadHtml($combinedViews);

            // Establecer las opciones de estilo del PDF
            $pdf->setPaper('A4', 'portrait');

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
