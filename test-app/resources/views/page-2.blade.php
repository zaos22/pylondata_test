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

        .mb-15 {
            margin-bottom: 15rem;
        }

        .mb-30 {
            margin-bottom: 30rem;
        }

        .mb-20 {
            margin-bottom: 20rem;
        }

        .ms-2 {
            margin-left: 2rem;
        }

        .ms-5 {
            margin-left: 5rem;
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
                            <p class="body-size">{{$data['technical_data']['modules'][0]['quantity']}} x {{$data['technical_data']['modules'][0]['power']}}Wp - Panel {{$data['technical_data']['modules'][0]['panels_per_string']}}</p>
                            <p class="text-blue bold">Inversores</p>
                            <p class="body-size">{{$data['technical_data']['inverters'][0]['quantity']}} x {{$data['technical_data']['inverters'][0]['brand']}} {{number_format(substr($data['technical_data']['batteries'][0]['charge_power'], 0, 1))}}kW</p>
                            <p class="text-blue bold">Superficie y tipo de instalación</p>
                            <p class="body-size">{{number_format(substr($data['installation_details']['m2'], 0, 5))}} m2 - {{$data['technical_data']['structure-type'][0]['model']}}</p>
                        </div>
                        <div class="ms-5">
                            <p class="text-blue bold">Yield</p>
                            <p class="body-size">{{number_format(substr($data['installation_details']['yield'], 0, 5))}} kWh/kWp</p>
                            <p class="text-blue bold">Orientación e <br />
                                inclinación</p>
                            <p class="body-size">desviación sur {{$data['installation_details']['orientation']}}º e <br />
                                inclinación {{$data['installation_details']['inclination']}}º</p>
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
