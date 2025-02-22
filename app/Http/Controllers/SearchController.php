<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $r)
    {
        try {
            $mot = $r->query("mot");
            $livres =  Livre::where('nom', 'REGEXP', '^(?!' . $mot . '$).*' . $mot . '.*')->with('categorie')->with('avis.user')->with("locations.user")->get();
            return response()->json(["mot" => $mot, "result" => $livres], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}
