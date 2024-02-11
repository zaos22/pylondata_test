<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <style>

        body {
            font-family: "Kanit", sans-serif;
            font-size: 1.8rem;
            line-height: 1;
            background-image: url("storage/pylon-principal.jpg");
        }

        @media (min-width: 768px) {
            .front-page {
                display: block;
                width: 100%;
                height: auto;
                background-image: linear-gradient(-45deg,
                        rgba(255, 255, 255, 0.682) 50%,
                        transparent 50%),
                    url(storage/images.jpg);
                background-size: cover;
                /* Esto asegurará que la imagen se ajuste al tamaño del contenedor */
                background-position: center;
                /* Esto asegurará que la imagen esté centrada */
            }
        }
    </style>
    <title>Test App @yield('title')</title>
</head>

<body>
    <div id="content">
        @yield('content')
    </div>

    @yield('scripts')
</body>

</html>
