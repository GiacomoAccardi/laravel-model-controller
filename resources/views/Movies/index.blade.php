@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h1>Ecco tutti i film selezionati da Boolean!</h1>
    </div>

    <div class="bg-light mt-5 text-white">
        <div class="container">
            <div class="row p-5 d-flex g-4">
                @foreach ($movies as $movie)
                    <div class="col-3">

                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                {{ $movie['title'] }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nazionalità: {{ $movie['nationality'] }}</li>
                                <li class="list-group-item">Data d'uscità: {{ $movie['date'] }}</li>
                                <li class="list-group-item">Valutazione: {{ $movie['vote'] }}/10</li>
                            </ul>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
