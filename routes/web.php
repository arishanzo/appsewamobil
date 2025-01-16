<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SewaController;
use App\Models\pengembalian;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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



Route::get('/', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
    Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
    Route::get('/mobil', [MobilController::class, 'index'])->name('mobil');

    
    Route::get('/tambahmobil', [MobilController::class, 'halamanmobil'])->name('mobil.create');
    Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');

    Route::get('/pinjam', [PinjamController::class, 'index'])->name('pinjam');
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');

    
    Route::get('/sewa/{id}', [SewaController::class, 'halamansewa'])->name('sewa.create');

    
    Route::get('/pengembalian/{id_sewa}', [pengembalianController::class, 'create'])->name('pengembalian.create');


    Route::put('/sewamobil/{id}', [SewaController::class, 'store'])->name('sewa.store');


});

require __DIR__.'/auth.php';
