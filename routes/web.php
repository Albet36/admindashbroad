<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Controllers\MainController;
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

Route::get('/',[MainController::class,"home"])->name('home');
Route::get('/login',[ControllersLoginController::class,"login"])->name('login');
Route::get('/register',[ControllersLoginController::class,"register"])->name('register');
Route::get('/logout',[ControllersLoginController::class,"logout"])->name('auth.logout');
Route::post('/regisAcc',[ControllersLoginController::class,"regisAcc"])->name('auth.regis');
Route::post('/check',[ControllersLoginController::class,"authCheck"])->name('auth.check');

Route::prefix('admin')->group(function () {
    Route::get('/add',[MainController::class,"add"])->name('add');
    Route::get('/edit/{id}',[MainController::class,"edit"])->name('edit');
    Route::get('/chat',[MainController::class,"chat"])->name('chat');
    Route::get('/chart',[MainController::class,"chart"])->name('chart');
    Route::get('/listUsers',[MainController::class,"table"])->name('listUser');
    Route::get('/profile',[MainController::class,"profile"])->name('profile');
    
    /* reqest function */
    Route::get('/deleteUser/{id}',[MainController::class,"deleteUser"])->name('deleteUser');
    Route::post('/saveUser', [MainController::class,"saveUser"]);
    Route::post('/search/',[MainController::class,"search"]);
    Route::post('/updateUser/{id}', [MainController::class,"updateUser"]);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
