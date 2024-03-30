<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring | @yield('title', 'NASON UTI')</title>
    {{-- Styles --}}
    <x-styles />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.js"></script>
</head>

<body>
    {{-- Navbar --}}
    @if (Str::startsWith(Request::path(), 'admin'))
    <x-admin-navbar />
    @elseif (Str::startsWith(Request::path(), 'timses'))
    <x-timses-navbar />
    @endif


    {{ $slot }}

    {{-- Footer --}}
    @if (Str::startsWith(Request::path(), 'admin'))
    <x-footer />
    @endif

    {{-- JavaScript --}}
    <x-scripts />
</body>

</html>