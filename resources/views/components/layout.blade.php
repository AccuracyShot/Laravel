<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Controle de Séries</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="{{ asset('js/darkmode.js') }}" defer></script>

</head>
<body class=" font-sans antialiased bg-gray-100 min-h-screen">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <div>
            <a href="{{ route('series.index') }}" class="text-lg font-bold text-gray-800">Home</a>
        </div>
    
        <div>
            @auth
            <form action="{{ route('logout') }}" method="post" class="p-3">
                @csrf
                <button class="text-blue-500">Sair</button>
            </form>
            @endauth
    
            @guest
            <a href="{{ route('login') }}" class="p-3 text-blue-500">Entrar</a>
            @endguest
        </div>
    </nav>
    <div class="flex justify-center">
        <div class="w-full sm:w-1/2 lg:w-1/3 bg-white p-6 rounded-lg">
            <h1 class="text-2xl font-medium mb-1">{{ $title }}</h1>
    
            @isset($mensagemSucesso)
                <div class="bg-green-500 text-white px-4 py-2 rounded font-medium w-full">
                    {{ $mensagemSucesso }}
                </div>
            @endisset
    
            @if ($errors->any())
                <div class="bg-red-500 text-white px-4 py-2 rounded font-medium w-full">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            {{ $slot }}
        </div>
    </div>
</body>
</html>
