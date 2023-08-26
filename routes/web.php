<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ItemGroupController;
use App\Http\Controllers\ItemAccountCreateController;

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
    Route::delete('/buyer/delete/{id}', [BuyerController::class, 'destroy'])->name('buyer.delete');

    //supplier route

    Route::resource('/supplier',SupplierController::class);
    Route::resource('/item-group',ItemGroupController::class);
    Route::resource('/item-account',ItemAccountCreateController::class);



});


