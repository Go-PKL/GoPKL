<?php

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
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
    return view('pages.dashboard');
})->middleware(['auth', 'verified']);

Route::get('/select-role', function () {
    return view('auth.select-role');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/persyaratan-pkl', function () {
    return view('pages.persyaratan-pkl');
})->middleware(['auth', 'verified'])->name('persyaratan-pkl');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// siswa
Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    Route::get('/siswa/pendaftaran-pkl', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::get('/siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::patch('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
    Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});


//guru
Route::group(['middleware' => ['auth', 'role:guru']], function () {
    Route::get('guru/hasil-pendaftaran', function () {
        return view('pages.guru.hasil-pendaftaran');
    })->name('guru.hasil-pendaftaran');

    Route::get('/guru/pendaftaran-pkl', [GuruController::class, 'index'])->name('guru.index');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::get('/guru/{id}/show', [GuruController::class, 'show'])->name('guru.show');
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::patch('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
    Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
    Route::delete('/guru/destroy/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');
});


//perusahaan
Route::group(['middleware' => ['auth', 'role:perusahaan']], function () {
    Route::get('perusahaan/hasil-pendaftaran', function () {
        return view('pages.perusahaan.hasil-pendaftaran');
    })->name('perusahaan.hasil-pendaftaran');

    Route::get('/perusahaan/pendaftaran-pkl', [PerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::get('/perusahaan/create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
    Route::get('/perusahaan/{id}/show', [PerusahaanController::class, 'show'])->name('perusahaan.show');
    Route::get('/perusahaan/{id}/edit', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
    Route::patch('/perusahaan/{id}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    Route::post('/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
    Route::delete('/perusahaan/destroy/{id}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');
});


//admin
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/VerifSiswa', [AdminController::class, 'index'])->name('VerifSiswa');
    Route::get('/VerifGuru', [AdminController::class, 'index_VerifGuru'])->name('VerifGuru');
    Route::get('/VerifPerusahaan', [AdminController::class, 'index_VerifPerusahaan'])->name('VerifPerusahaan');
    Route::get('/siswa', [AdminController::class, 'index_siswa'])->name('siswa');
    Route::get('/guru', [AdminController::class, 'index_guru'])->name('guru');
    Route::get('/perusahaan', [AdminController::class, 'index_perusahaan'])->name('perusahaan');
    Route::post('/terimasiswa', [AdminController::class, 'terimasiswa'])->name('terimasiswa');
    Route::delete('/hapussiswa', [AdminController::class, 'hapussiswa'])->name('hapussiswa');
    Route::post('/terimaguru', [AdminController::class, 'terimaguru'])->name('terimaguru');
    Route::delete('/hapusguru', [AdminController::class, 'hapusguru'])->name('hapusguru');
    Route::post('/terimaperusahaan', [AdminController::class, 'terimaperusahaan'])->name('terimaperusahaan');
    Route::delete('/hapusperusahaan', [AdminController::class, 'hapusperusahaan'])->name('hapusperusahaan');
});