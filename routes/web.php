<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/allProducts',[productController::class,'index']);
Route::post('/allProducts',[productController::class,'store']);


Route::get('/allProducts/create',[productController::class,'create']);
Route::get('/allProducts/{id}',[productController::class,'show']);

// to prevent the conflict between /{id} and /create
// i place the /create before /{id}

