<x-layout>


    <div class=" revisor container p-5">
    <h1 class="pb-5 text-center">{{$announcement_to_check ? "Ecco l'annuncio da revisionare" : "Non ci sono annunci da revisionare"}}</h1>
    @if ($announcement_to_check)
    
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center text-center">

                    <div class="card w-50">
                        <img src="../media/logo.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Titolo: {{$announcement_to_check->title}}</h5>
                        <p class="card-text">Descrizione: {{$announcement_to_check->description}}</p>
                        <p class="card-title">Publicato il: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                        </div>
                        <div class="row p-4">
                            <div class="col-12 col-md-6">
                                <form action="{{route('revisor_accept_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">Accetta</button>
                                </form>
                            </div>
                            <div class="col-12 col-md-6">
                                <form action="{{route('revisor_reject_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        
</x-layout>