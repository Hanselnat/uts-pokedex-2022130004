@extends('layouts.app')

@section('content')

<div class="container">
    <main>
        <form action="{{ route('pokemon.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="species">Species</label>
                    <textarea class="form-control @error('species') is-invalid @enderror" name="species" id="species">{{ old('species') }}</textarea>
                    @error('species')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6  mt-2 mb-2">
                    <label class="form-label" for="primary_type">Primary Type</label>
                    <select name="primary_type" required class="form-select" id="primary_type">
                        <option value="Grass">Grass</option>
                        <option value="Fire">Fire</option>
                        <option value="Water">Water</option>
                        <option value="Bug">Bug</option>
                        <option value="Normal">Normal</option>
                        <option value="Poison">Poison</option>
                        <option value="Electric">Electric</option>
                        <option value="Ground">Ground</option>
                        <option value="Fairy">Fairy</option>
                        <option value="Fighting">Fighting</option>
                        <option value="Psychic">Psychic</option>
                        <option value="Rock">Rock</option>
                        <option value="Ghost">Ghost</option>
                        <option value="Ice">Ice</option>
                        <option value="Dragon">Dragon</option>
                        <option value="Dark">Dark</option>
                        <option value="Steel">Steel</option>
                        <option value="Flying">Flying</option>
                    </select>
                    @error('primary_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="weight">Weight</label>
                    <input class="form-control @error('weight') is-invalid @enderror" type="number" name="weight" id="weight" value="{{ old('weight') }}">
                    @error('weight')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="height">Height</label>
                    <input class="form-control @error('height') is-invalid @enderror" type="number" name="height" id="height" value="{{ old('height') }}">
                    @error('height')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="hp">HP</label>
                    <input class="form-control @error('hp') is-invalid @enderror" type="number" name="hp" id="hp" value="{{ old('hp') }}">
                    @error('hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="attack">Attack</label>
                    <input class="form-control @error('attack') is-invalid @enderror" type="number" name="attack" id="attack" value="{{ old('attack') }}">
                    @error('attack')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="defense">Defense</label>
                    <input class="form-control @error('defense') is-invalid @enderror" type="number" name="defense" id="defense" value="{{ old('defense') }}">
                    @error('defense')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="is_legendary">Is Legendary</label>
                    <div class="form-check mb-3">
                        <input  name="is_legendary" class="form-check-input" type="checkbox" value="1" id="is_legendary">
                        <label class="form-check-label" for="is_legendary">Is Legendary?</label></div>
                    @error('is_legendary')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 mt-2 mb-2">
                    <label class="form-label" for="photo">Photo</label>
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo">
                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <a href="{{ route('pokemon.index') }}" class="btn btn-secondary">Cancel</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </main>
</div>

@endsection

