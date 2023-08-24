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
                    <a class="nav-link pt-3 " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pt-3" href="{{route('announcement_index')}}">{{__('ui.ann')}}</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link pt-3" href="{{route('workWithUs')}}">{{__('ui.lav')}}</a>
                </li>
                {{-- revisor_become invia mail revisore --}}
                
                <li class="nav-item dropdown">
                    <a class="nav-link pt-3 dropdown-toggle" id="categoriesDropDown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.cat')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropDown">
                        @foreach ($categories as $category)
                        
                        @if(Config::get ('app.locale')== 'it')
                        <li><a href="{{ route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->nameIt}}</a></li>  
                        @elseif(Config::get ('app.locale')== 'en')
                        <li><a href="{{ route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->nameEn}}</a></li>  
                        @elseif (Config::get ('app.locale')== 'es')
                        <li><a href="{{ route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->nameEs}}</a></li>  
                        @endif
                        
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endforeach
                    </ul>
                </li>
                @auth 
                <li class="nav-item"> 
                    <a class="nav-link pt-3" href="{{route('announcement_create')}}">{{__('ui.cre-ann')}}</a>
                </li>
                <li class="nav-item pt-2 ">
                    <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-2x fa-user" style="color: #d19c0a;"></i></button>
                </li>
                
                @else
                <li class="nav-item pt-2 ">
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-2x fa-user" style="color: #d19c0a;"></i></button>
                </li>
                @endauth          
                <li class="nav-item dropdown ">
                    <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(Config::get('app.locale') == 'it')
                        <x-_locale class="dropdown-item" lang="it" />
                    @else
                        <x-_locale lang="{{ session('locale') }}"  /> 
                    @endif
                    </a>
                    <ul class="dropdown-menu">   
                        <li> <x-_locale class="dropdown-item" lang="it" /> </li>
                        <li> <x-_locale class="dropdown-item" lang="en" /> </li>
                        <li> <x-_locale class="dropdown-item" lang="es" /> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>







