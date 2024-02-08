<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
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

        .circle-title{
            font-size: 2.8rem;
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
    <title>Test App</title>
</head>

<body>
    <header class="header">
        <div class="container-content navigation-bar">
            <h1 class="text-center title-text">PYLON</h1>
        </div>
    </header>
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

    </main>

</body>

</html>
