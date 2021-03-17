<x-layouts>
    @if($announcement)
    <div class="container-fluid mt-5">
        <div class="row justify-content-center my-5 mt-5">
            <div class="col-md-10 mt-5">
                <div class="card">
                    <div class="card-header font-weight-bold h3 bg-presto-aqua">Annuncio #{{$announcement->id}}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4"><h3>Utente</h3></div>
                                <div class="col-md-8">
                                    #{{$announcement->user->id}},
                                    {{$announcement->user->name}},
                                    {{$announcement->user->email}},
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
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <img src="{{$image->getUrl(300, 150)}}" class="rounded" alt="">
                                        </div>
                                        <div class="col-md-8">
                                           Adult: {{$image->adult}} <br>
                                           Spoof: {{$image->spoof}} <br>
                                           Medical: {{$image->medical}} <br>
                                           Violence: {{$image->violence}} <br>
                                           Racy: {{$image->racy}} <br>

                                           <b>Labels</b><br>
                                           <ul>
                                               @if ($image->labels)
                                                    @foreach ($image->labels as $label)
                                                        <li>{{$label}}</li>
                                                    @endforeach                                                   
                                               @endif
                                           </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
       <div class="row justify-content-center mt-5">
           <div class="col-md-6 ml-2 text-left">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject">
                    Rifiuta
                </button>
            </div>
           <div class="col-md-6 text-right ">
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
        <h1 class="text-center mt-5">Non ci sono annunci da revisionare</h1>
    @endif
</x-layouts>
