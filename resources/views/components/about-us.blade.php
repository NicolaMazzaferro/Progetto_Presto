<section class="container container-about-us">
    <div class="row">
        <div class="col-12 col-lg-5 d-flex align-items-center justify-content-end">
            <div class="quadrato d-flex align-items-center justify-content-center">
                <div class="quadrato-orange">
                    <div class="img-about-1" data-aos="zoom-in">
                        
                    </div>
                    <div class="img-about-2" data-aos="zoom-in-up">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-2">
            
        </div>
        <div class="col-12 col-md-5 ">
            <h5 class="text-uppercase text-arancio fs-2 mb-4">{{__('ui.work')}}</h5>
            <h2 class="titolo-au text-uppercase fw-bolder">{{__('ui.join')}}</h2>
            <p class="fs-5 fw-medium">{{__('ui.enter')}} 
                <hr>
                {{__('ui.p1')}}</p>
                <p class="{{-- fs-5 fw-medium --}}">{{__('ui.p2')}}</p>
                <div class="row">
                    <div class="col-3">
                        <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i>{{__('ui.tic1')}}</p>
                        <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i>{{__('ui.tic2')}}</p>
                    </div>
                    <div class="col-3 mx-5 px-5">
                        <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i>{{__('ui.tic3')}}</p>
                        <p class="fs-5 d-flex mt-3"><i class="fa-solid fa-check text-arancio fs-4 me-3"></i>{{__('ui.tic4')}}</p>
                    </div>
                </div>
                
                {{-- <div class="buttons">
                    <a href="/" class="myButton">About us
                        <span class="overlay"></span>
                    </a>
                </div> --}}
                
                <a href="{{route("workWithUs")}}" class="btn-nicola mt-3">
                    {{__('ui.unisciti')}}
                </a>
            </div>
        </div>
    </section>