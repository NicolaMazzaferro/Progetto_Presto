{{--Parte delle card carousel con lo swiper  ps.da sistemare  --}}
<!-- Last Product -->

<div class="container overflow-hidden">
    <div class="row bg-bianco justify-content-center text-center container-last-product">
        
        <div data-aos="fade-down-right"data-aos-duration="1000">
            <h5 class="text-arancio fw-bolder mb-4">{{__('ui.ultimi')}}</h5>
        </div>
        
        <div data-aos="fade-down-left" data-aos-duration="1000">
            <h2 class="titolo-au fw-2 title-last-product text-center">{{__('ui.esplora')}}<br>{{__('ui.dei')}}</h2>
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


