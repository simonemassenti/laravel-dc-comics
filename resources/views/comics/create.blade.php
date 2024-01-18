@extends('layouts.app')

@section('content')
    <h2 class="text-center">Aggiungi un nuovo fumetto</h2>

    <div class="container my-5">
        <div class="card w-50 p-3 m-auto">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control"
                    id="description" name="description"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="thumb" class="form-label">Link Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" id="type" name="type">
                        <option selected>Seleziona tipologia</option>
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                        <option value="superhero">Supereroi</option>
                      </select>
                </div>

                <button class="btn btn-success">Aggiungi</button>
            </form>
        </div>
    </div>
@endsection
