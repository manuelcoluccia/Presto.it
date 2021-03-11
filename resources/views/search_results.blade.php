<x-layouts>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-12 mt-5 text-center">
                <h1>
                    Risultati ricerca per {{$q}}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            @foreach ($announcements as $announcement)
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header font-weight-bold h3 bg-presto-aqua">{{$announcement->title}}</div>                                                    
                          <div class="card-body">
                            <p>
                              <img src="https://picsum.photos/300/150" alt="" class="rounded float-right">{{$announcement->body}}
                            </p>
                            <p class="font-weight-bold text-dark">Prezzo: {{$announcement->price}} €</p>
                          </div>
                          <div class='card-footer bg-presto-aqua d-flex justify-content-between'>
                              <strong>Categoria: <a href="{{route('public.announcements.category',[
                                $announcement->category->name,
                                $announcement->category->id
                              ])}}"
                              >{{$announcement->category->name}}</a></strong>
                              <i>{{$announcement->created_at->format('d/m/y')}} - {{$announcement->user->name}}</i>
                          </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts>
