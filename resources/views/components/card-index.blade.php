{{-- <div class="card-index">
    <img src="./media/about1.webp" alt="" class="card-img-top">
    <div class="profile-details">
        <div class="name-job">
            <h3 class="name">{{$announcement->title}}</h3>
            <h4 class="job">{{$announcement->category ? $announcement->category->name : ''}}</h4>
            <p class="text-tronco">{{$announcement->description}}!</p>
            <p class="lead">{{$announcement->price}} €</p>
            <p class="card-footer fw-bolder fs-6">Creato da: {{$announcement->user->name}} il {{$announcement->created_at->format('d/m/Y')}}</p>
            
            <a class="btn btn-outline-primary" href="{{route('announcement_show', compact('announcement'))}}">Dettaglio</a>
        </div>
    </div>
</div> --}}


{{-- <div class="card-index">
    <img src="https://picsum.photos/500" class="img-top" alt="immagine">
    <div class="card-body">
        <div class="text-section">
            <h5 class="card-title">{{$announcement->title}}</h5>
            <h3 class="card-subtitle">{{$announcement->category ? $announcement->category->name : ''}}</h3>
        </div>
        <div class="cta-section">
            <p class="lead">{{$announcement->price}} €</p>
            <p class="card-text"><p class="card-footer fw-bolder fs-6">Creato da: {{$announcement->user->name}} il {{$announcement->created_at->format('d/m/Y')}}</p></p>
            <a href="#" class="btn btn-primary">Dettaglio</a>
        </div>
        
    </div>
</div> --}}



    <div class="card-index m-2 h-80 ">
        <div class="row">
            <div class="col-sm-4 d-flex">
                <img src="https://picsum.photos/200" class="card-img-top-index">
            </div>
            <div class="col-sm-8">
                <div class="card-body ">
                    <h5 class="card-title text-uppercase text-arancio pt-3">{{$announcement->title}}</h5>
                    <p class="lead pt-3 text-nero">{{$announcement->description}}</p>
                    <p class="fw-semibold text-nero">€{{$announcement->price}}</p>
                    
                    <div class="div-button">
                        <a href="{{route('announcement_show', compact('announcement'))}}" class="btn btn-outline-primary">Dettaglio</a>
                    </div>
                    <p class="card-text text-nero blockquote-footer pt-3">Creato da: {{$announcement->user->name}} il {{$announcement->created_at->format('d/m/Y')}}</p>

                </div>
            </div>
        </div>
    </div>