<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MfController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/myroute/{ten}', function($ten){
//     return "Chào bạn".$ten;
// });

// Route::get('/myroute/{ten?}/{userID?}', function($ten='PNV',$userID='1'){
//     return "Name: ".$ten .'userID '.$userID;
// });
Route::get('/allCar', [CarController::class, 'index']);

Route::get('/car/{id}',[CarController::class,'show'])-> name('car.detail');

Route::resource('cars',CarController::class);

Route::get('/car-create',[CarController::class,'create'])-> name('car.create');

Route::resource('mfs',MfController::class);