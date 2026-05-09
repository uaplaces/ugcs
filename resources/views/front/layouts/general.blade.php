<!doctype html>
<html lang="{{ $locale }}">
    <head>
        @include('front.include.head')
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container">
            @include('front.include.navbar')
        </div>
        @guest
            @include('auth.modal.login')
            @include('auth.modal.signup')
        @endguest
        @vite('resources/js/app.js')
        @stack('scripts')
        @guest
            @vite('resources/js/auth.js')
        @endguest
    </body>
</html>
