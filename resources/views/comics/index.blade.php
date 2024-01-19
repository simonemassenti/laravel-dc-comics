@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Lista fumetti</h2>

        <div class="text-end">
            <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi nuovo fumetto</a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-warning my-2 w-50 mx-auto" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th>{{ $comic->title }}</th>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-info mx-1"
                                    href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli</a>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                    class="btn btn-warning mx-1">Modifica</a>
                                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mx-1">Elimina</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
