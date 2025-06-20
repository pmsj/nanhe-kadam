<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="mytheme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>
    @livewireStyles
    {{-- Vanilla Calendar --}}
    <script src="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro@2.9.6/build/vanilla-calendar.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro@2.9.6/build/vanilla-calendar.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased scroll-smooth">

    {{-- The navbar with `sticky` and `full-width` --}}
    <x-nav sticky full-width class="border-none bg-neutral">
        <x-top-navbar />
    </x-nav>

    {{-- The main content with `full-width` --}}
    <x-main with-nav full-width>

        {{-- This is a sidebar that works also as a drawer on small screens --}}
        {{-- Notice the `main-drawer` reference here --}}
        <x-slot:sidebar 
            drawer="main-drawer" 
            collapsible class="" 
            collapse-text="Hide menu" 
            class="bg-white">
            {{-- sidebar main content --}}
            <x-sidebar />
        </x-slot:sidebar>

        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        
        <livewire:footer.footer />
        </x-slot:content>

    </x-main>

    {{-- TOAST area --}}
    <x-toast />
    {{-- Footer --}}

    @livewireScripts
</body>

</html>