<?php

use App\Http\Controllers\ProductController;
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


Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class ,'index'])->name('product.index');
    Route::get('/create',[ProductController::class ,'create'])->name('product.create');
    Route::post('/store',[ProductController::class ,'store'])->name('product.store');
    Route::get('/edit/{id}',[ProductController::class ,'edit'])->name('product.edit');
    Route::put('/update/{id}',[ProductController::class ,'update'])->name('product.update');
    Route::delete('/destroy/{id}',[ProductController::class ,'destroy'])->name('product.destroy');

});
