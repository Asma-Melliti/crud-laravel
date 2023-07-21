<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EtudiantController;
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
Route::get('/etudiant', [EtudiantController::class,'liste_etudiant']);
Route::get('/update_etudiant/{id}', [EtudiantController::class,'update_etudiant']);
Route::get('/delete_etudiant/{id}', [EtudiantController::class,'delete_etudiant']);

Route::post('/update/traitement', [EtudiantController::class,'update_etudiant_traitement']);

Route::get('/ajouter', [EtudiantController::class,'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class,'ajouter_etudiant_traitement']);


