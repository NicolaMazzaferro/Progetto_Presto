<x-layout>
    
    
    <div class=" revisor container p-5">
        @if (count($announcement_to_check))
        <h1 class="pb-5 text-center">{{__('ui.eccolo')}}</h1>
        @else
        <h1 class="pb-5 text-center">{{__('ui.no-ads')}}</h1>
        @endif
        {{-- <h1 class="pb-5 text-center">{{$announcement_to_check ? "Non ci sono annunci da revisionare":"Ecco l'annuncio da revisionare"}}</h1> --}}
        @if ($announcement_to_check)
        
        <div class="row text-center">
            @foreach($announcement_to_check as $check )
            <div class="col-12 col-md-4">
                <div class="card my-5">
                    {{-- carousel --}}
                    <div id="carousel_{{$check->id}}" class="carousel slide">
                        @if(count($check->images))
                        <div class="carousel-inner h-25">
                            @foreach ($check->images as $index => $image)
                            <div class="carousel-item @if ($loop->first)active @endif">
                                <img src="{{$image->getUrl(300, 300)}}" class="card-img-top" height="350px" alt="...">
                                
                                {{-- Affidabilità --}}
                                <div class="row">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning fs-6 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$check->id}}_{{$index}}">
                                        {{__('ui.rave')}}
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal_{{$check->id}}_{{$index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('ui.rave')}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-8">
                                                        <div class="card-body text-start">
                                                            <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                                            <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                                            <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                                            <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                                            <p>Contenuto Inappropriato: <span class="{{$image->racy}}"></span></p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-12"> 
                                                        <div class="card-body text-start">
                                                            <h5>Tags</h5>
                                                            <div class="p-2">
                                                                @if ($image->labels)
                                                                @foreach ($image->labels as $label)
                                                                <p class="d-inline">{{$label}},</p>
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer justify-content-center ">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end Affidabilità --}}
                            </div>
                            @endforeach
                        </div>
                            @else
                        <img src="\media\default.jpg" class="card-img-top" height="350px" alt="...">
                        <div class="row revisione-immagini bg-body-secondary">
                            <a tabindex="0" class="btn m-0 p-0 border border-0" role="button"  data-bs-placement="top" data-bs-toggle="popover"   data-bs-title="Non sono presenti immagini."> Non ci sono dettagli</a>
                      </div>
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_{{$check->id}}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__('ui.previous')}}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_{{$check->id}}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{__('ui.next')}}</span>
                        </button>
                    </div>
                    {{-- end carousel --}}
                    
                    {{-- Body card --}}
                    
                    <div class="card-body mt-4">
                        <h5 class="card-title fw-bold">{{$check->title}}</h5>
                        <p class="card-text text-tronco">{{$check->description}}</p>
                        <p class="card-text ms-2 mt-5 fw-bolder bg-bianco w-25 border border-warning border-2 p-2 rounded-3">€ {{$check->price}}</p>
                        
                    </div>
                    <div class="row p-4">
                        <div class="col-12 col-md-4">
                            <form action="{{route('revisor_accept_announcement', ['announcement' => $check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">{{__('ui.accetta')}}</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-4">
                            <form action="{{route('revisor_reject_announcement', ['announcement' => $check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger">{{__('ui.rifiuta')}}</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-4">
                            <form action="{{route('announcement_show', ['announcement' => $check])}}" method="get">
                                @csrf
                                @method('get')
                                <button type="submit" class="btn btn-outline-primary mb-4">{{__('ui.DE')}}</button>
                            </form>
                        </div>
                        
                        
                    </div>
                    <p class="card-footer fw-bolder fs-6 m-0">{{__('ui.pubblicato')}} {{$check->created_at->format('d/m/Y')}} da {{$check->user->name}}</p>
                </div>
                
                {{-- end body --}}
                
            </div>
            @endforeach
        </div>
        @endif
    </div>
    
    
    
    
</x-layout>

<x-offcanva></x-offcanva>