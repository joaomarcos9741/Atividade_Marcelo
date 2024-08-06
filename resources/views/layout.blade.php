<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">-->
    <title>Agenda</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
    @component('navbar')
    @endcomponent
    </div>
    <main role="main">
    <div class="container-fluid">
             @hasSection('content')
                        @yield('content')
             @endif
    </div>
    </main>
    <footer>
        <p class="text-center"><span class="text-muted">Todos os direitos reservados a &copy;Copyright</span></p>
    </footer>
    @hasSection ('javascript')
        @yield('javascript')
    @endif
</body>
</html>