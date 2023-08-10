<x-layout>
    <h1>Annunci</h1>

    {{-- Visualizzazione annunci home - Nicola --}}
    <div class="container">
        <div class="row">

            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4 my-2">
                <div class="card">
                <img src="media/logo.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->description}}</p>
                    <a href="{{route('announcement_show', compact('announcement'))}}" class="btn btn-primary">Dettaglio</a>
                    <p class="card-footer my-2">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore: {{$announcement->user->name ?? ''}}</p>
                </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
   
</x-layout>