<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\MsiteController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/site', [SiteController::class, 'show']);

// Route Location
Route::get('/location', [LocationController::class, 'show'])->middleware('auth');
Route::get('/location/detail', [LocationController::class, 'detail'])->middleware('auth');

Route::post('/site/getalldata', [SiteController::class, 'getAllData']);
Route::post('/location/getdatabyid', [LocationController::class, 'getDataById']);
Route::post('/location/createlocation', [LocationController::class, 'createLocation']);
Route::put('/location/updatelocation/{id}', [LocationController::class, 'updateLocation']);

// Route Area
Route::post('/area/detail', [AreaController::class, 'createDetail']);
Route::get('/reservation/create/{reservation}', [ReservationController::class, 'createDetail']);
Route::resource('/area', AreaController::class)->middleware('admin');
Route::resource('/reservation', ReservationController::class)->middleware('auth');

// Route Monitoring
Route::get('/monitoring', [MonitoringController::class, 'index']);
