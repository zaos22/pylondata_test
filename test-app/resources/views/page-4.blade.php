@extends('layouts.app')
@section('title', '')
@section('styles')
    @parent
    <!-- Styles -->
    <style>
        .title-text {
            font-family: 'Protest Guerrilla', sans-serif;
            font-size: 5rem;
            color: white;
        }

        .container-content {
            width: min(95%, 120rem);
            margin: 0 auto;
        }

        .center-content {
            width: min(95%, 80rem);
        }

        .box-shadow {
            background-image: linear-gradient(to bottom left, #52ffba 50%, #2571ff 50%);
            box-shadow: 0 0 2rem rgba(0, 0, 0, 0.5);
            padding: 2rem 0;
            font-family: 'Protest Guerrilla', sans-serif;
        }

        .box {
            background-color: #2571ff;
            box-shadow: 0 0 2rem rgba(0, 0, 0, 0.5);
            padding: 2rem 0;
            font-family: 'Protest Guerrilla', sans-serif;
        }

        .box2 {
            background-color: #52ffba;
            box-shadow: 0 0 2rem rgba(0, 0, 0, 0.5);
            padding: 2rem 0;
            font-family: 'Protest Guerrilla', sans-serif;
        }

        /** Header **/

        .header {
            background-color: #2571ff;
            box-shadow: 0 0 2rem rgba(0, 0, 0, 0.5);
            padding: .3rem 0;
            font-family: 'Protest Guerrilla', sans-serif;
        }

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: end;
        }

        .text-space {
            width: 100%;
            height: auto;
            margin-top: 5rem;
        }

        .text-space2 {
            position: relative;
            width: 100%;
            height: auto;
            right: 10rem;
        }

        .main-padding-top {
            padding-top: 5rem;
        }

        @media (min-width: 768px) {
            .page-1 {
                width: 100%;
                height: auto;
                background-color: #fff;
                padding: 5rem;
            }
        }

        .container {
            display: flex;
        }

        .circle {
            width: 150px;
            height: 150px;
            background-color: #52ffbaad;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle2 {
            width: 250px;
            height: 250px;
            background-color: #2571ff75;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background-color: #00000092;
            flex: 1;
            border: 1px solid #000;
            /* Añade bordes para visualizar las cajas */
            margin-right: 10px;
            /* Espacio entre las cajas */
        }

        .meta {
            text-align: center;
        }

        .left {
            margin-left: 7rem;
        }

        .right {
            margin-right: 7rem;
        }

        .flex-justify-start {
            display: flex;
            justify-content: start;
            align-items: center;
            align-content: center;
        }

        .flex-justify-between {
            display: flex;
            justify-content: space-between;
        }

        .flex-justify-end {
            display: flex;
            justify-content: end;
            align-items: center;
            align-content: center;
        }

        .flex-justify-center {
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        .meta-info {
            color: #fff;
        }

        .meta-info2 {
            color: #fff;
        }

        .text-white {
            color: white;
        }

        .text-black {
            color: black;
        }

        .text-blue {
            color: #2571ff;
        }

        .text-green {
            color: #52ffba;
        }

        .circle-title {
            font-size: 2.8rem;
        }

        .background {
            width: 5%;
            height: auto;
            background-color: #2571ff;
        }

        .background p {
            padding: 2.4rem;
        }

        .background-color {
            background-color: #52ffba;
        }

        .background-color6 {
            background-color: #df0eff;
        }

        .background-color2 {
            background-color: #2571ff;
        }

        .background-color5 {
            background-color: #c1d7ff;
        }

        .p1 {
            padding: 1rem;
        }

        .p2 {
            padding: 2rem;
        }

        .p3 {
            padding: 3rem;
        }

        .p4 {
            padding: 4rem;
        }

        .p5 {
            padding: 5rem;
        }

        .mb-2 {
            margin-bottom: 2rem;
        }

        .mb-5 {
            margin-bottom: 5rem;
        }

        .mb-10 {
            margin-bottom: 10rem;
        }

        .mb-15 {
            margin-bottom: 15rem;
        }

        .mb-30 {
            margin-bottom: 30rem;
        }

        .mb-20 {
            margin-bottom: 20rem;
        }

        .mb-25 {
            margin-bottom: 25rem;
        }

        .ms-2 {
            margin-left: 2rem;
        }

        .ms-5 {
            margin-left: 5rem;
        }

        .me-1 {
            margin-right: 1rem;
        }

        .me-2 {
            margin-right: 2rem;
        }

        .me-5 {
            margin-right: 5rem;
        }

        .pb-2 {
            padding-bottom: 5rem
        }

        .pe-5 {
            padding-right: 5rem;
        }

        .pe-10 {
            padding-right: 10rem;
        }

        .ps-3 {
            padding-left: 3rem;
        }


        .ps-5 {
            padding-left: 5rem;
        }

        .bold {
            font-weight: 700;
        }

        .text-grey {
            color: #646464;
        }

        .table-container {
            width: 60%;
            height: auto;
            border-top-right-radius: 10rem;
            overflow: hidden;
        }

        .border-radius {
            width: 40%;
            height: auto;
            border-top-right-radius: 10rem;
        }

        .between {
            display: flex;
            justify-content: space-between;
        }

        .title-table {
            font-size: 3rem;
            font-weight: 900;
        }

        .body-size {
            font-size: 1.4rem;
        }

        .title-medium {
            font-size: 2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-color: #52ffba;
            border-spacing: 0;
        }

        .text-start {
            text-align: start;
        }

        .text-up {
            text-transform: uppercase;
        }

        .background-color3 {
            width: 95%;
            height: auto;
            background-color: rgb(223, 223, 223);
        }

        .background-color4 {
            background-color: rgb(223, 223, 223);
        }

        /* Opcional: Para evitar que las cajas se contraigan demasiado en pantallas pequeñas */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                background-color: transparent;
            }

            .box {
                background-color: #2571ff;
                flex: 1;
                border: 1px solid #000;
                /* Añade bordes para visualizar las cajas */
                margin-right: 10px;
                /* Espacio entre las cajas */
            }

            .box {
                margin-right: 0;
                margin-bottom: .5rem;
            }
        }

        .image {
            width: 70rem;
            height: 30rem;
        }

        .div-size {
            width: 85%;
            margin: 0 auto;
        }
    </style>
@endsection

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
                                            {{ number_format(substr($data['periods']['P1']['cons'] + $data['periods']['P2']['cons'] + $data['periods']['P3']['cons'], 0, 5 ), 0) }} kWh
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
