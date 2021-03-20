<x-layouts>
    <div class="container mt-5">
        <div class="row text-center mt-5">
          <div class="col-12 my-5">
           <h2 class="text-green display-4 text-center font-italic mt-4">Tutti gli <span class="font-weight-bold text-light1">annunci</span></h2>
          </div>
        </div>

         @foreach ($announcements as $announcement)
             <div>
               <div class="row justify-content-center mb-5">
                   <div class="col-8">
                    <div class="card card-annunci ">
                      <div class="card-header font-weight-bold h3 bg-presto-aqua text-light1">{{$announcement->title}}</div>
                      <div class=" row card-body">
                          <div class="col-12 col-6">
                              @foreach ($announcement->images as $image)
                                @if($announcement->images->first()==$image)
                                    <img src="{{$image->getUrl(300, 150)}}" alt=""> 
                                @endif 
                              @endforeach
                          </div>
                          <div class="col-12 col-6">
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
           </div>
         @endforeach  
         <div class="row justify-content-center">
            <div class="col-md-8">
                {{$announcements->links() }}
            </div>
      </div>     
   </div>
</x-layouts>    