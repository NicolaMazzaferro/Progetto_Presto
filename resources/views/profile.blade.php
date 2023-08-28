<x-layout>


    <section class="container p-5 annunci container-profile">
        <div class="container py-5">
          {{-- <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
            </div>
          </div> --}}
    
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="{{Storage::url(Auth::user()->img_profile)}}" alt="avatar"
                    class="img_custom_profile">
                  <h5 class="my-3">{{Auth::user()->name}}</h5>
                  <p class="text-muted mb-1">{{!Auth::user()->is_revisor ? 'Utente' : 'Revisore'}}</p>
                  <p class="text-muted mb-4">{{Auth::user()->address}}</p>
                  <div class="d-flex justify-content-center mb-2">
                    {{-- <button type="button" class="btn btn-primary">Modifica</button> --}}
                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3 me-3">
                    @if (Auth::user()->is_revisor)
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fa-solid fa-clipboard text-warning"></i>
                      <a class="text-black link-underline link-underline-opacity-0" href="{{route('revisor_index')}}" class="mb-0">Annunci da Revisionare<span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span></span></a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fa-solid fa-clipboard text-danger"></i>
                      <a class="text-black link-underline link-underline-opacity-0"  href="{{route('revisor_reject')}}" class="mb-0">Annunci Rifiutati<span class="position-absolute top-0 badge rounded-pill bg-danger">{{App\Models\Announcement::toBeRejectCount()}}<span class="visually-hidden">unread messages</span></span></a>
                    </li>
                    @endif
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fa-solid fa-pen-to-square"></i>
                      <a class="text-black link-underline link-underline-opacity-0"  href="{{route('index_edit_announcement')}}" class="mb-0">Gestisci Annunci</a>
                    </li>
                    @if (Auth::user()->is_revisor)
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                      <i class="fa-solid fa-envelope text-primary"></i>
                      <a class="text-black link-underline link-underline-opacity-0"  href="{{route('newsletter_index')}}" class="mb-0">Invia Newsletter</a>
                    </li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nome</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->name}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Telefono</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->phone}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Ruolo</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{!Auth::user()->is_revisor ? 'Utente' : 'Revisore'}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Indirizzo</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{Auth::user()->address}}</p>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="container">
                <div class="row">
                  <h3 class="text-center text-black mt-3">I tuoi ultimi Annunci</h3>
                    @foreach ($announcements as $announcement)
        
                    <div class="col-12 col-md-4 p-3">
            
                        <div class="card h-100">
                          <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300,300) : "\storage\default.jpg"}}" class="card-img-top mb-4" alt="immagine_prodotto">
                            <div class="card-body">
                              <h5 class="card-title">{{$announcement->title}}</h5>
                              <p class="card-text text-tronco">{{$announcement->description}}</p>
                              <p class="card-text">€ {{$announcement->price}}</p>
                            </div>
                          </div>
            
                    </div>
            
                    @endforeach
                </div>
            </div>
            </div>
          </div>
        </div>
      </section>


</x-layout>

<x-offcanva></x-offcanva>