<x-layouts>
    <div class="container mt-5 mb-5">
      <div class="row mt-5 ">
        <div class="col-12 mt-5">
          <h2 class="text-green display-4 text-center font-italic mt-4">Contatta il <span class="font-weight-bold text-light1">venditore</span></h2>
          
        </div>
      </div>
    </div>
      <div class="container mt-5">
            <div class="row form-group">
                <div class="col-12 mb-5">
                        <form action="{{route('buyer.store')}}" method="POST">
                            @csrf   
    
    
                            <div class="mb-3">
                              <label for="name" class="form-label">Nome </label>
                              <input type="text" class="form-control" @error('name') is-invalid @enderror value="{{old('name')}}" id="name" name="name"  autofocus>
                              @error('name')
                                <span class="" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                              @enderror
                            </div>
    
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" class="form-control" @error('email') is-invalid @enderror value="{{old('email')}}" id="email" name="email"  autofocus>
                              @error('email')
                                <span class="" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                              @enderror
                            </div>
    
                            <div class="mb-3">
                              <label for="body" class="form-label">Messaggio</label>
                              <textarea class="form-control" @error('body') is-invalid @enderror name="body" id="body" cols="30" rows="10"  autofocus>{{old('body')}}</textarea>
                              @error('body')
                                  <span class="" role="alert">
                                      <strong>{{$message}}</strong>
                                  </span>
                              @enderror
                            </div>
    
                            <button type="submit" class="btn btn-outline-blue-light">Contatta</button>
                        </form>
                </div>
            </div>
        </div>
    </x-layouts>