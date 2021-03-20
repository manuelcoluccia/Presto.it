<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Un utente è interessato al tuo articolo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Ecco i suoi dati: </h2>
            <ul>
                <li>
                    Nome: {{$contatto['name']}}
                </li>
                <li>
                    Email: {{$contatto['email']}}
                </li>                
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Messaggio:</h2>
            <p>Messaggio: {{$contatto['body']}}</p>
        </div>
    </div>
</div>