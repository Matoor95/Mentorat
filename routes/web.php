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
Route::get('produits/create',[ProduitController::class,'create'])->name('produits.create');
Route::post('produits',[ProduitController::class, 'store'])->name('produits.store');
Route::get('produit/edit/{id}',[ProduitController::class,'edit'])->name('produits.edit');
// route pour supprimer
Route::delete('produits/delete/{id}',[ProduitController::class,'destroy'])->name('produits.destroy');
