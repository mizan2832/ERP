<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\TopMenuController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ItemGroupController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MarketingTeamController;
use App\Http\Controllers\SubChaildMenuController;
use App\Http\Controllers\ItemAccountCreateController;

Auth::routes();
Route::get('/',function(){
    return view('pages.home');
})->middleware(['auth','admin'])->name('admin.index');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function() {

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
    //company route
    Route::get('/company',[CompanyController::class,'index'])->name('company.index');
    Route::get('/department',[DepartmentController::class,'index'])->name('department.index');
    Route::get('/division',[DivisionController::class,'index'])->name('division.index');
    Route::get('/marketing-team',[MarketingTeamController::class,'index'])->name('marketing_team.index');

    //end company route


    //supplier route
    Route::resource('/supplier',SupplierController::class);
    Route::resource('/item-group',ItemGroupController::class);
    Route::resource('/item-account',ItemAccountCreateController::class);


    Route::get('/user-management', function () {
        return view('pages.user');
    })->name('admin');

    //user account
    Route::get('/user-account', [UserController::class, 'index'])->name('account.index');
    //modal view
    Route::get('/modal',[ModalController::class,'index'])->name('buyer.add');
    //modal view end

    //menu route
    Route::get('/mastermenu',[TopMenuController::class,'index'])->name('mastermenu');
    Route::get('/submenu',[SubMenuController::class,'index'])->name('submenu');
    Route::get('/subchildmenu',[SubChaildMenuController::class,'index'])->name('subchildmenu');
    //menu route end

});


