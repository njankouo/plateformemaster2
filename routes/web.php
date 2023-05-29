<?php

use App\Http\Controllers\DossierController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\SuiviController;
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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//Route::middleware(['auth', 'verified'])->group(function () {
    // ...


Route::get('/dossier',[DossierController::class,'index'])->name('dossier');
Route::get('planing/{id}',[RdvController::class,'index'])->name('rdv');
Route::get('examen',[ExamenController::class,'index'])->name('examen');
Route::get('suivi',[SuiviController::class,'index'])->name('suivi');
Route::get('/dossier/patient/{id}',[DossierController::class,'pdf'])->name('dossier.patient');
Route::get('/rdv',[RdvController::class,'list'])->name('rdv.view');
//});
