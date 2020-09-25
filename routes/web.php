<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\item;
use App\Http\Controllers\CrudsController;

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
    return view('create');
});
Route::get("list",[item::class,'list']);
Route::get("create",[item::class,'create']);
Route::post("createSubmit",[item::class,'createSubmit']);
Route::get("delete/{id}",[item::class,'delete']);
Route::get("edit/{id}",[item::class,'showData']);
Route::post("edit",[item::class,'Update']);
