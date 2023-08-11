<nav id="navbar" class="navbar navbar-expand-lg sticky-top py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('announcement_index')}}">Annunci</a>
                </li>
                {{-- lavora con noi da spostare in footer - Nicola --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('revisor_become')}}">Lavora con noi</a>
                </li>
                {{-- Gabriele - Lista delle cateogrie presenti --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="categoriesDropDown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropDown">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('categoryShow', compact('category'))}}" class="dropdown-item text-dark">{{$category->name}}</a></li>  
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </li>
                @auth {{--puo'vedere solo chi ha fatto l'accesso --}}
                {{-- Nicola Gabriele nuova lista dentro navbar (Crea annuncio) --}}
                <li class="nav-item"> 
                    <a class="nav-link" href="{{route('announcement_create')}}">Crea Annuncio</a>
                </li>
                {{-- G-N Zona revisore end--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        {{-- G-N Zona revisore --}}
                        @if (Auth::user()->is_revisor)
                        <li class="nav-item"> 
                            {{-- Sistemare il tag a (count) per il responsive... --}}
                            <a class="dropdown-item position-relative text-dark" href="{{route('revisor_index')}}">Area revisore <span class="position-absolute top-0 badge rounded-pill bg-danger">{{App\Models\Announcement::toBeRevisionedCount()}} <span class="visually-hidden">unread messages</span></span></a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <li><button class="dropdown-item">Logout</button></li>

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
                        <li><a class="dropdown-item text-dark" href="{{route('register')}}">Registrati</a></li>
                        <li><a class="dropdown-item text-dark" href="{{route('login')}}">Accedi</a></li>
                    </ul>
                </li>
                @endauth
                
            </ul>
            <form action="{{route('announcement_search')}}" method="get" class="d-flex">
                <input type="search" name="searched" class="form-control me-2" placeholder="Search" aria-label="Search">
                <button class="btn btn-outiline-success text-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>



