<x-layout> 
    <div class="container  bg-bianco p-5">
        <h1 class="text-center mb-5">{{__('ui.DET')}}</h1>
        <div class="row">
            
            <div class="col-12 col-md-6">
                
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @if (count($announcement->images) > 0)
                            @foreach ($announcement->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{$image->getUrl(300, 300)}}">
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <img src="{{asset('media/default.jpg')}}">
                            </div>
                        @endif
                    </div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @if (count($announcement->images))
                            @foreach ($announcement->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{Storage::url($image->path)}}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
            
            <div class="col-12 col-md-6 dettaglio" data-aos="fade-up">

                <h5 class="card-title text-uppercase text-arancio pt-3">{{$announcement->title}}</h5>
                <p class="lead pt-3 text-nero">{{$announcement->description}}</p>
                <p class="fw-semibold text-nero">€{{$announcement->price}}</p>
            </div>
        </div>
    </div>
    
    
    
</x-layout>

<x-offcanva />

