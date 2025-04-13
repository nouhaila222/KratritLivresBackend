<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use App\Models\Livre;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::with(['user', 'livre'])->paginate(10);
        return view('GES_LOACTION.location', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $livres = Livre::all();
        return view('crud-location.create', compact('users', 'livres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'livre_id' => 'required|exists:livres,id',
            'user_id' => 'required|exists:users,id',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
        ]);

        Location::create($validated);

        return redirect()->route('locations.index')->with('success', 'Location enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('crud-location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        $users = User::all();
        $livres = Livre::all();
        return view('crud-location.edit', compact('location', 'users', 'livres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $validated = $request->validate([
            'livre_id' => 'required|exists:livres,id',
            'user_id' => 'required|exists:users,id',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
        ]);

        $location->update($validated);

        return redirect()->route('locations.index')->with('success', 'Location mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('locations.index')->with('success', 'Location supprimée');
    }
}
