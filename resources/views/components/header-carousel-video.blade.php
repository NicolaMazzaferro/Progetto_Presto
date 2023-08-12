{{-- Carousel Video Header - Nicola --}}


<!--Main Navigation-->
<header>

    
    <!-- Carousel wrapper -->
    <div
    id="introCarousel"
    class="carousel slide carousel-fade shadow-2-strong "
    data-mdb-ride="carousel"
    data-mdb-interval="4000"
    data-mdb-loop="true"
    >
    <!-- Indicators -->
    <ol class="carousel-indicators video-filter h-100 m-0">
        <li class=" sarch-carousel">
            <div
            class="d-flex justify-content-center align-items-center h-100"
            >
            <div class="text-white text-center">
                <h1 class="mb-3 titolo-header">Presto</h1>
                <h5 class="mb-4 sottotitolo-header">
                    Vendilo Presto con noi.
                </h5>
                {{-- serachbar --}}
    
                <form action="{{route('announcement_search')}}" method="get" class="d-flex container-item-carousel">
                    <input type="search" name="searched" class=" search-header form-control me-2 " placeholder="Search" aria-label="Search">
                    <button class="btn-nav" type="submit">Search</button>
                </form>
    
                {{-- end searchbar --}}
                <a
                class="btn btn-header"
                href="#"
                role="button"
                rel="nofollow"
                >Accedi</a
                >
                <a
                class="btn btn-header"
                href="#"
                role="button"
                >Registrati</a
                >
            </div>
        </div>
    </li>
    <ol class="carousel-indicators">

        <li
        data-mdb-target="#introCarousel"
        data-mdb-slide-to="0"
        class="active"
        ></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>

    </ol>
    </ol>
    
    <!-- Inner -->
    <div class="carousel-inner ">
        <!-- Single item -->
        <div class="carousel-item active">
            <video
            style="min-width: 100%; min-height: 100%"
            playsinline
            autoplay
            muted
            loop
            >
            <source
            class="h-100"
            src="/media/AdobeStock_221975011.mov"
            type="video/mp4"
            />
        </video>
        {{--  --}}
</div>

<!-- Single item -->
<div class="carousel-item">
    <video
    style="min-width: 100%; min-height: 100%"
    playsinline
    autoplay
    muted
    loop
    >
    <source
    class="h-100"
    src="/media/AdobeStock_209011994.mov"
    type="video/mp4"
    />
</video>
{{--  --}}
</div>

<!-- Single item -->
<div class="carousel-item">
    <video
    style="min-width: 100%; min-height: 100%"
    playsinline
    autoplay
    muted
    loop
    >
    <source
    class="h-100"
    src="/media/AdobeStock_437450604.mov"
    type="video/mp4"
    />
</video>
{{--  --}}
</div>
</div>
<!-- Inner -->

<!-- Controls -->
{{-- <a
class="carousel-control-prev"
href="#introCarousel"
role="button"
data-mdb-slide="prev"
>
<span aria-hidden="true"><i class="fa-solid fa-chevron-left fa-2xl"></i></span>
<span class="sr-only">Previous</span>
</a>
<a
class="carousel-control-next"
href="#introCarousel"
role="button"
data-mdb-slide="next"
>
<span aria-hidden="true"><i class="fa-solid fa-chevron-right fa-2xl"></i></span>
<span class="sr-only">Next</span>
</a> --}}
<!-- Carousel wrapper -->
</header>
<!--Main Navigation-->