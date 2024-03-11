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
        <v-app style="background-color: #f6fbff">
            <v-container fluid class="fill-height pa-0 ma-0 overflow-hidden">
              <v-row
                align="center"
                justify="center"
                style="height: 100%"
                class="pa-0 ma-0"
              >
                <v-col cols="12" md="6">
                 @yield('content')
                </v-col>
                <v-col
                  cols="12"
                  md="6"
                  style="height: 100%; width: 100%"
                  class="pr-0 pb-0 pt-0"
                  elevation="3"
                  v-if="mdAndDown!=true"
                >
                  <v-img
                    src="/img/fo.png"
                    alt="Imagen"
                    cover
                    height="100%"
                    class="elevation-6"
                  />
                  <v-img 
                    src="/img/footer.png"
                    style="position: fixed;"
                    height="100%"
                    class="elevation-6"
                  />
                </v-col>
              </v-row>
            </v-container>
          </v-app>
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
