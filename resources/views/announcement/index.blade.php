<x-layout>
    
    {{-- Gabriele-Nicola: Risolto problema della visualizzazione del guest per gli annunci --}}
    <section class="annunci container bg-bianco">
        <div class="row justify-content-center p-5">

            <div class="mb-3">
                <h5 class="fs-6 text-center text-arancio mt-5">{{__('ui.annunci-a')}}</h5>
                <h1 class="text-center mb-5">{{__('ui.scopri-a')}}</h1>
                <p class="lead">{{__('ui.esplora-a')}}</p> 
            </div>
        </div>
        <div class="row my-5 justify-content-center">
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-9 my-3">
                <x-card-index :announcement="$announcement"
                />
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-danger text-center py-3 shadow">
                    <p class="lead">
                        Non ci sono annunci per questa ricerca!
                    </p>
                </div>
                <div class="d-flex justify-content-center text-center">
                    <form action="{{route('announcement_search')}}" method="get" class="mt-5">
                        <input type="search" name="searched" class=" search-header me-3 " placeholder='Es. T-shirt' aria-label="Search">
                        <button class="btn-search p-3" type="submit">{{__('ui.cerca')}}</button>
                    </form>
                </div>
            </div>
            @endforelse
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