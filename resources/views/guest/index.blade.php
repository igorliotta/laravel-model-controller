{{-- Sarà la nostra homepage --}}

{{-- Estendiamo il nostro layout --}}

@extends('layouts.app')


@section('content')

<section class="py-5">
    <div class="container bg-primary px-4 mx-auto">
        <div class="row gap-2 justify-content-around">
            <h1 class="text-white text-center">Movies</h1>
            @foreach ($movies as $movie)
                {{-- @dump($movie) --}}
                <div class="col-3 card text-white bg-dark mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                          <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                          <p class="card-text"><small class="text-muted">Id: {{ $movie->id }}</small></p>
                          <p class="card-text">Data: {{ $movie->date }}</p>
                          <p class="card-text">Voto: {{ $movie->vote }}</p>
                          <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
        </div>
    </div>

    
</section>
    
@endsection

@section('title')
    Laravel-Model-Controller
@endsection