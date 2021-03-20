<x-layouts>
    
    
    <header class="masthead">
        @if (session('announcement.create.success'))
        <div class="alert alert-success text-center ">
            <p class="mt-5 h4 font-italic">Annuncio creato correttamente</p>
        </div>
        @endif
        
        @if (session('message'))
        <div class="alert alert-danger text-center">
            <p class="mt-5 h4 font-italic">Accesso non consentito - solo per revisori</p>
        </div>
        @elseif (session('message2'))
        <div class="alert alert-success text-center">
            <p class="mt-5 h4 font-italic">Richiesta inviata</p>
        </div>
        @endif
        <div class="container h-100">            
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-5 d-none d-lg-block ml-auto ml-5">
                    <img class="ecommerce img-fluid" src="./img/e-comme.png" alt="">
                </div>
                <div class="col-12 col-lg-7 text-center mb-5">
                    <h1 class="font-italic home-title text-white">{{__('ui.welcome')}}<span class="font-weight-bold text-aqua border-white">Presto!</span></h1>
                    <p class="lead p-4 font-weight-bold font-italic">{{__('ui.intestazione')}}</p>
                    <div class="row justify-content-center">
                        <div class="col-8  col-lg-12  ">
                            <form action="{{route('search')}}" method="POST" class="custom-form">
                                @csrf
                                <input type ="text" name = "q" class="input-custom font-italic" placeholder = "Cosa stai cercando?">
                                <input type ="submit" name = "submit" class="input-custom2" value = "CERCA">
                            </form>              
                        </div>
                    </div>
                </div>              
            </div>
        </div>    
    </header>
        
        
        <!-- Card categorie -->
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-5">
                    <h2 class="text-green display-4 text-center font-italic mt-4">Scegli una <span class="font-weight-bold text-light1">categoria</span></h2>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-car fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                               'Automobili',
                               9
                              ])}}">AUTO</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-motorcycle fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                            'Motori',
                            1
                           ])}}">MOTO</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-mobile-alt fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                            'Elettronica',
                            7
                           ])}}">ELETTRONICA</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-home fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                            'Immobili',
                            10
                           ])}}">IMMOBILI</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-couch fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                            'Arredamento',
                            4
                           ])}}">ARREDAMENTO</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-seedling fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                            'Giardinaggio',
                            8
                           ])}}">GIARDINAGGIO</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-gamepad fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                            'Videogiochi',
                            6
                           ])}}">VIDEOGIOCHI</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
                    <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                        <h4 class="text-center"><i class="fas fa-tshirt fa-3x text-white"></i></h4>
                        <a class='btn btn-card font-weight-bold' href="{{route('public.announcements.category',[
                            'Abbigliamento',
                            2
                           ])}}">ABBIGLIAMENTO</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="container mt-5">
            <div class="row text-center mt-5">
                <div class="col-12 my-5">
                    <h2 class="text-green display-4 text-center font-italic mt-4">Ultimi <span class="font-weight-bold text-light1">annunci</span></h2>
                </div>
            </div>
            @foreach ($announcements as $announcement)
            <div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8">
                        <div class="card card-annunci ">
                            <div class="card-header font-weight-bold h3 bg-presto-aqua text-light1">{{$announcement->title}}</div>
                            <div class=" row card-body">
                                <div class="col-12 col-lg-6">
                                    @foreach ($announcement->images as $image)
                                    @if($announcement->images->first()==$image)
                                        <img src="{{$image->getUrl(300, 150)}}" alt=""> 
                                    @endif 
                                @endforeach
                                </div>
                                <div class="col-12 col-lg-6">
                                    <span class="font-italic">{{$announcement->body}}</span>
                                    <p class="class font-weight-bold text-dark mt-3 ">Prezzo: {{$announcement->price}} €</p>
                                    <i class="text-dark">Ineserito da: {{$announcement->user->name}} il {{$announcement->created_at->format('d/m/y')}}</i>

                                </div>                               
                            </div>
                            <div class='card-footer d-flex justify-content-between bg-presto-aqua'>
                                <strong class="text-light1">Categoria: <a class="text-light" href="{{route('public.announcements.category',[
                                    $announcement->category->name,
                                    $announcement->category->id
                                    ])}}"
                                    >{{$announcement->category->name}}</a></strong>
                                    <a class="btn btn-outline-blue-dark" href="{{route('announcement.show',$announcement)}}">Visualizza</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </x-layouts>
        