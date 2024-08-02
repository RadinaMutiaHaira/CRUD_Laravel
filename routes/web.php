<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelamarController;
use Illuminate\Support\Facades\Auth;

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


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PelamarController::class, 'index'])->name('home')->middleware('auth');;
Route::get('/tambahpelamar', [PelamarController::class, 'tambahpelamar'])->name('tambahpelamar')->middleware('auth');
Route::post('/inputdata', [PelamarController::class, 'inputdata'])->name('inputdata');

Route::get('/tampildata/{id}', [PelamarController::class, 'tampildata'])->name('tampildata')->middleware('auth');;
Route::post('/updatedata/{id}', [PelamarController::class, 'updatedata'])->name('updatedata')->middleware('auth');;

Route::get('/deletedata/{id}', [PelamarController::class, 'deletedata'])->name('deletedata');

Auth::routes();
Route::get('/', [App\Http\Controllers\PelamarController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PelamarController::class, 'index'])->name('home');
