
<x-layouts>
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-12 mt-5">
            <h1 class="text-center">Ecco l'annuncio</h1>

        </div>

    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <img src="https://picsum.photos/300/150" alt="">

        </div>
        <div class="col-md-8">
            <h3>Titolo: </h3><span>{{$announcement->title}}</span>
            <h3>Descrizione: </h3><span>{{$announcement->body}}</span>
            <h3>Prezzo: </h3><span>{{$announcement->price}}</span>

        </div>
    </div>
</div>
</x-layouts>

