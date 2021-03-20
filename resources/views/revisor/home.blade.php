<x-layouts>
    @if($announcement)
    <div class="container-fluid mt-5">
        <div class="row justify-content-center my-5 mt-5">
            <div class="col-md-10 mt-5">
                <div class="card">
                    <div class="card-header font-weight-bold h3 bg-presto-aqua text-white">Annuncio #{{$announcement->id}}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4"><h3>Utente</h3></div>
                                <div class="col-md-8">
                                    <span class="font-italic">{{$announcement->user->name}},</span><br>
                                    <span class="font-italic">{{$announcement->user->email}}</span>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-4"><h3>Titolo</h3></div>
                                <div class="col-md-8">{{$announcement->title}}</div>
                            </div>

                            <hr>

                            <div class="row">
                            <div class="col-md-4"><h3>Descrizione</h3></div>
                            <div class="col-md-8">{{$announcement->body}}</div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-4"><h3>Immagini</h3></div>
                                <div class="col-md-10">
                                    @foreach($announcement->images as $image)
                                    <div class="row mb-2 mt-3">
                                        <div class="col-md-4">
                                            <img src="{{$image->getUrl(300, 150)}}" class="rounded" alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="ml-3">Contenuti</h4>
                                            <ul>
                                                <li>
                                                    <span class="font-weight-bold">Adult:</span>  {{$image->adult}} 
                                                </li>
                                                <li>
                                                    <span class="font-weight-bold">Spoof:</span> {{$image->spoof}} 
                                                </li>
                                                <li>
                                                    <span class="font-weight-bold">Medical:</span> {{$image->medical}} 
                                                </li>
                                                <li>
                                                    <span class="font-weight-bold">Violence:</span> {{$image->violence}} 
                                                </li>
                                                <li>
                                                    <span class="font-weight-bold">Racy:</span> {{$image->racy}} 
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="ml-3">Labels</h4>
                                            <ul>
                                                @if ($image->labels)
                                                     @foreach ($image->labels as $label)
                                                         <li>{{$label}}</li>
                                                     @endforeach                                                   
                                                @endif
                                            </ul>
                                        </div>           
                                   </div>
                                   <hr>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
       <div class="row justify-content-center mt-5">
           <div class="col-12 col-lg-4 ml-2 text-left">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject">
                    Rifiuta
                </button>
            </div>
            <div class="col-12 col-lg-4 mr-2 text-right ">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#accept">
                    Accetta
                </button>
                
            </div>
       </div>
    </div>

    


    <!-- Modal -->
    <div class="modal fade" id="reject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="reject">Sicuro di voler eliminarlo?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
            </div>
            <div class="modal-body">
            Sicuro di voler eliminare?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
            <form action="{{route('revisor.reject', $announcement->id)}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Rifuta</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="accept" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="accept">Sicuro di voler accetarlo?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
            </div>
            <div class="modal-body">
            Sicuro di voler accettare?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
            <form action="{{route('revisor.accept', $announcement->id)}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Accetta</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    @else
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 mt-5">
                    <h1 class="text-center mt-5">Non ci sono annunci da revisionare</h1>
                    <div style="height: 1000px"></div>
                </div>
            </div>
        </div>
       
    @endif
    
</x-layouts>
