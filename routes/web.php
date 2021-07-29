<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
/*
Route::get('/niro', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
*/
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.dashbord');
});


Route::get('/add-product', [ProductController::class, 'addProduct'])->name('product.add');
Route::post('/add-product', [ProductController::class, 'addProductSubmit'])->name('product.addsubmit');
Route::get('/all-products', [ProductController::class, 'getProducts'])->name('product.get');
Route::get('/single-product/{id}', [ProductController::class, 'getProductById'])->name('product.getbyid');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');


Route::get('/all-customers', function () {
    return view('admin.customers_list');
});

Route::get('/all-admin', function () {
    return view('admin.admins_list');
});

Route::get('/add-admin', function () {
    return view('admin.add_admin');
});

Route::get('/customer', function () {
    return view('admin.customer');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/single-product', function () {
    return view('single-product');
});

Route::get('/compare', function () {
    return view('compare');
});

Route::get('users', [UserController::class, 'getUser']);

Route::Post('_login', [UserController::class, 'login']);

Route::Post('_register', [UserController::class, 'register']);

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
        session()->pull('type');
    }
    
    return redirect('/login');
});