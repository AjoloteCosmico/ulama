<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotacionesController;

use App\Http\Controllers\PelotasController;
/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|                                                                          |
| Here is where you can register web routes for your application. These    |
| routes are loaded by the RouteServiceProvider and all of them will       |
| be assigned to the "web" middleware group. Make something great!         |
|__________________________________________________________________________|

*/

Route::get('/', function () {
    return redirect(route('login'));
});
Auth::routes();
Route::group(['middleware' => ['auth']], function()
{   


Route::resource('pelotas', PelotasController::class);
Route::resource('rotaciones', RotacionesController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});