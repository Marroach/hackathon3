<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SearchController;


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
    return view('index');

});

Route::get('/search', ['App\Http\Controllers\SearchController', 'search'])->name('owner.search');

Route::get('/owner/{id}', ['App\Http\Controllers\OwnerController', 'owner_result'])->name('owner.result');

Route::get('/pet/{id}', ['App\Http\Controllers\AnimalController', 'pet_result'])->name('pet.result');



