<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response("welcome in kratritLivres back-office");
});
Route::get('/tset', function () {
    return view("GES_LOACTION.index");
});

