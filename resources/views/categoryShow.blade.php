<x-layout>
    {{-- Gabriele: Pagina per le categorie, dove è possibile vedere gli annunci presenti  --}}
    {{-- Nicola: Aggiunto frontend --}}
    
    <div class="category container my-5">
        <div class="row justify-content-center bg-bianco p-5">
            <div class="mb-3">
                <h5 class="fs-6 text-center text-arancio mt-5">{{__('ui.titolo-cat')}}</h5>
                @if (Config::get('app.locale') == 'it')
                <h1 class="text-center mb-5">{{$category->nameIt}}</h1> 
                @elseif(Config::get('app.locale') == 'en')
                <h1 class="text-center mb-5">{{$category->nameEn}}</h1> 
                @else
                <h1 class="text-center mb-5">{{$category->nameEs}}</h1> 
                @endif
                
                @if (Config::get('app.locale') == 'it')
                <p class="lead">{{__('ui.parte-1')}} {{$category->nameIt}} {{__('ui.parte-2')}}</p>
                @elseif(Config::get('app.locale') == 'en')
                <p class="lead">{{__('ui.parte-1')}} {{$category->nameEn}} {{__('ui.parte-2')}}</p>
                @else
                <p class="lead">{{__('ui.parte-1')}} {{$category->nameEs}} {{__('ui.parte-2')}}</p>
                @endif
                
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