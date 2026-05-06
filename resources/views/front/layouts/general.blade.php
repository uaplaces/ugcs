<!doctype html>
<html lang="{{ $lang }}">
    <head>
        @include('front.include.head')
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container">
            @include('front.include.navbar')
            @vite('resources/js/app.js')
            @stack('scripts')
        </div>
    </body>
</html>
