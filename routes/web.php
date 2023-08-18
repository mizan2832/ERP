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
    Route::post('/buyer/add', [BuyerController::class, 'store'])->name('buyer.store');
    Route::get('/buyer/list', [BuyerController::class, 'getAllBuyer'])->name('buyer.list');
    Route::get('/buyer/search', [BuyerController::class, 'getBuyerSearch'])->name('buyer.search');
    Route::get('/buyer/fetch', [BuyerController::class, 'buyerFetch'])->name('buyer.fetch');
    Route::put('/buyer/update', [BuyerController::class, 'update'])->name('buyer.update');

    //party route


});


