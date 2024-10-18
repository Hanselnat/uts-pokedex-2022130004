@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-3 row-cols-lg-3">
        @foreach ($pokemons as $pokemon)
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($pokemon->photo) }}" class="card-img-top" alt="GAK ADA">
                <div class="card-body">
                <h5 class="card-title">{{ $pokemon->name }}</h5>
                <p class="card-text">{{ Str::padLeft($pokemon->id, 5, '#000') }}</p>
                <span class="badge rounded-pill bg-success">{{ $pokemon->primary_type }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection