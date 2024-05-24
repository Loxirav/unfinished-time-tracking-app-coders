<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('products/login');
});


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/edit', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
// Route to show login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('product.login');

// Route to handle login form submission
Route::post('/login', [AuthController::class, 'login'])->name('product.login');

Route::get('/index', function () {
    return view('index');
})->middleware('admin'); // Apply the AdminMiddleware
