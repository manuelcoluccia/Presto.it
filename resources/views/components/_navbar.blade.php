<nav id="navbar-presto" class="navbar navbar-expand-lg navbar-presto fixed-top shadow bg-presto-dark ">
        <h2 class="navbar-brand size-logo mr-3 mt-2"><i class="fas fa-shopping-cart fa-1x text-light1"></i>
            <span class="h3 font-weight-bold text-light1">Presto!</span>
        </h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"       aria-expanded="false" aria-label="Toggle navigation">
        <i id="toggle-menu" class="fas fa-times fa-2x text-white"></i>
    </button>

    <div class="collapse navbar-collapse bg-presto-aqua" id="navbarSupportedContent">

                 <!-- Left Side Of Navbar -->
                 <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold ml-4" href="{{url('/')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold ml-4" href="{{route('announcement.all')}}">Annunci</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold ml-4" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{__('ui.category_nav')}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)
                            <a class="dropdown-item nav-link " href="{{route('public.announcements.category',[
                               'name'=>$category->name,
                               'id'=>$category->id
                              ])}}">
                              <span class="text-aqua">{{$category->name}}</span>
                            </a>
                        @endforeach
                        </div>
                    </li>
                    
                </ul>
    </div>

    <div class="collapse navbar-collapse bg-presto-aqua   " id="navbarSupportedContent">

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link ml-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link  ml-4" href="{{ route('revisor.home') }}">Revisor home
                        <span class="badge badge-pill badge-warning">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span>
                    </a>
                </li>
            @endif
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold ml-4" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item  text-dark" href="{{route('auth.profile')}}">
                            Profilo
                        </a>
                        <a class="dropdown-item  text-dark" href="{{route('auth.announcements')}}">
                            I tuoi annunci
                        </a>
                        <a class="dropdown-item  text-dark" href="{{ route('logout') }}"
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
            <li class="nav-item">
                <a class=" btn btn-insert text-white mx-4" href="{{route('announcement.new')}}"><i class="far fa-plus-square mr-"></i> {{__('ui.inserisci_annuncio')}}</a>
            </li>
        </ul>
    </div>

      
   
</nav>
