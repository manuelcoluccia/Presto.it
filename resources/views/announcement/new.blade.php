<x-layouts>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Inserisci nuovo annuncio</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                    <form action="{{route('announcement.create')}}" method="POST">
                        @csrf   

                          <div  class="mb-3">
                            <label for="category" class="form-label">categoria</label>
                            <select class="form-select" name="category" id="category" >
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
                          <input type="text" class="form-control" @error('title') is-invalid @enderror value="{{old('title')}}" id="title" name="title" required autofocus>
                          @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="body" class="form-label">Descrizione</label>
                          <textarea class="form-control" @error('body') is-invalid @enderror name="body" id="body" cols="30" rows="10" required autofocus>{{old('body')}}</textarea>
                          @error('body')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{$message}}</strong>
                              </span>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Inserisci annuncio</button>
                      </form>
            </div>
        </div>
    </div>
</x-layouts>