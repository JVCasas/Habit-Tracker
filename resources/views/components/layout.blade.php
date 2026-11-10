<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{config('app.name')}}</title>
</head>
<body class="habit-bg font-mono relative min-h-screen flex flex-col justify-between">
    <x-header/>
    {{ $slot }}
    <x-footer/>
    <x-toast/>
    <script src="{{ Vite::asset('resource/js/app.js') }}"></script>
</body>
</html>