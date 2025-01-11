<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}
        @hasSection('title')
            - @yield('title')
        @endif
    </title>
    @yield('styles')
</head>
<body>
@yield('content')
</body>
@yield('scripts')
</html>
