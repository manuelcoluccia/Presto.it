<x-layouts>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-green display-4 text-center font-italic mt-4">Ecco il tuo<span class="font-weight-bold text-light1"> profilo</span></h2>
            </div>
        </div>
        <div class="row align-items-center ">
            <div class="col-12 col-md-6 ">
                <img class="img-fluid" src="/img/user1.png" alt="">
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4 text-center">
                        <img  class="img-fluid p-3" src="/img/user.png" alt="">

                      </div>
                      <div class="col-md-8 mt-3">
                        <div class="card-body">
                          <h5 class="card-title">{{Auth::user()->name }}</h5>
                          <p class="card-text">{{Auth::user()->email }}</p>
                          <p class="card-text"><small class="text-muted">Iscritto da: {{Auth::user()->created_at->format('d/m/y')}}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layouts>   