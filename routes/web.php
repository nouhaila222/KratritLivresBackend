<?php
use App\Http\Controllers\AviController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LivreController;
<<<<<<< HEAD
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
=======
use App\Http\Controllers\CategorieController;

>>>>>>> 845f683c865f7c0282d93519af678253f2cf0489
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response("welcome in kratritLivres back-office");
});
Route::get('/test', function () {
    return view("GES_LOACTION.index");
});


<<<<<<< HEAD
Route::get('/categorie', [CategorieController::class , 'Adminindex']);

Route::get('/livres/list', [LivreController::class, "AdminIndex"]);

Route::get('/commandes', 'CommandeController')->name('user');
=======
Route::get('/livres', [LivreController::class, "AdminIndex"]);
Route::get('/livres/add', [LivreController::class, "create"]);
Route::get('/livres/store', [LivreController::class, "store"]);
Route::get('/livres/update/{id}', [LivreController::class, "edit"]);
Route::put('/livres/{id}', [LivreController::class, "update"]);


// -----------------------
Route::get('/categories', [CategorieController::class, "AdminIndex"]);
Route::get('/categories/ajouter', [CategorieController::class, "create"]);

>>>>>>> 845f683c865f7c0282d93519af678253f2cf0489
