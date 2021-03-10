<nav id="navbar-presto" class="navbar navbar-expand-lg navbar-presto fixed-top shadow bg-presto-dark ">
    <a class="navbar-brand" href="{{ url('/') }}">
        <h2 class="navbar-brand size-logo"><i class="fas fa-shipping-fast fa-2x mx-2"></i><span class="h2 font-weight-bold">Presto!</span></h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i id="toggle-menu" class="fas fa-times fa-2x text-green"></i>
    </button>

    <div class="collapse navbar-collapse bg-presto-dark" id="navbarSupportedContent">

                 <!-- Left Side Of Navbar -->
                 <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           Categorie
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                            <a class="dropdown-item nav-link" href="{{route('public.announcements.category',[
                               'name'=>$category->name,
                               'id'=>$category->id
                              ])}}">
                              {{$category->name}}
                            </a>
                        @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('announcement.new')}}">Inserisci annuncio</a>
                    </li>
                </ul>
    </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('revisor.home') }}">Revisor home
                                <span class="badge badge-pill badge-warning">{{\App\Announcement::ToBeRevisionedCount()}}</span>
                            </a>
                        </li>
                    @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cerca annuncio..." aria-label="Search">
        <button class="btn btn-outline-blue-dark my-2 my-sm-0" type="submit">Cerca</button>
        </form>
    </div>
</nav>
