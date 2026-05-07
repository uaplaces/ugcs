<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<link rel="icon" href="{{ asset('build/assets/images/favicon.png') }}">
@vite('resources/css/app.css')
@stack('styles')
