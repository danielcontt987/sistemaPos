<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="loader" class="loader-container">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
            <br>
        </div>
    </div>
    <div id="app">
        <v-container fluid class="white">
            <v-row align="center" justify="center" class="overflow-hidden">
                <v-col cols="12" md="7" lg="8" class="d-lg-flex align-right justify-start authentication position-relative bg-blueLight" width="100%">
                    <!-- Ajusta el ancho de la imagen a un porcentaje menor -->
                    <v-img src="/img/principal.png" height="100vh" width="50%" class="mx-auto d-flex"/>
                </v-col>
                <v-col cols="12" md="5" lg="4" class="pa-0">
                    @yield('content')
                </v-col>
            </v-row>
        </v-container>
    </div>
    <script>
        window.addEventListener('load', function() {
            // Oculta el loader una vez que la página haya cargado completamente
            setTimeout(() => {
                document.getElementById('loader').style.display = 'none';
            }, 2000);
        });
    </script>
</body>

</html>
