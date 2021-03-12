<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Richiesta ricevuta</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Ecco i dati del contatto: </h2>
            <ul>
                <li>
                    Nome: {{$contatto['name']}}
                </li>
                <li>
                    Email: {{$contatto['email']}}
                </li>
                <li>
                    Messaggio: {{$contatto['body']}}
                </li>
            </ul>
        </div>
    </div>
</div>