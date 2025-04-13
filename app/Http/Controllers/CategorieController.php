<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = categorie::all();
        return response()->json($data, 200);
    }

    public function Adminindex()
{
    $categories = categorie::paginate(10);
    return view("crud-categorie.index", compact('categories'));
}

    // public function AdminIndex()
    // {
    //     $data = categorie::paginate(10);
    //     return view("crud-categorie.index", ["categories" => $data]);
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud-categorie.addcategorie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $c = $request->query("c");
        $data = Livre::where("categorie_id", $c)->get();
        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
