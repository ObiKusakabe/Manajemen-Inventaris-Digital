<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StokMasukController;
use App\Http\Controllers\StokKeluarController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){ return redirect()->route('dashboard'); });


// Produk (CRUD)
Route::resource('products', ProductController::class);

// Stok Masuk
Route::resource('stok-masuk', StokMasukController::class)->only(['index', ' create', 'store']);

// Stok Keluar
Route::resource('stok-keluar', StokKeluarController::class)->only(['index', ' create', 'store']);

// Penjualan
Route::resource('penjualan', PenjualanController::class)->only(['index', 'create', 'store']);




// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Laporan
Route::get('/laporan', [LaporanController::class, 'index']);

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
