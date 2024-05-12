<?php

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

Route::get('/uomo', function () {



    return view('Uomo');

})->name('Uomo');

Route::get('/', function () {

    $products=config('products');



    return view('Donna',compact('products'));

})->name('Donna');



Route::get('/bambino', function () {



    return view('Bambino');

})->name('Bambino');


