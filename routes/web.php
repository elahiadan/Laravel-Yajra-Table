<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\UsersController;

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

// DataTable By AJAX Start
Route::get('/', function () {
    return view('welcome');
});
Route::get('user', [DatatablesController::class, 'anyData'])->name('datatables.data');
// DataTable By AJAX End

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// DataTable By DataTableFunction
Route::get('/users', [UsersController::class,'index'])->name('users.index');
