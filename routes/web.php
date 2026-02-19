<?php

use App\Models\Character;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/', function () {
    return view('accueil');
});

Route::get('/{character}', function(string $character){

    $character = Character::where('name', $character)->firstOrFail();
    return view(strtolower($character->name), compact('character'));
});