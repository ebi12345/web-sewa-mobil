<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageUserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\LoginController;



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

Route::get('/',[LoginController::class, 'showLoginForm']);
Auth::routes();
Route::middleware('auth')->group(function () {
   
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [PageUserController::class, 'adminDashboard'])->name('admin.dashboard');

    Route::get('/admin/cars', [CarController::class, 'adminMobil'] )->name('admin.mobil');
    Route::get('/admin/cars/add',[CarController::class, 'vAddMobil'] )->name('vAddMobil');
    Route::post('/admin/cars/add',[CarController::class, 'addMobil'] )->name('addMobil');
    Route::get('/admin/cars/edit/{car}',[CarController::class, 'vEditMobil'] )->name('vEditMobil');
    Route::post('/admin/cars/edit/{car}',[CarController::class, 'editMobil'] )->name('editMobil');


    Route::get('/admin/transaksi',[PageUserController::class, 'transaksi'])->name('admin.transaksi');
    Route::get('/admin/cust',[PageUserController::class, 'customer'] )->name('customer');

    // Route::get('/user/sewa', 'BookingController@vSewaMobil')->name('user.sewa');
    Route::get('/user/sewa', [BookingController::class, 'vSewaMobil'])->name('user.sewa');
    Route::post('/user/sewa',[BookingController::class, 'sewaMobil'])->name('tambahSewa');
    Route::get('/user/kembali',[BookingController::class, 'kembaliMobil'])->name('user.kembali');
    Route::post('/user/kembalikansewa',[BookingController::class, 'kembalikanMobil'])->name('kembalikanSewa');
    Route::post('/logout',[LoginController::class, 'logout'] )->name('logout');
});