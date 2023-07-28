<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BuyerController;



Route::get('/', function () {
    return view('pages.home');
});

Route::get('/library', function () {
    return view('pages.library');
});

 
Route::get('/buyer', [BuyerController::class, 'index'])->name('buyer');
