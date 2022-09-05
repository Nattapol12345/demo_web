<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
    return view('welcome');
});
Route::get('combo_monsters/{id}', [WebController::class, 'combo_monsters'])->name('combo_monsters');
Route::get('combo/{id}', [WebController::class, 'combo'])->name('combo');
Route::get('/list', [WebController::class, 'list']);
Route::get('/tier', [WebController::class, 'tier']);
Route::get('preview/{id}', [WebController::class, 'preview']);
Route::get('detail/{id}', [WebController::class, 'detail'])->name('detail');
Route::get('/', [WebController::class, 'index']);
Route::get('/home', [WebController::class, 'home']);
Route::get('/combo', [WebController::class, 'combo']);


