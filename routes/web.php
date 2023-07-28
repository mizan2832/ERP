<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BuyerController;

Auth::routes();
Route::get('/',function(){
    return view('pages.home');
})->middleware(['auth','role:admin'])->name('admin.index');


Route::get('/library', function () {
    return view('pages.library');
});


Route::get('/buyer', [BuyerController::class, 'index'])->name('buyer');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
