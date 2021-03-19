<x-layouts>
    <div class="container mt-5">
        <div class="row text-center mt-5">
          <div class="col-12 my-5">
           <h2 class="text-green display-4 text-center font-italic mt-4">Tutti gli <span class="font-weight-bold text-light1">annunci</span></h2>
          </div>
        </div>
         @foreach ($announcements as $announcement)
             {{-- @component('announcement-component',['announcement'=>$announcement])@endcomponent --}}
             <div>
               <div class="row justify-content-center mb-5">
                   <div class="col-md-12">
                       <div class="card card-annunci ">
                           <div class="card-header font-weight-bold h3 bg-presto-aqua text-light1">{{$announcement->title}}</div>
                             <div class="card-body">
                               <p class="text-dark">
                                   @foreach ($announcement->images as $image)
                                       <img src="{{$image->getUrl(300, 150)}}" alt="">
                                   @endforeach
                                 {{$announcement->body}}
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