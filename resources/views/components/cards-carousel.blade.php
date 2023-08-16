{{--Parte delle card carousel con lo swiper  ps.da sistemare  --}}
<!-- Last Product -->

<div class="container">
    <div class="row bg-bianco justify-content-center text-center container-last-product">
        
        <h5 class="text-arancio fs-2 mb-4">// ULTIMI PRODOTTI</h5>
        <h2 class="titolo-au fw-bolder title-last-product">Esplora le categorie dei nostri prodotti</h2>
        
        <div class="container swiper">
            <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                    
                    @foreach ($announcements as $announcement)
                    <x-card :announcement="$announcement"/>
                    @endforeach
                    
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<!-- END Last Product -->


