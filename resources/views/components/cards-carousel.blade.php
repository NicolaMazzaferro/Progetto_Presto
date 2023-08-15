{{--Parte delle card carousel con lo swiper  ps.da sistemare  --}}
{{-- <div class="col-12 col-md-3">
    <div class="card-last-news mx-1 swiper-slide">
        <img src="https://picsum.photos/200" class="card-img-top" alt="foto">
        <div class="card-body p-2">
            <p class="card-subtitle color-v text-uppercase text-decoration-none">Categoria: {{$announcement->category ? $announcement->category->name : ''}}</p>
            <h4 class="card-title color-g fw-bolder">{{$announcement->title}}</h4>
            <p class="card-text color-g">{{$announcement->description}}</p>
            <p class="card-subtitle color-g">{{$announcement->price}} €</p>
            <a href="{{route('announcement_show', compact('announcement'))}}" class="btn bg-v color-l my-2">Dettaglio</a>
            <p class="card-footer color-g">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
        </div>
    </div>
</div> --}}
{{-- <div class="body-container my-5 ">
    <div class="container-cards swiper">
        <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-box">
                        <img src="https://picsum.photos/200" alt="" />
                    </div>
                    <div class="profile-details">
                        <img src="images/profile/profile1.jpg" alt="" />
                        <div class="name-job">
                            <h3 class="name">David Cardlos</h3>
                            <h4 class="job">Full Stack Developer</h4>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-box">
                        <img src="https://picsum.photos/200" alt="" />
                    </div>
                    <div class="profile-details">
                        <img src="images/profile/profile2.jpg" alt="" />
                        <div class="name-job">
                            <h3 class="name">Siliana Ramis</h3>
                            <h4 class="job">Photographer</h4>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-box">
                        <img src="https://picsum.photos/200" alt="" />
                    </div>
                    <div class="profile-details">
                        <img src="images/profile/profile3.jpg" alt="" />
                        <div class="name-job">
                            <h3 class="name">Richard Bond</h3>
                            <h4 class="job">Data Analyst</h4>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-box">
                        <img src="https://picsum.photos/200" alt="" />
                    </div>
                    <div class="profile-details">
                        <img src="images/profile/profile4.jpg" alt="" />
                        <div class="name-job">
                            <h3 class="name">Priase</h3>
                            <h4 class="job">App Developer</h4>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-box">
                        <img src="https://picsum.photos/200" alt="" />
                    </div>
                    <div class="profile-details">
                        <img src="images/profile/profile5.jpg" alt="" />
                        <div class="name-job">
                            <h3 class="name">James Laze</h3>
                            <h4 class="job">Blogger</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</div> --}}



<!-- Last Product -->

<div class="container">
    <div class="row bg-bianco justify-content-center text-center container-last-product">
        
        <h5 class="text-arancio fs-2 mb-4">// ULTIMI PRODOTTI</h5>
        <h2 class="titolo-au fw-bolder title-last-product">Esplora le categorie dei nostri prodotti</h2>
        
        <div class="container swiper">
            <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                    
                    @foreach ($announcements as $announcement)
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="./media/about1.webp" alt="" />
                        </div>
                        <div class="profile-details">
                            <div class="name-job">
                                <h3 class="name">{{$announcement->title}}</h3>
                                <h4 class="job">{{$announcement->category ? $announcement->category->name : ''}}</h4>
                                <p class="text-tronco">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo velit obcaecati laboriosam omnis quos expedita placeat hic itaque delectus iusto ipsam cupiditate similique repellendus asperiores praesentium dolorum, excepturi in repudiandae!</p>
                                <p class="lead">€ 100,00</p>
                                <a class="btn btn-outline-primary" href="{{route('announcement_show', compact('announcement'))}}">Dettaglio</a>
                            </div>
                        </div>
                    </div>
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


