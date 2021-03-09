{{-- <div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$announcement->title}}</div>                                                    
                  <div class="card-body">
                    <p>
                      <img src="https://picsum.photos/300/150" alt="" class="rounded float-right">{{$announcement->body}}
                    </p>
                    <p class="">Prezzo: {{$announcement->price}} €</p>
                  </div>
                  <div class='card-footer d-flex justify-content-between'>
                      <strong>Categoria: <a href="{{route('public.announcements.category',[
                        $announcement->category->name,
                        $announcement->category->id
                      ])}}"
                      >{{$announcement->category->name}}</a></strong>
                      <i>{{$announcement->created_at->format('d/m/y')}} - {{$announcement->user->name}}</i>

                  </div>
            </div>
        </div>
    </div>                
</div> --}}