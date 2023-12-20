<?php

use Illuminate\Support\Facades\Route;
use App\Models\Method;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\UserController;

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


