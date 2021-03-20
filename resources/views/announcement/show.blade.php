
<x-layouts>
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-12 mt-5 mb-4">
            <h2 class="text-green display-4 text-center font-italic mt-4">Ecco l'<span class="font-weight-bold text-light1">annuncio</span></h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-6">
            <a href="{{url('/')}}" class="font-weight-bold text-aqua">Home </a>
            <span> ></span>
            <a href="{{route('announcement.all')}}" class="font-weight-bold text-aqua">Tutti gli annunci </a>
            <span> ></span>
            <a href="{{route('public.announcements.category',[
                $announcement->category->name,
                $announcement->category->id
              ])}}" class="font-weight-bold text-aqua">{{$announcement->category->name}}</a>
        </div>
    </div>
    <div class="row">

       
        <div class="col-md-7 mt-3 announcement-carousel ">
            @foreach ($announcement->images as $image)
            <div>
                <img src="{{$image->getUrl(600, 400)}}" alt="">    
            </div> 
            @endforeach
        </div>
    
        <div class="col-md-4">
            <hr>
            <h5 class="my-3 font-weight-bold">Categoria: <span class="font-italic text-light1">{{$announcement->category->name}}</span></h5>
            <hr>
          <h3 class="my-3 font-weight-bold">{{$announcement->title}}</h3>
          <h4 class="my-3 font-italic">Prezzo: <span>{{$announcement->price}} €</span></h4>
          <hr>
          <h6 class="my-3 mt-5 font-italic">Inserito da: {{$announcement->user->name}}</h6>
          <h6 class="my-3 mt-2 font-italic ">Inserito il: {{$announcement->created_at->format('d/m/y')}}</h6>
          <hr>
        </div>
    
    </div>

        <div class="row mt-3">
            <div class="col-12 col-md-8">
                <hr>
                <h3 class="font-weight-bold">Descrizione: </h3><span>{{$announcement->body}}</span>
                <hr>
                <h3 class="font-weight-bold">Inserzionista</h3>
                <div class="card text-center mt-3 bg-blue-dark">                    
                    <div class="card-body row align-items-center ">
                        <div class="col-4">
                            <h5 class="card-title float-left font-weight-bold text-light1"><i class="fas fa-user fa-2x mr-3"></i>{{$announcement->user->name}}</h5> 
                        </div>
                        <div class="col-4 mt-2">
                            <p class="font-italic">Pubblica dal {{$announcement->user->created_at->format('d/m/y')}}</p> 
                        </div>
                        <div class="col-4">
                            <a href="{{route('buyer.contact')}}" class="btn btn-custom float-right">Contatta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

</div>
</div>
   
</x-layouts>

