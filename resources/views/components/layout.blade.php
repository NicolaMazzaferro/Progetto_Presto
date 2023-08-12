<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    {{-- CDN Carosello video ecc ... - Nicola --}}
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
    
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    
    
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    {{-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> --}}
    
    <link rel="stylesheet" href="{{asset('swiper-bundle.min.css')}}">


    @livewireStyles
    @vite('resources/css/app.css')

    <title>
        Presto.it
    </title>
</head>
<body>
    <x-navbar></x-navbar>

    
    
    @if (session('access.denied'))
    <div class="alert alert-danger">
        {{ session('access.denied') }}
    </div>
    @endif
    
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    

    
    
    
    
    
    
    
    {{$slot}}
    
    
    
    <!-- MDB (Carosello video) - Nicola-->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
    ></script>
    <script src="{{asset('swiper-bundle.min.js')}}"></script>
    
    
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>