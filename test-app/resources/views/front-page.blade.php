@extends('layouts.app')
@section('title', '')
@section('styles')
    @parent <!-- Mantiene los estilos del layout principal -->
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
            font-size: 1.8rem;
            line-height: 1;
            background-image: url('{{ url('storage/pylon-principal.jpg') }}');
        }

        h1 {
            font-family: 'Protest Guerrilla', sans-serif;
        }

        .title-text {
            font-size: 5rem;
            color: white;
        }

        .navigation-bar {
            display: flex;
            flex-direction: column;
            align-items: center;
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

        @media (min-width: 768px) {
            .front-page {
                display: block;
                width: 100%;
                height: auto;
                background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.682) 50%, transparent 50%), url('{{ url('storage/images.jpg') }}');
                background-size: cover;
                /* Esto asegurará que la imagen se ajuste al tamaño del contenedor */
                background-position: center;
                /* Esto asegurará que la imagen esté centrada */
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
            margin-left: 1rem;
            margin-right: 1rem;
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

        .button {
            background-color: #52ffba;
            /* Green */
            border: none;
            color: black;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button:hover {
            background-color: transparent;
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
            }

            .box {
                margin-right: 0;
                margin-bottom: .5rem;
            }
        }

        /* Estilos para la impresión */
        @media print {

            /* Ocultar elementos que no deseas incluir en el PDF */
            .no-print {
                display: none;
            }
        }

        .mb-4 {
            margin-bottom: 4rem;
        }
    </style>
@endsection

@section('content')
    <x-header />
    <main class="front-page">
        <div class="text-center text-space">
            <div class="main-padding-top">

            </div>
            <div class="flex-justify-end right">
                <div class="circle">
                    <h1 class="text-black circle-title">Pylon</h1>
                </div>
            </div>
            <div class="flex-justify-center">
                <div class="circle2">
                    <h1 class="text-green circle-title">Genera tu propia energía!</h1>

                </div>
            </div>
        </div>
        <div class="flex-justify-start left">
            <div class="circle">
                <h1 class="text-white circle-title">1,50 kWp</h1>
            </div>
        </div>
        <div class=" main-padding-top">

        </div>
        <div class="container">
            <div class="box">
                <div class="meta meta-info">
                    <p>Asesor: Pylon SL</p>
                    <p>Teléfono: +34610826898</p>
                    <p>E-mail: marc@pylondata.com</p>
                </div>
            </div>
            <div class="box">
                <div class="meta meta-info2">
                    <p>Cliente: Marc</p>
                    <p>Dirección:</p>
                    <p>CUPS: ES0021000002788885RV</p>
                    <p>Fecha Estudio: 14/06/2022</p>
                </div>
            </div>
        </div>
        <div class="mb-4">

        </div>
    </main>
@endsection
