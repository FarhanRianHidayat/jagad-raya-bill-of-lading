<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\ConsigneeController;
use App\Http\Controllers\TransportController;

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
    return view('login.login');
}); 

Route::get('/dashboard', function () {
    return view('layouts.main');
});

// User
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/add',[UserController::class, 'create'])->name('add-user');
Route::post('/user/insert',[UserController::class, 'store'])->name('insert-user');
Route::get('/user/form-edit/{id}',[UserController::class, 'edit'])->name('form-edit-user');
Route::put('/user/update/{id}',[UserController::class, 'update'])->name('update-user');
Route::get('/user/delete/{id}',[UserController::class, 'destroy'])->name('delete-user');
// Shipper
Route::get('/shipper', [ShipperController::class, 'index'])->name('shipper');
Route::get('/shipper/add',[ShipperController::class, 'create'])->name('add-shipper');
Route::post('/shipper/insert',[ShipperController::class, 'store'])->name('insert-shipper');
Route::get('/shipper/form-edit/{id}',[ShipperController::class, 'edit'])->name('form-edit-shipper');
Route::put('/shipper/update/{id}',[ShipperController::class, 'update'])->name('update-shipper');
Route::get('/shipper/delete/{id}',[ShipperController::class, 'destroy'])->name('delete-shipper');
// Consignee
Route::get('/consignee', [ConsigneeController::class, 'index'])->name('consignee');
Route::get('/consignee/add',[ConsigneeController::class, 'create'])->name('add-consignee');
Route::post('/consignee/insert',[ConsigneeController::class, 'store'])->name('insert-consignee');
Route::get('/consignee/form-edit/{id}',[ConsigneeController::class, 'edit'])->name('form-edit-consignee');
Route::put('/consignee/update/{id}',[ConsigneeController::class, 'update'])->name('update-consignee');
Route::get('/consignee/delete/{id}',[ConsigneeController::class, 'destroy'])->name('delete-consignee');
// Transport
Route::get('/transport', [TransportController::class, 'index'])->name('transport');
Route::get('/transport/add',[TransportController::class, 'create'])->name('add-transport');
Route::post('/transport/insert',[TransportController::class, 'store'])->name('insert-transport');
Route::get('/transport/form-edit/{id}',[TransportController::class, 'edit'])->name('form-edit-transport');
Route::put('/transport/update/{id}',[TransportController::class, 'update'])->name('update-transport');
Route::get('/transport/delete/{id}',[TransportController::class, 'destroy'])->name('delete-transport');
