<div class="card swiper-slide">
    <div class="image-box">
        <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300,300) : "\storage\default.jpg"}}" alt="" />
    </div>
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
</div>