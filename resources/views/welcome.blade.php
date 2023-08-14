<x-layout>

    <x-header-carousel-video />

    <section class="container dati vh-40">
        <div class="row justify-content-around">
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-award-fill text-light fs-3"></i>
                <h4 class="text-center text-light fs-3">Anni di esperienza</h4>
            </div>
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-people-fill text-light fs-3"></i>
                <h4 class="text-center text-light fs-3">Skill professionali</h4>
            </div>
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-box-seam-fill text-light fs-3"></i>
                <h4 class="text-center text-light fs-3">Prodotti totali</h4>
            </div>
            <div class="col-12 col-md-3 dato pt-3 text-center">
                <i class="bi bi-cart3 text-light fs-3"></i>
                <h4 class="text-center text-light fs-3">Ordini ogni giorno</h4>
            </div>
        </div>
    </section>

    <section class="container my-5 vh-60">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="quadrato"></div>
            </div>
            <div class="col-12 col-md-6">
                <h4 class="text-uppercase text-black">//About us</h4>
                <h2 class="titolo-au text-uppercase fw-bolder">Traendo ispirazione dalle ultime tendenze</h2>
                <p class="fs-5 fw-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi itaque culpa ipsa porro dolorum, similique repellat qui commodi unde facere ullam adipisci est, tempora deleniti eveniet natus cum dolor nostrum!</p>
                <p class="fs-5 fw-medium">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quae id error ea veritatis corrupti perspiciatis ipsa optio illo eos?</p>
                <div class="row">
                    <div class="col-3">
                        <p class="fs-5"><i class="bi bi-check-lg text-warning fs-2"></i> Lorem</p>
                        <p class="fs-5"><i class="bi bi-check-lg text-warning fs-2"></i> Lorem</p>
                    </div>
                    <div class="col-3">
                        <p class="fs-5"><i class="bi bi-check-lg text-warning fs-2"></i> Lorem</p>
                        <p class="fs-5"><i class="bi bi-check-lg text-warning fs-2"></i> Lorem</p>
                    </div>
                </div>
                {{-- Da rivedere il bottone --}}
                <div class="buttons">
                    <a href="/" class="myButton">About us
                    {{-- <span class="overlay"></span> --}}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-cards-carousel :announcements="$announcements"></x-cards-carousel>




</x-layout>