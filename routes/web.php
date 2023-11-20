<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home_page'])->name('home');
Route::get('/katalog',[HomeController::class,'katalog'])->name('katalog');

Route::get('/login',[AuthController::class, 'loginIndex'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('loginAuth');



Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    
    Route::get('/dashboard', [BungaController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/add-bunga', [BungaController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard/add-bunga', [BungaController::class, 'store'])->name('dashboard.store');
    Route::delete('/dashboard/{id}', [BungaController::class, 'destroy'])->name('dashboard.destroy');

    Route::put('/dashboard/{id}/edit', [BungaController::class, 'update'])->name('dashboard.update');
    Route::get('/dashboard/{id}', [BungaController::class, 'edit'])->name('dashboard.edit');
});