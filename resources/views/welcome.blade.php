<x-layouts>
    @if (session('announcement.create.success'))
        <div class="alert alert-success text-center">
            <p>Annuncio creato correttamente</p>
        </div>
    @endif
    <h1>Presto</h1>

        <div class="container">
            <div class="row">
                @foreach ($announcements as $announcement)
                <div col-12>
                    <div class="card mb-3 mx-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img class="img-fluid" src="https://picsum.photos/200" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$announcement->title}}</h5>
                              <p class="card-text">{{$announcement->body}}</p>
                              <div class='card-footer d-flex justify-content-between'>
                                  <strong>Categoria: <a href="#">{{$announcement->category->name}}</a></strong>
                                  <i>{{$announcement->created_at->format('d/m/y')}} - {{$announcement->user->name}}</i>
                              </div>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div> 
                </div>
                @endforeach
            </div>
        </div>
</x-layouts>
