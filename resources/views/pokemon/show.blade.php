@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <h1 class="display-4 text-center">{{$pokemon->name}}</h1>
        <p class="lead text-center">
            {{$pokemon->description}}
        </p>
        <div class="d-flex justify-content-center">
            <img src="{{Storage::url($pokemon->photo) }}" class="img-fluid rounded shadow" style="height: 200px; object-fit: cover;" alt="{{$pokemon->name}}" onerror="this.onerror=null;this.src='https://placehold.co/200';">
        </div>
        <table class="table table-striped mt-4">
            <tbody>
                <tr>
                    <td><b> Name </b></td>
                    <td>{{$pokemon->name}}</td>
                </tr>
                <tr>
                    <td><b>Species</b></td>
                    <td>{{$pokemon->species}}</td>
                </tr>
                <tr>
                    <td><b>Primary Type</b></td>
                    <td>{{$pokemon->primary_type}}</td>
                </tr>
                <tr>
                    <td><b>Weight</b></td>
                    <td>{{$pokemon->weight}}</td>
                </tr>
                <tr>
                    <td><b>Height</b></td>
                    <td>{{$pokemon->height}}</td>
                </tr>
                <tr>
                    <td><b>HP</b></td>
                    <td>{{$pokemon->hp}}</td>
                </tr>
                <tr>
                    <td><b>Attack</b></td>
                    <td>{{$pokemon->attack}}</td>
                </tr>
                <tr>
                    <td><b>Defense</b></td>
                    <td>{{$pokemon->defense}}</td>
                </tr>
                <tr>
                    <td><b>Is Legendary</b></td>
                    <td>{{$pokemon->is_legendary}}</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <div class="mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </main>
</div>


@endsection