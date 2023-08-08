<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devstagram | @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">DevStagram</h1>
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="/login">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">Register</a>
            </nav>
        </div>
    </header>
    
    <section class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('title')
        </h2>
        @yield('content')
    </section>

    <footer class=" mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        Devstagram - all rigths reserved &copy; 
        {{ now()->year }}
        {{-- @php
            echo date('Y');
        @endphp --}}
    </footer>
</body>
</html>