<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;


class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::paginate(20);
        return view("pokemon.index", compact("pokemons"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'primary_type' => 'required|string|max:50',
            'weight' => 'nullable|numeric|max:8',
            'height' => 'nullable|numeric|max:8',
            'hp' => 'nullable|integer|max:4',
            'attack' => 'nullable|integer|max:4',
            'defense' => 'nullable|integer|max:4',
            'is_legendary' => 'required|boolean',
            'photo' => 'nullable|image|mimes:png,jpg,jpeg,svg,gif|max:2048',
        ]);
        Pokemon::create($validated);
        if($request->hasFile('photo')){
            $validated['photo'] = $request->file('photo')->store('public');
        }
        return redirect()->route('pokemon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return view('pokemon.show', compact("pokemon"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.edit', compact("pokemon"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'species' => 'required|string|max:100',
        'primary_type' => 'required|string|max:50',
        'weight' => 'nullable|numeric|max:4',
        'height' => 'nullable|numeric|max:4',
        'hp' => 'nullable|integer|max:4',
        'attack' => 'nullable|integer|max:4',
        'defense' => 'nullable|integer|max:4',
        'is_legendary' => 'required|boolean',
        'photo' => 'nullable|image|mimes:png,jpg|max:2048',
    ]);

    $pokemon->update($validated);

    if ($request->hasFile('photo')) {
        $filePath = $request->file('photo')->store('public/photos');
        $pokemon->update(['photo' => $filePath]);
    }

    return redirect()->route('pokemon.index')->with('success', 'Pokemon updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->route('pokemon.index');
    }
}
