<x-layout>
    
    {{-- Gabriele-Nicola: Risolto problema della visualizzazione del guest per gli annunci --}}
    <section class="annunci container bg-bianco">
        <div class="row justify-content-center p-5">

            <div class="mb-3">
                <h5 class="fs-6 text-center text-arancio mt-5">// ANNUNCI</h5>
                <h1 class="text-center mb-5">Scopri le Offerte Eccezionali</h1>
                <p class="lead">Esplora una vasta gamma di annunci su ogni categoria immaginabile, dalle automobili agli elettrodomestici, per trovare le migliori offerte che soddisfino le tue esigenze e il tuo budget. Oggetti unici e introvabili altrove, dalle antichità alle creazioni artigianali moderne, qui troverai tutto ciò che stai cercando.</p>
            </div>
        </div>
        <div class="row my-5 justify-content-center">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-9 my-3">
                <x-card-index :announcement="$announcement"
                />
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        {{ $announcements->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <x-offcanva></x-offcanva>
    
</x-layout>