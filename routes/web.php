<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
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
Route::get('/home',function(){
    return view('layouts.home');
});

Route::get('/about',function(){
    return view('layouts.about');
});
Route::get('/', function () {
    return view('welcome');
});

Route::post('/test', [TestController::class, 'index']);

Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'contact']);

Route::get('/contacts',[ContactController::class, 'index']);
//Route::get('/contact_record',[ContactController::class,'view']);

