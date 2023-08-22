<x-layout>
    
    <div class=" rejected-ads container p-5">
        <h1 class="pb-5 text-center">{{$announcement_reject ? "Ecco l'ultimo annuncio rifiutato" : "Non ci sono annunci rifiutati"}}</h1>
        
        @if ($announcement_reject)
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center text-center">
                
                <div class="card w-50">
                    <img src="../media/logo.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{$announcement_reject->title}}</h5>
                        <p class="card-text">Descrizione: {{$announcement_reject->description}}</p>
                        <p class="card-title">Publicato il: {{$announcement_reject->created_at->format('d/m/Y')}}</p>
                    </div>
                    <div class="row p-4">
                        <div class="col-12 col-md-12">
                            <form action="{{route('revisor_accept_announcement', ['announcement' => $announcement_reject])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Accetta</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @endif
        
    </div>
    
    
</x-layout>