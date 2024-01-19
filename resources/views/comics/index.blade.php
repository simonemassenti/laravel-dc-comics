@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Lista fumetti</h2>
        
        <div class="text-end">
            <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi nuovo fumetto</a>
        </div>
        

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di Uscita</th>
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
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('comics.show', ['comic' => $comic->id]) }}"> Dettagli</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
