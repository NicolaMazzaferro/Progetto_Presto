{{-- 
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-header container">
        
        <div class="row">
            <div class="col-md-6 ms-3 profile-pic rounded-circle">
                <img src="" alt="immagine profilo">
            </div>
            <div class="col-md-6 my-4 ms-4">
                <h5 class="offcanvas-title text-bianco" id="offcanvasRightLabel">Benvenuto Utente<hr></h5>
                
            </div>
            
        </div>
        
    </div>
    <div class="offcanvas-body">
        @auth 
        <ul class="">
            
            @if (Auth::user()->is_revisor)  
            <li class="nav-item"> 
                <a class="dropdown-item position-relative text-bianco" href="{{route('revisor_index')}}">Area revisore <span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span></span></a>
            </li>
            <li class="nav-item"> 
                <a class="dropdown-item position-relative text-bianco" href="{{route('revisor_reject')}}">Annunci Rifiutati<span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRejectCount()}}<span class="visually-hidden">unread messages</span></span></a>
            </li>
            <li class="nav-item"> 
                <a class="dropdown-item position-relative text-bianco" href="{{route('newsletter_index')}}">Newsletter</a>
            </li>
            @endif
            <li class="nav-item">
                <form action="{{route('logout')}}" method="POST">
                    
                    <li><button class="dropdown-item text-bianco">Logout</button></li>
                    @csrf
                </form>
            </li>
        </ul>
        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto utente
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati/Accedi</a></li>
            </ul>
        </li>
        @endauth                
        
    </div>
</div> --}}



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header bg-arancio">
      <h5 class="offcanvas-title fw-bold text-nero" id="offcanvasRightLabel">Benvenuto {{Auth::user()->name}}</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-arancio bg-nero">

       


        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            @auth

                <li class="nav-item">
                    <p class="fw-bold"></p>
                </li>

                <li class="nav-item">
                    <a class="nav-link position-relative link-underline link-underline-opacity-0 text-bianco" href="#">Profilo</a>
                </li>

                @if (Auth::user()->is_revisor)

                    <li class="nav-item">
                        <a class="nav-link position-relative link-underline link-underline-opacity-0 text-bianco" href="{{route('revisor_index')}}">Area revisore <span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link position-relative link-underline link-underline-opacity-0 text-bianco" href="{{route('revisor_reject')}}">Annunci Rifiutati<span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRejectCount()}}<span class="visually-hidden">unread messages</span></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link position-relative link-underline link-underline-opacity-0 text-bianco" href="{{route('newsletter_index')}}">Newsletter</a>
                    </li>
                
                @endif

                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            <li class="nav-item"><button class="dropdown-item">Logout</button></li>
                            @csrf
                        </form>
                    </li>

                @else

                <li class="nav-item">
                    <p class="fw-bold">Benvenuto Ospite</p>
                </li>

                    <li class="nav-item">
                        <a class="nav-link position-relative link-underline link-underline-opacity-0 text-bianco" href="{{route('register')}}">Registrati/Accedi</a>
                    </li>
            @endauth
        </ul>






        



    </div>
  </div>










  {{-- <div class="container">
    <div class="row w-50 my-5">
        <div class="col-12">
            @auth

            <p class="fw-bold">Benvenuto {{Auth::user()->name}}</p>
    
            @if (Auth::user()->is_revisor)
    
            <a class="position-relative link-underline link-underline-opacity-0 text-nero" href="{{route('revisor_index')}}">Area revisore <span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span></span></a>
    
            <a class="position-relative link-underline link-underline-opacity-0 text-nero" href="{{route('revisor_reject')}}">Annunci Rifiutati<span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRejectCount()}}<span class="visually-hidden">unread messages</span></span></a>
    
            <a class="position-relative link-underline link-underline-opacity-0 text-nero" href="{{route('newsletter_index')}}">Newsletter</a>
    
    
            @endif
    
            <form action="{{route('logout')}}" method="POST">
    
                <li><button class="dropdown-item">Logout</button></li>
                @csrf
            </form>
    
            @else
    
    
    
            <a class="position-relative link-underline link-underline-opacity-0 text-nero" href="{{route('register')}}">Registrati/Accedi</a>
    
            @endauth
        </div>
    </div>
</div> --}}