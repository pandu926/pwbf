<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendidikanController;

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

Route::get('/', [PendidikanController::class, 'tampil']);
Route::post('/insert-data', [PendidikanController::class, 'tambah_data']);
Route::delete('/delete-data/{id}', [PendidikanController::class, 'delete']);
Route::put('/update-data/{id}', [PendidikanController::class, 'update']);
