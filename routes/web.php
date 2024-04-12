<?php

use App\Http\Controllers\CandidatController;
use App\Models\Filiere;
use Illuminate\Support\Facades\Route;

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
    $filieres = Filiere::all();
    return view('index', compact('filieres'));
});
Route::resource('candidats', CandidatController::class);
Route::get('candidats/recherche', [CandidatController::class, 'recherche'])->name('candidats.recherche');
