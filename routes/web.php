<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
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
    return view('pages.siswa.dashboard-siswa');
})->middleware(['auth', 'verified']);

Route::get('/select-role', function () {
    return view('auth.select-role');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



// siswa
Route::get('/siswa/dashboard', function () {
    return view('pages.siswa.dashboard-siswa');
})->middleware(['auth', 'verified'])->name('siswa.dashboard');

Route::get('siswa/persyaratan-pkl', function () {
    return view('pages.siswa.persyaratan-pkl');
})->middleware(['auth', 'verified'])->name('siswa.persyaratan-pkl');

Route::get('/siswa/pendaftaran-pkl', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::get('/siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::patch('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


//guru
Route::get('/guru/dashboard', function () {
    return view('pages.guru.dashboard-guru');
})->middleware(['auth', 'verified'])->name('guru.dashboard');

Route::get('guru/persyaratan-pkl', function () {
    return view('pages.guru.persyaratan-pkl');
})->middleware(['auth', 'verified'])->name('guru.persyaratan-pkl');

Route::get('guru/hasil-pendaftaran', function () {
    return view('pages.guru.hasil-pendaftaran');
})->middleware(['auth', 'verified'])->name('guru.hasil-pendaftaran');

Route::get('/guru/pendaftaran-pkl', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::get('/guru/{id}/show', [GuruController::class, 'show'])->name('guru.show');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::patch('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
Route::delete('/guru/destroy/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');


//perusahaan
Route::get('/perusahaan/dashboard', function () {
    return view('pages.perusahaan.dashboard-perusahaan');
})->middleware(['auth', 'verified'])->name('perusahaan.dashboard');

Route::get('perusahaan/persyaratan-pkl', function () {
    return view('pages.perusahaan.persyaratan-pkl');
})->middleware(['auth', 'verified'])->name('perusahaan.persyaratan-pkl');

Route::get('perusahaan/hasil-pendaftaran', function () {
    return view('pages.perusahaan.hasil-pendaftaran');
})->middleware(['auth', 'verified'])->name('perusahaan.hasil-pendaftaran');

Route::get('/perusahaan/pendaftaran-pkl', [PerusahaanController::class, 'index'])->name('perusahaan.index');
Route::get('/perusahaan/create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
Route::get('/perusahaan/{id}/show', [PerusahaanController::class, 'show'])->name('perusahaan.show');
Route::get('/perusahaan/{id}/edit', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
Route::patch('/perusahaan/{id}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
Route::post('/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
Route::delete('/perusahaan/destroy/{id}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');
