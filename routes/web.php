<?php

use App\Http\Controllers\numberController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('number',function(){
    return view('number');
});
Route::post('/numbers',[numberController::class,'getData']);
Route::get('/numbers1',[numberController::class,'getData1']);
Route::get('/aadhaar',[numberController::class,'aadhaarShow']);
Route::get('/aadhaars',[numberController::class,'aadhaarResult']);
Route::get('/flname',[numberController::class,'fnnameShow']);
Route::get('/flnamess',[numberController::class,'flnameResult']);
Route::get('/address',[numberController::class,'addressShow']);
Route::get('/addresss',[numberController::class,'addressResult']);


Route::get('/haves',[numberController::class,'havesShow']);
Route::get('/flnames',[numberController::class,'havesResult']);
