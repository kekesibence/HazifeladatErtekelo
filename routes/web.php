<?php

use App\Http\Controllers\HazifeladatController;
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

Route::get('/', [ HazifeladatController::class, 'index'])->name('home');

Route::resource('hazifeladat', HazifeladatController::class);

