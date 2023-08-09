<x-layout>
    {{-- Gabriele: Pagina per le categorie, dove è possibile vedere gli annunci presenti  --}}
    <h1>Categorie</h1>

    <section class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($category->announcements as $announcement)
                        <div class="col-12 col-md-4 my-2">
                            <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$announcement->title}}</h5>
                                <p class="card-text">{{$announcement->description}}</p>
                                <a href="#" class="btn btn-primary">Dettaglio</a>
                                <p class="card-footer my-2">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? ''}}</p>
                            </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="h1">Non sono presenti annunci per questa categoria!!</p>
                            <p class="h2">Pubblicane uno: <a href="{{route('announcement_create')}}" class="btn btn-warning">Nuovo annuncio</a></p>
                        </div>
                    @endforelse
                </div>
                
            </div>
        </div>
    </section>


</x-layout>