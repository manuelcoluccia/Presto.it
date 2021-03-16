<x-layouts>
<div class="container mt-5 mb-5">
  <div class="row mt-5 ">
    <div class="col-12 mt-5">
      <h2 class="text-green display-4 text-center font-italic mt-4">Inserisci <span class="font-weight-bold">annuncio</span></h2>
    </div>
  </div>
</div>
  <div class="container mt-5">
        <div class="row form-group">
            <div class="col-12 mb-5">
                    <form action="{{route('announcement.create')}}" method="POST">
                        @csrf   
                         <input
                         type="hidden"
                         name="uniqueSecret"
                         value="{{$uniqueSecret}}">
                         
                          <div  class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select class="form-select form-control" name="category" id="category" >
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                    {{-- {{old('category')==$category->id ? 'selected':''}}> --}}
                                    {{$category->name}}
                                    </option>                                    
                                @endforeach
                              </select>
                          </div>

                        <div class="mb-3">
                          <label for="title" class="form-label">Titolo</label>
                          <input type="text" class="form-control" @error('title') is-invalid @enderror value="{{old('title')}}" id="title" name="title"  autofocus>
                          @error('title')
                            <span class="" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="price" class="form-label">Prezzo</label>
                          <input type="text" class="form-control" @error('price') is-invalid @enderror value="{{old('price')}}" id="price" name="price"  autofocus>
                          @error('price')
                            <span class="" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                          @enderror
                        </div>

                        <div class="mb-3">
                          <label for="body" class="form-label">Descrizione</label>
                          <textarea class="form-control" @error('body') is-invalid @enderror name="body" id="body" cols="30" rows="10"  autofocus>{{old('body')}}</textarea>
                          @error('body')
                              <span class="" role="alert">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group row">
                          <label for="images" class="col-md-12 col-form-label text-md-left">Immagini</label>
                            <div class="col-md-12">
                              <div class="dropzone" id="drophere"></div>
                               @error('images')
                                   <span role="alert">
                                     <strong>{{$message}}</strong>
                                   </span>
                               @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-blue-dark">Inserisci annuncio</button>
                    </form>
            </div>
        </div>
    </div>
</x-layouts>