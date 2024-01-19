@extends('layouts.app')

@section('content')
    <h2 class="text-center">Modifica i dati di "{{ $comic->title }}"</h2>
    <div class="container w-75 my-5">
       <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control"
            id="description" name="description" rows="5">{{ $comic->description }}</textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Link Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" id="type" name="type">
                <option @selected($comic->type === 'comic book') value="comic book">Comic Book</option>
                <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic Novel</option>
                <option @selected($comic->type === 'superhero') value="superhero">Supereroi</option>
              </select>
        </div>

        <button class="btn btn-warning">Modifica</button>
    </form> 
    </div>
    
@endsection