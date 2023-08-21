{{--Parte delle card carousel con lo swiper  ps.da sistemare  --}}
<!-- Last Product -->

<div class="container overflow-hidden">
    <div class="row bg-bianco justify-content-center text-center container-last-product">
        
        <div data-aos="fade-down-right"data-aos-duration="1000">
            <h5 class="text-arancio fs-2 mb-4">// ULTIMI PRODOTTI</h5>
        </div>
        
        <div data-aos="fade-down-left" data-aos-duration="1000">
            <h2 class="titolo-au fw-bolder title-last-product text-center">Esplora le categorie<br>dei nostri prodotti</h2>
        </div>

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


