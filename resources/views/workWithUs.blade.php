<x-layout>

    <section class="container container-about-us">
        <div class="row">


            <div class="col-12 col-md-5 wrapper-about-us">
                <h5 class="text-uppercase text-arancio fs-2 mb-4">// Lavora con Noi</h5>
                <h2 class="titolo-au text-uppercase fw-bolder">Entra nel nostro Team!</h2>
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
                
                <form class="d-flex flex-column align-items-center" method="POST" action="{{route('revisor_become')}}">
                    @csrf
                    <div class="mb-3 w-50">
                        
                    
                    <button type="submit" class="btn bg-arancio fs-4 mt-5">Invia Candidatura</button>
                </form>
            </div>
        </div>
            <div class="col-12 col-md-2">
                
            </div>

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
            
    </section>
    

</x-layout>