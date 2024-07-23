<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;

//route gestion du panier
Route::middleware('auth')->group(function () {
    Route::get('/panier', [PanierController::class, 'index'])->name('panier.lister');
    Route::get('/panier/add/{product}', [PanierController::class, 'ajouter'])->name('panier.ajouter');
    Route::get('/panier/moins/{panier}', [PanierController::class, 'moins'])->name('panier.moins');
    Route::get('/panier/remove/{panier}', [PanierController::class, 'remove'])->name('panier.remove');
});

//gestion des favoris
Route::middleware('auth')->group(function () {
    Route::get('/favorite/{product}', [FavoriteController::class, 'edit'])->name('favorite.edit');
    Route::get('/favorite/delete/{favorite}', [FavoriteController::class, 'delete'])->name('favorite.delete');
    Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.index');
});


//route gestion des produits
Route::get('/', [ProductController::class, 'index'])->name('product');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/product/category/{id}', [ProductController::class, 'productByCategory'])->name('product.category');

//gestion du dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//gestion de connexion
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
