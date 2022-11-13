<?php

use App\Http\Controllers\petugasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    // Petugas
    // ----------------------------------------------------------------------------------------------------
    Route::get('/petugas', [petugasController::class, 'index'])->name('petugas.index')->middleware();
    Route::get('/petugas/create', [petugasController::class, 'create'])->name('petugas.create')->middleware();
    Route::get('/petugas/{$id}/edit', [petugasController::class, 'edit'])->name('petugas.edit')->middleware();
    Route::get('/petugas/{$id}', [petugasController::class, 'show'])->name('petugas.show')->middleware();
    Route::delete('/petugas/{$id}', [petugasController::class, 'destroy'])->name('petugas.destroy')->middleware();
    Route::post('/petugas', [petugasController::class, 'store'])->name('petugas.store')->middleware();
    Route::put('/petugas/{$id}', [petugasController::class, 'update'])->name('petugas.update')->middleware();
    // ----------------------------------------------------------------------------------------------------
});