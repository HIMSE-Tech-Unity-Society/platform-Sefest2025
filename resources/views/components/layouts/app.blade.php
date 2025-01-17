<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>

            </style>
        @endif
    </head>
    <body class="bg-[#48325A]">
        <div class="mx-auto justify-center flex flex-col items-center p-6">
            <div style="background-image: url('/img/bg-card.jpg')" class="px-6 pt-6 pb-9 bg-cover rounded-lg md:w-[640px] w-full text-white">
                <div class="flex items-center gap-4 pb-2">
                    <img src="/img/himse.png" alt="Himse" class="w-10">
                    <span class="font-bold text-center text-xl">x</span>
                    <img src="/img/telkomuniversity.png" alt="telkomuniversity" class="w-28">
                </div>
                <div class="flex items-center pb-6 md:px-9">
                    <img src="/img/sefest2025.png" alt="">
                </div>
                <p class="text-center md:px-9 md:text-lg text-xs font-extrabold md:font-bold oxanium">Creating Sustainable Futures with Software Solutions</p>
            </div>
            {{ $slot }}
        </div>
    </body>
</html>
