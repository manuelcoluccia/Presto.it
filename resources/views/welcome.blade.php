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
   @endif


    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center mb-5 col-lg-5">
            <h1 class="font-italic">Benvenuto su <span class="font-weight-bold ">Presto!</span></h1>
            <p class="lead p-4 font-weight-bold">Compra e vendi tutto quello che vuoi con pochi e semplici click</p>
           <form action="{{route('search')}}" method="GET">
               <input type="text" name="q" style="width:500px;">
               <button class="btn btn-danger" type="submit">Ricerca</button>
           </form>
          </div>
          <div class="col-12 col-lg-7 ">
              <img class="ecommerce img-fluid" src="./img/Online shopping _Isometric.svg" alt="">
          </div>
        </div>
      </div>
  </header>


    <!-- Card categorie -->

    <div class="container">
      <div class="row justify-content-center">
          <div class="col-12 my-5">
              <h2 class="text-green display-4 text-center font-italic mt-4">Scegli una <span class="font-weight-bold">categoria</span></h2>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-car fa-3x"></i></h4>
                  <button class='btn'>AUTO</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-motorcycle fa-3x"></i></h4>
                  <button class='btn'>MOTO</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-mobile-alt fa-3x"></i></h4>
                  <button class='btn'>SMARTPHONE</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-home fa-3x"></i></h4>
                  <button class='btn'>CASE</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-briefcase fa-3x"></i></h4>
                  <button class='btn'>LAVORO</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="far fa-futbol fa-3x"></i></h4>
                  <button class='btn'>HOBBY</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-bicycle fa-3x"></i></h4>
                  <button class='btn'>BICICLETTE</button>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3 px-5 px-sm-2">
              <div class="card card-presto text-white p-3 d-flex flex-column justify-content-between">
                  <h4 class="text-center"><i class="fas fa-laptop fa-3x"></i></h4>
                  <button class='btn'>ELETTRONICA</button>
              </div>
          </div>
      </div>
  </div>



    <div class="container mt-5">
         <div class="row text-center mt-5">
           <div class="col-12 my-5">
            <h2 class="text-green display-4 text-center font-italic mt-4">Ultimi <span class="font-weight-bold">annunci</span></h2>
           </div>
         </div>
          @foreach ($announcements as $announcement)
              {{-- @component('announcement-component',['announcement'=>$announcement])@endcomponent --}}
              <div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8">
                        <div class="card ">
                            <div class="card-header font-weight-bold h3 bg-presto-aqua">{{$announcement->title}}</div>
                              <div class="card-body">
                                <p>
                                  <img src="https://picsum.photos/300/150" alt="" class="rounded float-right">{{$announcement->body}}
                                </p>
                                <p class="class font-weight-bold text-dark">Prezzo: {{$announcement->price}} €</p>
                              </div>
                              <div class='card-footer d-flex justify-content-between bg-presto-aqua'>
                                  <strong>Categoria: <a href="{{route('public.announcements.category',[
                                    $announcement->category->name,
                                    $announcement->category->id
                                  ])}}"
                                  >{{$announcement->category->name}}</a></strong>
                                  <i>{{$announcement->created_at->format('d/m/y')}} - {{$announcement->user->name}}</i>
                                  <a class="btn btn-success" href="{{route('announcement.show',$announcement)}}">Visualizza</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
    </div>
</x-layouts>
