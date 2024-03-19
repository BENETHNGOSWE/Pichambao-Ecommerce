<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Cart\ShopcartController;

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

Route::get("/", [App\Http\Controllers\ProductController::class, "index"])->name("index");
Route::get("/index_companyproducts", [App\Http\Controllers\ProductController::class, "indexproduct"])->name("products.list");
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::get('/latest/create', [ProductController::class, 'createlatest'])->name('latest.createlatest');
Route::post('/storecategory', [ProductController::class, 'storecategory'])->name('categories.store');
Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::post('/storelatest', [ProductController::class, 'storelatest'])->name('latest.storelatest');




Route::get('/shop', [App\Http\Controllers\Product\ShopController::class, 'shopviews'])->name('shopviews');


// Manage All cart 
Route::get('/addtocart/{id}', [ShopcartController::class, 'addToCart'])->name('add_to_cart');



Route::get('/rated/create', [ProductController::class, 'createrated'])->name('latest.createrated');
Route::post('/storerated', [ProductController::class, 'storerated'])->name('rated.storerated');


Route::get('/review/create', [ProductController::class, 'createreview'])->name('review.createreview');
Route::post('/storereview', [ProductController::class, 'storereview'])->name('review.storereview');





Route::get('register2', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.registers');
Route::post('register2', [App\Http\Controllers\Auth\RegisterController::class, 'registerpost'])->name('registerpost.registers');
Route::get('login', [App\Http\Controllers\Auth\RegisterController::class, 'login'])->name('login.registers');
Route::post('login', [App\Http\Controllers\Auth\RegisterController::class, 'loginpost'])->name('login');
Route::get('logout', [App\Http\Controllers\Auth\RegisterController::class, 'logout'])->name('logout');
Route::post('logout', [App\Http\Controllers\Auth\RegisterController::class, 'logout']);




Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index_dashboard'])->name('dashboard');
    Route::get('/fearured/create', [ProductController::class, 'createfeatured'])->name('featured.createfeatured');
    Route::post('/storefeatured', [ProductController::class, 'storefeatured'])->name('featured.storefeatured');
    Route::put('/update/{featuredproduct}', [ProductController::class, 'update'])->name('featured.update');
    Route::get('/edit/{featuredproduct}', [ProductController::class, 'edit'])->name('featured.edit');
    Route::delete('/delete/{featuredproduct}', [ProductController::class, 'delete'])->name('featured.delete');

    // for product manage
    Route::get('indexproduct', [App\Http\Controllers\Product\ProductController::class, 'index'])->name('indexproduct');

    // Manage Category of product
    Route::get('/productcategory/create', [App\Http\Controllers\Category\CategoryController::class, 'createcategory'])->name('categories.createcategory');
    Route::get('/indexcategory', [App\Http\Controllers\Category\CategoryController::class, 'index'])->name('categories.list');
    Route::post('/storecategory', [App\Http\Controllers\Category\CategoryController::class, 'storecategory'])->name('categories.store');
    Route::get('/edit/{productcategory}', [App\Http\Controllers\Category\CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{productcategory}', [App\Http\Controllers\Category\CategoryController::class, 'update'])->name('categories.update');

    // Material Manage
    Route::get('/create_material', [App\Http\Controllers\Material\MaterialController::class, 'create'])->name('materials.create');
    Route::get('/index_material', [App\Http\Controllers\Material\MaterialController::class, 'index'])->name('materials.list');
    Route::get('/edit_material/{material}', [App\Http\Controllers\Material\MaterialController::class, 'edit'])->name('materials.edit');
    Route::put('/update_material/{material}', [App\Http\Controllers\Material\MaterialController::class, 'update'])->name('materials.update');
    Route::post('/store_material', [App\Http\Controllers\Material\MaterialController::class, 'store'])->name('materials.store');
    Route::delete('/delete_material/{material}', [App\Http\Controllers\Material\MaterialController::class, 'delete'])->name('materials.delete');


    // Order Manage
    Route::get('/create_order', [App\Http\Controllers\Order\OrderController::class, 'create'])->name('orders.create');
    Route::get('/index_order', [App\Http\Controllers\Order\OrderController::class, 'index'])->name('orders.list');
    Route::get('/edit_order/{insideOrder}', [App\Http\Controllers\Order\OrderController::class, 'edit'])->name('orders.edit');
    Route::get('/show_order/{insideOrder}', [App\Http\Controllers\Order\OrderController::class, 'show'])->name('orders.show');
    Route::put('/update_order/{insideOrder}', [App\Http\Controllers\Order\OrderController::class, 'update'])->name('orders.update');
    Route::post('/store_order', [App\Http\Controllers\Order\OrderController::class, 'store'])->name('orders.store');
    Route::delete('/delete_order/{insideOrder}', [App\Http\Controllers\Order\OrderController::class, 'delete'])->name('orders.delete');


    // Debtors Manage
    Route::get('/create_debtor', [App\Http\Controllers\Madeni\MadeniController::class, 'create'])->name('debtors.create');
    Route::get('/index_debtor', [App\Http\Controllers\Madeni\MadeniController::class, 'index'])->name('debtors.list');
    Route::get('/edit_debtor/{company}', [App\Http\Controllers\Madeni\MadeniController::class, 'edit'])->name('debtors.edit');
    Route::get('/show_debtor/{company}', [App\Http\Controllers\Madeni\MadeniController::class, 'show'])->name('debtors.show');
    Route::put('/update_debtor/{company}', [App\Http\Controllers\Madeni\MadeniController::class, 'update'])->name('debtors.update');
    Route::post('/store_debtor', [App\Http\Controllers\Madeni\MadeniController::class, 'store'])->name('debtors.store');
    Route::delete('/delete_debtor/{company}', [App\Http\Controllers\Madeni\MadeniController::class, 'delete'])->name('debtors.delete');

    Route::get('/showcart', [ShopcartController::class, 'index'])->name('shopcartadd');

    // Manage shop view and shop product view
    Route::get('/latest/{id}', [App\Http\Controllers\Product\ShopController::class, 'show'])->name('shops.show');
});




Route::middleware(['auth'])->group(function () {
    // Route::get('/showcart', [ShopcartController::class, 'index'])->name('shopcartadd');
});
