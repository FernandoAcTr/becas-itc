<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'registerPage'])->name('home');
Route::get('/solicitudes', [SiteController::class, 'solicitudesPage'])->name('solicitudes');
Route::get('/solicitudes/{id}', [SiteController::class, 'detailsPage']);
Route::post('/register', [SiteController::class, 'store']);
