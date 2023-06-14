<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/08cc16a3b6.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        @stack('css')
    </head>
    <body class="font-sans antialiased text-gray-800 dark:text-gray-300">
        <x-banner />
            @include('layouts.navs.navigation-admin')

            {{-- <div class="col-span-6">
                <x-jet-label>Título</x-jet-label>
                <x-jet-input type="text" class="w-full mt-1" />
                <x-jet-input-error for="createForm.title" />
            </div> --}}

        </div>

        @stack('modals')

        @livewireScripts
        @stack('js')
    </body>

</html>
