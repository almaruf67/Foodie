<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Routes for Frontend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/food/{data}', [FoodController::class, 'show'])->name('details');


Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/book/{id}', [CartController::class, 'addtoCart'])->name('addcart');
    Route::patch('/update-shopping-cart', [CartController::class, 'update'])->name('update_cart');
    Route::delete('/delete-cart-product', [CartController::class, 'deleteProduct'])->name('delete.cart.product');
    Route::get('/cart', [CartController::class, 'index'])->name('viewcart');
    Route::get('/orders', [HomeController::class, 'orders'])->name('orders');
    Route::get('/invoice/{id}', [HomeController::class, 'invoice'])->name('invoice');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth:web,admin','auth:web,manager']], function() {
    Route::get('/', [UserController::class, 'index'])->name('admin.home');
    // Route::get('/admin/home', [UserController::class, 'index'])->name('admin.home');
    Route::resource('/product', FoodController::class);
    Route::resource('/user', UserController::class);
    });

// Route::middleware(['auth', 'user-access:admin'])->group(function () {

//     Route::get('/admin', [UserController::class, 'index'])->name('admin.home');
//     // Route::get('/admin/home', [UserController::class, 'index'])->name('admin.home');
//     Route::resource('/admin/product', FoodController::class);
//     Route::resource('/admin/user', UserController::class);

// });
// Route::middleware(['auth', 'user-access:manager'])->group(function () {
//     Route::get('/manager', [UserController::class, 'index'])->name('manager.home');
//     // Route::get('/admin/home', [UserController::class, 'index'])->name('admin.home');
//     Route::resource('/admin/product', FoodController::class);
//     Route::resource('/admin/user', UserController::class);

// });

// SSLCOMMERZ Start
Route::post('/payment', [CartController::class, 'order'])->name("payment");
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

//SSLCOMMERZ END


/*
|--------------------------------------------------------------------------
| Routes for Frontend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
