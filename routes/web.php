<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userMenuController;
use App\Http\Controllers\FreeController;
use \Illuminate\Support\Facades\Auth;

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
    return view('index');
}) -> name('main');

Route::get('auth/login', [LoginController::class, 'index']) -> name('login');
Route::post('auth/login', [LoginController::class, 'login']);
Route::post('auth/logout', [LoginController::class, 'logout']) -> name('logout');

Route::get('auth/register', [LoginController::class, 'registerIndex']) -> name('register');
Route::POST('auth/register', [LoginController::class, 'store']);

Route::get('auth/updateUser', [LoginController::class, 'updateUser']) -> name('updateUser');
Route::post('auth/updateUser', [LoginController::class, 'update']);

Route::get('usermenu/userMenu', [userMenuController::class, 'index']) -> name('userMenu');

Route::get('frees', [FreeController::class, 'index']) -> name('freemain');
Route::get('frees/create', [FreeController::class, 'create']) -> name('create') -> middleware('auth');
Route::post('frees', [FreeController::class, 'store']) -> middleware('auth');
