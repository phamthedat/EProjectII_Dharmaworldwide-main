<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaypalController;

use App\Http\Controllers\labelNameController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Middleware\CheckAdmin;
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
Route::prefix('admin')->middleware(['auth', CheckAdmin::class])->group(function (){
    require_once __DIR__ . '/admin.php';
});

Route::get('/productDetail/{id}', [DetailController::class, 'show'])->name('showDetail');

Route::get('/', [ProductController::class, 'home'])->name('index');
Route::get('/products', [ProductController::class, 'index']);

Route::get('/register', [AdminController::class, 'getRegister'])->name('register');
Route::post('/register', [AdminController::class, 'postRegister'])->name('postRegister');
Route::get('/login', [AdminController::class, 'getLogin']);
Route::post('/login', [AdminController::class, 'postLogin'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/shopping-cart', [AddToCartController::class, 'index']);
Route::get('/add/{id}',[AddToCartController::class,'add']);
Route::get('/show',[AddToCartController::class,'show']);
Route::get('/remove/{rowId}',[AddToCartController::class,'remove']);
Route::get('/update',[AddToCartController::class,'update']);
Route::get('/destroy',[AddToCartController::class,'destroy']);
Route::post('/shopping/order', [AddToCartController::class, 'create_payment']);

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/about-us', function () {
    return view('client/about-us');
});

Route::get('/about-web', function () {
    return view('client/about-web');
});

Route::get('/shopping/add', [ShoppingCartController::class, 'add'])->name('add');
Route::get('/shopping/cart', [ShoppingCartController::class, 'show']);
Route::get('/shopping/remove', [ShoppingCartController::class, 'remove']);
Route::post('/shopping/save', [ShoppingCartController::class, 'save']);
Route::post('/create-payment', [ShoppingCartController::class, 'create_payment']);




Route::get('/label/name1', [labelNameController::class, 'label1']);
Route::get('/label/name2', [labelNameController::class, 'label2']);
Route::get('/label/name3', [labelNameController::class, 'label3']);
Route::get('/label/name4', [labelNameController::class, 'label4']);
Route::get('/label/name5', [labelNameController::class, 'label5']);
Route::get('seed',function (){
    $data = \App\Models\Product::all();
    return view('welcome',compact('data'));
});
