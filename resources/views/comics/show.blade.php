@extends('layouts.app')

@section('content')
    <h2 class="text-center">Dettagli di: {{ $comic->title }}</h2>

    <div class="container">
          <div class="card m-auto my-5" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <p class="card-text">{{ $comic->description }}</p>
                  <p class="card-text"><div>
                    <h6> <strong>Prezzo:</strong> {{ $comic->price }} </h6>
                    <h6> <strong>Serie:</strong> {{ $comic->series }} </h6>
                    <h6> <strong>Data di vendita:</strong> {{ $comic->sale_date }} </h6>
                    <h6> <strong>Tipologia:</strong> {{ $comic->type }} </h6>
                  </div></p>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection