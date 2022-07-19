<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="#">
            @livewire('navigation-menu')
            <div id="main" class="m-8 grid grid-cols-6 gap-1 justify-evenly">
                @include('sidevar')
                <main class="bg-green-300 col-span-5 rounded-lg h-auto">
                    {{ $slot }}
                </main>


            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
