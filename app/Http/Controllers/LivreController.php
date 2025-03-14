<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres =  Livre::where("stock", ">", 1)->with('categorie')->limit(15)->get();
        return response()->json($livres, 200);
    }
    public function AdminIndex()
    {
        $livres =  Livre::where("stock", ">", 1)->with('categorie')->limit(15)->get();
        return view('ex.aficherLivre', compact("livres"));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        try {
            $livreD =  Livre::where("id", $livre->id)->with('categorie')->with('avis.user')->with("locations.user")->first();
            return response()->json($livreD, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["error" => $th->getMessage()], 400);
        }
    }




    public function plus_de_livres(Request $request)
    {
        try {
            $ids = $request->query('ids');
            $livres =  Livre::whereNotIn("id", $ids)->where("stock", ">", 1)->with('categorie')->limit(15)->get();
            return response()->json($livres, 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        //
    }
}
