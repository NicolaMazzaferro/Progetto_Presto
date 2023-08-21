<x-layout>
    {{-- Gabriele: Pagina per le categorie, dove è possibile vedere gli annunci presenti  --}}
    {{-- Nicola: Aggiunto frontend --}}

    <div class="container my-5">
        <div class="row justify-content-center bg-bianco p-5">
            <div class="mb-3">
                <h5 class="fs-6 text-center text-arancio mt-5">// CATEGORIA</h5>
                <h1 class="text-center mb-5">{{$category->name}}</h1>
                <p class="lead">Dai un'occhiata alle inserzioni accuratamente categorizzate per {{$category->name}} e scopri tutto ciò che desideri. Semplifica la tua ricerca e trova l'affare perfetto nella categoria che ami. Inizia subito a esplorare e a trovare ciò che ti appassiona!</p>
            </div>
            @forelse ($category->announcements as $announcement)
            <div class="col-12 col-md-9 my-3">
                <x-card-index :announcement="$announcement"
                />
            </div>
            @empty
                <div class="col-12">
                    <p class="h1">Non sono presenti annunci per questa categoria!!</p>
                    <p class="h2">Pubblicane uno: <a href="{{route('announcement_create')}}" class="btn btn-warning">Nuovo annuncio</a></p>
                </div>
            @endforelse
        </div>
        
    </div>
</x-layout>