<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CoffeeOS Preview</title>
    @vite(['resources/js/app.css', 'resources/js/coffeeos.js'])
</head>
<body>
    <div id="coffeeos-app"></div>
</body>
</html>
