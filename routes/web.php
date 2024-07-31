<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelamarController;

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
    return view('welcome');
});

Route::get('/lowonganpekerjaan', [PelamarController::class, 'index'])->name('lowonganpekerjaan');
Route::get('/tambahpelamar', [PelamarController::class, 'tambahpelamar'])->name('tambahpelamar');
Route::post('/inputdata', [PelamarController::class, 'inputdata'])->name('inputdata');

Route::get('/tampildata/{id}', [PelamarController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [PelamarController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [PelamarController::class, 'deletedata'])->name('deletedata');
