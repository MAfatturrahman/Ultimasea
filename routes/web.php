<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PeraturanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\HomePageController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    // Petugas
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index')->middleware('can:view-petugas');
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create')->middleware('can:create-petugas');
    Route::get('petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit')->middleware('can:edit-petugas');
    Route::get('/petugas/{id}', [PetugasController::class, 'show'])->name('petugas.show')->middleware('can:show-petugas');
    Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy')->middleware('can:delete-petugas');
    Route::post('/petugas', [PetugasController::class, 'store'])->name('petugas.store')->middleware('can:create-petugas');
    Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update')->middleware('can:edit-petugas');
    // ---------------------------------------------------------------------------------------------------------

    // Makanan
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/makanan', [MakananController::class, 'index'])->name('makanan.index')->middleware('can:view-makanan');
    Route::get('/makanan/create', [MakananController::class, 'create'])->name('makanan.create')->middleware('can:create-makanan');
    Route::get('/makanan/{id}/edit', [MakananController::class, 'edit'])->name('makanan.edit')->middleware('can:edit-makanan');
    Route::get('/makanan/{id}', [MakananController::class, 'show'])->name('makanan.show')->middleware('can:show-makanan');
    Route::delete('/makanan/{id}', [MakananController::class, 'destroy'])->name('makanan.destroy')->middleware('can:delete-makanan');
    Route::post('/makanan', [MakananController::class, 'store'])->name('makanan.store')->middleware('can:create-makanan');
    Route::put('/makanan/{id}', [MakananController::class, 'update'])->name('makanan.update')->middleware('can:edit-makanan');
    // ---------------------------------------------------------------------------------------------------------

    // Minuman
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/minuman', [MinumanController::class, 'index'])->name('minuman.index')->middleware('can:view-minuman');
    Route::get('/minuman/create', [MinumanController::class, 'create'])->name('minuman.create')->middleware('can:create-minuman');
    Route::get('/minuman/{id}/edit', [MinumanController::class, 'edit'])->name('minuman.edit')->middleware('can:edit-minuman');
    Route::get('/minuman/{id}', [MinumanController::class, 'show'])->name('minuman.show')->middleware('can:show-minuman');
    Route::delete('/minuman/{id}', [MinumanController::class, 'destroy'])->name('minuman.destroy')->middleware('can:delete-minuman');
    Route::post('/minuman', [MinumanController::class, 'store'])->name('minuman.store')->middleware('can:create-minuman');
    Route::put('/minuman/{id}', [MinumanController::class, 'update'])->name('minuman.update')->middleware('can:edit-minuman');
    // ---------------------------------------------------------------------------------------------------------

    // Fasilitas
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index')->middleware('can:view-fasilitas');
    Route::get('/fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create')->middleware('can:create-fasilitas');
    Route::get('/fasilitas/{id}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit')->middleware('can:edit-fasilitas');
    Route::get('/fasilitas/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show')->middleware('can:show-fasilitas');
    Route::delete('/fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy')->middleware('can:delete-fasilitas');
    Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store')->middleware('can:create-fasilitas');
    Route::put('/fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update')->middleware('can:edit-fasilitas');
    // ---------------------------------------------------------------------------------------------------------

    // Peraturan
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/peraturan', [PeraturanController::class, 'index'])->name('peraturan.index')->middleware('can:view-peraturan');
    Route::get('/perturan/create', [PeraturanController::class, 'create'])->name('peraturan.create')->middleware('can:create-peraturan');
    Route::get('/peraturan/{id}/edit', [PeraturanController::class, 'edit'])->name('peraturan.edit')->middleware('can:edit-peraturan');
    Route::delete('/peraturan/{id}', [PeraturanController::class, 'destroy'])->name('peraturan.destroy')->middleware('can:delete-peraturan');
    Route::post('/peraturan', [PeraturanController::class, 'store'])->name('peraturan.store')->middleware('can:create-peraturan');
    Route::put('/peraturan/{id}', [PeraturanController::class, 'update'])->name('peraturan.update')->middleware('can:edit-peraturan');
    // ---------------------------------------------------------------------------------------------------------

    // UserManagement
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/userManagement', [UserManagementController::class, 'index'])->name('userManagement.index')->middleware('can:view-userManagement');
    Route::get('/userManagement/create', [UserManagementController::class, 'create'])->name('userManagement.create')->middleware('can:create-userManagement');
    Route::get('/userManagement/{id}/edit', [UserManagementController::class, 'edit'])->name('userManagement.edit')->middleware('can:edit-userManagement');
    Route::get('/userManagement/{id}', [UserManagementController::class, 'show'])->name('userManagement.show')->middleware('can:show-userManagement');
    Route::delete('/userManagement/{id}', [UserManagementController::class, 'destroy'])->name('userManagement.destroy')->middleware('can:delete-userManagement');
    Route::post('/userManagement', [UserManagementController::class, 'store'])->name('userManagement.store')->middleware('can:create-userManagement');
    Route::put('/userManagement/{id}', [UserManagementController::class, 'update'])->name('userManagement.update')->middleware('can:edit-userManagement');
    // ---------------------------------------------------------------------------------------------------------

    // Role
    // ---------------------------------------------------------------------------------------------------------
    Route::get('/role', [RoleController::class, 'index'])->name('role.index')->middleware('can:view-role');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create')->middleware('can:create-role');
    Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit')->middleware('can:edit-role');
    Route::get('/role/{id}', [RoleController::class, 'show'])->name('role.show')->middleware('can:show-role');
    Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy')->middleware('can:delete-role');
    Route::post('/role', [RoleController::class, 'store'])->name('role.store')->middleware('can:create-role');
    Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update')->middleware('can:edit-role');
    // ---------------------------------------------------------------------------------------------------------

    //Audit
    //-------------------------------------------------------------------------------------------------
    Route::get('/audit', [AuditController::class, 'index'])->name('audit.index')->middleware('can:view-audit');
    Route::get('/audit/{id}', [AuditController::class, 'show'])->name('audit.show')->middleware('can:show-audit');
    //-------------------------------------------------------------------------------------------------
});

Route::get('/', function () {
    return view('Frontend.homepage');
});

Route::get('/home/makanan', [MakananController::class, 'makanan']);
Route::get('/home/makanan/{id}', [MakananController::class, 'showMakanan'])->name('makanan.showMakanan');

Route::get('/home/minuman', [MinumanController::class, 'minuman']);
Route::get('/home/minuman/{id}', [MinumanController::class, 'showMinuman'])->name('minuman.showMinuman');

Route::get('/home/fasilitas', [FasilitasController::class, 'fasilitas']);

Route::get('/home/peraturan', [PeraturanController::class, 'peraturan']);