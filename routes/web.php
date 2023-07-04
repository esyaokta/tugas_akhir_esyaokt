<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;

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
    return redirect(route('login'));
});

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
            Route::get('/cetak', [LaporanController::class, 'cetak'])->name('admin.laporan.cetak');
        });

        Route::prefix('/barang')->group(function () {
            Route::get('/', [BarangController::class, 'adminIndex'])->name('admin.barang.index');
            Route::get('/create', [BarangController::class, 'create'])->name('admin.barang.create');
            Route::post('/', [BarangController::class, 'store'])->name('admin.barang.store');
            Route::put('/{id}/update', [BarangController::class, 'update'])->name('admin.barang.update');
            Route::delete('/{id}/delete', [BarangController::class, 'destroy'])->name('admin.barang.destroy');
        });

        Route::prefix('/peminjaman')->group(function () {
            Route::get('/', [PeminjamanController::class, 'adminIndex'])->name('admin.peminjaman.index');
            Route::post('/{id}/update', [PeminjamanController::class, 'update'])->name('admin.peminjaman.update');
            Route::delete('/{id}/delete', [PeminjamanController::class, 'destroy'])->name('admin.peminjaman.destroy');
        });

        Route::prefix('/user')->group(function () {
           Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
           Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
           Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
           Route::put('/{id}/update', [UserController::class, 'update'])->name('admin.user.update');
           Route::delete('/{id}/delete', [UserController::class, 'destroy'])->name('admin.user.destroy');
        });
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';