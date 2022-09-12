<?php

use App\Http\Controllers\FirstController;
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

Route::get('/', [FirstController::class, 'index']);
Route::get('/about', [FirstController::class, 'about']);
Route::get('/article/{id}', [FirstController::class, 'article'])->where('id','[0-9]+');
Route::get('/films', [FirstController::class,'films']);
Route::get('/film/{id}', [FirstController::class, 'film'])->where('id','[0-9]+');
Route::get('/personnes', [FirstController::class,'personnes']);
Route::get('/personne/{id}', [FirstController::class, 'personne'])->where('id','[0-9]+');
