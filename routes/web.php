<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EcommerceController::class, 'index'])->name('home');
Route::get('/products', [EcommerceController::class, 'products'])->name('products');
Route::get('/product-details', [EcommerceController::class, 'productDetails'])->name('product.details');
Route::get('/cart', [EcommerceController::class, 'cart'])->name('cart');
Route::get('/check-out', [EcommerceController::class, 'checkout'])->name('checkout');
Route::get('/user-login', [EcommerceController::class, 'userLogin'])->name('user.login');
Route::get('/user-register', [EcommerceController::class, 'userRegister'])->name('user.register');
Route::get('/user-account', [EcommerceController::class, 'userAccount'])->name('user.account');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/category-add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category-new', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category-manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/sub-category-add',[SubCategoryController::class,'index'])->name('subCategory.add');
    Route::post('/sub-category-new',[SubCategoryController::class,'create'])->name('subCategory.create');
    Route::get('/sub-category-manage',[SubCategoryController::class,'manage'])->name('subCategory.manage');
    Route::get('/sub-category-edit/{id}',[SubCategoryController::class,'edit'])->name('subCategory.edit');
    Route::post('/sub-category-update/{id}',[SubCategoryController::class,'update'])->name('subCategory.update');
    Route::get('/sub-category-delete/{id}',[SubCategoryController::class,'delete'])->name('subCategory.delete');

    Route::resource('unit',UnitController::class);
    Route::resource('brand',BrandController::class);



});
