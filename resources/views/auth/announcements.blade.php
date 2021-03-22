<x-layouts>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-green display-4 text-center font-italic mt-4">Ecco i tuoi <span class="font-weight-bold text-light1">annunci</span></h2>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            @foreach (Auth::user()->announcements as $announcement)
            <div class="col-8 mt-5">
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
       
            @endforeach
                
          
        </div>
    </div>
</x-layouts>