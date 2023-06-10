<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeminjamanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::prefix('/peminjaman')->group(function () {
        Route::get('/', [PeminjamanController::class, 'index'])->name('peminjaman.index');
        Route::post('/', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    });

    Route::prefix('/barang')->group(function () {
        Route::get('/', [BarangController::class, 'index'])->name('barang.index');
        Route::get('/{barang}', [BarangController::class, 'show'])->name('barang.show');
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', [LaporanController::class, 'dashboard'])->name('admin.dashboard');

        Route::prefix('/laporan')->group(function () {
            Route::get('/', [LaporanController::class, 'index'])->name('admin.laporan.index');
        });

        Route::prefix('/barang')->group(function () {
            Route::get('/', [BarangController::class, 'adminIndex'])->name('admin.barang.index');
            Route::get('/create', [BarangController::class, 'create'])->name('admin.barang.create');
            Route::post('/', [BarangController::class, 'store'])->name('admin.barang.store');
        });

        Route::prefix('/peminjaman')->group(function () {
            Route::get('/', [PeminjamanController::class, 'adminIndex'])->name('admin.peminjaman.index');

        });
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';