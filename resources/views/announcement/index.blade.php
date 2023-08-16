<x-layout>
    <h1>Annunci</h1>

    {{-- Gabriele-Nicola: Risolto problema della visualizzazione del guest per gli annunci --}}
    <section class="container">
        <div class="row my-5 ">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-9 my-3">
                <x-card-index :announcement="$announcement"
                />
            </div>
            @endforeach
        </div>
    </section>
</x-layout>