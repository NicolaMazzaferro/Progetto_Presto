<x-layout>
    {{-- Gabriele: Pagina per le categorie, dove è possibile vedere gli annunci presenti  --}}
    {{-- Nicola: Aggiunto frontend --}}

    <div class="category container my-5">
        <div class="row justify-content-center bg-bianco p-5">
            <div class="mb-3">
                <h5 class="fs-6 text-center text-arancio mt-5">{{__('ui.titolo-cat')}}</h5>
                <h1 class="text-center mb-5">{{$category->name}}</h1>
                <p class="lead">{{__('ui.parte-1')}} {{$category->name}} {{__('ui.parte-2')}}</p>
            </div>
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-9 my-3">
                <x-card-index :announcement="$announcement"
                />
            </div>
            @empty
                <div class="col-12">
                    <p class="h1">{{__('ui.non-annu')}}</p>
                    <p class="h2">{{__('ui.publi')}} <a href="{{route('announcement_create')}}" class="btn btn-warning">{{__('ui.new-ad')}}</a></p>
                </div>
            @endforelse
        </div>
        
    </div>
</x-layout>

<x-offcanva></x-offcanva>