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
    @include('front.modal.register')
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
