<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
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
        $livres =  Livre::where("stock", ">", 1)->with('categorie')->limit(50)->get();
        return response()->json($livres, 200);
    }

    public function AdminIndex()
    {
        $livres =  Livre::where("stock", ">", 1)->with('categorie')->paginate(20);
        return view('ex.aficherLivre', compact("livres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view("ex.addLivre", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required|string",
            "auteur" => "required|string",
            "stock" => "required|integer",
            "prix" => "required|float",

        ]);
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
    public function edit(Request $request)
    {
        $book =  Livre::where("id", $request->id)->with('categorie')->with('avis.user')->with("locations.user")->first();
        $categories = Categorie::all();
        return view("ex.modiferLivre", compact("book", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'prix' => 'required|numeric|min:0',
            'categorie_id' => 'required|exists:categories,id',
        ]);


        Livre::where('id', $request->id)->update([
            'nom' => $request->nom,
            'auteur' => $request->auteur,
            'stock' => $request->stock,
            'prix' => $request->prix,
            'categorie_id' => $request->categorie_id
        ]);
        return redirect("/livres");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        //
    }
}
