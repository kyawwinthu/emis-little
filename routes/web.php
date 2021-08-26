<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;

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

/**
 * Login
 */
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/userLogin', [AuthController::class, 'login'])->name('userLogin');

/**
 * Register
 */
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/userRegister', [AuthController::class, 'userRegister'])->name('userRegister');

/**
 * Home
 */
Route::get('/home', [AuthController::class, 'home'])->name('home');

/**
 * Logout
 */
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

/**
 * Customer
 */
Route::get('/addCustomer',[CustomerController::class, 'addCustomer'])->name('addCustomer');
Route::post('/add',[CustomerController::class, 'add'])->name('add');
Route::get('/detail/{id}', [CustomerController::class, 'detail'])->name('detail');
Route::get('/editCustomer/{id}',[CustomerController::class, 'editCustomer'])->name('editCustomer');
Route::post('/edit',[CustomerController::class, 'edit'])->name('edit');
Route::get('/deleteCustomer/{id}',[CustomerController::class, 'deleteCustomer'])->name('deleteCustomer');