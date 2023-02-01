<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
