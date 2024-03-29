<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Group\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');

Route::get('/group', [GroupController::class, 'index'])->name('group');

Route::get('/group/groups/get', [GroupController::class, 'getGroups']);
Route::middleware('ajax')->group(function () {

    Route::post('/group/create', [GroupController::class, 'create'])->name('group/create');

    Route::post('/group/update', [GroupController::class, 'update'])->name('group/update');
});
