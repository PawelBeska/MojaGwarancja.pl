
<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation"
         class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-theme-secondary">
        <div class="container position-relative"><a class="navbar-brand mr-lg-5" href="{{route('home.index')}}"><img
                    class="navbar-brand-dark" src="{{URL::asset('assets/home/img/brand/mg_light.png')}}" alt="Logo light"> <img
                    class="navbar-brand-light" src="{{URL::asset('assets/home/img/brand/mg_light.png')}}" alt="Logo dark"></a>
            <div class="navbar-collapse collapse mr-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand"><a href="{{route('home.index')}}"><img
                                    src="{{URL::asset('assets/home/img/brand/mg_light.png')}}" alt="mojaGwarancja logo"></a></div>
                        <div class="col-6 collapse-close"><a href="#navbar_global" class="fas fa-times"
                                                             data-toggle="collapse" data-target="#navbar_global"
                                                             aria-controls="navbar_global" aria-expanded="false"
                                                             title="close" aria-label="Toggle navigation"></a></div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item">
                        <a href="{{route('home.index')}}" data-redirect='true' class="nav-link">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-redirect='true' class="nav-link">Kup gwarancje</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('home.price-list.index')}}" data-redirect='true' class="nav-link">Cennik</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('home.about-us.index')}}" data-redirect='true' class="nav-link">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('home.faq.index')}}" data-redirect='true' class="nav-link">FAQ</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                @guest()
                <a
                    href="{{route('login')}}" data-redirect='true'
                    class="btn btn-outline-soft d-none d-lg-inline mr-md-3 animate-up-2"> Strefa Klienta</a>
                <a
                    href="{{route('login')}}" data-redirect='true' style="padding: 13px 30px 13px 30px;"
                    class="btn btn-tertiary animate-up-2"> Logowanie</a>
                @endguest
                @auth()
                    @if(Auth::user()->hasPermission('admin'))
                            <a href="{{route('home.profile.index')}}" data-redirect='true'
                               class="btn btn-outline-soft d-none d-lg-inline mr-md-3 animate-up-2"> Strefa Administratora</a>
                     @elseif(Auth::user()->hasPermission('moderator'))
                            <a href="{{route('home.profile.index')}}" data-redirect='true'
                               class="btn btn-outline-soft d-none d-lg-inline mr-md-3 animate-up-2"> Strefa Moderatora</a>
                     @elseif(Auth::user()->hasPermission('seller'))
                            <a href="{{route('home.profile.index')}}" data-redirect='true'
                               class="btn btn-outline-soft d-none d-lg-inline mr-md-3 animate-up-2"> Strefa Sprzedawcy</a>
                     @else
                            <a href="{{route('home.profile.index')}}" data-redirect='true'
                               class="btn btn-outline-soft d-none d-lg-inline mr-md-3 animate-up-2"> Strefa Klienta</a>
                    @endif()
                    <a href="{{route('logout')}}"  data-redirect-to='true' style="padding: 13px 30px 13px 30px;"
                        class="btn btn-tertiary animate-up-2"> Wyloguj</a>
                @endauth
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global"
                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            </div>
        </div>
    </nav>
</header>
