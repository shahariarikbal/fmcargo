<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    @include('layouts.admin.includes.style')
</head>
<body class="sb-nav-fixed">
@include('layouts.admin.includes.header')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('layouts.admin.includes.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
            @yield('content')
            </div>
        </main>
        @include('layouts.admin.includes.footer')
    </div>
</div>
@include('layouts.admin.includes.script')
@stack('script')
</body>
</html>
