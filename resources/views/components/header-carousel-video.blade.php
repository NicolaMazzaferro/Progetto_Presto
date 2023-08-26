<header class="position-relative">
    <div class="d-flex justify-content-center text-center">
        
        <div class="container-titolo">
            <div class="container">
                @if (session('message_logout'))
                <div class="alert alert-success">
                    {{ session('message_logout') }}
                </div>
                @endif
                @if (session('message_newsletter'))
                <div class="alert alert-success">
                    {{ session('message_newsletter') }}
                </div>
                @endif
            </div>
            <h1 class="mb-3 titolo-header">Presto</h1>
            <h5 class="mb-4 sottotitolo-header">
                {{__('ui.slogan')}}
            </h5>
        </div>
    </div>
    
    
    <div class="d-flex justify-content-center text-center">
        <form action="{{route('announcement_search')}}" method="get" class="container-searchbar">
            <input type="search" name="searched" class=" search-header me-3 " placeholder='Es. T-shirt' aria-label="Search">
            <button class="btn-search text-nero" type="submit">{{__('ui.cerca')}}</button>
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
                
                
                {{-- <div class="d-flex justify-content-center">
                    <div class="container-triangle">
                        <div class="triangle"></div>
                    </div>
                </div> --}}
                
                <div class="d-flex justify-content-center">
                    <div class="container-arrow" id="arrow_header">
                        <a href="#stats"><i class="fa-solid fa-angle-down arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="triangle"></div>
</header>