<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/matar', function(){
    return 1+5;
});
Route::get('/produits/index',[ProduitController::class, 'index'])->name('produits.index');
Route::get('produits/create',[ProduitController::class,'create']);
Route::post('produits',[ProduitController::class, 'store'])->name('produits.store');
