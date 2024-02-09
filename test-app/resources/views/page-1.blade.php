@extends('layouts.app')
@section('title', '')
@section('styles')
    @parent <!-- Mantiene los estilos del layout principal -->
    <!-- Styles -->
    <style>
        html {
            box-sizing: border-box;
            font-size: 62.5%;
            /* 10px = 1rem */
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            font-family: 'Kanit', sans-serif;
            font-size: 1.8rem;
            line-height: 1;
            background-image: url('{{ url('storage/pylon-principal.jpg') }}');
        }

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
            padding: .5rem 0;
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

        .pt {
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

        .between {
            display: flex;
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

        .background-color2 {
            background-color: #2571ff;
        }

        .p1-5 {
            padding: 1.5rem;
        }

        .p2 {
            padding: 2rem;
        }

        .p3 {
            padding: 3rem;
        }

        .p5 {
            padding: 5rem;
        }

        .ms-1 {
            margin-left: 1rem;
        }

        .me-1 {
            margin-right: 1rem;
        }

        .pb-2 {
            padding-bottom: 5rem
        }

        .pe-5 {
            padding-right: 5rem;
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

        .title-table {
            font-size: 2.8rem;
            font-weight: 900;
        }

        .body-size {
            font-size: 1.4rem;
        }

        .border-radius {
            width: 40%;
            height: auto;
            border-top-right-radius: 10rem;
        }


        table {
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
    </style>
@endsection

@section('content')
    <header class="header">
        <div class="container-content navigation-bar">
            <h1 class="text-center title-text">PYLON</h1>
        </div>
    </header>
    <main class="page-1">
        @if (isset($data))
            <div class="between">
                <div class="background">
                    <p></p>
                </div>
                <div class="background-color3">
                    <h1 class="text-center text-blue text-up">Análisis de consumo</h1>
                </div>
            </div>
            <main class="container-content">
                <div class="pt">

                </div>
                <div class="between">
                    <div class="me-1 table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th class="background-color p2 ps-3 text-start text-blue title-table" colspan="2">
                                        Resumen de costes
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="background-color text-grey body-size">
                                    <td class="ps-5 p1-5">Coste por energía consumida</td>
                                    <td class="p1-5 bold pe-5 text-end">Dato 2</td>
                                </tr>
                                <tr class="background-color text-grey body-size">
                                    <td class="ps-5 p1-5">Coste por potencia contratada</td>
                                    <td class="p1-5 bold pe-5 text-end">Dato 5</td>
                                </tr>
                                <tr class="background-color text-grey body-size">
                                    <td class="ps-5 p1-5">Impuesto eléctrico 0.5%</td>
                                    <td class="p1-5 bold pe-5 text-end">Dato 5</td>
                                </tr>
                                <tr class="background-color text-grey body-size">
                                    <td class="ps-5 p1-5">IVA 10% (sobre 997,18 €)</td>
                                    <td class="p1-5 bold pe-5 text-end">Dato 5</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="background-color2 p2 ps-3 text-start text-white title-table">
                                        Coste total anual: </br>
                                        (con IVA)
                                    </th>
                                    <th class="background-color2 p2 text-end pe-5 text-white title-table">
                                        1000€
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="ms-1 border-radius background-color4 text-end p3">
                        <p class="text-blue">Cups</p>
                        <p class="body-size">55245</p>
                        <p class="text-blue">Tarifa</p>
                        <p class="body-size">{{ $data['tariff'] }}</p>
                        <p class="text-blue">Potencia contratada</p>
                        <p class="body-size">55245</p>
                        <p class="text-blue">Periodo análisis</p>
                        <p class="body-size">55245</p>
                        <p class="text-blue">Fecha informe</p>
                        <p class="body-size">55245</p>
                    </div>
                </div>
                <ul>
                    <li>Contrato de potencias:</li>
                    <ul>
                        @foreach ($data['contracted_powers'] as $key => $value)
                            <li>{{ $key }}: {{ $value }}</li>
                        @endforeach
                    </ul>

                    <li>Tarifa: {{ $data['tariff'] }}</li>
                    <li>Consumo anual total: {{ $data['total_annual_consumption'] }}</li>
                    <li>Ahorro anual total: {{ $data['total_annual_savings'] }}</li>

                    <li>Períodos:</li>
                    <ul>
                        @foreach ($data['periods'] as $key => $period)
                            <li>{{ $key }}</li>
                            <ul>
                                <li>Consumo: {{ $period['cons'] }}</li>
                                <li>Porcentaje: {{ $period['percent'] }}</li>
                            </ul>
                        @endforeach
                    </ul>
                </ul>
            @else
                <p>No se encontraron datos del JSON.</p>
        @endif
    </main>
    </main>
@endsection
