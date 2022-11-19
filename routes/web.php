<?php

use App\Http\Controllers\fasilitasController;
use App\Http\Controllers\peraturanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\makananController;
use App\Http\Controllers\minumanController;

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

// Route::get('/petugas/{$id}/edit', [petugasController::class, 'edit'])->name('petugas.edit');
Route::group(['middleware' => ['auth']], function () {
    // Petugas
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/petugas', [petugasController::class, 'index'])->name('petugas.index')->middleware();
    Route::get('/petugas/create', [petugasController::class, 'create'])->name('petugas.create')->middleware();
    Route::get('/petugas/{id}', [petugasController::class, 'show'])->name('petugas.show')->middleware();
    Route::get('petugas/{id}/edit', [petugasController::class, 'edit'])->name('petugas.edit')->middleware();
    Route::delete('/petugas/{id}', [petugasController::class, 'destroy'])->name('petugas.destroy')->middleware();
    Route::post('/petugas', [petugasController::class, 'store'])->name('petugas.store')->middleware();
    Route::put('/petugas/{id}', [petugasController::class, 'update'])->name('petugas.update')->middleware();
    // ---------------------------------------------------------------------------------------------------------

    // Makanan
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/makanan', [makananController::class, 'index'])->name('makanan.index')->middleware();
    Route::get('/makanan/create', [makananController::class, 'create'])->name('makanan.create')->middleware();
    Route::get('/makanan/{id}', [makananController::class, 'show'])->name('makanan.show')->middleware();
    Route::get('/makanan/{id}/edit', [makananController::class, 'edit'])->name('makanan.edit')->middleware();
    Route::delete('/makanan/{id}', [makananController::class, 'destroy'])->name('makanan.destroy')->middleware();
    Route::post('/makanan', [makananController::class, 'store'])->name('makanan.store')->middleware();
    Route::put('/makanan/{id}', [makananController::class, 'update'])->name('makanan.update')->middleware();
    // ---------------------------------------------------------------------------------------------------------

    // Minuman
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/minuman', [minumanController::class, 'index'])->name('minuman.index')->middleware();
    Route::get('/minuman/create', [minumanController::class, 'create'])->name('minuman.create')->middleware();
    Route::get('/minuman/{id}/edit', [minumanController::class, 'edit'])->name('minuman.edit')->middleware();
    Route::get('/minuman/{id}', [minumanController::class, 'show'])->name('minuman.show')->middleware();
    Route::delete('/minuman/{id}', [minumanController::class, 'destroy'])->name('minuman.destroy')->middleware();
    Route::post('/minuman', [minumanController::class, 'store'])->name('minuman.store')->middleware();
    Route::put('/minuman/{id}', [minumanController::class, 'update'])->name('minuman.update')->middleware();
    // ---------------------------------------------------------------------------------------------------------

    // Fasilitas
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/fasilitas', [fasilitasController::class, 'index'])->name('fasilitas.index')->middleware();
    Route::get('/fasilitas/create', [fasilitasController::class, 'create'])->name('fasilitas.create')->middleware();
    Route::get('/fasilitas/{id}/edit', [fasilitasController::class, 'edit'])->name('fasilitas.edit')->middleware();
    Route::get('/fasilitas/{id}', [fasilitasController::class, 'show'])->name('fasilitas.show')->middleware();
    Route::delete('/fasilitas/{id}', [fasilitasController::class, 'destroy'])->name('fasilitas.destroy')->middleware();
    Route::post('/fasilitas', [fasilitasController::class, 'store'])->name('fasilitas.store')->middleware();
    Route::put('/fasilitas/{id}', [fasilitasController::class, 'update'])->name('fasilitas.update')->middleware();
    // ---------------------------------------------------------------------------------------------------------

    // Peraturan
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/peraturan', [peraturanController::class, 'index'])->name('peraturan.index')->middleware();
    Route::get('/perturan/create', [peraturanController::class, 'create'])->name('peraturan.create')->middleware();
    Route::get('/peraturan/{id}/edit', [peraturanController::class, 'edit'])->name('peraturan.edit')->middleware();
    Route::get('/peraturan/{id}', [petugasController::class, 'show'])->name('peraturan.show')->middleware();
    Route::delete('/peraturan/{id}', [peratuanController::class, 'destroy'])->name('peraturan.destroy')->middleware();
    Route::post('/peraturan', [peraturanController::class, 'store'])->name('peraturan.store')->middleware();
    Route::put('peraturan/{id}', [peraturanController::class, 'update'])->name('peraturan.update')->middleware();
    // ---------------------------------------------------------------------------------------------------------
});