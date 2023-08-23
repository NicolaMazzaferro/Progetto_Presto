<x-layout>


    <div class=" revisor container p-5">
    <h1 class="pb-5 text-center">{{$announcement_to_check ? "Ecco l'annuncio da revisionare" : "Non ci sono annunci da revisionare"}}</h1>
    @if ($announcement_to_check)
    
            <div class="row justify-content-center align-items-center text-center">
                @foreach($announcement_to_check as $check )
                <div class="col-12 col-md-4">
                    <div class="card my-5">
                        {{-- carousel --}}
                        <div id="{{$check->id}}" class="carousel slide">
                        @if($check->images)
                            <div class="carousel-inner h-25">
                                @foreach ($check->images as $image)
                                <div class="carousel-item @if ($loop->first)active @endif">
                                    <img src="{{Storage::url($image->path)}}" class="card-img-top" height="350px" alt="...">
                                </div>
                                @endforeach
                            </div>
                            @else
                            <img src="\storage\default.jpg" class="card-img-top" height="350px" alt="...">
                            @endif
                            <button class="carousel-control-prev" type="button" data-bs-target="#{{$check->id}}" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#{{$check->id}}" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                          {{-- end carousel --}}
                        <div class="card-body">
                        <h5 class="card-title">{{$check->title}}</h5>
                        <p class="card-text">{{$check->description}}</p>
                        <p class="card-title">Publicato il: {{$check->created_at->format('d/m/Y')}}</p>
                        </div>
                        <div class="row p-4">
                            <div class="col-12 col-md-6">
                                <form action="{{route('revisor_accept_announcement', ['announcement' => $check])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">Accetta</button>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                <form action="{{route('revisor_reject_announcement', ['announcement' => $check])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger">Rifiuta</button>
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