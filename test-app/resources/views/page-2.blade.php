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
                    <h1 class="text-center text-blue text-up">Especificaciones Técnicas</h1>
                </div>
            </div>
            <main class="container-content">
                <div class="mb-12">
                </div>
                <div class="background-color4 div-size">
                    <div class="text-center">
                        <img class="image" src="{{ url('storage/casa-paneles-solares.jpg') }}" alt="">
                    </div>
                    <div class="flex-justify-center p2">
                        <div class="me-5">
                            <p class="text-blue bold">Ubicación</p>
                            <p></p>
                            <p class="text-blue bold">Módulos</p>
                            <p class="body-size">{{ $data['technical_data']['modules'][0]['quantity'] }} x
                                {{ $data['technical_data']['modules'][0]['power'] }}Wp - Panel
                                {{ $data['technical_data']['modules'][0]['panels_per_string'] }}</p>
                            <p class="text-blue bold">Inversores</p>
                            <p class="body-size">{{ $data['technical_data']['inverters'][0]['quantity'] }} x
                                {{ $data['technical_data']['inverters'][0]['brand'] }}
                                {{ number_format(substr($data['technical_data']['batteries'][0]['charge_power'], 0, 1)) }}kW
                            </p>
                            <p class="text-blue bold">Superficie y tipo de instalación</p>
                            <p class="body-size">{{ number_format(substr($data['installation_details']['m2'], 0, 5)) }} m2 -
                                {{ $data['technical_data']['structure-type'][0]['model'] }}</p>
                        </div>
                        <div class="ms-5">
                            <p class="text-blue bold">Yield</p>
                            <p class="body-size">{{ number_format(substr($data['installation_details']['yield'], 0, 5)) }}
                                kWh/kWp</p>
                            <p class="text-blue bold">Orientación e <br />
                                inclinación</p>
                            <p class="body-size">desviación sur {{ $data['installation_details']['orientation'] }}º e
                                <br />
                                inclinación {{ $data['installation_details']['inclination'] }}º</p>
                        </div>
                    </div>
                </div>
            @else
                <p>No se encontraron datos del JSON.</p>
        @endif
    </main>
    <div class="mb-15">

    </div>
    <x-footer> @section('pag') 02 @endsection </x-footer>
    </main>
@endsection
