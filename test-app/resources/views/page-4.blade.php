@extends('layouts.app')
@section('title', '')

@section('content')
    <div class="mb-12">
    </div>
    <x-header2 />
    <div class="mb-5">
    </div>
    <main class="page-1">
        @if (isset($data))
            <div class="between">
                <div class="background">
                    <p></p>
                </div>
                <div class="background-color3">
                    <h1 class="text-center text-blue text-up">Consumos Y Potencias</h1>
                </div>
            </div>
            <main class="container-content">
                <div class="mb-25">
                </div>
                <div class="flex-justify-between">
                    <div class="me-2">
                        <canvas id="myChart2" width="300" height="300"></canvas>
                        <script>
                            // Obtener los datos del PHP
                            var chartData2 = {!! json_encode($chartData2) !!};

                            // Crear el gráfico
                            var ctx = document.getElementById('myChart2').getContext('2d');
                            var myChart = new Chart(ctx, chartData2);
                        </script>
                    </div>
                    <div class="ms-2 flex-justify-center">
                        <canvas id="myChart3" width="300" height="300"></canvas>
                        <script>
                            // Obtener los datos del PHP
                            var chartData3 = {!! json_encode($chartData3) !!};

                            // Crear el gráfico
                            var ctx = document.getElementById('myChart3').getContext('2d');
                            var myChart = new Chart(ctx, chartData3);
                        </script>
                    </div>
                </div>
                <div class="mb-5">
                </div>
                <div class="flex-justify-between">
                    <div class="background-color2 width-div text-center"><h1 class="text-white">P1</h1></div>
                    <div class="background-color width-div text-center"><h1 class="text-white">P2</h1></div>
                    <div class="background-color6 width-div text-center"><h1 class="text-white">P3</h1></div>
                </div>
            @else
                <p>No se encontraron datos del JSON.</p>
        @endif
    </main>
    <div class="mb-12">

    </div>
    <x-footer> @section('pag') 04 @endsection </x-footer>
    </main>
@endsection
