<!-- Navbar -->
    
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top fs-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{asset('/media/logo.svg')}}" alt=""></a>
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
                        <a class="nav-link" href="{{route('workWithUs')}}">Lavora con noi</a>
                    </li>

                    {{-- revisor_become invia mail revisore --}}
                    
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
                    </li>
                </ul>
                


                <li class="nav-item"> 
                    <a class="nav-link" href="{{route('announcement_create')}}">Crea Annuncio</a>
                </li>
                
                <li class="nav-item">
                    
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-user" style="color: #d19c0a;"></i></button>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-_locale  lang="{{ session('locale') }}"  /> 
                    </a>
                    <ul class="dropdown-menu">
                        <li> <x-_locale class="dropdown-item" lang="it" /> </li>
                        <li> <x-_locale class="dropdown-item" lang="en" /> </li>
                        <li> <x-_locale class="dropdown-item" lang="es" /> </li>
                    </ul>
                </li>
                
            </div>

        </div>
    </div>
</nav>


