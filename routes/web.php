<?php

use App\Http\Controllers\Backoffice\BackofficeController;
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/product', [ProductController::class, 'all_product'])->name('all_product');
Route::get('/product/{id}', [ProductController::class, 'id_produit'])->name('id_product');
Route::get('/cart', [CartController::class, 'panier'])->name('panier');

Route::prefix('backoffice')
    ->group(function() {
        Route::get(null, [DashboardController::class, 'dashboard'])->name('backoffice.dashboard.dashboard');
        Route::get('product', [ProductController::class, 'productList'])->name('backoffice.product.productList');

        Route::get('product/create', [ProductController::class, 'create'])->name('backoffice.product.create');
        Route::post('product/create', [ProductController::class, 'create'])->name('backoffice.product.create');

        Route::get('product/read', [ProductController::class, 'read'])->name('backoffice.product.read');

        Route::get('product/update/{id}', [ProductController::class, 'update'])->name('backoffice.product.update');
        Route::post('product/update/{id}', [ProductController::class, 'updatesave'])->name('backoffice.product.updatesave');

        Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('backoffice.product.delete');
    });
