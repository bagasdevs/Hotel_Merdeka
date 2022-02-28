<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FasilitasController;

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


Route::get('/admin',[FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/addfasilitas',[FasilitasController::class, 'addfasilitas'])->name('addfasilitas');

Route::post('/insertdata',[FasilitasController::class, 'insertdata'])->name('insertdata');
Route::get('/tmpfasilitas/{id}',[FasilitasController::class, 'tmpfasilitas'])->name('tmpfasilitas');
Route::post('/updatedata/{id}',[FasilitasController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[FasilitasController::class, 'deletedata'])->name('deletedata');
