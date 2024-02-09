<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonRenderingController;

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
    return view('front-page');
});

Route::get('/page-1', [JsonRenderingController::class, 'index']);

Route::get('/index', [JsonRenderingController::class, 'index']);

