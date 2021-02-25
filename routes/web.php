<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class,'index']);
Route::post('/addBook', [BookController::class,'store']);
Route::get('/showBook/{id}', [BookController::class,'show']);
Route::get('/editBook/{id}', [BookController::class,'edit']);
Route::get('/deleteBook/{id}', [BookController::class,'destroy']);
Route::post('/updateBook/{id}', [BookController::class,'update']);
