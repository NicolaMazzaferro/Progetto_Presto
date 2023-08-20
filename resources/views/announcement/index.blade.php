<x-layout>
    
    {{-- Gabriele-Nicola: Risolto problema della visualizzazione del guest per gli annunci --}}
    <section class="container bg-bianco">
        <h1 class="text-center pt-5">ANNUNCI</h1>
        <div class="row my-5 justify-content-center">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-9 my-3">
                <x-card-index :announcement="$announcement"
                />
            </div>
            @endforeach
        </div>
    </section>
    
</x-layout>