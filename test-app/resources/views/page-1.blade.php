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

        .ms-2 {
            margin-left: 2rem;
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

        .content-footer {
            display: flex;
            justify-content: space-between;
        }

        .footer_copyright {
            text-align: center;
            font-size: 1.8rem;
            margin: 2rem 0 0;
            margin-bottom: 1rem;
        }

        .text-size{
            font-size: 2.5rem;
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
                    <div class="me-5 table-container">
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
                                    <td class="p1-5 bold pe-5 text-end">
                                        {{ number_format(substr($data['bill_summary']['energy_consumption_cost'], 0, 5), 2) }}€
                                    </td>
                                </tr>
                                <tr class="background-color text-grey body-size">
                                    <td class="ps-5 p1-5">Coste por potencia contratada</td>
                                    <td class="p1-5 bold pe-5 text-end">
                                        {{ number_format(substr($data['bill_summary']['contracted_power_cost'], 0, 5), 2) }}€
                                    </td>
                                </tr>
                                <tr class="background-color text-grey body-size">
                                    <td class="ps-5 p1-5">Impuesto eléctrico 0.5%</td>
                                    <td class="p1-5 bold pe-5 text-end">
                                        {{ number_format(substr($data['bill_summary']['iee_cost'], 0, 5), 2) }}€</td>
                                </tr>
                                <tr class="background-color text-grey body-size">
                                    <td class="ps-5 p1-5">IVA 10% (sobre 997,18 €)</td>
                                    <td class="p1-5 bold pe-5 text-end">
                                        {{ number_format(substr($data['bill_summary']['iva_cost'], 0, 5), 2) }}€
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="background-color p3">

                                    </th>
                                    <th class="background-color p4">

                                    </th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th class="background-color2 p2 ps-3 text-start text-white title-table">
                                        Coste total anual: </br>
                                        (con IVA)
                                    </th>
                                    <th class="background-color2 p2 text-end pe-5 text-white title-table">
                                        {{ number_format(substr($data['bill_summary']['total_annual_cost_with_iva'], 0, 5), 2) }}€
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="border-radius background-color4 text-end p3">
                        <p class="text-blue bold">Cups</p>
                        <p class="body-size">ES0021000002788885RV</p>
                        <p class="text-blue bold">Tarifa</p>
                        <p class="body-size">{{ $data['tariff'] }}</p>
                        <p class="text-blue bold">Potencia contratada</p>
                        <p class="body-size">
                            @foreach ($data['contracted_powers'] as $key => $value)
                                @if ($key === 'P1')
                                    {{ $key }}: {{ $value }}
                                @elseif($key === 'P2')
                                    - {{ $key }}: {{ $value }}
                                @endif
                            @endforeach
                        </p>
                        <p class="text-blue bold">Periodo análisis</p>
                        <p class="body-size">
                            {{ substr($data['economic_balance']['monthly'][0]['total']['date'], 0, 10) }}
                            - {{ substr($data['economic_balance']['monthly'][0]['total']['date'], 0, 10) }}
                        </p>
                        <p class="text-blue bold">Fecha informe</p>
                        <p class="body-size">{{ substr($data['economic_balance']['monthly'][0]['total']['date'], 0, 10) }}
                        </p>
                    </div>
                </div>
            @else
                <p>No se encontraron datos del JSON.</p>
        @endif
    </main>
    <div class="mb-2">

    </div>
    <footer class="container-content">
        <div class="content-footer flex-justify-center">
            <div>
                <h1 class="text-center title-text text-blue">PYLON</h1>
            </div>
            <div>
                <p class="text-center text-size text-green">01</p>
            </div>
            <p class="footer_copyright">&copy; PylonData Test</p>
        </div>
    </footer>
    </main>
@endsection
