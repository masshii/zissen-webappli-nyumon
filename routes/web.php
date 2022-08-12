<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

Route::get('todos', [TodoController::class, 'index']);
Route::post('todos/create', [TodoController::class, 'create']);
Route::get('todos/edit',[TodoController::class, 'edit']);
Route::put('todos/update/{id}', [TodoController::class, 'update']);
Route::delete('todos/delete/{id}', [TodoController::class, 'delete']);
Route::post('todos/delete', [TodoController::class, 'remove']);