<?php

use App\Http\Controllers\CalcController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'hello']);

Route::get('/soma/{num1}/{num2}', [HomeController::class, 'soma']);
Route::get('/sub/{num1}/{num2}', [HomeController::class, 'sub']);

Route::get('/sum', [CalcController::class, 'showSoma']);
Route::post('/calc/sum', [CalcController::class, 'calcSoma']);
// Route::get('/', function () {
//     return view('welcome');
// });
