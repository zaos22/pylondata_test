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
    <!-- Styles -->
    <style>
        html {
            box-sizing: border-box;
            font-size: 50%;
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
    </style>
    @yield('styles')
    <title>Test App @yield('title')</title>
</head>

<body>
    @yield('content')

    @yield('scripts')
</body>

</html>
