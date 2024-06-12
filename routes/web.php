<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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

//create page view
Route::get('/contact',function(){
    return view('contact');
});
//Submit create page data to database
Route::post('/contact',[ContactController::class,'contact']);

Route::get('/contact_record',[ContactController::class, 'index']);
//Route::get('/contact_record',[ContactController::class,'view']);

// Edit page view 
Route::get('/edit/{id}',function(){
    return view('edit_contact');
});
//Update edit page data
Route::post('/edit/{id}',[ContactController::class,'edit']);

// Delete Page View
Route::get('/delete/{id}',[ContactController::class,'delete']);


