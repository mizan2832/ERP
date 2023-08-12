<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BuyerController;

Auth::routes();
Route::get('/',function(){
    return view('pages.home');
})->middleware(['auth','role:admin'])->name('admin.index');

Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function() {

    Route::get('/library', function () {
        return view('pages.library');
    })->name('library');
    Route::get('/buyer', [BuyerController::class, 'index'])->name('buyer.index');
    Route::post('/buyer/save', [BuyerController::class, 'store'])->name('buyer.store');

    //party route


});


