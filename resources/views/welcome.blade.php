<x-layout>
    <h1 class="text-center">Presto.it</h1>
    
    
    
    <section class="container">
        <div class="row my-5 ">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="/media/sfondo.jpg" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-subtitle">Categoria: {{$announcement->category ? $announcement->category->name : ''}}</p>
                        <p class="card-text">{{$announcement->description}}</p>
                        <p class="card-subtitle">{{$announcement->price}} €</p>
                        <a href="{{route('announcement_show', compact('announcement'))}}" class="btn btn-primary my-2">Dettaglio</a>
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>