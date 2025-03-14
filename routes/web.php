<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response("welcome in kratritLivres back-office");
});
Route::get('/test', function () {
    return view("GES_LOACTION.index");
});


Route::get('/livres/list', [LivreController::class, "AdminIndex"]);
