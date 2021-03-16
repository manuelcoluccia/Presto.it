<x-layouts>
<div class="container mt-5">
  <div class="row justify-content-center mt-5">
    <div class="col-md-8 mt-5">
      <h1>Annunci per categorie: {{$category->name}}</h1>
    </div>
  </div>
</div>
  <div class="container mt-5">
          @foreach ($announcements as $announcement)
            {{-- @component('announcement-component',['announcement'=>$announcement])@endcomponent --}}
            <div>
              <div class="row justify-content-center my-5">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header font-weight-bold h3 bg-presto-aqua">{{$announcement->title}}</div>
                            <div class="card-body">
                              <p>
                                @foreach ($announcement->images as $image )
                                <img src="{{Storage::url($image->file)}}" class="rounded float-right" alt="">

                                @endforeach
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
              </div>
          </div>
          @endforeach
          <div class="row justify-content-center">
                <div class="col-md-8">
                    {{$announcements->links() }}
                </div>
          </div>
    </div>
</x-layouts>
