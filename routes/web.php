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
Route::get('/allProducts/update/{product}',[productController::class,'update']);
Route::put('/allProducts/update/{product}',[productController::class,'edit']);

Route::get('/allProducts/{id}',[productController::class,'show'])->name('showSpecItem');


Route::delete('/allProducts/{id}',[productController::class,'destroy']);
// if i want use href, i should create new route like below (not recommende it)
// Route::get('/newRoute/{id}',[productController::class,'destroy']);

// to prevent the conflict between /{id} and /create
// i place the /create before /{id}


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
