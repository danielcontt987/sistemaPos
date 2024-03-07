<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema</title>
    @vite('resources/sass/app.scss')

</head>

<body>
    {{-- <div id="app">
     <v-app >
        <App></App>
     </v-app>
   </div> --}}

    <div id="loader" class="loader">
        <div class="loader-icon"></div>
    </div>

    <div id="app" class="hidden">
        <!-- Contenido principal -->
        <App></App>
    </div>

    @vite('resources/js/app.js')

    <script>
        window.addEventListener('load', () => {
            setTimeout(() => {
                const loader = document.getElementById('loader');
                const app = document.getElementById('app');
                if (loader) {
                    loader.style.display = 'none';
                    app.classList.remove(
                        'hidden'); // Elimina la clase 'hidden' para mostrar el contenido de la app
                }
            }, 1500);
        });
    </script>
</body>

</html>
