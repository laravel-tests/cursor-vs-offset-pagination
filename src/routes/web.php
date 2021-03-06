<?php

use App\Http\Controllers\OrdersController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

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
    dd(Customer::count());
    // return view('welcome');
});

Route::get('customers', [OrdersController::class, 'index']);


Route::get('orders', [OrdersController::class, 'index']);
