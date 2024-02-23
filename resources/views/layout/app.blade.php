<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        @vite(['resources/css/app.css','resources/css/styles.css','resources/js/animeEffects.js','resources/js/app.js'])
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
        <title>Portfolio Pedro Amair</title>
    </head>
    <body class="bg-black max-w-[2600px]">
        
       <div class="w-4/5 m-auto">@yield('content')</div>

       <footer>
            <div class="bg-gray-300 p-5 w-full mx-auto">
                <p class="text-md text-zinc-900 font-black text-center">Pedro Amair - {{__('messages.copyright')}} &#9400 {{ date('Y') }}</p>
            </div>
        </footer>

        @livewireScripts
        @livewire('wire-elements-modal')
    </body>
</html>