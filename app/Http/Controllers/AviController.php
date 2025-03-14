<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use Illuminate\Http\Request;

class AviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avis = avi::all();
        return response()->json($avis, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $newAvi = avi::create([
            "user_id" => $r->user_id,
            "livre_id" => $r->livre_id,
            "contenu" => $r->contenu,
        ]);
        $newAvi2 =  avi::where("id", $newAvi->id)->with('user')->first();
        return response()->json($newAvi2, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Avi $avi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avi $avi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avi $avi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avi $avi)
    {
        //
    }
}
