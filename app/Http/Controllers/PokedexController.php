<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Pokemon;
use App\Http\Controllers\PokemonController;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::paginate(9);
        return view('pokedex', compact('pokemons'));
    }
}