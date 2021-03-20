<x-layouts>
<div class="container-fluid mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-5">            
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" src="./img/Mention-bro.png" alt="">
                    </div>
                    <div class="col-12 col-md-6 mt-5">
                        <h3 class="font-italic home-title text-blue">{{__('ui.welcome')}}<span class="font-weight-bold text-light1 border-white">Presto.it!</span></h3>
                    </div>
                </div>           
        </div>
    </div>
    <div style="height: 1000px"></div>
</div>
</x-layouts>

