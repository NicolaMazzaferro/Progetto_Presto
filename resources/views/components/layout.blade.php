<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-header></x-header>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{$slot}}

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>