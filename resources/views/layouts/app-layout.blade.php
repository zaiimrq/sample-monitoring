<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring | @yield('title', 'NASON UTI')</title>
    {{-- Styles --}}
    <x-styles></x-styles>
</head>

<body>

    {{-- Navbar --}}
    @if (Str::startsWith(Request::path(), 'admin'))
    <x-admin-navbar></x-admin-navbar>
    @elseif (Str::startsWith(Request::path(), 'timses'))
    <x-timses-navbar></x-timses-navbar>
    @endif

    {{ $slot }}

    {{-- Footer --}}
    @if (Str::startsWith(Request::path(), 'admin'))
    <x-footer></x-footer>
    @endif

    {{-- JavaScript --}}
    <x-scripts></x-scripts>
</body>

</html>