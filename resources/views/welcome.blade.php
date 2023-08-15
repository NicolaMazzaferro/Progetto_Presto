<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    
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
    {{-- Carousel video Nicola--}}
    <header>
        <div class="d-flex justify-content-center text-center">
            <div class="container-titolo">
                <h1 class="mb-3 titolo-header">Presto</h1>
                <h5 class="mb-4 sottotitolo-header">
                    Vendilo Presto con noi.
                </h5>
            </div>
        </div>
        
        
        <div class="d-flex justify-content-center text-center">
            <form action="{{route('announcement_search')}}" method="get" class="container-searchbar">
                <input type="search" name="searched" class=" search-header me-3 " placeholder='Es. "Maglietta"' aria-label="Search">
                <button class="btn-search" type="submit">Cerca</button>
            </form>
        </div>
        
        
        
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade bg-body" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false">
            <div class="video-filter"></div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video autoplay muted loop>
                        <source src="./media/AdobeStock_221975011.mov" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="carousel-item">
                        <video autoplay muted loop>
                            <source src="./media/AdobeStock_209011994.mov" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video autoplay muted loop>
                                <source src="./media/AdobeStock_437450604.mov" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                    
                    <div class="d-flex justify-content-center">
                        <div class="container-triangle">
                            <div class="triangle"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="container-arrow">
                            <i class="fa-solid fa-angle-down arrow"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
                
    {{-- Fine Carousel video --}}
                
    {{-- Stats Nicola--}}
                
    <section class="container dati">
        <div class="row justify-content-around">
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-award-fill stats-item"></i>
                <h4 class="text-center text-bianco fs-5">Anni di esperienza</h4>
                <p class="text-center text-nero stats-number"><span id="firstNumber" class="number">0</span></p>
                
            </div>
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-people-fill stats-item"></i>
                <h4 class="text-center text-bianco fs-5">Skill professionali</h4>
                <p class="text-center text-nero stats-number"><span id="secondNumber" class="number">0</span></p>
            </div>
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-box-seam-fill stats-item"></i>
                <h4 class="text-center text-bianco fs-5">Prodotti totali</h4>
                <p class="text-center text-nero stats-number"><span id="thirdNumber" class="number">0</span></p>
            </div>
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-cart3 stats-item"></i>
                <h4 class="text-center text-bianco fs-5">Ordini ogni giorno</h4>
                <p class="text-center text-nero stats-number"><span id="fourthNumber" class="number">0</span></p>
            </div>
        </div>
    </section>
    
    {{-- END Stats --}}
                
    <!-- About us Nicola-->
                
    <section class="container container-about-us">
        <div class="row">
            <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center">
                <div class="quadrato d-flex align-items-center justify-content-center">
                    <div class="quadrato-orange">
                        <div class="img-about-1">
                            
                        </div>
                        <div class="img-about-2">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2">
                
            </div>
            <div class="col-12 col-md-5 wrapper-about-us">
                <h5 class="text-uppercase text-arancio fs-2 mb-4">// About us</h5>
                <h2 class="titolo-au text-uppercase fw-bolder">Traendo ispirazione dalle ultime tendenze</h2>
                <p class="fs-5 fw-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi itaque culpa ipsa porro dolorum, similique repellat qui commodi unde facere ullam adipisci est, tempora deleniti eveniet natus cum dolor nostrum!</p>
                <p class="fs-5 fw-medium">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quae id error ea veritatis corrupti perspiciatis ipsa optio illo eos?</p>
                <div class="row">
                    <div class="col-3">
                        <p class="fs-5"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i> Lorem</p>
                        <p class="fs-5"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i> Lorem</p>
                    </div>
                    <div class="col-3">
                        <p class="fs-5"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i> Lorem</p>
                        <p class="fs-5"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i> Lorem</p>
                    </div>
                </div>
                
                <div class="buttons">
                    <a href="/" class="myButton">About us
                        <span class="overlay"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
                
    <!-- END About us -->
                
    <x-cards-carousel :announcements="$announcements"></x-cards-carousel>
                
    <!-- Our Team Nicola-->
                
    <div class="container container-our-team">
        <div class="row text-center">
            <div class="col-12 text-arancio">
                <h5 class="fs-2">// IL NOSTRO TEAM</h5>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 text-nero mt-5 d-flex justify-content-center">
                <h1 class=" title-last-product titolo-au fw-bolder">Il nostro Team e Le Nostre Skills</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 mb-5">
                <div class="card card-our-team">
                    <img src="./media/im1.jpeg" class="card-img-top img-card-our-team" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nicola Mazzaferro</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Full Stack</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="card card-our-team">
                    <img src="./media/im2.jpeg" class="card-img-top img-card-our-team" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ilaria Amorotti</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Front-end</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="card card-our-team">
                    <img src="./media/im4.jpeg" class="card-img-top img-card-our-team" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Stefano Grandi</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Front-end</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-5">
                <div class="card card-our-team">
                    <img src="./media/im3.jpeg" class="card-img-top img-card-our-team" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gabriele Quiroz</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Full Stack</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    <!-- END Our Team -->
                
    {{-- Newsletter Nicola--}}
                
    <div class="container">
        <div class="row container-newsletter align-items-center">
            <div class="col-12 col-lg-6">
                <h3 class="title-newsletter">Iscriviti alla nostra Newsletter</h3>
            </div>
            <div class="col-12 col-lg-6">
                <form action="#" class="wrapper-newsletter align-items-center">
                    <input class="mail-newsletter" type="email" placeholder="Inserisci email">
                    <button class="btn-newsletter" type="submit">Invia</button>
                </form>
            </div>
        </div>
    </div>
                
    {{-- END Newsletter --}}
                
                
    {{-- footer Stefano --}}
                           
    <div class="container-fluid my-4">
        
        <footer class="text-center text-lg-start text-white" style="background-color: #322505">
        
            <div class="container p-4 pb-0">
                
                <section>
                    
                    <div class="row">
                        
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                The Codevengers
                            </h6>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus iusto deserunt obcaecati ab numquam rerum?
                            </p>
                        </div>
                        
                        <hr class="w-100 clearfix d-md-none" />
                        
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Creato da:</h6>
                            <p class="text-white">Gabriele</p>
                            <p class="text-white">Stefano</p>
                            <p class="text-white">Nicola</p>
                            <p class="text-white">Ilaria</p>
                        </div>
                        
                        <hr class="w-100 clearfix d-md-none" />
                         
                        <hr class="w-100 clearfix d-md-none" />
                        
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contatti</h6>
                            <p><i class="fas fa-home mr-3"></i> Lorem ipsum dolor sit.</p>
                            <p><i class="fas fa-envelope mr-3"></i> Lorem ipsum dolor sit.</p>
                            <p><i class="fas fa-phone mr-3"></i> Lorem ipsum dolor sit.</p>
                            <p><i class="fas fa-print mr-3"></i> Lorem ipsum dolor sit.</p>
                        </div>
                        
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
                            
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998"href="#!"role="button"><i class="fab fa-facebook-f"></i></a>
                            
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"role="button"><i class="fab fa-twitter"></i></a>
                            
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"role="button"><i class="fab fa-google"></i></a>
                                
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>    
                                 
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                            
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"role="button"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                                            
                </section>
                        
                <div class="text-center p-3">
                    © 2020 Copyright: The Codevengers
                    
                </div>

            </div>
        
        </footer>
        
    </div>
    {{-- end footer Stefano --}}


































    <script src="{{asset('swiper-bundle.min.js')}}"></script>
    
    
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>