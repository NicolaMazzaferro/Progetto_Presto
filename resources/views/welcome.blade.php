<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
    
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
    
    <link rel="icon" href="../favicon.svg" type="image/x-icon" />
    {{-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> --}}
    
    <link rel="stylesheet" href="{{asset('swiper-bundle.min.css')}}">
    
    
    @livewireStyles
    @vite('resources/css/app.css')
    
    <title>
        Presto.it
    </title>
</head>
<body>
    <x-navbar/>
    {{-- Carousel video Nicola--}}

    
    
    <x-header-carousel-video />
    
    {{-- Fine Carousel video --}}
    
    {{-- Start scroll to navbar --}}
    <div>
        <a class="returnHome" href="#"><i class="fa-solid fa-circle-arrow-up buttonHome"></i></a>
    </div>
    {{-- End scroll to navbar --}}
    
    {{-- Stats Nicola--}}
    <x-stats />
    
    {{-- END Stats --}}
    
    <!-- About us Nicola-->
    
    <x-about-us></x-about-us>
    
    <!-- END About us -->
    
    <x-cards-carousel :announcements="$announcements"></x-cards-carousel>
    
    <!-- Our Team Nicola-->
    
    <x-our-team></x-our-team>
    
    <!-- END Our Team -->
    
    {{-- Newsletter Nicola--}}
    
    <x-newsletter></x-newsletter>
    
    {{-- END Newsletter --}}
    
    {{-- footer Stefano --}}                     
    
    <x-footer></x-footer>
    
    {{-- end footer Stefano --}}
    {{-- <x-offcanva></x-offcanva> --}}
    
    <script src="{{asset('swiper-bundle.min.js')}}"></script>
    
    {{-- aos js --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>