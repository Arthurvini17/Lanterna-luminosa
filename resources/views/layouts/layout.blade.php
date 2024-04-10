<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Teste</title>
</head>

<body>
    <header class="bg-slate-800 drop-shadow-xl p-4">
        <nav class="flex justify-between items-center">
            <div>
                <p>Instituto Lanterna Luminosa</p>
            </div>

            <div class="flex items-center gap-1">
                <p>Sobre o Instituto</p>
                <button class="m-3 rounded-xl bg-yellow-400 p-3">Buscar ajuda</button>
            </div>
        </nav>
    </header>

    @yield('content')
</body>

</html>
