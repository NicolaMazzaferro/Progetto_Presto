<x-layout>
    <x-offcanva></x-offcanva>
    <div class=" rejected-ads container p-5">
        @if (count($announcement_reject))
        <h1 class="pb-5 text-center">Ecco l'ultimo annuncio rifiutato</h1>
        @else
        <h1 class="pb-5 text-center">Non ci sono annunci rifiutati</h1>
        @endif
        @if ($announcement_reject)
        
        <div class="row">
            @foreach($announcement_reject as $item)
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center text-center">
                
                <div class="card my-5">
                    {{-- carousel --}}
                    <div id="{{$item->id}}" class="carousel slide">
                        @if(count($item->images))
                        <div class="carousel-inner h-25">
                            @foreach ($item->images as $image)
                            <div class="carousel-item @if ($loop->first)active @endif">
                                <img src="{{Storage::url($image->path)}}" class="card-img-top" height="350px" alt="...">
                            </div>
                            @endforeach
                        </div>
                        @else
                        <img src="\storage\default.jpg" class="card-img-top" height="350px" alt="...">
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#{{$item->id}}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#{{$item->id}}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    {{-- end carousel --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <p class="card-title">{{__('ui.pubblicato')}} {{$item->created_at->format('d/m/Y')}}</p>
                    </div>
                    <div class="row p-4">
                        <div class="col-12">
                            <form action="{{route('revisor_accept_announcement', ['announcement' => $item])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">{{__('ui.accetta')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @endif
        
    </div>
    
    
</x-layout>

<x-offcanva></x-offcanva>