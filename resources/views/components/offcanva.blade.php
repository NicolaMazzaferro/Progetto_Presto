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