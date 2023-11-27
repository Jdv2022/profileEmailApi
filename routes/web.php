<?php

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

use App\Http\Controllers\Visitors;

Route::post('/', [Visitors::class, 'log']);
Route::options('/', [Visitors::class, 'cors']);
Route::post('/form/submit', [Visitors::class, 'sendEmail']);
Route::options('/form/submit', [Visitors::class, 'cors']);