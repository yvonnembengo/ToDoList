<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [\App\Http\Controllers\TasksController::class, 'index'])->name('index');

Route::post('tasks', [\App\Http\Controllers\TasksController::class, 'store']);

Route::put('tasks/{id}', [\App\Http\Controllers\TasksController::class, 'update']);

Route::get('tasks/{id}', [\App\Http\Controllers\TasksController::class, 'show']);

Route::delete('tasks/{id}', [\App\Http\Controllers\TasksController::class, 'destroy']);

