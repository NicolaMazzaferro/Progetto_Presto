<!-- Navbar -->
    
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">LOGO</a>
            <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars menu-burger"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('announcement_index')}}">Annunci</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('revisor_become')}}">Lavora con noi</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="categoriesDropDown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropDown">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->name}}</a></li>  
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                        </ul>
                    </li>
                    @auth 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{route('announcement_create')}}">Crea Annuncio</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            
                            @if (Auth::user()->is_revisor)  
                            <li class="nav-item"> 
                                <a class="dropdown-item position-relative" href="{{route('revisor_index')}}">Area revisore <span class="position-absolute top-0 badge rounded-pill bg-arancio">{{App\Models\Announcement::toBeRevisionedCount()}}<span class="visually-hidden">unread messages</span></span></a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <form action="{{route('logout')}}" method="POST">
                                    
                                    <li><button class="dropdown-item">Logout</button></li>
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto utente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                        </ul>
                    </li>
                    @endauth
                    
                </ul>
            </div>
        </div>
    </nav>


