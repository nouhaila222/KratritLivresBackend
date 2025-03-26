<?php

use App\Http\Controllers\LivreController;
use App\Http\Controllers\CategorieController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response("welcome in kratritLivres back-office");
});
Route::get('/test', function () {
    return view("GES_LOACTION.index");
});


Route::get('/livres', [LivreController::class, "AdminIndex"]);
Route::get('/livres/add', [LivreController::class, "create"]);
Route::get('/livres/store', [LivreController::class, "store"]);
Route::get('/livres/update/{id}', [LivreController::class, "edit"]);
Route::put('/livres/{id}', [LivreController::class, "update"]);


// -----------------------
Route::get('/categories', [CategorieController::class, "AdminIndex"]);
Route::get('/categories/ajouter', [CategorieController::class, "create"]);

