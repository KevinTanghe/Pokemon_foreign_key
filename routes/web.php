<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TypeController;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $type = Type::all();
    // dd($type[0]->pokemon->name);
    
    $pokemon = Pokemon::all();
    // dd($pokemon[0]->types[0]->type);
    return view('welcome');
});

Route::get('/liste', function() {

    $pokemon = Pokemon::all();

    return view('pages/liste', compact('pokemon'));
});

Route::resource('pokemon', PokemonController::class);
Route::resource('type', TypeController::class);