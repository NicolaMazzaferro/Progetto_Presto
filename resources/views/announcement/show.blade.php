<x-layout> 
    <div class="container bg-bianco p-5">
        <h1 class="text-center mb-5">DETTAGLI PRODOTTO</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class = "card-wrapper">
                    <div class = "card-show">
                        <div class = "product-imgs">
                            <div class = "img-display">
                                <div class = "img-showcase">
                                    <img class="img-show" src = "https://picsum.photos/200/300" alt = "shoe image">
                                    <img class="img-show" src = "https://picsum.photos/200/301" alt = "shoe image">
                                    <img class="img-show" src = "https://picsum.photos/200/302" alt = "shoe image">
                                    <img class="img-show" src = "https://picsum.photos/200/303" alt = "shoe image">
                                </div>
                            </div>
                            <div class = "img-select">
                                <div class = "img-item">
                                    <a href = "#" data-id = "1">
                                        <img class="img-show" src = "https://picsum.photos/200/300" alt = "shoe image">
                                    </a>
                                </div>
                                <div class = "img-item">
                                    <a href = "#" data-id = "2">
                                        <img class="img-show" src = "https://picsum.photos/200/301" alt = "shoe image">
                                    </a>
                                </div>
                                <div class = "img-item">
                                    <a href = "#" data-id = "3">
                                        <img class="img-show" src = "https://picsum.photos/200/302" alt = "shoe image">
                                    </a>
                                </div>
                                <div class = "img-item">
                                    <a href = "#" data-id = "4">
                                        <img class="img-show" src = "https://picsum.photos/200/303" alt = "shoe image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h5 class="card-title text-uppercase text-arancio pt-3">{{$announcement->title}}</h5>
                <p class="lead pt-3 text-nero">{{$announcement->description}}</p>
                <p class="fw-semibold text-nero">€{{$announcement->price}}</p>
            </div>
        </div>
    </div>
    
    
    
</x-layout>

