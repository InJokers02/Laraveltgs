<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\FruitController;

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
    return view('Welcome');
});

Route::get('/author', [AuthorController::class, 'index'] );
Route::post('/author/login', [AuthorController::class, 'login'] );
Route::get('/create', [FruitController::class, 'index']);
Route::get('/home', [FruitController::class, 'index']);
Route::get('/edit', [FruitController::class, 'index']);
Route::get('/detail', [FruitController::class, 'index']);
Route::resource('/fruit', FruitController::class);
