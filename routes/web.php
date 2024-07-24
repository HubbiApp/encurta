<?php

use App\Http\Controllers\UrlsController;
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

Route::get('/', function () {
    return response()->json([
        'status' => 'Connectado',
    ]);
})->name('home');

Route::get('/login', function () {
    return response()->json([
        'status' => 'Connectado',
        'message' => 'Você precisa estar logado para encurtar uma URL'
    ]);
})->name('login');

Route::get('/{short_url}', [UrlsController::class, 'getUrl'])->name('urls.get');
Route::get('/{code}/status', [UrlsController::class, 'getUrlStatus'])->name('urls.status');