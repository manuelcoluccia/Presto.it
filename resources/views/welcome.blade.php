<x-layouts>
    @if (session('announcement.create.success'))
        <div class="alert alert-success text-center mt-5">
            <p class="mt-5">Annuncio creato correttamente</p>
        </div>
    @endif

    @if (session('message'))
    <div class="alert alert-danger text-center mt-5">
        <p class="mt-5">Accesso non consentito - solo per revisori</p>
    </div>
    @elseif (session('message2'))
    <div class="alert alert-success text-center mt-5">
        <p class="mt-5">Richiesta inviata</p>
    </div>
   @endif
   
    <header class="masthead">
      <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-5 ml-auto">
                <img class="ecommerce img-fluid" src="./img/logo.png" alt="">
            </div>
            <div class="col-12 col-lg-7 text-center mb-5 ">
                <h1 class="font-italic home-title text-white">Benvenuto su <span class="font-weight-bold text-aqua border-white">Presto!</span></h1>
                <p class="lead p-4 font-weight-bold">Compra e vendi tutto quello che vuoi con pochi e semplici click</p>
                <div class="row">
                    <div class="col-5 col-lg-7">
                        <form action="{{route('search')}}" method="GET">
                            <input type="text" name="q"  class="search-bar">
                            <button class="btn btn-search" type="submit">Cerca</button>
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
                  <button class='btn btn-card font-weight-bold'>AUTO</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-motorcycle fa-3x text-white"></i></h4>
                  <button class='btn btn-card font-weight-bold'>MOTO</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-mobile-alt fa-3x text-white"></i></h4>
                  <button class='btn btn-card font-weight-bold'>SMARTPHONE</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-home fa-3x text-white"></i></h4>
                  <button class='btn btn-card font-weight-bold'>CASE</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-briefcase fa-3x text-white"></i></h4>
                  <button class='btn btn-card font-weight-bold'>LAVORO</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="far fa-futbol fa-3x text-white"></i></h4>
                  <button class='btn btn-card font-weight-bold'>HOBBY</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-bicycle fa-3x text-white"></i></h4>
                  <button class='btn btn-card font-weight-bold'>BICICLETTE</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-laptop fa-3x text-white"></i></h4>
                  <button class='btn btn-card font-weight-bold'>ELETTRONICA</button>
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
              {{-- @component('announcement-component',['announcement'=>$announcement])@endcomponent --}}
              <div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8">
                        <div class="card card-annunci ">
                            <div class="card-header font-weight-bold h3 bg-presto-aqua text-light1">{{$announcement->title}}</div>
                              <div class="card-body">
                                <p class="text-dark">
                                  <img src="https://picsum.photos/300/150" alt="" class="rounded float-right img-fluid">{{$announcement->body}}
                                </p>
                                <p class="class font-weight-bold text-dark">Prezzo: {{$announcement->price}} €</p>
                              </div>
                              <div class='card-footer d-flex justify-content-between bg-presto-aqua'>
                                  <strong class="text-light1">Categoria: <a class="text-light" href="{{route('public.announcements.category',[
                                    $announcement->category->name,
                                    $announcement->category->id
                                  ])}}"
                                  >{{$announcement->category->name}}</a></strong>
                                  <i>{{$announcement->created_at->format('d/m/y')}} - {{$announcement->user->name}}</i>
                                  <a class="btn btn-outline-blue-dark" href="{{route('announcement.show',$announcement)}}">Visualizza</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
    </div>
</x-layouts>
