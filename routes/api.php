<?php

use App\Http\Controllers\AviController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get("/", function () {
    return response("server accept requests");
});



Route::apiResource("/livres", LivreController::class);
Route::get("/plus_livres", [LivreController::class, "plus_de_livres"]);

Route::apiResource("/categories", CategorieController::class);



Route::middleware("auth:sanctum")->apiResource("/avi", AviController::class);


Route::middleware("auth:sanctum")->apiResource("/location", LocationController::class);
Route::apiResource("/search", SearchController::class);


Route::post("/user/login", [UserController::class, "login"]);

Route::post("/user/register", [UserController::class, "store"]);




Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
    return response()->json($request->user());
});
Route::middleware("auth:sanctum")->get("/user/logout", function (Request $request) {
    $request->user()->tokens()->delete();
    return response()->json("", 200);
});
