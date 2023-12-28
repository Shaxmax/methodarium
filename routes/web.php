<?php

use App\Models\User;
use App\Models\Method;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SourceController;

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
    return redirect()->route('methods.index');
});

Route::resource('methods', MethodController::class);
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('sources', SourceController::class);


Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);



