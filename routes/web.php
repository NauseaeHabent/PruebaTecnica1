<?php

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $response = Http::get('https://rickandmortyapi.com/api/character/[1,2,3,4,5]');
    

    $data = $response->Json();
    dd($data);
        
});

Route::resource('rickAndMorty', App\Http\Controllers\residentesController::class);
Route::get('/rickAndMorty/showAll', 'residentesController@showAll')->name('rickAndMorty.showAll');
