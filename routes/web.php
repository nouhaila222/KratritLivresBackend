<?php
use App\Http\Controllers\AviController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response("welcome in kratritLivres back-office");
});
Route::get('/test', function () {
    return view("GES_LOACTION.index");
});


Route::get('/categorie', [CategorieController::class , 'Adminindex']);

Route::get('/livres/list', [LivreController::class, "AdminIndex"]);

Route::get('/commandes', 'CommandeController')->name('user');
