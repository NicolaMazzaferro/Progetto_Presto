<nav id="navbar" class="navbar navbar-expand-lg sticky-top ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGO</a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"> 
                            <a class="dropdown-item" href="{{route('announcement_create')}}">Inserisci Annuncio</a>
                        </li>
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
        </div>
    </div>
</nav>



