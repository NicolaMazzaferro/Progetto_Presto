<div class="card swiper-slide">
    <div class="image-box">
        <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300,300) : "\media\default.jpg"}}" alt="" />
    </div>
    <div class="profile-details">
        <div class="name-job">
            <h3 class="name fs-3 fw-bolder">{{$announcement->title}}</h3>
            <h4 class="job fw-bold">{{$announcement->category ? $announcement->category->name : ''}}</h4>
            <p class="text-tronco fs-6 m-0">{{$announcement->description}}!</p>
            <p class="lead fw-bold">{{$announcement->price}} €</p>
            <p class="card-footer fw-bolder fs-6">{{__('ui.CE')}} {{$announcement->user->name}} {{__('ui.il')}}{{$announcement->created_at->format('d/m/Y')}}</p>
            
            <a class="btn btn-outline-primary mb-4" href="{{route('announcement_show', compact('announcement'))}}">{{__('ui.DE')}}</a>
        </div>
    </div>
</div>