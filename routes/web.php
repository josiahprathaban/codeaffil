<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

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
Route::get('/add-product', [ProductController::class, 'getBrands']);
Route::post('/add-product', [ProductController::class, 'addProductSubmit','getBrands'])->name('product.addsubmit');
Route::get('/all-products', [ProductController::class, 'getProducts'])->name('product.get');
Route::get('/single-product/{id}', [ProductController::class, 'getProductById'])->name('product.getbyid');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('product.update');

Route::post('/brands', [BrandController::class, 'addBrandSubmit'])->name('brand.addsubmit');
Route::get('/brands', [BrandController::class, 'getBrands'])->name('brand.get');
Route::get('/delete-brand/{id}', [BrandController::class, 'deleteBrand'])->name('brand.delete');
// Route::get('/edit-brand/{id}', [BrandController::class, 'editBrand'])->name('brand.edit');
Route::post('/update-brand', [BrandController::class, 'updateBrand'])->name('brand.update');

Route::post('/categories', [CategoryController::class, 'addCategorySubmit'])->name('category.addsubmit');
Route::get('/categories', [CategoryController::class, 'getCategories'])->name('category.get');
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('category.update');

Route::post('/subcategories', [SubCategoryController::class, 'addSubCategorySubmit'])->name('subcategory.addsubmit');
Route::get('/subcategories', [SubCategoryController::class, 'getSubCategories'])->name('subcategory.get');
Route::get('/delete-subcategory/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('subcategory.delete');
Route::post('/update-subcategory', [SubCategoryController::class, 'updateSubCategory'])->name('subcategory.update');


Route::get('/add-admin', [UserController::class, 'addAdmin'])->name('admin.add');
Route::post('/add-admin', [UserController::class, 'addAdminSubmit'])->name('admin.addsubmit');

// Route::get('/add', [ProductController::class, 'insert'])->name('pro.add');

Route::get('/all-customers', function () {
    return view('admin.customers_list');
});

Route::get('/all-admin', function () {
    return view('admin.admins_list');
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

// Route::get('/profile', function () {
//     return view('profile');
// });
Route::get('/profile', [UserController::class, 'getUserProfile']);

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
        session()->pull('profile');
    }
    
    return redirect('/login');
});





Route::Post('_profile_upload', [UserController::class, 'profile_upload']);
Route::Post('_info_update', [UserController::class, 'info_update']);
Route::Post('_change_password', [UserController::class, 'change_password']);



