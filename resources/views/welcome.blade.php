<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="mx-auto max-w-screen-xl items-center px-4 sm:px-6 lg:px-8">
        <livewire:header />
    
       <livewire:hero-section/>

       <livewire:product-section/>

        <!-- <livewire:about/> -->

       <livewire:footer/>
    </body>
</html>
