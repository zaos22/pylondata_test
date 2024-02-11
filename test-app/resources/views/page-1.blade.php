@extends('layouts.app')
@section('title', '')

@section('content')
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
                    <h1 class="text-center text-blue text-up">Análisis de consumo</h1>
                </div>
            </div>
            <main class="container-content">
                <div class="mb-12">
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
    <div class="mb-30">

    </div>
    <x-footer> @section('pag') 01 @endsection </x-footer>
    </main>
@endsection
