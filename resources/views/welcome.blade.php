<x-layout>

    <x-header-carousel-video /> 
    
    
    
    <section class="container">
        <div class="row my-5 ">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title color-g">{{$announcement->title}}</h5>
                        <p class="card-subtitle color-g">Categoria: {{$announcement->category ? $announcement->category->name : ''}}</p>
                        <p class="card-text color-g">{{$announcement->description}}</p>
                        <p class="card-subtitle color-g">{{$announcement->price}} €</p>
                        <a href="{{route('announcement_show', compact('announcement'))}}" class="btn bg-v color-l my-2">Dettaglio</a>
                        <p class="card-footer color-g">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>




</x-layout>