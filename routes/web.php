<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Models\Guru;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::get('/test', function () {
//     return view('layouts.backend.main');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



// siswa
// Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
// Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
// Route::get('/siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');
// Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
// Route::patch('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
// Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
// Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// metode group routes
Route::controller(SiswaController::class)->group(function () {
    Route::get('/siswa', 'index')->name('siswa.index');
    Route::get('/siswa/create', 'create')->name('siswa.create');
    Route::get('/siswa/{id}/show', 'show')->name('siswa.show');
    Route::get('/siswa/{id}/edit', 'edit')->name('siswa.edit');
    Route::patch('/siswa/{id}', 'update')->name('siswa.update');
    Route::post('/siswa/store', 'store')->name('siswa.store');
    Route::patch('/siswa/destroy', 'destroy')->name('siswa.destroy');
});

Route::get('/dashboard/siswa', function () {
    return view('pages.siswa.dashboard-siswa');
})->middleware(['auth', 'verified'])->name('dashboard-siswa');

Route::get('/persyaratan-pkl', function () {
    return view('pages.siswa.persyaratan-pkl');
})->middleware(['auth', 'verified'])->name('persyaratan-pkl');

//guru
Route::resource('guru', GuruController::class);

//perusahaan
Route::resource('perusahaan', PerusahaanController::class);

//admin

Route::controller(AdminController::class)->group(function () {
    Route::get('/VerifSiswa', 'index')->name('VerifSiswa');
    Route::get('/VerifGuru', 'index_VerifGuru')->name('VerifGuru');
    Route::get('/VerifPerusahaan', 'index_VerifPerusahaan')->name('VerifPerusahaan');
    Route::get('/siswa', 'index_siswa')->name('siswa');
    Route::get('/guru', 'index_guru')->name('guru');
    Route::get('/perusahaan', 'index_perusahaan')->name('perusahaan');
});

// Route::get('/VerifSiswa', [AdminController::class, 'index'])->name('VerifSiswa');

// Route::get('/VerifGuru', function () {
//     return view('pages.admin.VerifGuru');
// })->middleware(['auth', 'verified'])->name('VerifGuru');

// Route::get('/VerifPerusahaan', function () {
//     return view('pages.admin.VerifPerusahaan');
// })->middleware(['auth', 'verified'])->name('VerifPerusahaan');

// Route::get('/siswa', function () {
//     return view('pages.admin.siswa');
// })->middleware(['auth', 'verified'])->name('siswa');

// Route::get('/guru', function () {
//     return view('pages.admin.guru');
// })->middleware(['auth', 'verified'])->name('guru');

// Route::get('/perusahaan', function () {
//     return view('pages.admin.perusahaan');
// })->middleware(['auth', 'verified'])->name('perusahaan');
