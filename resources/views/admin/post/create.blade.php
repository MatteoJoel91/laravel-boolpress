@extends('admin.layouts.base')

@section('content')
    <div class="container">

      <form method="POST" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
          <label for="image" class="form-label">Carica un immagine (max 2 MB)</label>
          <input class="form-control-file" type="file" id="image" name="image">
        </div>

        <div class="form-group mb-3">
          <label>Scegli categoria</label>
          <select class="form-control" id="category_id" name="category_id">
            <option value="">Nessuna categoria</option>
            @foreach ($categories as $category)
                <option {{old('category_id') == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
        </div>

        <label for="title" class="form-label">Tags</label>
        <div class="d-flex">
          @foreach ($tags as $tag)
            <div class="form-check mb-3 mr-4">
              {{-- name="tags[]" -> mi faccio passare un arrey tags con tutti i value che ho precedentemente selzionato, 
              esempio: se ho selezionato pesce e carne dopo aver salvato mi passerĂ  un arrey ['pesce', 'carne'] --}}
              <input class="form-check-input" name="tags[]" type="checkbox" id="tag_{{$tag->id}}" value={{$tag->id}} {{in_array($tag->id, old('tags', []))?'checked':''}}> 
              <label class="form-check-label" for="tag_{{$tag->id}}">
                {{$tag->name}}
              </label>
            </div>           
          @endforeach
        </div>
        
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="title" class="form-control" id="title" name="title" value="{{old('title', '')}}">
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Contenuto post</label>
          <textarea class="form-control" id="content" rows="8" name="content" value="{{old('content', '')}}"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>

      </form>
    </div>
@endsection