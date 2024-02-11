@extends('layouts.app')
@section('title', '')

@section('content')
    <div class="mb-12">
    </div>
    <x-header2 />
    <div class="mb-2">
    </div>
    <main class="page-1">
        @if (isset($data))
            <div class="between">
                <div class="background">
                    <p></p>
                </div>
                <div class="background-color3">
                    <h1 class="text-center text-blue text-up">Tu instalación en números</h1>
                </div>
            </div>
            <main class="container-content">
                <div class="mb-5">
                </div>
                <div class="me-2 flex-justify-center height-div">
                    <canvas id="myChart4" width="100" height="100"></canvas>
                    <script>
                        // Obtener los datos del PHP
                        var chartData4 = {!! json_encode($chartData4) !!};

                        // Crear el gráfico
                        var ctx = document.getElementById('myChart4').getContext('2d');
                        var myChart = new Chart(ctx, chartData4);
                    </script>
                </div>
                <div class="ms-2 flex-justify-center height-div">
                    <canvas id="myChart5" width="100" height="100"></canvas>
                    <script>
                        // Obtener los datos del PHP
                        var chartData5 = {!! json_encode($chartData5) !!};

                        // Crear el gráfico
                        var ctx = document.getElementById('myChart5').getContext('2d');
                        var myChart = new Chart(ctx, chartData5);
                    </script>
                </div>
                <div class="mb-1">

                </div>
            @else
                <p>No se encontraron datos del JSON.</p>
        @endif
    </main>
    <div class="mb-5">

    </div>
    <x-footer> @section('pag') 05 @endsection </x-footer>
    </main>
@endsection
