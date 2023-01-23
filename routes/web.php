<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DCPembayaranController;
use App\Http\Controllers\LaporanPController;
use App\Http\Controllers\LaporanBMController;
use App\Http\Controllers\LaporanPenggajianController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\PenggajianController;


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
    return view('layout.dashboard');
});
Route::resource('/dashboard', '\App\Http\Controllers\DashboardController');
Route::resource('/barang', '\App\Http\Controllers\BarangController');
Route::resource('/kelola', '\App\Http\Controllers\KelolaController');
Route::resource('/pegawai', '\App\Http\Controllers\PegawaiController');
Route::resource('/user', '\App\Http\Controllers\UserController');
Route::resource('/absen', '\App\Http\Controllers\AbsenController');
Route::get('changeStatus', [AbsenController::class, 'changeStatus']);

// Route::get('/kelola',[KelolaController::class, 'index']);
Route::get('/gaji', [PenggajianController::class, 'gajip']);
Route::get('/transaksi', [TransaksiController::class, 'transaksi']);
Route::get('/datac', [DCPembayaranController::class, 'DCPembayaran']);
Route::get('/laporanp', [LaporanPController::class, 'LaporanPenjualan']);
Route::get('/laporanbm', [LaporanBMController::class, 'LaporanBM']);
Route::get('/laporanpenggajian', [LaporanPenggajianController::class, 'LaporanPenggajian']);
