<x-layout> 
    <div class="container bg-bianco p-5">
        <h1 class="text-center mb-5">{{__('ui.DET')}}</h1>
        <div class="row">
            
            <div class="col-12 col-md-6">
                {{-- Carousel --}}
            </div>
            
            <div class="col-12 col-md-6">
                <h5 class="card-title text-uppercase text-arancio pt-3">{{$announcement->title}}</h5>
                <p class="lead pt-3 text-nero">{{$announcement->description}}</p>
                <p class="fw-semibold text-nero">€{{$announcement->price}}</p>
            </div>
        </div>
    </div>
    
    <x-offcanva></x-offcanva>
    
</x-layout>

