<?php

use App\Http\Controllers\BlogsController;
use App\Models\Blog;
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

Route::get('/', [BlogsController::class, 'index']);
Route::get('/blogs/create', [BlogsController::class, 'create']);
Route::post('/blogs', [BlogsController::class, 'store']);
Route::get('/blogs/{blog}/edit', [BlogsController::class, 'edit']);
Route::put('/blogs/{blog}', [ListingController::class, 'update']);
Route::delete('/blogs/{blog}', [BlogsController::class, 'delete']);
Route::get('/blogs/{blog}', [BlogsController::class, 'show']);
