<?php

use App\Models\Character;
use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('accueil');
});

Route::get('/Guts', function(){

    $characters = Character::first();

    return view('guts', compact('characters'));
});