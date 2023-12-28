<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductBokingController;
use App\Models\Cart;

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
//     return view('fronten.home');
// });
Route::get('/', [BaseController::class, 'Home'])->name('home');

Route::get('home', [BaseController::class, 'Home'])->name('home');
Route::get('specialoffer', [BaseController::class, 'specialoffer'])->name('specialoffer');
Route::get('contact-us', [BaseController::class, 'contact'])->name('contact');
Route::get('delivery', [BaseController::class, 'delivery'])->name('delivery');
Route::get('cart', [BaseController::class, 'cart'])->name('cart');
Route::get('productView/{id}', [BaseController::class, 'productView'])->name('productView');
Route::get('userlogin', [BaseController::class, 'login'])->name('userlogin');
Route::post('userlogin', [BaseController::class, 'userlogin'])->name('userloginstore');
Route::post('userregister', [BaseController::class, 'userstore'])->name('userregister');
Route::get('userregister', [BaseController::class, 'userlogout'])->name('userlogout');





Route::get('admin-login', [authcontroller::class, 'login'])->name('admin-login');
Route::post('admin-login', [authcontroller::class, 'makelogin'])->name('make_login');

Route::post('Cart-store', [CartController::class, 'store'])->name('CartStore');
Route::delete('cart/delete/{id}', [CartController::class, 'destroy'])->name('CartDelete');

Route::delete('product_boking/', [ProductBokingController::class, 'store'])->name('product_boking');




Route::group(['middleware' => 'auth'],function(){   

Route::get('logout', [authcontroller::class, 'logout'])->name('logout');
Route::get('dashboard', [authcontroller::class, 'dashboard'])->name('dashboard');

Route::get('category_list', [CategoryController::class, 'index'])->name('category_list');
Route::get('addcategory', [CategoryController::class, 'create'])->name('addcategory');
Route::post('storecategory', [CategoryController::class, 'store'])->name('storecategory');

Route::get('editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory');
Route::post('editcategory/{id}', [CategoryController::class, 'update'])->name('updatecategory');
Route::get('deletecategory/{id}', [CategoryController::class, 'destroy'])->name('deletecategory');

Route::get('products', [ProductController::class, 'index'])->name('Products.list');
Route::get('product/create', [ProductController::class, 'create'])->name('Product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('Product.store');

// Route::get('deleteproduct/{id}', [ProductController::class, 'destroy'])->name('deleteproduct');
Route::get('deleteproduct/{id}', [ProductController::class, 'destroy'])->name('deleteproduct');
Route::get('productedit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('productupdate/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('extradetails/{id}', [ProductController::class, 'extradetails'])->name('product.extradetails');
Route::post('extradetails/{id}', [ProductController::class, 'extradetailstore'])->name('product.extradetailstore');
 

route::get('userdetails',[UserController::class, 'index'])->name('userdetails');









});






