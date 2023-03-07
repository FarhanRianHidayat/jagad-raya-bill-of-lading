<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConsigneeController;
use App\Http\Controllers\ShipmentsController;
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
    return view('layouts.usermain'); 
}); 

Route::get('/track',[TrackController::class,'index']);
Route::get('/track/exportpdf',[TrackController::class, 'exportpdf'])->name('pdf-report');


// Route::get('/dashboard', function () {
//     return view('layouts.main');
// });

//Role
Route::get('/layouts/main',[MainController::class,'indexAdmin'])->middleware('admin');
Route::get('/layouts/main',[MainController::class,'indexEmployee'])->middleware('employee');

// route::get('/dashboardadmin',[AdminController::class,'index'])->name('dashboard')->middleware('admin');
// route::get('/dashboardemployee',[AdminController::class,'index'])->name('dashboard')->middleware('employee');


// Login
route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
route::post('/login',[LoginController::class,'authenticate']);
route::post('/logout',[LoginController::class,'logout']);
route::get('/register',[RegisterController::class,'index'])->name('register');
route::post('/register',[RegisterController::class,'store']);

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
// Good
Route::get('/good', [GoodController::class, 'index'])->name('good');
Route::get('/good/add',[GoodController::class, 'create'])->name('add-good');
Route::post('/good/insert',[GoodController::class, 'store'])->name('insert-good');
Route::get('/good/form-edit/{id}',[GoodController::class, 'edit'])->name('form-edit-good');
Route::put('/good/update/{id}',[GoodController::class, 'update'])->name('update-good');
Route::get('/good/delete/{id}',[GoodController::class, 'destroy'])->name('delete-good');
// Shipments
Route::get('/shipment', [ShipmentsController::class, 'index'])->name('shipment');
Route::get('/shipment/add',[ShipmentsController::class, 'create'])->name('add-shipment');
Route::post('/shipment/insert',[ShipmentsController::class, 'store'])->name('insert-shipment');
Route::get('/shipment/form-edit/{id}',[ShipmentsController::class, 'edit'])->name('form-edit-shipment');
Route::put('/shipment/update/{id}',[ShipmentsController::class, 'update'])->name('update-shipment');
Route::get('/shipment/delete/{id}',[ShipmentsController::class, 'destroy'])->name('delete-shipment');
// Login
// route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
// route::post('/login',[LoginController::class,'authenticate']);
// route::post('/logout',[LoginController::class,'logout']);
// route::get('/registrasi',[RegisterController::class,'index'])->name('registrasi');
// route::post('/registrasi',[RegisterController::class,'store']);