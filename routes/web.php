<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/contact', [ContactController::class,'show']);
Route::post('/contact/comfirm',[ContactController::class,'comfirm']);
Route::post('/contact/create',[ContactController::class,'create']);
Route::post('/contact/delete',[ContactController::class,'delete'])->name('delete');
Route::get('/management',[ContactController::class,'showManegement']);
Route::get('/management/serach',[ContactController::class,'serach']);
Route::get('/', function () {
    return redirect('/contact');
});
