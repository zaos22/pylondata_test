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
                        <div>
                            <p class="text-blue title-medium bold">Curvas de consumo medias</p>
                            <p class="body-size">Así consumes la energía cada hora, entre semana y los
                                fines de semana. Hemos detectado que consumes el 23%
                                de la energía en horas P1 (el periodo caro).
                            </p>
                        </div>
                        <div class="flex-justify-between">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="text-center bold pe-5" style="white-space: nowrap;" colspan="2">
                                            <div class="background-color5">
                                                Energía cons.
                                            </div>
                                        </th>
                                        <th class="p1 background-color2 text-center bold">
                                            P1
                                        </th>
                                        <th class="p1 background-color text-center bold">
                                            P2
                                        </th>
                                        <th class="p1 background-color6 text-center bold">
                                            P3
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-grey body-size">
                                        <td class="text-center pe-5" colspan="2">
                                            {{ number_format(substr($data['periods']['P1']['cons'] + $data['periods']['P2']['cons'] + $data['periods']['P3']['cons'], 0, 5), 0) }}
                                            kWh
                                        </td>
                                        <td class="p2 text-center">
                                            {{ number_format(substr($data['periods']['P1']['cons'], 0, 4)) }}
                                        </td>
                                        <td class="p2 text-center">
                                            {{ number_format(substr($data['periods']['P2']['cons'], 0, 4)) }}
                                        </td>
                                        <td class="p2 text-center">
                                            {{ number_format(substr($data['periods']['P3']['cons'], 0, 4)) }}
                                        </td>
                                    </tr>
                                    <tr class="text-grey body-size">
                                        <td class="text-center pe-5" colspan="2">
                                            {{ number_format(($data['periods']['P1']['percent'] + $data['periods']['P2']['percent'] + $data['periods']['P3']['percent']) * 100, 0) }}%
                                        </td>
                                        <td class="text-center">
                                            {{ number_format($data['periods']['P1']['percent'] * 100, 0) }}%
                                        </td>
                                        <td class="text-center">
                                            {{ number_format($data['periods']['P2']['percent'] * 100, 0) }}%
                                        </td>
                                        <td class="text-center">
                                            {{ number_format($data['periods']['P3']['percent'] * 100, 0) }}%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ms-2 flex-justify-center">
                        <canvas id="myChart" width="300" height="300"></canvas>
                        <script>
                            // Obtener los datos del PHP
                            var chartData = {!! json_encode($chartData) !!};

                            // Crear el gráfico
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, chartData);
                        </script>
                    </div>
                </div>
            @else
                <p>No se encontraron datos del JSON.</p>
        @endif
    </main>
    <div class="mb-25">

    </div>
    <x-footer> @section('pag') 04 @endsection </x-footer>
    </main>
@endsection
