<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Aos Animate --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
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

    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <link rel="icon" href="{{ asset('../favicon.svg')}}" type="image/x-icon" />
    
    <link rel="stylesheet" href="{{asset('swiper-bundle.min.css')}}">


    @livewireStyles
    @vite('resources/css/app.css')

    <title>
        Presto.it
    </title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-header />

    <div>
        <a class="returnHome" href="#"><i class="fa-solid fa-circle-arrow-up buttonHome"></i></a>
    </div>
    
        
    <div class="container my-5">
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
    </div>
    
    


    {{$slot}}
    <x-footer></x-footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://js.stripe.com/v3/"></script>
    
    <script src="{{asset('swiper-bundle.min.js')}}"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>