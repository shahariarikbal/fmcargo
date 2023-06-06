<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Pavicon ICon -->
    @include('layouts.frontend.includes.style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- Header -->
@include('layouts.frontend.includes.header')
<!-- Header END -->

<main class="main-section">
    <!-- Fixed Cart -->
    @yield('content')
    <!-- /Blog -->
</main>

<!-- Footer -->
@include('layouts.frontend.includes.footer')
<!-- /Footer -->

@include('layouts.frontend.includes.script')
@stack('script')
</body>
</html>
